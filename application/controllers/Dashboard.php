<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Register (RegisterController)
 * Register class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Dashboard extends CI_Controller
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
        $this->load->model('dashboard_model');
        
    }

	public function index(){
		$data['title'] = 'Dashboard';
		$data['users'] = $this->dashboard_model->getUserById();
		$data['userprofile'] = $this->dashboard_model->getUserProfileById();
		$data['allsellerProfile'] = $this->dashboard_model->getAllSellerDashboard();
		$data['allbuyerProfile'] = $this->dashboard_model->getAllBuyer();
		$this->load->view('template/frontend/header', $data);
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('template/frontend/footer', $data);
	}
	public function userProfile(){
	
		$data['title'] = 'User Profile';
		$data['businessindustry'] = $this->dashboard_model->business_industry();
		$data['businessindustry_1'] = $this->dashboard_model->business_industry();
		$data['users'] = $this->dashboard_model->getUserById();
		$data['userprofile'] = $this->dashboard_model->getUserProfileById();
		$data['Gimages'] = $this->dashboard_model->Gimages();
		$data['Docimages'] = $this->dashboard_model->Docimages();
			
		$this->load->view('template/frontend/header', $data);
		if($this->session->userdata('role')==1){ 
			$this->load->view('profile/investor-profile', $data);
		}
		if($this->session->userdata('role')==2){ $this->load->view('profile/buyer-profile', $data);}
		if($this->session->userdata('role')==3){ $this->load->view('profile/seller-profile', $data);}
		if($this->session->userdata('role')==4){ 
			$this->load->view('profile/advisor-profile', $data);
		}
		$this->load->view('template/frontend/footer', $data);
	}
	
   	public function updateProfile(){
			$result =$this->dashboard_model->updateProfile();
			if($result){
				echo 1;
			}else{
				echo 0;
			}
			
	}
	function cImageGallery(){
			$data = $this->dashboard_model->cImageGallery();
			echo json_encode($data);
	}
	function removeimage(){
			$data = $this->dashboard_model->removeimage();
			echo $data;
	}
	function cDocumentGallery(){
			$data = $this->dashboard_model->cDocumentGallery();
			echo json_encode($data);
	}
	function updateDocName(){
			$data = $this->dashboard_model->updateDocName();
			echo 1;
	}
	function cProofGallery(){
			$data = $this->dashboard_model->cProofGallery();
			echo 1;
	}
	 public function notifications(){
		$data['title'] = 'notifications';
		$data['users'] = $this->dashboard_model->getUserById();
		$data['userprofile'] = $this->dashboard_model->getUserProfileById();
		$data['notifications'] = $this->dashboard_model->getNotifications();
		$this->dashboard_model->updateNotifications();
		$this->load->view('template/frontend/header',$data);
		$this->load->view('dashboard/notifications',$data);
		$this->load->view('template/frontend/footer',$data);
	 }
	 function getNotificationUser(){
			$data = $this->dashboard_model->getNotificationUser();
			echo $data;
	}
	public function sellerSetting(){
		$data['title'] = 'setting';
		$data['setting'] = $this->dashboard_model->contactsetting();
		
		$data['businessindustry'] = $this->dashboard_model->business_industry();
		$data['businessindustry_1'] = $this->dashboard_model->business_industry();
		$data['businessindustry_2'] = $this->dashboard_model->business_industry();
		$data['users'] = $this->dashboard_model->getUserById();
		$data['userprofile'] = $this->dashboard_model->getUserProfileById();
		$data['Gimages'] = $this->dashboard_model->Gimages();
		$data['Docimages'] = $this->dashboard_model->Docimages();
		$this->load->view('template/frontend/header');
		if($this->session->userdata('role')==1){ 
			$this->load->view('dashboard/investor-setting', $data);
		}
		if($this->session->userdata('role')==2){ 
			$this->load->view('dashboard/buyer-setting', $data);
		}
		if($this->session->userdata('role')==3){ 
			$this->load->view('dashboard/seller-setting',$data);
		}
		if($this->session->userdata('role')==4){ 
			$this->load->view('dashboard/advisory-setting',$data);
		}
		$this->load->view('template/frontend/footer');
	 }
	 public function userSettingContactAjax(){
		$result = $this->dashboard_model->userSettingContact();
		return 1;
    }
	 public function userSettingdealAjax(){
		$result = $this->dashboard_model->userSettingdeal();
		return 1;
              
	}
	 public function userChangePasswordAjax(){
		$result = $this->dashboard_model->userChangePassword();
		return 1;
    }
	public function updatePlan(){
			$result =$this->dashboard_model->updatePlan();
			if($result){ echo 1; }else{ echo 0;}
	}
	public function Bookmark(){
        $data['title'] = 'Bookmark';
		$data['bookmark'] =$this->dashboard_model->getBookmark();
		//echo"<pre>";
		//print_r($data['bookmark']);
		$this->load->view('template/frontend/header');
        $this->load->view('dashboard/bookmark', $data);
        $this->load->view('template/frontend/footer');
    }
	function deleteBookmark(){
			$data = $this->dashboard_model->deleteBookmark();
			echo $data;
	}
    
}

?>