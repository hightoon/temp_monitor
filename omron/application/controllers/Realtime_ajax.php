<?php
class Realtime_ajax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->CI = &get_instance();//
		$this->CI->load->database();//
        $this->load->model('elevator_model');
	}

	public function getItem(){
		
		$array = array(0=>array(0=>array("name"=>"振动频率","unit" => "hz"),
								1=>array("name"=>"振动幅度","unit" => "m/s²"),
								2=>array("name"=>"加速度","unit" => "m/s²"),
								3=>array("name"=>"速度","unit" => "m/s")),
					   1=>array(0=>array("name"=>"时间1","unit" => "H"),1=>array("name"=>"时间2","unit" => "H")),); 
		
		echo (json_encode($array));
	}
	
	public function getRealtimeData1(){
		/*$array = array(0,12,23,34,278,12,0,12,23,34,278,12,0,12,23,34,278,12); 
		
		for($i=0;$i<count($array);$i++){
			$array[$i]=rand(0,300);
		}*/
		$array = $this->elevator_model->getrealtimeinfo(8600404);
		echo (json_encode($array));
	}
	
	public function getRealtimeData2(){
		$array = array(0,1,2,3,4,5,0,1,2,3,4,5,0,1,2,3,4,5); 
		
		for($i=0;$i<count($array);$i++){
			$array[$i]=rand(0,100);
		}
		echo (json_encode($array));
	}
	
}