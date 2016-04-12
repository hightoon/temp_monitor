<?php

class Ajax_setslist extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('compair_model');
		$this->load->helper('url');
	}

	public function setslist(){
		$data= $this->compair_model->get_news();

		if (empty($data))
		{
			show_404();
		}

		foreach($data as $item){
			echo "cv_id=".$item['cv_id'].";";
			echo "cur_loc=北京;";
			echo "cur_state=".$item['isOnLine'].";";
			echo "acc_time=".$item['acc_time'].";";
			echo "load_time=".$item['load_time'].";";
			echo "#";
		}
	}
	
	public function delDevice(){
	
		$device_id = $_POST['device_id'];
		
		$this->compair_model->delDevice($device_id);
		
		echo 1;
		return;
	}
	
	public function editDevice(){
		
		//$this->db->where('cv_id', $_POST['cv_id']);
		//$this->db->update('cv_info_tbl', $data); 
		echo 1;
		return;
	}
	
	public function addDevice(){
		
		$data = array(
		   'cv_id' => $_POST['cv_id'],
		   'cv_function' => $_POST['cv_function'],
		   'cv_factory' => $_POST['cv_factory'],
		   'isOnLine' => 0,
		   'record_date' => date('Y-m-d H:i:s')
		);

		//$this->db->insert('cv_info_tbl', $data); 
	}
	
	public function allEqp(){
		$data= $this->compair_model->get_allEqp();

		if (empty($data))
		{
			show_404();
		}

		foreach($data as $item){
			echo "cv_id=".$item['cv_id'].";";
			echo "cv_function=".$item['cv_function'].";";
			echo "record_date=".$item['record_date'].";";
			echo "#";
		}
	}

	public function saveMaintainRemark(){
		$maintainnamelist=array(
			'youguo_m'=>'油滤器',
			'youfen_m'=>'油分器',
			'kongqi_m'=>'空滤器',
			'dianji_m'=>'润滑油',
			'youzhi_m'=>'润滑脂'
		);
		
		$type = "";
		foreach($maintainnamelist as $key=>$value){
			if($_POST['item'] == $value){
				$type = $key;
			}
		}
		
		$ret = $this->compair_model->set_robomaintainremark($_POST['cv_id'],$type,$_POST['remark']);
		echo $ret;
		return;
	}
}
?>