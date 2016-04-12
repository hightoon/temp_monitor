<?php
class Elevator extends CI_Controller {

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

		$this->load->view('hawkeyes/auth/signOut');
    }

    public function admin()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('hawkeyes/desktop/showInfo');
    }
	
	public function equipment()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('hawkeyes/equipment/index');
		
    }
	
	public function alarm()
    {
		$this->load->view('hawkeyes/alarm/index');
    }
	
	public function maintainRecord()
    {
		$this->load->view('hawkeyes/maintainRecord/index');
    }
	
	public function needEnergy()
    {
		$this->load->view('hawkeyes/equipment/needEnergyEquipmentPage');
    }
	
	public function createEquipment()
    {
		$this->load->view('hawkeyes/equipment/createEquipment');
    }
	
	public function changePwd()
    {
		$this->load->view('hawkeyes/user/changePwd');
    }
	
	public function personalInfo()
    {
		$this->load->view('hawkeyes/user/personalInfo');
    }
	
	public function manageMembers()
    {
		$this->load->view('hawkeyes/user/manageMembers');
    }
	

	
	public function client()
    {
		$this->load->view('hawkeyes/organization/client');
    }
	
	public function createClient()
    {
		$this->load->view('hawkeyes/organization/createClient');
    }
	
	public function edit()
    {
		$this->load->view('hawkeyes/equipment/edit/6');
    }
    
	public function detail()
    {
		$this->load->view('hawkeyes/equipment/show/6');
    }
}