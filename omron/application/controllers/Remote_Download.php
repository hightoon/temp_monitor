<?php
class Remote_Download extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->CI = &get_instance();//
		$this->CI->load->database();//
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('omron_php/signOut');
    }

    public function admin()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('omron_php/index');
    }
	
	public function maintainRecord()
    {
		$this->load->view('omron_php/maintainRecord');
    }
	
	public function createEquipment()
    {
		$this->load->view('omron_php/createEquipment');
    }
	
	public function changePwd()
    {
		$this->load->view('omron_php/changePwd');
    }
	
	public function personalInfo()
    {
		$this->load->view('omron_php/personalInfo');
    }
	
	public function manageEquipment()
    {
		$this->load->view('omron_php/manageEquipment');
    }
	
	public function client()
    {
		$this->load->view('omron_php/client');
    }
	
	public function createClient()
    {
		$this->load->view('omron_php/createClient');
    }
	
	public function edit()
    {
		$this->load->view('omron_php/edit_6');
    }
    
	public function detail()
    {
		$this->load->view('omron_php/detail_6');
    }
}