<?php

class Energy_model extends CI_Model{

    var $dbData;
    var $dbWeb;
    
    public function __construct(){

        $config['hostname'] = "localhost";
        $config['username'] = "root";
        $config['password'] = "ZJUisee423";
        $config['database'] = "ROBOS_ENERGY_DATA";
        $config['dbdriver'] = "mysql";
        $config['dbprefix'] = "";
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = "";
        $config['char_set'] = "utf8";
        $config['dbcollat'] = "utf8_general_ci";
        $config['swap_pre'] = '';
        $config['autoinit'] = TRUE;
        $config['stricton'] = FALSE;

        $this->dbData = $this->load->database($config,TRUE);
        
        $config['database'] = "ROBOS_ENERGY_WEB";        
        $this->dbWeb = $this->load->database($config,TRUE);
        
        $config['database'] = "ROBOS_USER";        
        $this->dbRobos = $this->load->database($config,TRUE);
    }
    
    public function getAllDevice($device_id = FALSE){
    
        if($device_id != FALSE){
            $query = $this->dbWeb->get_where('all_device_info',array('device_id'=>$device_id));
            $ret = $query->row_array();
            $query = $this->dbRobos->get_where('robos_login_info',array('device_id'=>$device_id));
            $temp = $query->row_array();
            $ret['GPS_long'] = floor($temp['GPS_long']);
            $ret['GPS_lat'] = floor($temp['GPS_lat']);
            return $ret;
        }

        $query = $this->dbWeb->get('all_device_info');
        return $query->result_array();
    }
    
    public function getAllOnlineDevice(){

        $snd_msg = "3:10";
        $rcv_msg = "";
        $timeout = 10;
        $socket = stream_socket_client('unix:///var/run/mysocket.sock', 
                                        $errorno, $errorstr, $timeout);
        stream_set_timeout($socket, $timeout);
        
        if(!fwrite($socket, $snd_msg)){
            echo("Error while Writeing to socket!!!<br>\n");
            return;
        }

        if (!($rcv_msg = fread($socket, 1024))){
            echo("Error while reading from socket!!!<br>\n");
            return;
        }
        else{
            $ret = explode(",", $rcv_msg);
            return $ret;
        }
    }
    
    public function getDeviceSet($device_type = FALSE, $user_id = FALSE){
    
        if($device_type != FALSE && $user_id != FALSE){
            $query = $this->dbWeb->get_where('device_set',array('device_type'=>$device_type,'user_id'=>$user_id));
            return $query->result_array();
        }else{
            $query = $this->dbWeb->get('device_set');
            return $query->result_array();
        }
    }
    
    public function getDeviceOnlineStatus($device_id){

        $snd_msg = "2:".$device_id;
        $rcv_msg = "";
        $timeout = 10;
        $socket = stream_socket_client('unix:///var/run/mysocket.sock', 
                                        $errorno, $errorstr, $timeout);
        stream_set_timeout($socket, $timeout);

        if(!fwrite($socket, $snd_msg)){
            echo("Error while Writeing to socket!!!<br>\n");
            return;
        }

        if (!($rcv_msg = fread($socket, 1024))){
            echo("Error while reading from socket!!!<br>\n");
            return;
        }
        else{
            return (00 == $rcv_msg)?0:1;
        }
    }
    
    public function getAllRemark(){

        $query = $this->dbWeb->get('remark');
        return $query->result_array();
    }
    
    public function setMeter($meter_info){
            
        $this->dbWeb->update('device_set', $meter_info, array('user_id' => $meter_info['user_id'],'device_type' => $meter_info['device_type'],'item_name' => $meter_info['item_name']));
    }
    
