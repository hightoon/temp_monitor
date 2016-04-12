<?php
 
class Index extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('robo_user_model');
		$this->load->helper (array(
			'form',  
			'url'   
        ));  
        $this->load->library('session');  
        $this->load->library('encrypt');
	}

	public function index(){
	
		$this->load->view('web/login');
	}
	public function login(){
	
		$this->load->view('web/login');
	}
	public function logout(){
	
		$this->session->sess_destroy();
		$this->load->view('web/login');
	}
	public function aboutus(){
	
		$this->load->view('web/aboutus');
	}
	public function services(){
	
		$this->load->view('web/services');
	}
	public function portfolio(){
	
		$this->load->view('web/portfolio');
	}
	public function contact(){
	
		$this->load->view('web/contact');
	}
	
	public function formsubmit() {

        $this->load->library ( 'form_validation' );  
        $this->form_validation->set_rules ( 'username', 'Username', 'required|min_length[4]|max_length[12]' );
        $this->form_validation->set_rules ( 'password', 'Password', 'required' );
        
        if ($this->form_validation->run () == FALSE) {
            
			$data["error"] = 1;
			$this->load->view('web/login',$data);
            
        } else {
            
            if (isset ( $_POST['submit'] ) && ! empty( $_POST['submit'] )) {
                
                $data = array (
                        'name'      => $_POST['username'],  
                        'password'  => md5($_POST['password']),
                        'userip'    => $_SERVER['REMOTE_ADDR'],  
                        'logintime' => time()
                );
                
                if ($_POST['submit'] == '登陆') {
                    
                    $query = $this->db->get_where( 'robos_user_info', array(
                            'user_name' => $data['name']
                    ), 1, 0 );  

					if(FALSE == $query->result ()){
                        
						$data["error"] = 1;
						$this->load->view('web/login',$data);
						return;
					}

                    foreach ( $query->result () as $row ) {
                        
                        $pass = $row->password;  
                        
						if ($pass == $data['password']) {
                            
                            if(NULL == $row->user_dir){
                                $data['path'] = 'admin';
                            }else{
                                $data['path'] = strtolower($row->user_dir);
                            }
                            
							$this->session->set_userdata($data);
							header("Location:index.php/".$data['path']."/".$data['path']."/");
							exit;
                            
						}else{
                            
							$data["error"] = 1;
							$this->load->view('web/login',$data);
						}
					}
                }/* else if ($_POST ['submit'] == 'register') {
                      
                    $this->session->set_userdata($newdata);  
                    $this->db->insert ( 'uc_user', $data );  
                    $this->load->view ( 'usercenter', $data );  
                } */else {
                    $this->session->sess_destroy();  
                    $this->load->view('templates/header');
					$this->load->view('web/login');
                }  
            }  
        }  
    }
}
?>
