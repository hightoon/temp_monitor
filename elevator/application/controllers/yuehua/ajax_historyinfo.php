<?php

class Ajax_historyinfo extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('yuehua_model');
		$this->load->helper('url');
	}

	public function energyAnalysis(){
		
        if($_POST['date_start'] < $_POST['date_end']){
            $day['start']   = $_POST['date_start'];
            $day['end']     = $_POST['date_end'];
        }else{
            $day['start']   = $_POST['date_end'];
            $day['end']     = $_POST['date_start'];
        }
        
        $ret = $this->yuehua_model->energyAnalysis($day,$_POST['device_id']);
        
        if(-1 != $ret['ret'] ){
            echo json_encode(array($ret)); 
            //echo $ret; 
        }
	}
    
    public function getHistoryData(){
        
        $day=FALSE;
        
        if(isset($_POST['dateStart'])){
            $day['start'] = $_POST['dateStart'];
        }
        if(isset($_POST['dateEnd'])){
            $day['end'] = $_POST['dateEnd'];
        }
        
        $ret = $this->yuehua_model->getHistoryData($_POST['device_id'],$_POST['dataId'],$day);
        
        if($_POST['device_id']==8605001 && $_POST['dataId']=="gas_pressure"){
            for($i=0;$i<count($ret);$i++){
                $ret[$i]['gas_pressure']=$ret[$i]['gas_pressure']*10;
            }
        }
        
        //if(-1 != $ret['ret'] ){
            echo json_encode(array($ret));
        //}
    }
}
?>
