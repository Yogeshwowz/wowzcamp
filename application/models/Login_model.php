<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    protected $users = 'users';
    protected $countries = 'countries';
    protected $profile = 'profile';
	public function __construct(){
			parent::__construct();
			$this->load->database();
	}
    // Check email exists
    public function check_email_exists($email){
		$query = $this->db->get_where($this->users, array('email' => $email));
		if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

    public function add_user(){
		   parse_str($_POST['formdata'], $postData);
            $password = md5($postData['reg_password']);
            $data = array(
                            'email' => $postData['reg_email'],
                            'password' => $password,
                            'plain_password' => $postData['reg_password'],
							'role' => $postData['reg_profile'],
                            'country_id' => $postData['reg_country'],
                            'created_date' => date('Y-m-d H:i:s')
                          );
			$this->db->insert($this->users, $data);
			$user_id = $this->db->insert_id();
			$profile = array('user_id'=>$user_id,'created_date' => date('Y-m-d H:i:s'));
			return $this->db->insert($this->profile, $profile);
           
    }

	public function userloginWithAjax(){
		parse_str($_POST['formdata'], $postData);
		$this->db->where('email', $postData['login_email']);
		$this->db->where('password', md5($postData['login_password']));
		$result = $this->db->get($this->users);
		if ($result->num_rows() == 1) {
			return $result->row_array();
		}else{
			return false;
		}
    }

   function get_countries(){   
            $query = $this->db->get($this->countries);
            return $query->result_array(); 
    }
     public function social_media_add_user($userProfile){
		    $plain_password = rand();
            $password = md5($plain_password);
            $data = array(
                            'email' => $userProfile['email'],
                            'password' => $password,
                            'plain_password' => $plain_password,
							'role' => $this->session->userdata('profile_socail'),
                            'country_id' => $this->session->userdata('country_socail'),
                            'created_date' => date('Y-m-d H:i:s')
                          );
			$this->db->insert($this->users, $data);
			$user_id = $this->db->insert_id();
			$profile = array('user_id'=>$user_id,'created_date' => date('Y-m-d H:i:s'));
			$this->db->insert($this->profile, $profile);
			$user_data = array(
								'uid' => $user_id,
								'email' => $userProfile['email'],
								'role' => $this->session->userdata('profile_socail'),
								'loginmode' => 'Google'
					);
				$this->session->set_userdata($user_data);
				return 1;
           
    }
	public function facebook_media_add_user($userProfile){
		    $plain_password = rand();
            $password = md5($plain_password);
            $data = array(
                            'email' => $userProfile['email'],
                            'password' => $password,
                            'plain_password' => $plain_password,
							'role' => $this->session->userdata('profile_socail'),
                            'country_id' => $this->session->userdata('country_socail'),
                            'created_date' => date('Y-m-d H:i:s')
                          );
			$this->db->insert($this->users, $data);
			$user_id = $this->db->insert_id();
			$profile = array('user_id'=>$user_id,'created_date' => date('Y-m-d H:i:s'));
			$this->db->insert($this->profile, $profile);
			$user_data = array(
								'uid' => $user_id,
								'email' => $userProfile['email'],
								'role' => $this->session->userdata('profile_socail'),
								'loginmode' => 'Facebook'
					);
				$this->session->set_userdata($user_data);
				return 1;
           
    }
      
}

?>