<?php
 
class Admin extends CI_Controller{

    var $data;
	var $num = 1000;
	var $totalnum = 0;
    
    public function __construct(){
        parent::__construct();
        $this->load->model('energy_model');
        $this->load->helper(array(
            'form',  
            'url'   
        )); 
        $this->load->library('session');  
        $this->load->library('encrypt');
        
        $this->data = array(
            'sysb_encrypt' => $this->encrypt->encode('setslist'),
            'dtsb_encrypt' => $this->encrypt->encode('basicinfo'),
            'ssxx_encrypt' => $this->encrypt->encode('realtimeinfo'),
            'lsxx_encrypt' => $this->encrypt->encode('historyinfo'),
            'cssz_encrypt' => $this->encrypt->encode('infoset'),
            'zhsz_encrypt' => $this->encrypt->encode('userset'),
            'sbzw_encrypt' => $this->encrypt->encode('setsgroup'),
            'admin_dir'    => $this->session->userdata('path'),
        );
    }
    
    private function getBrowser(){
        if(empty($_SERVER['HTTP_USER_AGENT'])){
            header("Location:http://www.robosnet.com/browser.php");
        }
        if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'IE')){
            header("Location:http://www.robosnet.com/browser.php");
        }
        return "OK";
    }
    
    private function LoginfoCheck(){
        
        $this->getBrowser();
        if(FALSE == $this->session->userdata('name')){
            
            $str="timeout";
            header("refresh:2;url=http://www.robosnet.com/js_cookie_check.php?info=".$str);
            exit;
        }
    }
    public function index(){

        $this->LoginfoCheck();
        
        $url_encrypt = $_SERVER['REQUEST_URI'];
        $url_encrypt = substr($url_encrypt,strlen("/index.php/".$this->data['admin_dir'].'/admin/index/'));
  
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
                case "morefunc":
                    $this->morefunc($segment[1]);
                    return;
                    break;
                case "exportreport":
                    $this->exportreport($segment[1]);
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

        $this->data['allDevice']= $this->energy_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);    
            $this->data['allDevice'][$i]['GPS_lat'] = 3015.2;
            $this->data['allDevice'][$i]['GPS_long'] = 12007.2000;        
        }
        
        //print_r($this->data['allDevice']);
        $allOnlineDevice = $this->energy_model->getAllOnlineDevice();/**/
        $this->data['onlineDeviceNum'] = 0;
        for($i=0; $i<$allOnlineDevice[0]; $i++){
			if($allOnlineDevice[$i+2] > 510 && $allOnlineDevice[$i+2] < 520){
				$this->data['allOnlineDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.($allOnlineDevice[2+$i]+8600000));
				$this->data['allOnlineDevice'][$i]['device_id'] = $allOnlineDevice[2+$i]+8600000;
				$this->data['onlineDeviceNum']++;
			}
        }
        
        $this->data['allAlarm'] = array();//$this->energy_model->getAllAlarm();/**/
        $this->data['alarmNum'] = count($this->data['allAlarm']);
        
        $this->data['allRemark'] = $this->energy_model->getAllRemark();/**/
        $this->data['remarkNum'] = count($this->data['allRemark']);

        $this->load->view('templates/header');
        $this->load->view($this->data['admin_dir'].'/index',$this->data);
        $this->load->view('templates/footer');
    }
    public function setslist(){
        
        $this->LoginfoCheck();
        
        $this->data['allDevice']= $this->energy_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);
            $this->data['allDevice'][$i]['GPS_lat'] = 3015.2;
            $this->data['allDevice'][$i]['GPS_long'] = 12007.2000;         
        }
        
        foreach($this->data['allDevice'] as $device){
            
            $this->data['allWarning']= $this->energy_model->getAllAlarm($device['device_id']);
            //$this->data['allMaintain']= $this->energy_model->getAllMaintain();  
        }
        
        $this->load->view('templates/header',$this->data);
        $this->load->view($this->data['admin_dir'].'/setslist',$this->data);
        $this->load->view('templates/footer');
    }
    public function basicinfo($device_id=FALSE){
        
        $this->LoginfoCheck();
    
        if($device_id!=FALSE){
            
            $this->data['allDevice']= $this->energy_model->getAllDevice();
            $this->data['deviceNum'] = count($this->data['allDevice']);
            for($i=0; $i<$this->data['deviceNum']; $i++){
                $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$this->data['allDevice'][$i]['device_id']);            
            }
            
            $this->data['device_info'] = $this->energy_model->getAllDevice($device_id);
            
            $this->data['device_id'] = $device_id;
        }
        
        $this->data['allDevice']= $this->energy_model->getAllDevice();
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
                $this->data['meters'] = $this->user_energy_model->get_robometers($device_id);
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
        
        $this->data['allDevice']= $this->energy_model->getAllDevice();
        $allOnlineDevice = $this->energy_model->getAllOnlineDevice();/**/
        $this->data['onlineDeviceNum'] = 0;
        for($i=0; $i<$allOnlineDevice[0]; $i++){
			if($allOnlineDevice[$i+2] > 510 && $allOnlineDevice[$i+2] < 520){
				$this->data['allOnlineDevice'][$i]['href'] = $this->encrypt->encode('realtimeinfo/'.($allOnlineDevice[2+$i]+8600000));
				$this->data['allOnlineDevice'][$i]['device_id'] = $allOnlineDevice[2+$i]+8600000;
				$this->data['onlineDeviceNum']++;
			}
        }
        
        if ($device_id != FALSE){
			
			$deviceInfo = $this->energy_model->getAllDevice($device_id);

            $this->data['deviceSet'] = $this->energy_model->getDeviceSet($deviceInfo['device_type'],$deviceInfo['user_id']);
			
            $isOnline = $this->energy_model->getDeviceOnlineStatus($device_id - 8600000);

            if(0 ==  $isOnline){
                $this->data['text'][0]['type'] = "设备当前不在线";
                $this->data['text'][0]['color'] = "rgb(158,0,0)";
                $this->data['text'][0]['detail'] = "当前设备不在线";
                $this->data['text'][0]['date'] = date('Y-m-d H:i:s');
                
                $this->data['device_id'] = $device_id;
                /*$onlineEqp = $this->energy_model->get_allEqp_online();*/
                
                $this->load->view('templates/header', $this->data);
                $this->load->view($this->data['admin_dir'].'/realtimeselect', $this->data);
                $this->load->view('templates/footer');
                return;
            }

            $this->data['device_id'] = $device_id;//$this->data['realtimeinfo']['device_id'];
			$this->data['user_id'] = $deviceInfo['user_id'];
			$this->data['device_type'] = $deviceInfo['device_type'];
        }
        
        $this->load->view('templates/header', $this->data);
        $this->load->view($this->data['admin_dir'].'/realtimeinfo', $this->data);
        $this->load->view('templates/footer');
    }
    public function historyinfo($device_id = FALSE){
        
        $this->LoginfoCheck();
        
        $this->data['allDevice']= $this->energy_model->getAllDevice();
        $this->data['deviceNum'] = count($this->data['allDevice']);
        for($i=0; $i<$this->data['deviceNum']; $i++){
            $this->data['allDevice'][$i]['href'] = $this->encrypt->encode('historyinfo/'.$this->data['allDevice'][$i]['device_id']);            
        }
        
        if ($device_id != FALSE){
			
			$deviceInfo = $this->energy_model->getAllDevice($device_id);
            
            $this->data['deviceSet'] = $this->energy_model->getDeviceSet($deviceInfo['device_type'],$deviceInfo['user_id']);
			$num = 500;
			$this->data['allHistoryInfo'] = $this->energy_model->getAllHistoryInfo($device_id,$num);
            $this->data['device_id'] = $device_id;
            $this->data['kzgn_encrypt'] = $this->encrypt->encode('morefunc/'.$device_id);    
        }
        
        $this->load->view('templates/header', $this->data);
        $this->load->view($this->data['admin_dir'].'/historyinfo', $this->data);
        $this->load->view('templates/footer');
    }
    public function infoset(){
        
        $this->LoginfoCheck();
		
		$this->data['deviceSet'] = $this->energy_model->getDeviceSet();
        
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
    public function morefunc($device_id = FALSE){
        
        $this->LoginfoCheck();
		
		$this->data['device_id'] = $device_id;
        $this->data['bgdc_encrypt'] = $this->encrypt->encode('exportreport/'.$device_id);
        $this->load->view('templates/header');
        $this->load->view($this->data['admin_dir'].'/morefunc',$this->data);
        $this->load->view('templates/footer');
    }
    public function exportreport($device_id = FALSE){
        
        $this->LoginfoCheck();
        $this->data['Analysisdata'] = $this->energy_model->getAnalysisreport($device_id);
        if ($device_id != FALSE){
			
			$deviceInfo = $this->energy_model->getAllDevice($device_id);
            
            $this->data['deviceSet'] = $this->energy_model->getDeviceSet($deviceInfo['device_type'],$deviceInfo['user_id']);
			$num = 500;
			$this->data['allHistoryInfo'] = $this->energy_model->getAllHistoryInfo($device_id,$num);
            $this->data['device_id'] = $device_id;
            $this->data['kzgn_encrypt'] = $this->encrypt->encode('morefunc/'.$device_id);    
        }
        $this->load->view($this->data['admin_dir'].'/report',$this->data);
    }
    
    private function exportreportOld($device_id = FALSE){
        
        $this->LoginfoCheck();
        
        //$data = $_POST['string'];
        require_once(APPPATH . 'config/pdf_config.php');  
        $this->load->library('tcpdf/tcpdf');  
          
        // set document information  
        $this->tcpdf->SetCreator(PDF_CREATOR);  
        $this->tcpdf->SetAuthor('Hangzhou Thingword Tech. Ltd');  
        $this->tcpdf->SetTitle('能效分析报告');  
        $this->tcpdf->SetSubject('Thingword');  
        $this->tcpdf->SetKeywords('Thingword, Hangzhou, Net of Things');  
          
        // set default header data   
        $this->tcpdf->SetHeaderData('../../img/'.$this->data['admin_dir'].'/logo.png', 30, 'Energy efficiency analysis report', '福州固力工业成套设备有限公司');
          
        // set header and footer fonts  
        //$this->tcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $this->tcpdf->SetHeaderFont(Array('stsongstdlight', '', 11));
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
        $this->tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  

        // print colored table
        $data = $this->energy_model->getAnalysisreport($device_id);
        
        // column titles
        $header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
        
        //$this->tcpdf->ColoredTable($header, $data);
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
        $this->tcpdf->SetFont('stsongstdlight', '', 15);        
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->SetDrawColor(128);
        $this->tcpdf->SetLineWidth(0.5);
        $this->tcpdf->SetCellPaddings(0,0,0,0);
        $this->tcpdf->setCellMargins(0,0,0,0);
        // add a page  
        $this->tcpdf->AddPage(); 
        $this->tcpdf->SetFont('', 'B',30);
        $this->tcpdf->Cell(0, 80, '', 0, 2, 'C', false);
        $this->tcpdf->Cell(0, 10, '设备能效分析报告', 0, 0, 'C', false);
        $this->tcpdf->Ln(10);
        $this->tcpdf->SetFont('', 'B',12);
        $this->tcpdf->Cell(0, 25, '福州固力工业成套设备有限公司', 0, 2, 'C', false);
        $this->tcpdf->Cell(0, 80, '', 0, 2, 'C', false);
        $this->tcpdf->Cell(0, 25, date('Y/m/d'), 0, 2, 'C', false);


        $this->tcpdf->AddPage();  
        //$this->tcpdf->setJPEGQuality(75);  
        // Image example with resizing  
        //$this->tcpdf->Image('images/pdf.jpg', 10, 20, 190, 60, 'JPG', 'http://lvpad.com', '', false, 150, '', false, false, 1, false, false, false);  
  
  
        $dataTmp = $this->energy_model->getAnalysisreport();
        $data = $dataTmp[0];

        $this->tcpdf->Cell(0, 10, '', 0, 2, 'C', false);
        $this->tcpdf->SetFont('', 'B',12);
        
        $this->tcpdf->Cell(32, 5, '客户名称  ：', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Clientname'], 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备类型  ：', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Machinetype'], 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备编号  ：', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Machinename'], 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '打印日期  ：', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, date('Y-m-d h:i:s'), 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '分析时间段：', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Startdate'].' 至 '.$data['Enddate'], 0, 2, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(0, 10, '', 0, 2, 'C', false);
        $this->tcpdf->SetFont('', 'B',12);
        
        $this->tcpdf->SetTextColor(64);
        
        $this->tcpdf->SetFillColor(200, 220, 255);
        $this->tcpdf->Cell(0, 5, '1.设备参数', 'B', 2, 'L', true);
        $this->tcpdf->Ln();
        $this->tcpdf->SetFont('', 'B',11);
        /*$this->tcpdf->Cell(32, 5, '峰电时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Toptime1'].' 至 '.$data['Toptime2'], 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '谷电时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Toptime2'].' 至 '.$data['Toptime1'], 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '峰电价格', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Topprice'].'元/度', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '谷电价格', 0, 0, 'L', false);
        */
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '电价', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Energyprice'].'元/度', 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '额定功率', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Ratedpower'].'kW', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '额定排气量', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Ratedout'].'m³/min', 0, 2, 'L', false);
        
        $this->tcpdf->SetFont('', 'B',12);
        $this->tcpdf->Ln();
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(0, 5, '2.分析结果', 'B', 2, 'L', true);
        $this->tcpdf->Ln();
        $this->tcpdf->SetFont('', 'B',11);
        $this->tcpdf->Cell(32, 5, '选择时间长度', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Totaltime'].'小时', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备工作时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Worktime'].'小时', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备停机时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Stoptime'].'小时', 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备平均比功率', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Specificpower'].'kW/(m³/min)', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备满载时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadtime'].'小时', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备空载时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadtime'].'小时', 0, 0, 'L', false);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '', 0, 0, 'L', false);
        $this->tcpdf->Cell(32, 5, '', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备满载率', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadpercent'].'%', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备空载率', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadpercent'].'%', 0, 2, 'L', false);
        $this->tcpdf->Ln();
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备总产气量', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Totalgas'].'m³', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备加载次数', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadcnt'].'次', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备卸载次数', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadcnt'].'次', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '设备总耗电', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Totalpower'].'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备满载耗电', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadpower'].'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备空载耗电', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadpower'].'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '电费总额', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Totalprice'].'元', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '满载耗电占比', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadpowerpercent'].'%', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '空载耗电占比', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadpowerpercent'].'%', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '每立方米产气成本', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Gasprice'].'元/m³', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备满载电费', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Loadprice'].'元', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '设备空载电费', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Unloadprice'].'元', 0, 2, 'L', false);
        $this->tcpdf->Ln();
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '排气压力最大值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Pressmax'].'bar', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '排气压力最小值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Pressmin'].'bar', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '排气压力平均值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Pressave'].'bar', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '电流最大值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Currentmax'].'A', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '电流最小值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Currentmin'].'A', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '电流平均值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Currentave'].'A', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '温度最大值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Tempmax'].'℃', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '温度最小值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Tempmin'].'℃', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '温度平均值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Tempave'].'℃', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '功率最大值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Powermax'].'kW', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '功率最小值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Powermin'].'kW', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '功率平均值', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, $data['Powerave'].'kW', 0, 2, 'L', false);
        $this->tcpdf->Ln();

        $this->tcpdf->SetFont('', 'B',12);
        $this->tcpdf->Ln();
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(0, 5, '3.年度预估', 'B', 2, 'L', true);
        $this->tcpdf->Ln();
        $this->tcpdf->SetFont('', 'B',11);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年总时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, '8760小时（365天）', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计工作时间', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Worktime'] / $data['Totaltime'],2).'小时', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计总耗电', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Totalpower'] / $data['Totaltime'],2).'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '一年预期总产气量', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Totalgas'] / $data['Totaltime'],2).'m³', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计满载功耗', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Loadpower'] / $data['Totaltime'],2).'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计空载功耗', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Unloadpower'] / $data['Totaltime'],2).'kWh', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Ln();
        $this->tcpdf->Cell(32, 5, '一年预期总电费', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Totalprice'] / $data['Totaltime'],2).'元', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计满载电费', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Loadprice'] / $data['Totaltime'],2).'元', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '一年预计空载电费', 0, 0, 'L', false);
        $this->tcpdf->SetTextColor(128,0,0);
        $this->tcpdf->Cell(32, 5, round(8760*$data['Unloadprice'] / $data['Totaltime'],2).'元', 0, 2, 'L', false);
        $this->tcpdf->Ln();
        
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(0, 5, '4.其他', 'B', 2, 'L', true);
        $this->tcpdf->Ln();
        $this->tcpdf->SetFont('', 'B',11);
        $this->tcpdf->SetTextColor(64);
        $this->tcpdf->Cell(32, 5, '本报告结果仅供参考，欲获取更加准确的评估结果，请采集较长时间的数据进行分析。', 0, 0, 'L', false);

  
        // output the HTML content  
        //$this->tcpdf->writeHTML("测试", true, false, true, false, '');  
        // reset pointer to the last page  
        $this->tcpdf->lastPage();  
        //Close and output PDF document  
        $this->tcpdf->Output('test' . '.pdf', 'I');
    }
    
    public function passwdchange(){
        
        $this->LoginfoCheck();
    
        $name=$this->session->userdata('name');//$_POST['password_old'];
        //$passwd_old=md5($_POST['passwd_old']);
        $newPasswd=md5($_POST['passwd_new1']);
        
		if (FALSE == $this->energy_model->changePasswd($name,$newPasswd)){
            echo 0;
            return;
		}else{
            echo 1;
            return;
		}
    }
    
    public function upload_file()
    {
        
        $this->LoginfoCheck();
        
        $status = "";
        $msg = "";
        $file_element_name = 'userfile';
        
        /*if (empty($_POST['title']))
        {
            //$status = "error";
            $msg = "Please enter a title";
        }*/
     
        if ($status != "error")
        {
            if (!file_exists('./uploads/'.$this->data['admin_dir'])){
                mkdir('./uploads/'.$this->data['admin_dir']);
            }

            $config['upload_path'] = './uploads/'.$this->data['admin_dir'];
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
        
        if (!file_exists('./img/'.$this->data['admin_dir'])){
            mkdir('./img/'.$this->data['admin_dir']);
        }
        copy('./uploads/'.$this->data['admin_dir'].'/logo.png','./img/'.$this->data['admin_dir'].'/logo.png');
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

        $info['create_date']   = date("Y-m-d h:i:s");
        $info['admin_domain']   = $this->session->userdata['admin_id'];
        $this->user_energy_model->add_user($info);
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

        $this->user_energy_model->edit_user($info,$_POST['edituser_name']);
        echo 0;
        return;
    }
    
    public function del_user(){
        
        $this->LoginfoCheck();
    
        $name = $_POST['user_name'];
        $this->user_energy_model->del_user($name);
        echo 0;
        return;
    }
}
?>
