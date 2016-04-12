<?php

class Hongwuhuan_model extends CI_Model{

    var $dbData;
    var $dbWeb;
    
    public function __construct(){

        $config['hostname'] = "localhost";
        $config['username'] = "root";
        $config['password'] = "ZJUisee423";
        $config['database'] = "ROBOS_HONGWUHUAN_DATA";
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
        
        $config['database'] = "ROBOS_HONGWUHUAN_WEB";        
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
            if(isset($temp['GPS_long'])){
                $ret['GPS_long'] = floor($temp['GPS_long']);
                $ret['GPS_lat'] = floor($temp['GPS_lat']);
            }
            return $ret;
        }

        $query = $this->dbWeb->get('all_device_info');
        return $query->result_array();
    }
    
    public function getPartDevice($deviceNum = FALSE,$offset = FALSE){
    
        if($deviceNum != FALSE){

            $this->dbWeb->select('*')->from('all_device_info')->limit($deviceNum,$offset);
            $query = $this->dbWeb->get();
            return $query->result_array();
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

    public function energyAnalysis($day,$device_id){
    
        $ret = array();
        $retTemp = array();
        
        $ret['totalTime']   = 0;
        $ret['totalWork']   = 0;
        $ret['pressHigh']   = 0;
        $ret['score']       = 0;
        $ret['pressHighAve']    = 0;
        $ret['pressLow']        = 0;
        $ret['pressLowAve']     = 0;
        $ret['ret']             = 0;
        $ret['saveWork']        = 0;
        $ret['time']            = $this->calltimediff($day['start'],$day['end'])/86400;
    
        $this->dbData->order_by("update_time","desc");
        
        $this->dbData->select()->from('history_table_1')->where(array('update_time > '=>$day['start'],'update_time < '=>$day['end'],'device_id'=>$device_id));
        
        $dataNum = $this->dbData->count_all_results();
        
        $offset = 0;
        
        $i = 0;
        $highNum = 0;
        
        while($dataNum > 0){
    
        $this->dbData->order_by("update_time","desc");
        
            $this->dbData->select()->from('history_table_1')->where(array('update_time > '=>$day['start'],'update_time < '=>$day['end'],'device_id'=>$device_id))->limit(1000,$offset);
        
            $temp = $this->dbData->get();

            $row = $temp->result_array();

            if("" == $row[0]['MainmotorphaseAcurrent']){
                $row[0]['MainmotorphaseAcurrent'] = 0;
            }
            if("" == $row[0]['Supplypress']){
                $row[0]['Supplypress'] = 0;
            }
            
            $retTemp = $this->computeEnergy($row);
            
            if(-1 == $retTemp['ret']){
            
                $dataNum -= 1000;
                $offset += 1000;
                continue;
            }
            
            $i++;
            
            $dataNum -= 1000;
            $offset += 1000;
        
            $ret['totalTime'] += $retTemp['totalTime'];
            $ret['totalWork'] += $retTemp['totalWork'];
            if(0 == $ret['pressHigh']){
                $ret['pressHigh'] = $retTemp['pressHigh'];
            }elseif($ret['pressHigh'] < $retTemp['pressHigh']){
                $ret['pressHigh'] = $retTemp['pressHigh'];
            }
            if(0 != $retTemp['pressHigh']){
               $highNum++;
            }
            
            $ret['pressHighAve']    += $retTemp['pressHighAve'];
            if(0 == $ret['pressLow']){
                $ret['pressLow'] = $retTemp['pressLow'];
            }elseif($ret['pressLow'] > $retTemp['pressLow']){
                $ret['pressLow'] = $retTemp['pressLow'];
            }
            $ret['pressLowAve']     += $retTemp['pressLowAve'];
            //echo $retTemp['pressLowAve']."#ret".$retTemp['ret']."#";
            $ret['score']           += $retTemp['score'];
            $ret['saveWork']        += $retTemp['saveWork'];
        }
        
        if(0 == $i){
            $ret['ret'] = -1;
            return $ret;
        }else{
            //echo $i."+";
            $ret['pressHighAve']    /= $highNum;
            $ret['pressLowAve']     /= $i;
            $ret['score']           /= $i;
            return $ret;
        }
    }
    
    public function computeEnergy($row){
    
        $ret = array();
        
        $ret['totalTime'] = 0;
        $ret['totalWork'] = 0;
        $ret['pressHigh'] = 0;
        $ret['pressHighAve']    = 0;
        $ret['pressLow']        = 0;
        $ret['pressLowAve']     = 0;
        $ret['ret']             = 0;
        $ret['score']           = 0;
        $ret['saveWork']        = 0;
    
        /*预处理*/
        for($i=1;$i<count($row);$i++){
        
            if("" == $row[$i]['MainmotorphaseAcurrent']){
                $row[$i]['MainmotorphaseAcurrent'] = $row[$i-1]['MainmotorphaseAcurrent'];
            }
        
            if("" == $row[$i]['Supplypress']){
                $row[$i]['Supplypress'] = $row[$i-1]['Supplypress'];
            }
        }
        
        /*标记加载卸载状态*/
        $isLoad = array();
        $isLoad[0] = 2;
        for($i=1;$i<count($row);$i++){
        
            if($row[$i]['MainmotorphaseAcurrent'] > $row[$i-1]['MainmotorphaseAcurrent']){
                
                $isLoad[$i] = 1;/*load*/
                
            }elseif($row[$i]['MainmotorphaseAcurrent'] < $row[$i-1]['MainmotorphaseAcurrent']){
                
                $isLoad[$i] = 0;/*unload*/
                
            }else{
            
                $isLoad[$i] = 2;/*not work*/
            }
        }
        
        /*计算卸载加载时间比*/
        $loadTime   = 0;
        $unloadTime = 0;
        
        $status     = 0;
        $starttime  = 0;
        $endtime    = 0;
        for($i=0;$i<count($row);$i++){
        
            if($isLoad[$i] != 2 && $starttime == 0){
            
                $starttime  = $row[$i]['update_time'];
                $status    = $isLoad[$i];
            }
            
            if($isLoad[$i] != $status && $starttime != 0){
                
                $endtime = $row[$i]['update_time'];
                
                if(1 == $status){
                    
                    $loadTime += $this->calltimediff($endtime,$starttime);
                
                }elseif(0 == $status){
                    
                    $unloadTime += $this->calltimediff($endtime,$starttime);
                }
                
                if($isLoad[$i] != 2){
                
                    $starttime  = $row[$i]['update_time'];
                    $status     = $isLoad[$i];
                    
                }else{
                
                    $starttime  = 0;
                    $status     = 2;
                }
            }
        }
        
        /*计算溢出功率*/
        $lowPointNum =0;
        $highPointNum = 0;
        $targetPress = 0;
        $highPress = 0;
        $totalWork = 0;
        $totalEnergy = 0;
        $overWork = 0;
        $unloadCur = 0;
        for($i=2;$i<count($row);$i++){
            if($isLoad[$i] != 2){
                if($row[$i]['Supplypress'] > $row[$i-1]['Supplypress'] && $row[$i-1]['Supplypress'] < $row[$i-2]['Supplypress']){
                    $lowPointNum++;
                    $targetPress+=$row[$i-1]['Supplypress'];
                    $unloadCur +=$row[$i-1]['MainmotorphaseAcurrent'];
                    //echo $row[$i-1]['Supplypress']."#";
                    if(0 == $ret['pressLow']){
                        $ret['pressLow'] = $row[$i-1]['Supplypress'];
                    }elseif($row[$i-1]['Supplypress'] < $ret['pressLow']){
                        $ret['pressLow'] = $row[$i-1]['Supplypress'];
                    }
                }
                if($row[$i]['Supplypress'] < $row[$i-1]['Supplypress'] && $row[$i-1]['Supplypress'] > $row[$i-2]['Supplypress']){
                    $highPointNum++;
                    $highPress+=$row[$i-1]['Supplypress'];
                    if(0 == $ret['pressHigh']){
                        $ret['pressHigh'] = $row[$i-1]['Supplypress'];
                    }elseif($row[$i-1]['Supplypress'] > $ret['pressHigh']){
                        $ret['pressHigh'] = $row[$i-1]['Supplypress'];
                    }
                }
                
            }
        }
        
        if(0 == $lowPointNum){
            $ret['ret'] = -1;            
            return $ret;
        }
        
        $targetPress = $targetPress/$lowPointNum;
        $unloadCur = $unloadCur/$lowPointNum;
        $ret['pressLowAve']     = $targetPress;
        for($i=1;$i<count($row);$i++){
        
            if($isLoad[$i] != 2){
        
                $totalEnergy +=$this->computeWork($row[$i]['MainmotorphaseAcurrent'],$row[$i]['update_time'],$row[$i-1]['update_time']);
                $totalWork +=$this->computeWork($row[$i]['Supplypress'],$row[$i]['update_time'],$row[$i-1]['update_time']);
                
                if($row[$i]['Supplypress'] > $targetPress){
                
                    $overWork +=$this->computeWork($row[$i]['Supplypress']-$targetPress,$row[$i]['update_time'],$row[$i-1]['update_time']);
                }
            }
        }
        
        if(0 == $unloadTime+$loadTime){
        
            $ret['ret'] = -1;            
            return $ret;
        }
        
        if(0 == $totalWork){
        
            $ret['ret'] = -1;            
            return $ret;
        }
        
        $ret['score'] = (2 - $unloadTime/($unloadTime+$loadTime) + ($overWork/$totalWork))/2;       
        
        $ret['totalTime'] = ($unloadTime+$loadTime)/3600;
        $ret['totalWork'] = ($totalEnergy*380)/3600000;
        $ret['saveWork'] = $unloadCur*$unloadTime*380/3600000;
        //echo "t:".$ret['totalWork'];
        if(0 != $highPointNum){
            $ret['pressHighAve']    = $highPress / $highPointNum;
        }
        
        return $ret;
    }

    public function getHistoryData($device_id,$info_id,$day=FALSE){
    
        if($day['start']==FALSE && $day['end']==FALSE){
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_2')->where(array('device_id'=>$device_id))->limit(1000,0);

            $ret = $this->dbData->get();
        
        }else if($day['start']==FALSE){
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_2')->where(array('device_id'=>$device_id,'update_time < '=>$day['end']))->limit(1000,0);

            $ret = $this->dbData->get();
        
        }else{
        
            $this->dbData->order_by("update_time","desc");

            $this->dbData->select(array($info_id, "update_time"))->from('history_table_2')->where(array('device_id'=>$device_id,'update_time > '=>$day['start'],'update_time < '=>$day['end']));

            $ret = $this->dbData->get();
        
        }
        
        return $ret->result_array();
    }
}
?>