    public function checkPasswd($user_name,$passwd){
    
        $query = $this->dbRobos->get_where( 'robos_user_info', array('user_name' => $user_name));
        
        if(FALSE == $query->result ()){
            return FALSE;
        }
        
        foreach ( $query->result () as $row ) {  
            if($row->password == $passwd && $row->user_name == $user_name){
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function changePasswd($user_name,$passwd){
    
        $query = $this->dbRobos->update( 'robos_user_info', array('password' => $passwd), array('user_name' => $user_name));
        
        return TRUE;
    }
    
    public function delDevice($device_id){
    
        $query = $this->dbWeb->delete( 'all_device_info', array('device_id' => $device_id));
        
        return TRUE;
    }

    public function getAllAlarm($device_id = FALSE){
        
        return;
        if(FALSE === $device_id){
            $query = $this->dbData->get('all_device_info');
            return $query->result_array();
        }

        $query = $this->dbData->get_where('all_device_info',array('device_id'=>$device_id));
        
        return $query->result_array();
    }
    
    public function getAllHistoryInfo($device_id,$num){
        
        $tmp1 = $this->dbData->get_where('all_device_info',array('device_id'=>$device_id));
        
        $row1 = $tmp1->row_array();
        
        $tmp2 = $this->dbData->get_where('device_type_info',array('device_type'=>$row1['device_type']));
        
        $row2 = $tmp2->row_array();
        
        $this->dbData->order_by("update_time","desc");
        
        $query = $this->dbData->get_where($row2['history_table_name'],array('device_id'=>$device_id),$num,0);
        
        return $query->result_array();
    }

    public function getAllMaintain($device_id = FALSE){
    
        $tmp = $this->dbData->get('device_type_info');
        $row1 = $tmp->result_array();
        
        for($i=0;$i<count($row1);$i++){
            $sql = "select device_id from ".$row1[$i]['maintain_table_name']." group by device_id";
            $tmp = $this->dbData->query($sql);
            $row2 = $tmp->result_array();
            
            for($j=0;$j<count($row2);$j++){
        
                $this->dbData->order_by("update_time","desc");

                $this->dbData->select()->from($row1[$i]['maintain_table_name'])->where(array('device_id'=>$row2[$j]['device_id']))->limit(1,0);

                $query = $this->dbData->get();

                $row = $query->result_array();
                $maintain_info['device_id'] = $row[0]['device_id'];
                
                foreach($row[0] as $key=>$value){
                    if (strpos($key,"_period")){
                        $name = str_replace("_period","",$key);
                        $maintain_info['item'] = $name;
                        $maintain_info['time_used'] = $row[0][$name];
                        if($maintain_info['time_used'] == ""){
                            continue;
                        }
                        
                        $maintain_info['period'] = $row[0][$key];
                        if($maintain_info['period'] == ""){
                            $maintain_info['period'] = 2000;
                        }
                        $sql="INSERT INTO all_maintain_info SET device_id=".$maintain_info['device_id'].", item='".$maintain_info['item']."',time_used=".$maintain_info['time_used'].", period=".$maintain_info['period'].
                        " ON DUPLICATE KEY UPDATE time_used=".$maintain_info['time_used'].", period=".$maintain_info['period'].";";
                        $this->dbWeb->query($sql);
                    }
                }
            }
        }
        
        $query = $this->dbWeb->get('all_maintain_info');
        return $query->result_array();
    }
    
    public function setMaintainRemark($info){
        //print_r($info);
        return $this->dbWeb->update('all_maintain_info',array('remark'=>$info['remark']),array('device_id'=>$info['device_id'],'item'=>$info['item']));
    }
    
    public function setDeviceInfo($info){

        return $this->dbWeb->update('all_device_info',$info,array('device_id'=>$info['device_id']));
    }
    
    function calltimediff($starttime,$endtime)
    {
        $time_diff=0;
        
        if($endtime=='0000-00-00 00:00:00')
        {
            $time_diff=0;
            
        }elseif($starttime=='0000-00-00 00:00:00'){
        
            $time_diff=0;
            
        }elseif($starttime>$endtime){
        
            $time_diff=strtotime($starttime)-strtotime($endtime);
            
        }else{
        
            $time_diff=strtotime($endtime)-strtotime($starttime);
        }
        
        return $time_diff;//gmstrftime($time_diff);
    }
    
    function computeWork($press,$time1,$time2){
    
        $time = $this->calltimediff($time1,$time2);
        
        return $time*$press;
    }

    public function energyAnalysis($info,$device_id){
        $ret = array();
        $retTemp = array();
        $startPower = 0;
        $endPower = 0;
        $ret['totalGas']        = 0;
        $ret['totalTime']       = 0;
        $ret['loadTime']        = 0;
        $ret['unloadTime']      = 0;
        $ret['loadCount']       = 0;
        $ret['unloadCount']     = 0;
        $ret['loadPower']       = 0;
        $ret['unloadPower']     = 0;
        $ret['totalPower']      = 0;
        $ret['currentAve']      = 0;
        $ret['currentMax']     = 0;
        $ret['currentMin']      = 0;
        $ret['powerAve']        = 0;
        $ret['powerMax']       = 0;
        $ret['powerMin']        = 0;
        $ret['pressMax']       = 0;
        $ret['pressMin']        = 0;
        $ret['pressAve']        = 0;
        $ret['tempMax']        = 0;
        $ret['tempMin']         = 0;
        $ret['tempAve']         = 0;
        $ret['score']           = 0;
        $ret['ret']             = 0;
        $ret['time']            = $this->calltimediff($info['start'],$info['end'])/3600;        
    
        $this->dbData->order_by("update_time","desc");
        
        $this->dbData->select()->from('history_table_1')->where(array('update_time > '=>$info['start'],'update_time < '=>$info['end'],'device_id'=>$device_id));
        
        $dataNum = $this->dbData->count_all_results();
        
        $offset = 0;
        
        $i = 0;
        $highNum = 0;
        
        while($dataNum > 0){
    
            $this->dbData->order_by("update_time","desc");
        
            $this->dbData->select()->from('history_table_1')->where(array('update_time > '=>$info['start'],'update_time < '=>$info['end'],'device_id'=>$device_id))->limit(5000,$offset);
        
            $temp = $this->dbData->get();

            $row = $temp->result_array();

            if("" == $row[0]['Ia']){
                $row[0]['Ia'] = 0;
            }
            if("" == $row[0]['Analog1']){
                $row[0]['Analog1'] = 0;
            }
            if("" == $row[0]['Ps']){
                $row[0]['Ps'] = 0;
            }
            
            if(0 == $i){
                $startPower = $row[0]['TotalPower'];
            }
            if($dataNum <= 5000){
                $numTmp = count($row);
                $ret['totalPower'] = ($startPower - $row[$numTmp-1]['TotalPower'])/10;
                $ret['totalPrice'] = $ret['totalPower']*$info['energyPrice'];
            }
            
            $retTemp = $this->computeEnergy($row);
            
            if(-1 == $retTemp['ret']){
            
                $dataNum -= 5000;
                $offset += 5000;
                continue;
            }
            
            $i++;
            
            $dataNum -= 5000;
            $offset += 5000;
                    
            $ret['totalTime']   += $retTemp['totalTime'];
            $ret['totalGas']    += $retTemp['totalGas'];
            $ret['loadTime']    += $retTemp['loadTime'];
            $ret['unloadTime']  += $retTemp['unloadTime'];
            $ret['loadCount']   += $retTemp['loadCount'];
            $ret['unloadCount'] += $retTemp['unloadCount'];
            //$ret['loadPower']   += $retTemp['loadPower'];
            //$ret['unloadPower'] += $retTemp['unloadPower'];
                        
            $ret['currentAve']      += $retTemp['currentAve'];
            $ret['powerAve']        += $retTemp['powerAve'];
            $ret['pressAve']        += $retTemp['pressAve'];
            $ret['tempAve']         += $retTemp['tempAve'];
            
            if((0 == $ret['currentMax']) || ($retTemp['currentMax'] > $ret['currentMax'])){
                $ret['currentMax']      = $retTemp['currentMax'];
            }
            if((0 == $ret['currentMin']) || ($retTemp['currentMin'] < $ret['currentMin'])){
                $ret['currentMin']      = $retTemp['currentMin'];
            }
            
            if((0 == $ret['powerMax']) || ($retTemp['powerMax'] > $ret['powerMax'])){
                $ret['powerMax']      = $retTemp['powerMax'];
            }
            if((0 == $ret['powerMin']) || ($retTemp['powerMin'] < $ret['powerMin'])){
                $ret['powerMin']      = $retTemp['powerMin'];
            }
            
            if((0 == $ret['pressMax']) || ($retTemp['pressMax'] > $ret['pressMax'])){
                $ret['pressMax']      = $retTemp['pressMax'];
            }
            if((0 == $ret['pressMin']) || ($retTemp['pressMin'] < $ret['pressMin'])){
                $ret['pressMin']      = $retTemp['pressMin'];
            }
            
            if((0 == $ret['tempMax']) || ($retTemp['tempMax'] > $ret['tempMax'])){
                $ret['tempMax']      = $retTemp['tempMax'];
            }
            if((0 == $ret['tempMin']) || ($retTemp['tempMin'] < $ret['tempMin'])){
                $ret['tempMin']      = $retTemp['tempMin'];
            }
        }
        
        if(0 == $i){
            $ret['ret'] = 1;
            return $ret;
        }else{
        
        
            //echo $i."+";
            $ret['currentMax']      /= 10;
            $ret['currentMin']      /= 10;
            $ret['currentAve']      /= $i;
            $ret['powerMax']        /= 10;
            $ret['powerMin']        /= 10;
            $ret['powerAve']        /= $i;
            $ret['pressMax']        /= 10;
            $ret['pressMin']        /= 10;
            $ret['pressAve']        /= $i;
            $ret['tempMax']         /= 10;
            $ret['tempMin']         /= 10;
            $ret['tempAve']         /= $i;
                
            $data = array(
                'Startdate' => $info['start'],
                'Enddate' => $info['end'],
                //'topTime1' => $info['topTime1'],
                //'topTime2' => $info['topTime2'],
                //'Topprice' => $info['topPrice'],
                'Energyprice' => $info['energyPrice'],
                'Ratedpower' => $info['ratedPower'],
                'Ratedout' => $info['ratedOut'],
                'Totaltime' => $ret['time'],
               'Worktime' =>round($ret['totalTime'],2)       ,
               'Stoptime' =>round($ret['time'] - $ret['totalTime'],2)       ,
               'Loadtime' =>round($ret['loadTime'],2)        ,
               'Unloadtime' =>round($ret['unloadTime'],2)      ,
               'Totalgas' =>$ret['totalGas']        ,
               'Loadcnt' =>$ret['loadCount']       ,
               'Unloadcnt' =>$ret['unloadCount']     ,
               'Totalpower' =>$ret['totalPower']      ,
               //'Loadpower' =>$ret['loadPower']       ,
               //'Unloadpower' =>$ret['unloadPower']     ,
                'Totalprice' =>$ret['totalPrice']     ,
               'Currentave' =>round($ret['currentAve'],2)      ,
               'Currentmax' =>$ret['currentMax']     ,
               'Currentmin' =>$ret['currentMin']      ,
               'Powerave' =>round($ret['currentAve'],2)        ,
               'Powermax' =>round($ret['powerMax'],2)       ,
               'Powermin' =>$ret['powerMin']        ,
               'Pressave' =>round($ret['pressAve'],2)       ,
               'Pressmin' =>$ret['pressMin']        ,
               'Pressmax' =>$ret['pressMax']        ,
               'Tempave' =>round($ret['tempAve'],2)        ,
               'Tempmin' =>$ret['tempMin']         ,
               'Tempmax' =>$ret['tempMax']
            );
            
           if($ret['totalTime'] != 0){
               $data['Loadpercent'] =round(100*$ret['loadTime']/$ret['totalTime'],2);
               $data['Unloadpercent'] =100 - $data['Loadpercent'];
               $data['Loadprice'] = round($ret['totalPrice']*$data['Loadpercent']/100,2);
               $data['Unloadprice'] = $ret['totalPrice'] - $data['Loadprice'];
               $data['Loadpowerpercent'] = $data['Loadpercent'];
               $data['Unloadpowerpercent'] = $data['Unloadpercent'];
               $data['Loadpower'] = round($data['Loadpowerpercent']*$data['Totalpower']/100,2);
               $data['Unloadpower'] = $data['Totalpower'] - $data['Loadpower'];
               
               $ret['loadPrice'] = $data['Loadprice'];
               $ret['unloadPrice'] =  $data['Unloadprice'];
               $ret['loadPowerpercent'] =  $data['Loadpowerpercent'];
               $ret['unloadPowerpercent'] =  $data['Unloadpowerpercent'];
               $ret['loadPower'] =  $data['Loadpower'];
               $ret['unloadPower'] =  $data['Unloadpower'];
           }else{
               $data['Loadpercent'] =0;
               $data['Unloadpercent'] =0;
               $data['Loadprice'] = 0;
               $data['Unloadprice'] = 0;
               $data['Loadpowerpercent'] = 0;
               $data['Unloadpowerpercent'] = 0;
               $data['Loadpower'] = 0;
               $data['Unloadpower'] = 0;
               
               $ret['loadPrice'] = 0;
               $ret['unloadPrice'] =  0;
               $ret['loadPowerpercent'] =  0;
               $ret['unloadPowerpercent'] =  0;
               $ret['loadPower'] =  0;
               $ret['unloadPower'] =  0;
           }
           if($ret['totalGas'] != 0){
                $data['Gasprice'] = round($ret['totalPrice'] / $ret['totalGas'],2);
                $data['Specificpower'] = round(60*$ret['totalPower'] / $ret['totalGas'],2);
                
                $ret['gasPrice'] = $data['Gasprice'];
                $ret['specificPower'] = $data['Specificpower'];
           }else{
                $data['Gasprice'] = 0;
                $ret['gasPrice'] = 0;
           }
            $this->dbData->update('analysis', $data,array('device_id'=>$device_id));
            return $ret;
        }
    }
    
    public function computeEnergy($row){
    
        $ret = array();
        
        $ret['totalGas']        = 0;
        $ret['totalTime']       = 0;
        $ret['loadTime']        = 0;
        $ret['unloadTime']      = 0;        
        $ret['loadCount']       = 0;
        $ret['unloadCount']     = 0;
        //$ret['loadPower']       = 0;
        //$ret['unloadPower']     = 0;
        $ret['ret']             = 0;
        $ret['powerMax']        = 0;
        $ret['powerMin']        = 0;
        $ret['powerAve']        = 0;
        $ret['currentMax']      = 0;
        $ret['currentMin']      = 0;
        $ret['currentAve']      = 0;
        $ret['pressMax']        = 0;
        $ret['pressMin']        = 0;
        $ret['pressAve']        = 0;
        $ret['tempMax']         = 0;
        $ret['tempMin']         = 0;
        $ret['tempAve']         = 0;
        $num=count($row);
    
        /*预处理*//*Analog0 temp; Analog1 press; Analog2 flow; Analog3 dew*/
        for($i=1;$i<$num;$i++){
        
            if("" == $row[$i]['Ia']){
                $row[$i]['Ia'] = $row[$i-1]['Ia'];
            }
        
            if("" == $row[$i]['Analog1']){
                $row[$i]['Analog1'] = $row[$i-1]['Analog1'];
            }
        
            if("" == $row[$i]['Ps']){
                $row[$i]['Ps'] = $row[$i-1]['Ps'];
            }
        }
        
        /*计算平均/最大/最小 电流、功率、气压、温度*/
        for($i=0;$i<$num;$i++){
            $ret['currentAve'] += ($row[$i]['Ia']/10);
            
            if((0 == $ret['currentMax']) || ($row[$i]['Ia'] > $ret['currentMax'])){
                $ret['currentMax']      = $row[$i]['Ia'];
            }
            if((0 == $ret['currentMin']) || ($row[$i]['Ia'] < $ret['currentMin'])){
                $ret['currentMin']      = $row[$i]['Ia'];
            }
        }
        $ret['currentAve'] /=$num;
        for($i=0;$i<$num;$i++){
            $ret['powerAve'] += ($row[$i]['Ps']/10);
            
            if((0 == $ret['powerMax']) || ($row[$i]['Ps'] > $ret['powerMax'])){
                $ret['powerMax']      = $row[$i]['Ps'];
            }
            if((0 == $ret['powerMin']) || ($row[$i]['Ps'] < $ret['powerMin'])){
                $ret['powerMin']      = $row[$i]['Ps'];
            }
        }
        $ret['powerAve'] /=$num;
        for($i=0;$i<$num;$i++){
            $ret['tempAve'] += ($row[$i]['Analog0']/10);
            
            if((0 == $ret['tempMax']) || ($row[$i]['Analog0'] > $ret['tempMax'])){
                $ret['tempMax']      = $row[$i]['Analog0'];
            }
            if((0 == $ret['tempMin']) || ($row[$i]['Analog0'] < $ret['tempMin'])){
                $ret['tempMin']      = $row[$i]['Analog0'];
            }
        }
        $ret['tempAve'] /=$num;
        for($i=0;$i<$num;$i++){
            $ret['pressAve'] += ($row[$i]['Analog1']/10);
            
            if((0 == $ret['pressMax']) || ($row[$i]['Analog1'] > $ret['pressMax'])){
                $ret['pressMax']      = $row[$i]['Analog1'];
            }
            if((0 == $ret['pressMin']) || ($row[$i]['Analog1'] < $ret['pressMin'])){
                $ret['pressMin']      = $row[$i]['Analog1'];
            }
        }
        $ret['pressAve'] /=$num;
        
        
        /*标记加载卸载状态*/
        $isLoad = array();
        $isLoad[0] = 2;
        for($i=1;$i<$num;$i++){
        
            if($row[$i]['Ia'] > $row[$i-1]['Ia']+10){
                
                $isLoad[$i] = 1;/*load*/
                $ret['loadCount']++;
                
            }elseif($row[$i]['Ia'] < $row[$i-1]['Ia']-10){
                
                $isLoad[$i] = 0;/*unload*/
                $ret['unloadCount']++;
                
            }else if($row[$i]['Ia'] > 5){
            
                $isLoad[$i] = $isLoad[$i-1];/**/
                
            }else{
            
                $isLoad[$i] = 2;/*not work*/
            }
        }
        
        for($i=1;$i<$num;$i++){

            //if($isLoad[$i] != 2){
                
                /*flow uint is m³/h*/
                //$ret['totalGas'] += ($row[$i]['Analog2']/6000)*($this->calltimediff($row[$i]['update_time'],$row[$i-0]['update_time']))/1000;
                $ret['totalGas'] += $row[$i]['Analog2']/120;
            //}
        }
        
        /*计算卸载加载时间比*/
        $ret['loadTime']   = 0;
        $ret['unloadTime'] = 0;
        
        $status     = 0;
        $starttime  = 0;
        $endtime    = 0;
        $startpower  = 0;
        $endpower  = 0;
        for($i=0;$i<$num;$i++){
        
            if($isLoad[$i] != 2 && $starttime == 0){
            
                $starttime  = $row[$i]['update_time'];
                $startpower = $row[$i]['TotalPower'];
                $status    = $isLoad[$i];
            }
            
            if($isLoad[$i] != $status && $starttime != 0){
                
                $endtime = $row[$i]['update_time'];
                $endpower = $row[$i]['TotalPower'];
                
                if(1 == $status){
                    
                    $ret['loadTime'] += $this->calltimediff($endtime,$starttime);
                    //$ret['loadPower'] = ($endpower - $startpower)/10;
                
                }elseif(0 == $status){
                    
                    $ret['unloadTime'] += $this->calltimediff($endtime,$starttime);
                    //$ret['unloadPower'] = ($endpower - $startpower)/10;
                }
                
                if($isLoad[$i] != 2){
                
                    $starttime  = $row[$i]['update_time'];
                    $startpower = $row[$i]['TotalPower'];
                    $status     = $isLoad[$i];
                    
                }else{
                
                    $starttime  = 0;
                    $status     = 2;
                }
            }
        }
        
        $ret['loadTime']    /= 3600;
        $ret['unloadTime']  /= 3600;
        $ret['totalTime']   = ($ret['unloadTime']+$ret['loadTime']);
        return $ret;
    }

    public function getHistoryData($device_id,$info_id,$day=FALSE){
    
        if($day['start']==FALSE && $day['end']==FALSE){
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_1')->where(array('device_id'=>$device_id))->limit(1000,0);

            $ret = $this->dbData->get();
        
        }else if($day['start']==FALSE){
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_1')->where(array('device_id'=>$device_id,'update_time < '=>$day['end']))->limit(1000,0);

            $ret = $this->dbData->get();
        
        }else{
        
            $days = floor(1+$this->calltimediff($day['start'],$day['end'])/86400);
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_1')->where(array('device_id'=>$device_id,'update_time > '=>$day['start'],'update_time < '=>$day['end']))->where('id mod '.(10*$days).'=0');

            $ret = $this->dbData->get();
        
        }
        
        return $ret->result_array();
    }
    
    public function getAnalysisreport($device_id=8600512){
    
        $ret = $this->dbData->get_where('analysis',array('device_id'=>$device_id));
        
        return $ret->result_array();
    }
}
?>
