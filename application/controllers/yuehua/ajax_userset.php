<?php

class Ajax_userset extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('yuehua_model');
		$this->load->helper('url');
	}

	public function passwdcheck(){
		$username=$_POST['name'];
		$passwd=md5($_POST['passwd']);

		$check = $this->yuehua_model->checkPasswd($username,$passwd);
					
		if(FALSE == $check){
			echo 0;
			return;
		}else{
			echo 1;
			return;
		}
	}
}
?>