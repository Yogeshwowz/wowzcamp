<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Rooms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
			$this
            ->load
            ->helper('url');
			$this
            ->load
            ->config('email');
			$this
            ->load
            ->library('email');
			$this
            ->load
            ->library('session');
			$this
            ->load
            ->model('dashboard_model');
			$this
            ->load
            ->model('login_model');
			$this
            ->load
            ->model('administrator_model');	
			$this->load->library("pagination");
			
    }
	
	public function index(){
	 $this->session->unset_userdata('range');
	 $this->session->unset_userdata('rating');
	 $this->session->unset_userdata('location');
    redirect('rooms/loadRecord');
  }
   
    public function loadRecord($rowno=0){
		
		$data['title'] = 'rooms';
		$data['city'] = $this->administrator_model->getCity();
		
		$ptype ='';
		$orderby ='';
		$rating ='';
		$location ='';
		$range ='';
		
		if(isset($_POST['ptype'])){
			$ptype = $this->input->post('ptype');
		    $this->session->set_userdata(array("ptype"=>$ptype));
		}else{
				if($this->session->userdata('ptype') != NULL){
				$ptype = $this->session->userdata('ptype');
				}
		}
		
		
			if(isset($_POST['sortproperties']) && $_POST['sortproperties']=='price-desc'){
				$sortproperties = $this->input->post('sortproperties');
				$this->session->set_userdata(array("sortproperties"=>$sortproperties));
				$orderby = ' price DESC';
			}
			else if(isset($_POST['sortproperties']) && $_POST['sortproperties']=='price-asc'){
				$sortproperties = $this->input->post('sortproperties');
				$this->session->set_userdata(array("sortproperties"=>$sortproperties));
				$orderby = ' price ASC';
			}else{
				$sortproperties = $this->input->post('sortproperties');
				$this->session->set_userdata(array("sortproperties"=>$sortproperties));
				  $orderby = ' id DESC';
					if($this->session->userdata('sortproperties') != NULL){
						$sortproperties = $this->session->userdata('sortproperties');
					}
			}	
		
		
		if(isset($_POST['rating'])){
			$rating = $this->input->post('rating');
		    $this->session->set_userdata(array("rating"=>$rating));
		}else{
				if($this->session->userdata('rating') != NULL){
				$rating = $this->session->userdata('rating');
				}
		}
		if(isset($_POST['location'])){
			$location = $this->input->post('location');
		    $this->session->set_userdata(array("location"=>$location));
		}else{
				if($this->session->userdata('location') != NULL){
					$location = $this->session->userdata('location');
				}
		}
		if(isset($_POST['range'])){
			$range = $this->input->post('range');
		    $this->session->set_userdata(array("range"=>$range));
		}else{
				if($this->session->userdata('range') != NULL){
					$range = $this->session->userdata('range');
				}
		}
		
		
		
		// Row per page
		$rowperpage = 2;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
		
		$allcount = $this->dashboard_model->get_count($rating,$location,$orderby,$range,$ptype);
		$users_record  = $this->dashboard_model->get_rooms($rowno,$rowperpage,$rating,$location,$orderby,$range,$ptype);
		
		
		// Pagination Configuration
		$config = array();
        $config["base_url"] = base_url() . "/rooms/loadRecord";
        
		
		
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['allcount'] = $allcount;
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['rating'] = $rating;
    $data['location'] = $location;
    $data['range'] = $range;
    $data['sortproperties'] = $sortproperties;
    $data['ptype'] = $ptype;
		
			$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/rooms', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	//Pagination Seller
	public function loadRecordRoom($rowno=0){
	    $rowno =$_POST['pagno'];
		// Row per page
		$rowperpage = 5;
		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->dashboard_model->getrecordCountRoom();
		// Get  records
      	$users_record = $this->dashboard_model->getDataRoom($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'home/loadRecordRoom';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['anchor_class'] = 'class="number" ';
		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;
		echo json_encode($data);
		
	}
	
	public function loadMoreGallery(){
		$data = $this->dashboard_model->loadMoreGallery();
		echo $data;
	}
	public function loadMoreRoomGallery(){
		$data = $this->dashboard_model->loadMoreRoomGallery();
		echo $data;
	}
	public function loadMoreTentGallery(){
		$data = $this->dashboard_model->loadMoreTentGallery();
		echo $data;
	}
	
} ?>
