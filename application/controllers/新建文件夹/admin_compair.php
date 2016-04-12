<?php
 
class Admin_compair extends CI_Controller{

    var $data;
	var $num = 1000;
	var $totalnum = 0;
    
    public function __construct(){
        parent::__construct();
        $this->load->model('compair_model');
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
            'admin_dir'    => 'admin_'.$this->session->userdata('path'),
        );
    }
    
    private function LoginfoCheck(){
        
        if(FALSE == $this->session->userdata('name')){
            
            echo "请登录,正在跳转....";
            header("refresh:3;url=http://10.13.71.176/civ");
            exit;
        }
    }
    public function index(){
        
        $this->LoginfoCheck();
        
        $url_encrypt = $_SERVER['REQUEST_URI'];
        $url_encrypt = substr($url_encrypt,strlen("/cim/index.php/".$this->data['admin_dir']."/index/"));
  
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
        
        $this->data['allDevice']= $this->compair_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);    
            $this->data['allDevice'][$i]['GPS_lat'] = 3015.2;
            $this->data['allDevice'][$i]['GPS_long'] = 12007.2000;        
        }
        
        //print_r($this->data['allDevice']);
        $allOnlineDevice = $this->compair_model->getAllOnlineDevice();/**/
        $this->data['onlineDeviceNum'] = $allOnlineDevice[1];
        for($i=0; $i<$this->data['onlineDeviceNum']; $i++){
            $this->data['allOnlineDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.($allOnlineDevice[2+$i]+8600000));
			$this->data['allOnlineDevice'][$i]['device_id'] = $allOnlineDevice[2+$i]+8600000;
        }
        
        $this->data['allAlarm'] = array();//$this->compair_model->getAllAlarm();/**/
        $this->data['alarmNum'] = count($this->data['allAlarm']);
        
        $this->data['allRemark'] = $this->compair_model->getAllRemark();/**/
        $this->data['remarkNum'] = count($this->data['allRemark']);
        
        $this->data['allMaintain'] = array();//$this->compair_model->getAllDevice();/**/
        $this->data['maintainNum'] = count($this->data['allMaintain']);
        
        $this->load->view('templates/header');
        $this->load->view($this->data['admin_dir'].'/index',$this->data);
        $this->load->view('templates/footer');
    }
    public function setslist(){
        
        $this->LoginfoCheck();
        
        $this->data['allDevice']= $this->compair_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);
            $this->data['allDevice'][$i]['GPS_lat'] = 3015.2;
            $this->data['allDevice'][$i]['GPS_long'] = 12007.2000;         
        }
        
        foreach($this->data['allDevice'] as $device){
            
            $this->data['allWarning']= $this->compair_model->getAllAlarm($device['device_id']);
            $this->data['allMaintain']= $this->compair_model->getAllMaintain();  
        }
        
        $this->load->view('templates/header',$this->data);
        $this->load->view($this->data['admin_dir'].'/setslist',$this->data);
        $this->load->view('templates/footer');
    }
    public function basicinfo($device_id=FALSE){
        
        $this->LoginfoCheck();
    
        if($device_id!=FALSE){
            
            $this->data['allDevice']= $this->compair_model->getAllDevice();
            $this->data['deviceNum'] = count($this->data['allDevice']);
            for($i=0; $i<$this->data['deviceNum']; $i++){
                $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);            
            }
            $this->data['maintain'] = $this->compair_model->getAllMaintain($device_id);
			
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

            //$this->data['device_id'] = $this->data['news_item']['device_id'];
                
            //$temp = floor($this->data['news_item']['GPS_lat']/100);
            //$this->data['news_item']['GPS_lat'] = $temp + ($this->data['news_item']['GPS_lat'] - $temp*100)/60;
            //this->data['news_item']['GPS_lat'] = round($this->data['news_item']['GPS_lat'] ,4);
            
            //$temp = floor($this->data['news_item']['GPS_long']/100);
            //$this->data['news_item']['GPS_long'] = $temp + ($this->data['news_item']['GPS_long'] - $temp*100)/60;
            //$this->data['news_item']['GPS_long'] = round($this->data['news_item']['GPS_long'] ,4);
            
            $this->data['device_id'] = $device_id;
        }
        
        $this->data['allDevice']= $this->compair_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);            
        }

        $this->load->view('templates/header', $this->data);
        $this->load->view($this->data['admin_dir'].'/basicinfo', $this->data);
        $this->load->view('templates/footer');
    }
    public function realtimeinfo($device_id = FALSE){
        
        $this->LoginfoCheck();
        
        if($this->session->userdata('admin_level') == 99){
            
            if($device_id != FALSE){
                $this->data['meters'] = $this->user_compair_model->get_robometers($device_id);
                $this->data['device_id'] = $device_id;
            }
            
            for($i = 0; $i < 5; $i++){
                $this->data['onlineEqp'][$i]['num'] = 5000+$i;
                $this->data['onlineEqp'][$i]['href'] = $this->encrypt->encode('realtimeinfo/'.$this->data['onlineEqp'][$i]['num']);
            }
            
            $this->load->view('templates/header', $this->data);
            $this->load->view($this->data['admin_dir'].'/realtimeinfo_demo', $this->data);
            $this->load->view('templates/footer');
            return;
        }
        
        $this->data['allDevice']= $this->compair_model->getAllDevice();
        $allOnlineDevice = $this->compair_model->getAllOnlineDevice();/**/
        $this->data['onlineDeviceNum'] = $allOnlineDevice[1];
        for($i=0; $i<$this->data['onlineDeviceNum']; $i++){
            $this->data['allOnlineDevice'][$i]['href'] = $this->encrypt->encode('realtimeinfo/'.($allOnlineDevice[2+$i]+8600000));
			$this->data['allOnlineDevice'][$i]['device_id'] = $allOnlineDevice[2+$i]+8600000;
        }
        
        if ($device_id != FALSE){
			
			$deviceInfo = $this->compair_model->getAllDevice($device_id);

            $this->data['deviceSet'] = $this->compair_model->getDeviceSet($deviceInfo[0]['device_type'],$deviceInfo[0]['user_id']);
			
            $isOnline = $this->compair_model->getDeviceOnlineStatus($device_id - 8600000);

            if(0 ==  $isOnline){
                $this->data['text'][0]['type'] = "设备当前不在线";
                $this->data['text'][0]['color'] = "rgb(158,0,0)";
                $this->data['text'][0]['detail'] = "当前设备不在线";
                $this->data['text'][0]['date'] = date('Y-m-d H:i:s');
                
                $this->data['device_id'] = $device_id;
                /*$onlineEqp = $this->compair_model->get_allEqp_online();*/
                
                $this->load->view('templates/header', $this->data);
                $this->load->view($this->data['admin_dir'].'/realtimeselect', $this->data);
                $this->load->view('templates/footer');
                return;
            }

            $this->data['device_id'] = $device_id;//$this->data['realtimeinfo']['device_id'];
			$this->data['user_id'] = $deviceInfo[0]['user_id'];
			$this->data['device_type'] = $deviceInfo[0]['device_type'];
        }
        
        $this->load->view('templates/header', $this->data);
        $this->load->view($this->data['admin_dir'].'/realtimeinfo', $this->data);
        $this->load->view('templates/footer');
    }
    public function historyinfo($device_id = FALSE){
        
        $this->LoginfoCheck();
        
        $this->data['allDevice']= $this->compair_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('historyinfo/'.$this->data['allDevice'][$i]['device_id']);            
        }
        
        if ($device_id != FALSE){
			
			$deviceInfo = $this->compair_model->getAllDevice($device_id);
            
            $this->data['deviceSet'] = $this->compair_model->getDeviceSet($deviceInfo[0]['device_type'],$deviceInfo[0]['user_id']);
			$num = 100;
			$this->data['allHistoryInfo'] = $this->compair_model->getAllHistoryInfo($device_id,$num);
            $this->data['device_id'] = $device_id;
        }
        
        $this->load->view('templates/header', $this->data);
        $this->load->view($this->data['admin_dir'].'/historyinfo', $this->data);
        $this->load->view('templates/footer');
    }
    public function infoset(){
        
        $this->LoginfoCheck();
		
		$this->data['deviceSet'] = $this->compair_model->getDeviceSet();
        
        $this->load->view('templates/header');
        $this->load->view($this->data['admin_dir'].'/infoset',$this->data);
        $this->load->view('templates/footer');
    }
    public function userset(){
        
        $this->LoginfoCheck();

        $this->data['passwd_ch'] = $this->encrypt->encode('passwdchange');
        $this->data['logo_update'] = $this->encrypt->encode('upload_file');
        $this->data['logo_change'] = $this->encrypt->encode('change_logo');
        $this->data['add_user'] = $this->encrypt->encode('add_user');
        $this->data['edit_user'] = $this->encrypt->encode('edit_user');
        $this->data['del_user'] = $this->encrypt->encode('del_user');
        
        $this->load->view('templates/header');
        $this->load->view($this->data['admin_dir'].'/userset0',$this->data);
        $this->load->view('templates/footer');
    }
    
    public function passwdchange(){
        
        $this->LoginfoCheck();
    
        $name=$this->session->userdata('name');//$_POST['password_old'];
        $passwd_old=md5($_POST['passwd_old']);
        $passwd_new=md5($_POST['passwd_new1']);
        
        $query = $this->db->get_where( 'admin_tbl', array(
                            'admin_name' => $name   
                    ), 1, 0 );  
                    
        if(FALSE == $query->result ()){
            echo 1;
            return;
        }
        
        foreach ( $query->result () as $row ) {  
            if($row->admin_passwd == $passwd_old){
                $this->db->update('admin_tbl',array('admin_passwd' => $passwd_new),array('admin_name' => $name));
                echo 0;
                return;
            }
        }
        echo 1;
        return;
    }
    
    public function upload_file()
    {
        
        $this->LoginfoCheck();
        
        $status = "";
        $msg = "";
        $file_element_name = 'userfile';
        $name=$this->session->userdata('name');
        
        /*if (empty($_POST['title']))
        {
            //$status = "error";
            $msg = "Please enter a title";
        }*/
     
        if ($status != "error")
        {
            if (!file_exists('./uploads/'.$name)){
                mkdir('./uploads/'.$name);
            }

            $config['upload_path'] = './uploads/'.$name;
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
    
    public function change_logo(){
        
        $this->LoginfoCheck();
    
        $name=$this->session->userdata('name');
        
        if (!file_exists('./img/'.$name)){
            mkdir('./img/'.$name);
        }
        copy('./uploads/'.$name.'/logo.png','./img/'.$name.'/logo.png');
        echo 0;
        return;
    }
    
    public function add_user(){
        
        $this->LoginfoCheck();
        $info['admin_name']     = $_POST['newuser_name'];
        $info['admin_passwd']   = md5($_POST['newuser_passwd']);
        
        if ($_POST['newuser_level'] == "admin"){
            $info['admin_level'] =1;
        }else if ($_POST['newuser_level'] == "user"){
            $info['admin_level'] =2;
        }else{
            echo "Illigill admin level";
            return;
        }
        $info['admin_factory']  = $_POST['newuser_factory'];
        $info['admin_phone']    = $_POST['newuser_phone'];
        $info['admin_addr']     = $_POST['newuser_addr'];
        $info['admin_remarks']  = $_POST['newuser_remarks'];

        $info['create_date']   = date("Y-m-d h:i:sa");
        $info['admin_domain']   = $this->session->userdata['admin_id'];
        $this->user_compair_model->add_user($info);
        echo 0;
        return;
    }
    
    public function edit_user(){
        
        $this->LoginfoCheck();
        if ($_POST['editser_passwd'] == "1"){
            $info['admin_passwd'] = md5(123456);
        }
        
        if ($_POST['edituser_level'] == "admin"){
            $info['admin_level'] =1;
        }else{
            $info['admin_level'] =2;
        }
        $info['admin_factory']  = $_POST['edituser_factory'];
        $info['admin_phone']    = $_POST['edituser_phone'];
        $info['admin_addr']     = $_POST['edituser_addr'];
        $info['admin_remarks']  = $_POST['edituser_remarks'];

        $this->user_compair_model->edit_user($info,$_POST['edituser_name']);
        echo 0;
        return;
    }
    
    public function del_user(){
        
        $this->LoginfoCheck();
    
        $name = $_POST['user_name'];
        $this->user_compair_model->del_user($name);
        echo 0;
        return;
    }
}
?>
