<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->load
            ->helper('url');
        $this
            ->load
            ->library('session');
        $this
            ->load
            ->config('email');
        $this
            ->load
            ->library('email');
        $this
            ->load
            ->model('administrator_model');
	   $this
            ->load
            ->model('dashboard_model');
    }
    function logout()
    {
        session_start();
        session_destroy();
        unset($_SESSION);
        session_regenerate_id(true);
        redirect('administrator');
    }
    public function login(){
        if (!empty($_POST['SignIn']))
        {
            $email = $this
                ->input
                ->post('email');
            $password = $this
                ->input
                ->post('password');
            $result = $this
                ->administrator_model
                ->loginMe($email, $password);
            if ($result)
            {
				if($result['status']==1){
					$sessionArray = array(
						'user_id' => $result['id'],
						'role' => $result['role']
					);
					$this
						->session
						->set_userdata($sessionArray);
					redirect('administrator/dashboard');
				}
				else{
					$this
						->session
						->set_flashdata('error', 'Your account has been be suspended.Please contact with administrator');
					$this
						->load
						->view('/administrator/login');
				}	
            }
            else
            {
                $this
                    ->session
                    ->set_flashdata('error', 'Email or password does not match');
                $this
                    ->load
                    ->view('/administrator/login');
            }
        }
        else
        {
            $this
                ->load
                ->view('/administrator/login');
        }
    }

    public function dashboard(){
        $data['pageTitle'] = 'Inventory System : Dashboard';
		$data['allUsers'] = $this
									->administrator_model
									->allUsers();
		$data['totalHotels'] = $this
									->administrator_model
									->totalHotels();	
		$data['totalRooms'] = $this
									->administrator_model
									->totalRooms();
		$data['totalTents'] = $this
									->administrator_model
									->totalTents();
		$data['totalCottage'] = $this
									->administrator_model
									->totalCottage();	
		$data['totalCamping'] = $this
									->administrator_model
									->totalCamping();										
        $this
            ->load
            ->view('administrator/includes/header', $data);
        $this
            ->load
            ->view('administrator/dashboard');
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	// Hotel Module
	public function createHotel(){
		$data['pageTitle'] = 'Create Hotel';
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/hotels/create-hotel', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	function hotelRegistartionWithAjax(){
			$data = $this->administrator_model->hotelRegistartionWithAjax();
			echo json_encode($data);
	}
	public function hotels(){
		$data['pageTitle'] = 'Hotels';
		$data['users'] = $this->administrator_model->hotels();
		
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/hotels/hotels', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function editHotel($id){
		$data['pageTitle'] = 'Edit Hotel ';
		$data['users'] = $this->administrator_model->editHotel($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/hotels/edit-hotel', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function deleteHotel(){
			$data = $this->administrator_model->deleteHotel();
			echo $data;
	}
	function activeHotel(){
			$data = $this->administrator_model->activeHotel();
			echo $data;
	}
	function deactiveHotel(){
			$data = $this->administrator_model->deactiveHotel();
			echo $data;
	}
	
	// End Hotel Module
	// Rooms Module
	
	public function createProperty(){
		$data['pageTitle'] = 'Create Property';
		$data['hotels'] = $this->administrator_model->hotels();
		$data['properties_type'] = $this->administrator_model->properties_type_size();
		$data['city'] = $this->administrator_model->getCity();
		$url =explode('/',$_SERVER['REQUEST_URI']);
	
		$this
            ->load
            ->view('administrator/includes/header');
		if(in_array('create-room',$url)){
			$this
            ->load
            ->view('administrator/rooms/create-property', $data);
		}	
		if(in_array('create-tent',$url)){
			$this
            ->load
            ->view('administrator/tents/create-property', $data);
		}	
        if(in_array('create-cottage',$url)){
			$this
            ->load
            ->view('administrator/cottages/create-property', $data);
		}
		if(in_array('create-camping',$url)){
			$this
            ->load
            ->view('administrator/campings/create-property', $data);
		}
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	function addProperty(){
			$data = $this->administrator_model->addProperty();
			echo json_encode($data);
	}
	
	public function Properties(){
		$data['pageTitle'] = 'Properties';
		$data['properties'] = $this->administrator_model->properties();
		$url =explode('/',$_SERVER['REQUEST_URI']);
		$this
            ->load
            ->view('administrator/includes/header');
		if(in_array('rooms',$url)){
			$this
            ->load
            ->view('administrator/rooms/properties', $data);
		}
		if(in_array('tents',$url)){
			$this
            ->load
            ->view('administrator/tents/properties', $data);
		}
		if(in_array('cottages',$url)){
			$this
            ->load
            ->view('administrator/cottages/properties', $data);
		}
		if(in_array('campings',$url)){
			$this
            ->load
            ->view('administrator/campings/properties', $data);
		}
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function editProperty($type,$id){
		$data['pageTitle'] = 'Create Property';
		$url =explode('/',$_SERVER['REQUEST_URI']);
		$data['hotels'] = $this->administrator_model->hotels();
		$data['properties_type'] = $this->administrator_model->properties_type_size();
		$data['city'] = $this->administrator_model->getCity();
		$data['properties'] = $this->administrator_model->editProperty($type,$id);
			$this
            ->load
            ->view('administrator/includes/header');
		if(in_array('room',$url)){
        $this
            ->load
            ->view('administrator/rooms/edit-property', $data);
		}
		if(in_array('tent',$url)){
        $this
            ->load
            ->view('administrator/tents/edit-property', $data);
		}
		if(in_array('cottage',$url)){
        $this
            ->load
            ->view('administrator/cottages/edit-property', $data);
		}
		if(in_array('camping',$url)){
        $this
            ->load
            ->view('administrator/campings/edit-property', $data);
		}
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	function deleteProperty(){
			$data = $this->administrator_model->deleteProperty();
			echo $data;
	}
	// End  Rooms here
	
	// Gallery 
	public function propertyGallery(){
		$data['pageTitle'] = 'Properties';
		$url =explode('/',$_SERVER['REQUEST_URI']);
		$data['propertyImages'] = $this->administrator_model->propertyImages();
		
		if(!empty($_FILES['userfile']["name"])){
			$data['result'] = $this->administrator_model->addpropertyImages();
			if(in_array('room',$url)){
				redirect('administrator/room-gallery/room/'.$this->uri->segment(4));
			}
			if(in_array('tent',$url)){
				redirect('administrator/tent-gallery/tent/'.$this->uri->segment(4));
			}
			if(in_array('cottage',$url)){
				redirect('administrator/cottage-gallery/cottage/'.$this->uri->segment(4));
			}
			if(in_array('camping',$url)){
				redirect('administrator/camping-gallery/camping/'.$this->uri->segment(4));
			}
		}
		$this
            ->load
            ->view('administrator/includes/header');
		if(in_array('room',$url)){
			$this
            ->load
            ->view('administrator/rooms/gallery', $data);
		}
		if(in_array('tent',$url)){
			$this
            ->load
            ->view('administrator/tents/gallery', $data);
		}
		if(in_array('cottage',$url)){
			$this
            ->load
            ->view('administrator/cottages/gallery', $data);
		}
		if(in_array('camping',$url)){
			$this
            ->load
            ->view('administrator/campings/gallery', $data);
		}
		 $this
            ->load
            ->view('administrator/includes/footer');
	}
	function deletePropertyImage(){
			$data = $this->administrator_model->deletePropertyImage();
			echo $data;
	}
	
	public function propertyAmenity(){
		$data['pageTitle'] = 'Properties';
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		$data['propertyAmenity'] = $this->administrator_model->propertyAmenity();
		$url =explode('/',$_SERVER['REQUEST_URI']);
		
		if(!empty($_POST['create-submit'])){
			$this->administrator_model->addpropertyAmenity();
			if(in_array('room',$url)){
				$this->session->set_flashdata('success', 'Room amenity has been added successfully.');	
				redirect('administrator/room-amenity/room/'.$this->uri->segment(4));
				
			}
			if(in_array('tent',$url)){
				$this->session->set_flashdata('success', 'Tent amenity has been added successfully.');	
				redirect('administrator/tent-amenity/tent/'.$this->uri->segment(4));
			}
			if(in_array('cottage',$url)){
				$this->session->set_flashdata('success', 'Cottage amenity has been added successfully.');	
				redirect('administrator/cottage-amenity/cottage/'.$this->uri->segment(4));
			}
			if(in_array('camping',$url)){
				$this->session->set_flashdata('success', 'Camping amenity has been added successfully.');	
				redirect('administrator/camping-amenity/camping/'.$this->uri->segment(4));
			}
		}
		$this
            ->load
            ->view('administrator/includes/header');
		
		if(in_array('room',$url)){
			$this
            ->load
            ->view('administrator/rooms/amenity', $data);
		}
		if(in_array('tent',$url)){
			$this
            ->load
            ->view('administrator/tents/amenity', $data);
		}
		if(in_array('cottage',$url)){
			$this
            ->load
            ->view('administrator/cottages/amenity', $data);
		}
		if(in_array('camping',$url)){
			$this
            ->load
            ->view('administrator/campings/amenity', $data);
		}
		 $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	
	
	// Service Module
	public function createService(){
		$data['pageTitle'] = 'Create Service';
		if(!empty($_POST['create-submit'])){
			$data = $this->administrator_model->addService();
			$this->session->set_flashdata('success', 'Service has been added successfully.');	
			redirect('administrator/create-service');
		}
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/services/create-service', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	
	public function services(){
		$data['pageTitle'] = 'Services';
		$data['result'] = $this->administrator_model->services();
		
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/services/services', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function editService($id){
		$data['pageTitle'] = 'Edit Service';
		$data['result'] = $this->administrator_model->editService($id);
		if(!empty($_POST['create-submit'])){
			$data = $this->administrator_model->UpdateService($id);
			$this->session->set_flashdata('success', 'Service has been Updated successfully.');	
			redirect('administrator/edit-service/'.$id);
		}
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/services/edit-service', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function deleteService(){
			$data = $this->administrator_model->deleteService();
			echo $data;
	}
	
	// Category Module
	public function createCategory(){
		$data['pageTitle'] = 'Create Category';
		if(!empty($_POST['create-submit'])){
			$data = $this->administrator_model->addCategory();
			$this->session->set_flashdata('success', 'Category has been added successfully.');	
			redirect('administrator/create-category');
		}
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/categories/create-category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	
	public function category(){
		$data['pageTitle'] = 'Category';
		$data['result'] = $this->administrator_model->category();
		
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/categories/category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function editCategory($id){
		$data['pageTitle'] = 'Edit Category';
		$data['result'] = $this->administrator_model->editCategory($id);
		if(!empty($_POST['create-submit'])){
			$data = $this->administrator_model->UpdateCategory($id);
			$this->session->set_flashdata('success', 'Category has been Updated successfully.');	
			redirect('administrator/edit-category/'.$id);
		}
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/categories/edit-category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function deleteCategory(){
			$data = $this->administrator_model->deleteCategory();
			echo $data;
	}
	
	// Gallery 
	public function banner(){
		$data['pageTitle'] = 'Banner';
		$data['banner'] = $this->administrator_model->bannerImages();
		
		if(!empty($_FILES['userfile']["name"])){
			$data['result'] = $this->administrator_model->addbannerImages();
			$this->session->set_flashdata('success', 'Banner has been added successfully.');	
			redirect('administrator/banner');
		}
		$this
            ->load
            ->view('administrator/includes/header');
		
			$this
            ->load
            ->view('administrator/banner', $data);
		$this
            ->load
            ->view('administrator/includes/footer');
	}
	function deleteBannerImage(){
			$data = $this->administrator_model->deleteBannerImage();
			echo $data;
	}
	function deactiveProperty(){
			$data = $this->administrator_model->deactiveProperty();
			echo $data;
	}
	function activeProperty(){
			$data = $this->administrator_model->activeProperty();
			echo $data;
	}
	public function extradiscount(){
		$data['pageTitle'] = 'Extra Discount';
		$data['discount'] = $this->administrator_model->getDiscount();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/extradiscount', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function myDiscount(){
			$data = $this->administrator_model->myDiscount();
			echo $data;
	}
	function cronjob(){
			$data = $this->administrator_model->cronjob();
			echo $data;
	}
	
	
}

?>
