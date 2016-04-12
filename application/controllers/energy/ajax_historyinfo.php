<?php

class Ajax_historyinfo extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('energy_model');
		$this->load->helper('url');
        $this->load->library('excel');
        $this->load->helper('download');
	}

	public function energyAnalysis(){
		
        if($_POST['date_start'] < $_POST['date_end']){
            $info['start']   = $_POST['date_start'];
            $info['end']     = $_POST['date_end'];
        }else{
            $info['start']   = $_POST['date_end'];
            $info['end']     = $_POST['date_start'];
        }
        
        //$info['topTime1'] = $_POST['top_time1'];
        //$info['topTime2'] = $_POST['top_time2'];
        //$info['topPrice'] = $_POST['top_price'];
        $info['energyPrice'] = $_POST['energy_price'];
        $info['ratedPower'] = $_POST['rated_power'];
        $info['ratedOut'] = $_POST['rated_out'];
        
        $ret = $this->energy_model->energyAnalysis($info,$_POST['device_id']);
        
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
        
        $ret = $this->energy_model->getHistoryData($_POST['device_id'],$_POST['dataId'],$day);
        
        //if(-1 != $ret['ret'] ){
            echo json_encode(array($ret));
        //}
    }
    
    public function std_class_object_to_array($stdclassobject)
    {
        $_array = is_object($stdclassobject) ? get_object_vars($stdclassobject) : $stdclassobject;
        foreach ($_array as $key => $value) {
            $value = (is_array($value) || is_object($value)) ? $this->std_class_object_to_array($value) : $value;
            $array[$key] = $value;
        }
        return $array;
    }
    
    public function dataExport(){
        $datatmp = $_POST['data'];
        $dateRange0 = $_POST['startdate'];
        $dateRange1 = $_POST['enddate'];
        $dataobj = json_decode($datatmp);
        $data = $this->std_class_object_to_array($dataobj);
        $content="";
        $array = array();
        $array[] = '选择时间范围：'.$dateRange0." 至 ".$dateRange1."\r\n";
        $array[] = '选择时间长度：'.round($data[0]['time'],2)."小时";
        $array[] = '设备工作时间:'.round($data[0]['totalTime'],2)."小时";
        $array[] = '设备停机时间:'.round($data[0]['time'] - $data[0]['totalTime'],2)."小时";
        $array[] = '设备总产气量:'.round($data[0]['totalGas'],2)."m³"."\r\n";
        
        $array[] = '设备满载时间:'.round($data[0]['loadTime'],2)."小时";
        $array[] = '设备空载时间:'.round($data[0]['unloadTime'],2)."小时";
        
        if(0!=$data[0]['totalPower']){
            $array[] = '满载率:'.round(100*$data[0]['loadTime']/$data[0]['totalTime'],2)."%";
            $array[] = '空载率:'.round(100*$data[0]['unloadTime']/$data[0]['totalTime'],2)."%"."\r\n";
        }else{
            $array[] = '满载率:'.'无';
            $array[] = '空载率:'.'无'."\r\n";
        }
        
        $array[] = '设备加载次数:'.round($data[0]['loadCount'],2)."次";
        $array[] = '设备卸载次数:'.round($data[0]['unloadCount'],2)."次"."\r\n";
        
        $array[] = '设备总耗电:'.round($data[0]['totalPower'],2)."Kwh";
        $array[] = '设备满载耗电:'.round($data[0]['loadPower'],2)."Kwh";
        $array[] = '设备空载耗电:'.round($data[0]['unloadPower'],2)."Kwh";
        
        if(0!=$data[0]['totalPower']){
            $array[] = '满载耗电占比:'.round(100*$data[0]['loadPower']/$data[0]['totalPower'],2)."%";
            $array[] = '空载耗电占比:'.round(100*$data[0]['unloadPower']/$data[0]['totalPower'],2)."%"."\r\n";
        }else{
            $array[] = '满载耗电占比:'.'无';
            $array[] = '空载耗电占比:'.'无'."\r\n";
        }
        
        $array[] = '排气压力最大值:'.round($data[0]['pressHigh'],2)."bar";
        $array[] = '排气压力最小值:'.round($data[0]['pressLow'],2)."bar";
        $array[] = '排气压力平均值:'.round($data[0]['pressAve'],2)."bar"."\r\n";
        
        $array[] = '电流最大值:'.round($data[0]['currentHigh'],2)."A";
        $array[] = '电流最小值:'.round($data[0]['currentLow'],2)."A";
        $array[] = '电流平均值:'.round($data[0]['currentAve'],2)."A"."\r\n";
        
        $array[] = '温度最大值:'.round($data[0]['tempHigh'],2)."℃";
        $array[] = '温度最小值:'.round($data[0]['tempLow'],2)."℃";
        $array[] = '温度平均值:'.round($data[0]['tempAve'],2)."℃"."\r\n";
        
        $array[] = '功率最大值:'.round($data[0]['powerHigh'],2)."Kw";
        $array[] = '功率最小值:'.round($data[0]['powerLow'],2)."Kw";
        $array[] = '功率平均值:'.round($data[0]['powerAve'],2)."Kw"."\r\n";
        
        for($i=0;$i<count($array);$i++){
            $content .=$array[$i]."\r\n";
        }
        //file_put_contents("img/1.txt",$content);
        force_download(date("Y-m-d H:i:s")."节能诊断数据.txt", $content);
        echo 0;
    }
    public function dataExport1(){
    
        //$data = $_POST['string'];
        require_once(APPPATH . 'config/pdf_config.php');  
        $this->load->library('tcpdf/tcpdf');  
          
        // set document information  
        $this->tcpdf->SetCreator(PDF_CREATOR);  
        $this->tcpdf->SetAuthor('aaron');  
        $this->tcpdf->SetTitle('test');  
        $this->tcpdf->SetSubject('lvpad');  
        $this->tcpdf->SetKeywords('lvpad, china tour, guide');  
          
        // set default header data  
        //$this->tcpdf->SetHeaderData('logo.png', PDF_HEADER_LOGO_WIDTH, 'lvpad order', '');  
          
        // set header and footer fonts  
        $this->tcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $this->tcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
          
        // set default monospaced font  
        $this->tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);  
        // set margins  
        $this->tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);  
        $this->tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);  
        $this->tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
          
        // set auto page breaks  
        $this->tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);  
          
        // set image scale factor  
        //$this->tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
          
        //set some language-dependent strings (optional)  
        $l['a_meta_charset'] = 'UTF-8';  
        $l['a_meta_dir'] = 'ltr';  
        $l['a_meta_language'] = 'cn';  
  
        // TRANSLATIONS --------------------------------------  
        $l['w_page'] = 'page';  
          
        $this->tcpdf->setLanguageArray($l);  
        // 设置字体，如果要支持中文 则选择支持中文的字体  
        //$fontname = $this->tcpdf->addTTFfont('dist/font/Droid_Sans_Fallback.ttf', 'TrueTypeUnicode', '', 32);    
  
        //$this->tcpdf->SetFont($fontname, '', 10);  
        // add a page  
        $this->tcpdf->AddPage();  
        //$this->tcpdf->setJPEGQuality(75);  
        // Image example with resizing  
        //$this->tcpdf->Image('images/pdf.jpg', 10, 20, 190, 60, 'JPG', 'http://lvpad.com', '', false, 150, '', false, false, 1, false, false, false);  
  
        // output the HTML content  
        $this->tcpdf->writeHTML("teststring", true, false, true, false, '');  
        // reset pointer to the last page  
        $this->tcpdf->lastPage();  
        //Close and output PDF document  
        $this->tcpdf->Output('test' . '.pdf', 'I');
        
        
        //print_r($data);
        /*$titles = array('项目', '数据分析结果');
        $array = array();
        $array[0] = array('设备工作时间',round($data[0]['totalTime'],2));
        $array[1] = array('设备停机时间',round($data[0]['time'] - $data[0]['totalTime'],2));
        $array[2] = array('设备总产气量',round($data[0]['totalGas'],2));
        
        $array[3] = array('设备满载时间',round($data[0]['loadTime'],2));
        $array[4] = array('设备空载时间',round($data[0]['unloadTime'],2));
        
        if(0!=$data[0]['totalPower']){
            $array[5] = array('满载率',round(100*$data[0]['loadTime']/$data[0]['totalTime'],2));
            $array[6] = array('空载率',round(100*$data[0]['unloadTime']/$data[0]['totalTime'],2));
        }else{
            $array[5] = array('满载率','无');
            $array[6] = array('空载率','无');
        }
        
        $array[7] = array('设备加载次数',round($data[0]['loadCount'],2));
        $array[8] = array('设备卸载次数',round($data[0]['unloadCount'],2));
        
        $array[9] = array('设备总耗电',round($data[0]['totalPower'],2));
        $array[10] = array('设备满载耗电',round($data[0]['loadPower'],2));
        $array[11] = array('设备空载耗电',round($data[0]['unloadPower'],2));
        
        if(0!=$data[0]['totalPower']){
            $array[12] = array('满载耗电占比',round(100*$data[0]['loadPower']/$data[0]['totalPower'],2));
            $array[13] = array('空载耗电占比',round(100*$data[0]['unloadPower']/$data[0]['totalPower'],2));
        }else{
            $array[12] = array('满载耗电占比','无');
            $array[13] = array('空载耗电占比','无');
        }
        
        $array[14] = array('排气压力最大值',round($data[0]['pressHigh'],2));
        $array[15] = array('排气压力最小值',round($data[0]['pressLow'],2));
        $array[16] = array('排气压力平均值',round($data[0]['pressAve'],2));
        
        $array[17] = array('电流最大值',round($data[0]['currentHigh'],2));
        $array[18] = array('电流最小值',round($data[0]['currentLow'],2));
        $array[19] = array('电流平均值',round($data[0]['currentAve'],2));
        
        $array[20] = array('温度最大值',round($data[0]['tempHigh'],2));
        $array[21] = array('温度最小值',round($data[0]['tempLow'],2));
        $array[22] = array('温度平均值',round($data[0]['tempAve'],2));
        
        $array[23] = array('功率最大值',round($data[0]['powerHigh'],2));
        $array[24] = array('功率最小值',round($data[0]['powerLow'],2));
        $array[25] = array('功率平均值',round($data[0]['powerAve'],2));*/
        //$this->excel->make_from_array($titles, $array);
        echo 0;
    }
}
?>
