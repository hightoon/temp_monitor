<?php
class Time_Page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->CI = &get_instance();//
		//$this->CI->load->database();//
        //$this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('timenow_php/index');
    }
    public function admin()
    {
        //$data['news'] = $this->news_model->get_news();
		//print_r($data['news']);
		//$data['title'] = 'News archive';

		$this->load->view('timenow_php/index');
    }
	

}