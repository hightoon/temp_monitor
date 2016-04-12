<?php
 
class Admin extends CI_Controller{

    var $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->model('info_model');
		$this->load->helper(array(
			'form',  
			'url'   
        )); 
		$this->load->library('session');  
        $this->load->library('encrypt');
        $temp = dataio_init();
        if($temp != 0){
            echo "dataio init failed,erro is ".$temp;
        }
		
		$this->data = array(
			'sysb_encrypt' => $this->encrypt->encode('setslist'),
			'dtsb_encrypt' => $this->encrypt->encode('basicinfo'),
			'ssxx_encrypt' => $this->encrypt->encode('realtimeinfo'),
			'lsxx_encrypt' => $this->encrypt->encode('historyinfo'),
			'cssz_encrypt' => $this->encrypt->encode('infoset'),
			'zhsz_encrypt' => $this->encrypt->encode('userset'),
			'sbzw_encrypt' => $this->encrypt->encode('setsgroup'),
		);
		
		$this->maintainnamelist=array(
			'youguo_m'=>'油滤器',
			'youfen_m'=>'油分器',
			'kongqi_m'=>'空滤器',
			'dianji_m'=>'润滑油',
			'youzhi_m'=>'润滑脂'
		);
		$this->meterslist=array(
			'speed'=>'转速',
			'fuellevel'=>'燃油位',
			'voltage'=>'电压',
			'runpower'=>'运行功率',
			'runrate'=>'运行速率',
			'oilpress'=>'机油压力',
			'gaspress'=>'排气压力',
			'watertemp'=>'水温',
			'oiltemp'=>'液压油温',
			'gastemp'=>'排气温度',
			'acur'=>'A相电流',
			'bcur'=>'B相电流',
			'ccur'=>'C相电流',
		);
		$this->meterunit=array(
			'speed'=>'rpm',
			'fuellevel'=>'%',
			'voltage'=>'V',
			'runpower'=>'W',
			'runrate'=>'',
			'oilpress'=>'bar',
			'gaspress'=>'bar',
			'watertemp'=>'℃',
			'oiltemp'=>'℃',
			'gastemp'=>'℃',
			'acur'=>'A',
			'bcur'=>'A',
			'ccur'=>'A',
		);
        $this->data['meter_history']=array(
			'speed'=>'diesel_speed',
			'fuellevel'=>'fuel_level',
			'voltage'=>'voltage',
			'runpower'=>'run_power',
			'runrate'=>'run_rate',
			'oilpress'=>'oil_pressure',
			'gaspress'=>'gas_pressure',
			'watertemp'=>'water_temp',
			'oiltemp'=>'oil_temp',
			'gastemp'=>'gas_temp',
			'acur'=>'A_CUR',
			'bcur'=>'B_CUR',
			'ccur'=>'C_CUR',
		);
	}
	
	public function index(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
		//$url_encrypt = $this->uri->ruri_string();
        //$url_encrypt = substr($url_encrypt,strlen("/cim/index.php/admin/index/"));
		$url_encrypt = $_SERVER['REQUEST_URI'];
        $url_encrypt = substr($url_encrypt,strlen("/cim/index.php/admin/"));
  
        if (NULL != $url_encrypt){
        
            $url_decrypt = $this->encrypt->decode($url_encrypt);			
            $segment = explode("/",$url_decrypt);
			if (count($segment) < 2){
				$segment[1] = FALSE;
			}
            
            switch ($segment[0]){
                case "setslist":
                    $this->setslist();
                    return;
                    break;
                case "basicinfo":
                    $this->basicinfo($segment[1]);
                    return;
                    break;
                case "realtimeinfo":
                    $this->realtimeinfo($segment[1]);
                    return;
                    break;
                case "historyinfo":
                    $this->historyinfo($segment[1]);
                    return;
                    break;
                case "infoset":
                    $this->infoset();
                    return;
                    break;
                case "userset":
                    $this->userset($segment[1]);
                    return;
                    break;
                case "upload_file":
                    $this->upload_file();
                    return;
                    break;
                case "change_logo":
                    $this->change_logo();
                    return;
                    break;
                case "passwdchange":
                    $this->passwdchange();
                    return;
                    break;
                case "add_user":
                    $this->add_user();
                    return;
                    break;
                case "del_user":
                    $this->del_user();
                    return;
                    break;
                case "edit_user":
                    $this->edit_user();
                    return;
                    break;
                default:
                    break;
            }
        }
        
		$this->data['allEqp']= $this->info_model->get_allEqpByManager($this->session->userdata('admin_id'),$this->session->userdata('admin_level'));
        /*$onlineEqp = $this->info_model->get_allEqp_online();*/
		$this->data['allMaintain']= $this->info_model->get_allMaintain();
        $onlineEqp = dataio_getonlinelist();
        $onlineEqp = array_unique($onlineEqp);
		$this->data['allAlarm']= $this->info_model->get_allAlarm_new();
		$this->data['allRemark']= $this->info_model->get_allRemark_new($this->session->userdata('admin_id'));
		$this->data['remarkNum'] = count($this->data['allRemark']);
		
		$this->data['alarmNum'] = 0;
		$alarmNum_tmp = count($this->data['allAlarm']);
		for($i=0; $i<$alarmNum_tmp; $i++){
			$this->data['allAlarm'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allAlarm'][$i]['cv_id']);
			for ($j=0; $j<count($this->data['allEqp']); $j++){
				if ($this->data['allEqp'][$j]['cv_id'] == $this->data['allAlarm'][$i]['cv_id']){
					$this->data['allAlarm'][$i]['cv_type'] = $this->data['allEqp'][$j]['cv_type'];
					$this->data['allAlarm'][$i]['cv_function'] = $this->data['allEqp'][$j]['cv_function'];
					$this->data['allAlarm'][$i]['valid'] = 1;
					$this->data['alarmNum']++;
					break;
				}
			}
			if(!isset($this->data['allAlarm'][$i]['valid'])){
				unset($this->data['allAlarm'][$i]);
			}
		}
		
		for($i = 0; $i < count($this->data['allEqp']); $i++){
			$this->data['allEqp'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allEqp'][$i]['cv_id']);
			$this->data['allEqp'][$i]['isOnline'] = 0;
		}
        $this->data['onlineeqpNum'] = 0;//count($onlineEqp);
        $onlineE=array_unique($onlineEqp);
		/*效率低下*/
		for($i = 0; $i < count($onlineE); $i++){
			for($j = 0; $j < count($this->data['allEqp']); $j++){
				if ($this->data['allEqp'][$j]['cv_id'] == $onlineE[$i]){
                    $this->data['allEqp'][$j]['isOnline'] = 1;
                    $this->data['onlineeqpNum']++;
                }
			}
		}
		
		/*效率低下*/
		$maintainnum_tmp = count($this->data['allMaintain']);
		for($i = 0; $i < $maintainnum_tmp; $i++){
			$this->data['allMaintain'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allMaintain'][$i]['cv_id']);
			for ($j=0; $j<count($this->data['allEqp']); $j++){
				if ($this->data['allEqp'][$j]['cv_id'] == $this->data['allMaintain'][$i]['cv_id']){
					$this->data['allMaintain'][$i]['cv_type'] = $this->data['allEqp'][$j]['cv_type'];
					$this->data['allMaintain'][$i]['cv_function'] = $this->data['allEqp'][$j]['cv_function'];
					$this->data['allMaintain'][$i]['left_time'] = $this->data['allMaintain'][$i]['period1'] - $this->data['allMaintain'][$i]['maintain_detail'];
					$this->data['allMaintain'][$i]['name'] = $this->maintainnamelist[$this->data['allMaintain'][$i]['maintain_type']];
					$this->data['allMaintain'][$i]['valid'] = 1;
					break;
				}
			}
			if(!isset($this->data['allMaintain'][$i]['valid'])){
				unset($this->data['allMaintain'][$i]);
			}
		}
		
		
		$this->data['alleqpNum'] = count($this->data['allEqp']);
		
		$this->load->view('templates/header');
		$this->load->view('admin/index',$this->data);
		$this->load->view('templates/footer');
	}
	public function setslist(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
		
		$this->data['allEqp']= $this->info_model->get_allEqpByManager($this->session->userdata('admin_id'),$this->session->userdata('admin_level'));
		$this->data['allWarning']= $this->info_model->get_allAlarm();
		$this->data['allMaintain']= $this->info_model->get_allMaintain();
        $onlineEqp = dataio_getonlinelist();
        $onlineEqp = array_unique($onlineEqp);

		//for ($i=0; $i<count($this->data['allMaintain']); $i++){
		//	$this->data['allMaintain'][$i]['maintainname'] = $this->maintainnamelist[$this->data['allMaintain'][$i]['maintain_type']];
		//}
		//$data_all_eqp = $this->info_model->get_allEqp();
		for($i = 0; $i < count($this->data['allEqp']); $i++){
			//$data['allEqp'][$i]['href'] = $data_all_eqp[$i]['cv_id'];
			$this->data['allEqp'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allEqp'][$i]['cv_id']);
			$this->data['allEqp'][$i]['isOnLine']=0;
			for($j=0; $j<count($onlineEqp); $j++){
				if($onlineEqp[$j] == $this->data['allEqp'][$i]['cv_id']){
					$this->data['allEqp'][$i]['isOnLine']=1;
				}
			}
		}
		
		/*效率低下*/
		$maintainnum_tmp = count($this->data['allMaintain']);
		for($i = 0; $i < $maintainnum_tmp; $i++){
			$this->data['allMaintain'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allMaintain'][$i]['cv_id']);
			for ($j=0; $j<count($this->data['allEqp']); $j++){
				if ($this->data['allEqp'][$j]['cv_id'] == $this->data['allMaintain'][$i]['cv_id']){
					$this->data['allMaintain'][$i]['cv_type'] = $this->data['allEqp'][$j]['cv_type'];
					$this->data['allMaintain'][$i]['cv_function'] = $this->data['allEqp'][$j]['cv_function'];
					$this->data['allMaintain'][$i]['left_time'] = $this->data['allMaintain'][$i]['period1'] - $this->data['allMaintain'][$i]['maintain_detail'];
					$this->data['allMaintain'][$i]['name'] = $this->maintainnamelist[$this->data['allMaintain'][$i]['maintain_type']];
					$this->data['allMaintain'][$i]['valid'] = 1;
					break;
				}
			}
			if(!isset($this->data['allMaintain'][$i]['valid'])){
				unset($this->data['allMaintain'][$i]);
			}
		}
		
		
		for($i=0; $i<count($this->data['allWarning']); $i++){
			$this->data['allWarning'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allWarning'][$i]['cv_id']);
		}
        
		$this->load->view('templates/header',$this->data);
		$this->load->view('admin/setslist',$this->data);
		$this->load->view('templates/footer');
	}
	public function basicinfo($cv_id=FALSE){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
	
		if($cv_id!=FALSE){
			//$this->data['historyinfo'] = $this->info_model->get_historyinfo($cv_id);
			//$this->data['news_item'] = $this->info_model->get_news($cv_id);
			$this->data['cv_info'] = $this->info_model->get_allEqp($cv_id);
			$this->data['maintain'] = $this->info_model->get_allMaintain($cv_id);
			
            if(0 == count($this->data['maintain'])){
                unset($this->data['maintain']);
            }else{
                for($i=0; $i<count($this->data['maintain']); $i++){
                    $this->data['maintain'][$i]['left_time'] = $this->data['maintain'][$i]['period1']-$this->data['maintain'][$i]['maintain_detail'];
                    $this->data['maintain'][$i]['percent'] = 100*($this->data['maintain'][$i]['left_time']/$this->data['maintain'][$i]['period1']);
                }
            }

			/*if (empty($this->data['news_item']))
			{
				show_404();
			}*/

			//$this->data['cv_id'] = $this->data['news_item']['cv_id'];
				
			//$temp = floor($this->data['news_item']['GPS_lat']/100);
			//$this->data['news_item']['GPS_lat'] = $temp + ($this->data['news_item']['GPS_lat'] - $temp*100)/60;
			//this->data['news_item']['GPS_lat'] = round($this->data['news_item']['GPS_lat'] ,4);
			
			//$temp = floor($this->data['news_item']['GPS_long']/100);
			//$this->data['news_item']['GPS_long'] = $temp + ($this->data['news_item']['GPS_long'] - $temp*100)/60;
			//$this->data['news_item']['GPS_long'] = round($this->data['news_item']['GPS_long'] ,4);
			
			$this->data['cv_id'] = $cv_id;
		}
		
		$data_all_eqp = $this->info_model->get_allEqpByManager($this->session->userdata('admin_id'),$this->session->userdata('admin_level'));
		for($i = 0; $i < count($data_all_eqp); $i++){
			$this->data['allEqp'][$i]['num'] = $data_all_eqp[$i]['cv_id'];
			$this->data['allEqp'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$data_all_eqp[$i]['cv_id']);
            $this->data['allEqp'][$i]['cv_controller'] = $data_all_eqp[$i]['cv_controller'];
            $this->data['allEqp'][$i]['date'] = substr($data_all_eqp[$i]['record_date'],0,10);
		}

		$this->load->view('templates/header', $this->data);
		$this->load->view('admin/basicinfo', $this->data);
		$this->load->view('templates/footer');
	}
	public function realtimeinfo($cv_id = FALSE){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
        
		if($this->session->userdata('admin_level') == 99){
			
			if($cv_id != FALSE){
				$this->data['meters'] = $this->info_model->get_robometers($cv_id);
				$this->data['cv_id'] = $cv_id;
			}
			
			for($i = 0; $i < 5; $i++){
				$this->data['onlineEqp'][$i]['num'] = 5000+$i;
				$this->data['onlineEqp'][$i]['href'] = $this->encrypt->encode('realtimeinfo/'.$this->data['onlineEqp'][$i]['num']);
			}
			
			$this->load->view('templates/header', $this->data);
			$this->load->view('admin/realtimeinfo_demo', $this->data);
			$this->load->view('templates/footer');
			return;
		}
		
		$this->data['allEqp']= $this->info_model->get_allEqpByManager($this->session->userdata('admin_id'),$this->session->userdata('admin_level'));
        $onlineEqp = dataio_getonlinelist();
        $onlineEqp = array_unique($onlineEqp);
        for($i = 0; $i < count($onlineEqp); $i++){
            for ($j=0; $j<count($this->data['allEqp']);$j++){
                if($this->data['allEqp'][$j]['cv_id'] == $onlineEqp[$i]){
			        $this->data['onlineEqp'][$i]['num'] = $onlineEqp[$i];
                    $this->data['onlineEqp'][$i]['href'] = $this->encrypt->encode('realtimeinfo/'.$onlineEqp[$i]);
                    $this->data['onlineEqp'][$i]['cv_controller'] = $this->data['allEqp'][$j]['cv_controller'];
                }
            }
		}
		
		if ($cv_id != FALSE){
			
			$this->data['meters'] = $this->info_model->get_robometers($cv_id);
			$isOnline = dataio_isonline($cv_id);

			if(0 ==  $isOnline){
				$this->data['text'][0]['type'] = "设备当前不在线";
				$this->data['text'][0]['color'] = "rgb(158,0,0)";
				$this->data['text'][0]['detail'] = "当前设备不在线";
				$this->data['text'][0]['date'] = date('Y-m-d H:i:s');
				
				$this->data['cv_id'] = $cv_id;
				/*$onlineEqp = $this->info_model->get_allEqp_online();*/
				
				$this->load->view('templates/header', $this->data);
				$this->load->view('admin/realtimeselect', $this->data);
				$this->load->view('templates/footer');
				return;
			}
		
			$data_warning = $this->info_model->get_allAlarm($cv_id);
			$data_maintain = $this->info_model->get_allMaintain($cv_id);
					
			$num1 = count($data_warning);
			$num2 = count($data_maintain);
			
			for($i = 0; $i < $num1; $i++){
				$this->data['text'][$i]['type'] = "报警信息";
				$this->data['text'][$i]['color'] = "rgb(158,0,0)";
				$this->data['text'][$i]['detail'] = $data_warning[$i]['alarm_detail'];
				//$this->data['text'][$i]['date'] = $data_warning[$i]['alarm_date'];
			}
			
			for($i = 0; $i < count($data_maintain); $i++){
				$this->data['text'][$num1 + $i]['type'] = "保养信息";
				$this->data['text'][$num1 + $i]['color'] = "rgb(255,102,0)";
				$this->data['text'][$num1 + $i]['detail'] = $data_maintain[$i]['maintain_detail'];
				$this->data['text'][$num1 + $i]['date'] = $data_maintain[$i]['maintain_date'];
			}
			
			if($num1 + $num2 > 0){
				foreach ($this->data['text'] as $key=>$value){
					$type[$key] = $value['type'];
					$detail[$key] = $value['detail'];
					//$date[$key] = $value['date'];
				}
				 
				//array_multisort($date,SORT_STRING,SORT_DESC,$type,SORT_STRING,SORT_DESC,$this->data['text']);
			}else{
				$this->data['text'][0]['type'] = "无信息";
				$this->data['text'][0]['color'] = "rgb(158,0,0)";
				$this->data['text'][0]['detail'] = "当前设备无相关信息，若产生报警及保养相关信息将会在此处显示";
				$this->data['text'][0]['date'] = date('Y-m-d H:i:s');
			}
			//$this->data['realtimeinfo'] = $this->info_model->get_news($cv_id);

			//if (empty($this->data['realtimeinfo']))
			//{
			//	show_404();
			//}

			$this->data['cv_id'] = $cv_id;//$this->data['realtimeinfo']['cv_id'];
		}
		
		$this->load->view('templates/header', $this->data);
		$this->load->view('admin/realtimeinfo', $this->data);
		$this->load->view('templates/footer');
	}
	public function historyinfo($cv_id = FALSE){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }

		$data_all_eqp = $this->info_model->get_allEqpByManager($this->session->userdata('admin_id'),$this->session->userdata('admin_level'));
		for($i = 0; $i < count($data_all_eqp); $i++){
			$this->data['allEqp'][$i]['num'] = $data_all_eqp[$i]['cv_id'];
			$this->data['allEqp'][$i]['href'] = $this->encrypt->encode('historyinfo/'.$data_all_eqp[$i]['cv_id']);
			$this->data['allEqp'][$i]['cv_controller'] = $data_all_eqp[$i]['cv_controller'];
            $this->data['allEqp'][$i]['date'] = substr($data_all_eqp[$i]['record_date'],0,10);
		}
		
		if ($cv_id != FALSE){
            $this->data['cv_info'] = $this->info_model->get_allEqp($cv_id);
            $this->data['historyinfo'] = $this->info_model->get_historyinfo($cv_id,0,50,false);
            
            $this->data['meters'] = $this->info_model->get_robometers($cv_id);
            foreach($this->data['meters'] as $key=>$value){
                $this->data['meters'][$key]['name']=$this->meterslist[$key];
                $this->data['meters'][$key]['unit']=$this->meterunit[$key];
            }
			$this->data['allAlarm']= $this->info_model->get_allAlarm($cv_id);
			$this->data['cv_id'] = $cv_id;
		}
		
		$this->load->view('templates/header', $this->data);
		$this->load->view('admin/historyinfo', $this->data);
		$this->load->view('templates/footer');
	}
	public function infoset(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }

        $this->data['alarmcode']=$this->info_model->get_alarmcode();
		$this->load->view('templates/header');
		$this->load->view('admin/infoset',$this->data);
		$this->load->view('templates/footer');
	}
	public function userset(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }

		$this->data['passwd_ch'] = $this->encrypt->encode('passwdchange');
		$this->data['logo_update'] = $this->encrypt->encode('upload_file');
		$this->data['logo_change'] = $this->encrypt->encode('change_logo');
		$this->data['add_user'] = $this->encrypt->encode('add_user');
		$this->data['edit_user'] = $this->encrypt->encode('edit_user');
		$this->data['del_user'] = $this->encrypt->encode('del_user');
		
        $this->load->view('templates/header');
		
		$this->data['domain_user']=$this->info_model->get_admininfo($this->session->userdata('admin_id'));
        switch($this->session->userdata('admin_level')){
            case 0:
		        $this->load->view('admin/userset0',$this->data);
                break;
            case 1:
		        $this->load->view('admin/userset1',$this->data);
                break;
            case 2:
		        $this->load->view('admin/userset2',$this->data);
                break;
            case 99:
		        $this->load->view('admin/userset2',$this->data);
                break;
            default:
		        $this->load->view('admin/userset2',$this->data);
                break;
        }
		$this->load->view('templates/footer');
	}
	
	public function passwdchange(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
	
        $username=$this->session->userdata('username');//$_POST['password_old'];
		$passwd_old=md5($_POST['passwd_old']);
		$passwd_new=md5($_POST['passwd_new1']);
		
		$query = $this->db->get_where( 'admin_tbl', array(
                            'admin_name' => $username   
                    ), 1, 0 );  
					
		if(FALSE == $query->result ()){
			echo 1;
			return;
		}
		
		foreach ( $query->result () as $row ) {  
			if($row->admin_passwd == $passwd_old){
				$this->db->update('admin_tbl',array('admin_passwd' => $passwd_new),array('admin_name' => $username));
				echo 0;
				return;
			}
        }
        echo 1;
        return;
	}
	
	public function upload_file()
	{
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
        
		$status = "";
		$msg = "";
		$file_element_name = 'userfile';
		$username=$this->session->userdata('username');
		
		/*if (empty($_POST['title']))
		{
			//$status = "error";
			$msg = "Please enter a title";
		}*/
	 
		if ($status != "error")
		{
			if (!file_exists('./uploads/'.$username)){
				mkdir('./uploads/'.$username);
			}

			$config['upload_path'] = './uploads/'.$username;
			$config['allowed_types'] = 'png';//'gif|jpg|png|doc|txt';
			$config['max_size']  = 1024 * 8;
			//$config['encrypt_name'] = TRUE;
			$config['overwrite'] = TRUE;
			$config['file_name'] = "logo.png";

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload($file_element_name))
			{
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
			}
			else
			{
				$data = $this->upload->data();
				/*$file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
				if($file_id)
				{
				$status = "success";
				$msg = "File successfully uploaded";
				}
				else
				{
				unlink($data['full_path']);
				$status = "error";
				$msg = "Something went wrong when saving the file, please try again.";
				}*/
			}
			//@unlink($_FILES[$file_element_name]);
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	
	public function add_user(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
		$info['admin_name'] 	= $_POST['newuser_name'];
		$info['admin_passwd'] 	= md5($_POST['newuser_passwd']);
		
		if ($_POST['newuser_level'] == "admin"){
			$info['admin_level'] =1;
		}else if ($_POST['newuser_level'] == "user"){
			$info['admin_level'] =2;
		}else{
			echo "Illigill admin level";
			return;
		}
		$info['admin_factory'] 	= $_POST['newuser_factory'];
		$info['admin_phone'] 	= $_POST['newuser_phone'];
		$info['admin_addr'] 	= $_POST['newuser_addr'];
		$info['admin_remarks'] 	= $_POST['newuser_remarks'];

        $info['create_date']   = date("Y-m-d h:i:sa");
		$info['admin_domain'] 	= $this->session->userdata['admin_id'];
		$this->info_model->add_user($info);
		echo 0;
		return;
	}
	
	public function edit_user(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
		if ($_POST['editser_passwd'] == "1"){
			$info['admin_passwd'] = md5(123456);
		}
		
		if ($_POST['edituser_level'] == "admin"){
			$info['admin_level'] =1;
		}else{
			$info['admin_level'] =2;
		}
		$info['admin_factory'] 	= $_POST['edituser_factory'];
		$info['admin_phone'] 	= $_POST['edituser_phone'];
		$info['admin_addr'] 	= $_POST['edituser_addr'];
		$info['admin_remarks'] 	= $_POST['edituser_remarks'];

		$this->info_model->edit_user($info,$_POST['edituser_name']);
		echo 0;
		return;
	}
	
	public function del_user(){
        
        if(FALSE == $this->session->userdata('username')){
            die("请登陆！");
        }
	
		$name = $_POST['user_name'];
		$this->info_model->del_user($name);
		echo 0;
		return;
	}
}
?>
