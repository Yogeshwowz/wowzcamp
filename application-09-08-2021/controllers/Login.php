<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->config('email');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('login_model');
        
    }

	public function register(){
		if ($this->facebook->logged_in()){
			$user = $this->facebook->user();
			if ($user['code'] === 200){
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('user_profile',$user['data']);
				//echo"<pre>";
				//print_r($user['data']);
				//die();
				$result = $this->login_model->facebook_media_add_user($user['data']);
				if($result){
				 redirect('dashboard');	
				}
				
			}

		}else{
			$data['link'] = $this->facebook->login_url();
		}
		
		
		$data['title'] = 'Create User';
		$data['country'] = $this->login_model->get_countries();
		$data['socailmediacountry'] = $this->login_model->get_countries();
		$this->load->view('login/login', $data);
	}
	public function userRegistartionWithAjax(){
			parse_str($_POST['formdata'], $postData);
			$checkuser =$this->login_model->check_email_exists($postData['reg_email']);
			if($checkuser){ 
				$result = $this->login_model->add_user();
                echo 1; 
			}else{ echo 2;}
	}
	public function userloginWithAjax(){
			$result =$this->login_model->userloginWithAjax();
			if($result){ 
				$user_data = array(
								'uid' => $result['id'],
								'email' => $result['email'],
								'role' => $result['role']
					);
				$this->session->set_userdata($user_data);
				echo 1; 
			}else{ echo 0;}
		}
	function logout(){
        //session_start();
        session_destroy();
        unset($_SESSION);
        //session_regenerate_id(true);
        redirect('/');
    }	
	public function setlocalStorage(){
		
		
		$user_data = array(
								'profile_socail' => $_POST['profile_socail'],
								'country_socail' => $_POST['country_socail']
								
					);
		$this->session->set_userdata($user_data);
		echo 1;
	}

}

?>