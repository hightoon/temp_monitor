<?php

class Ajax_index extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->model('info_model');
                $this->load->model('robo_user_model');
		$this->load->helper('url');
		$this->load->library('session');  
	}

	public function addRemark(){
		
		$name = $_POST['name'];
		$remark = $_POST['remark'];
		$admin_id=$this->session->userdata['admin_id'];
		
		$ret = $this->info_model->add_remark($name,$admin_id,$remark);
		echo $ret;
		return;
	}

	public function delRemark(){
		
		//$name = $_POST['name'];
		//$remark = $_POST['remark'];
		$date = $_POST['date'];
		$admin_id=$this->session->userdata['admin_id'];
		
		$ret = $this->info_model->del_remark($admin_id,$date);
		echo $ret;
		return;
	}
    
    public function getAllIp(){
        
        if(isset($_POST['device_id']) && ($_POST['device_id'] != "")){
    
            $ret = $this->robo_user_model->getAllIp($_POST['device_id'],$_POST['device_id']);
        
        }else{
    
            $ret = $this->robo_user_model->getAllIp(8615000,8615500);
        }
        
        echo json_encode($ret);
        
        return;
    }
        
}
?>