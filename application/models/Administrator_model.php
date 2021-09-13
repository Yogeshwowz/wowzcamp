<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Administrator_model extends CI_Model{
    protected $users = 'users';
    protected $admins = 'admins';
    protected $hotels = 'hotels';
    protected $setting = 'setting';
    protected $properties_type_size = 'properties_type_size';
    protected $cities = 'cities';
    protected $properties = 'properties';
    protected $properties_galleries = 'properties_galleries';
    protected $amenities = 'amenities';
    protected $properties_amenities = 'properties_amenities';
    protected $services = 'services';
    protected $category = 'category';
    protected $banners = 'banners';
    protected $discount = 'discount';

		
		
	public function __construct(){
			parent::__construct();
			$this->load->database();
			
	}
	
	function getinfo(){
       $this->db->from($this->admins);
	   $this->db->where('id',$this->session->userdata('user_id'));  
	   $query = $this->db->get();
       return $query->row_array();
    }
	function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	
	function properties_type_size(){
       $this->db->from($this->properties_type_size);
	   $query = $this->db->get();
       return $query->result();
    }
	function getCity(){
       $this->db->from($this->cities);
	   $this->db->where('state_id',14);  
	   $query = $this->db->get();
       return $query->result();
    }
	
	function loginMe($email, $password) {
	    //$where =" (role= '1')";
        $this->db->from($this->admins);
		$this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $query = $this->db->get();
		$numRow = $query->num_rows();
		if($numRow > 0){
		 return $query->row_array();
		}
    }
	//Admin Users
    function Users(){
		$where = ' role=1 OR role=2 OR role=3  OR role=4 ';
       $this->db->from($this->admins);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	
	// Hotel Module
	function hotels(){
		if($this->session->userdata('role')==1){
		  $where =$this->admins.".role =2" ;
		}
		if($this->session->userdata('role')==2){
			 $where =$this->hotels.".user_id =".$this->session->userdata('user_id') ;
		}
		$select =$this->admins.".*,".$this->hotels.".hotel_name,".$this->hotels.".id as hotelid";	   
		$this->db->select($select);
		$this->db->from($this->admins);
		$this->db->join($this->hotels, $this->hotels.'.user_id =' .$this->admins.'.id','left');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function hotelRegistartionWithAjax(){
		parse_str($_POST['formdata'], $formdata);
		
		if(!empty($formdata['hotel_id'])){
			$this->db->from($this->admins);
				$this->db->where('id',$formdata['hotel_id']);
				$query = $this->db->get();
				$count = $query->num_rows();
				$getData = $query->row_array();
			
			  $data = array(
						'username' =>$formdata['username'],
						'email' =>$formdata['email'],
						);
			 if($formdata['email']==$getData['email'])	{
				$this->db->where('id', $formdata['hotel_id']);
				$result = $this->db->update($this->admins, $data);	
				return 1;
			 }else{
				$this->db->from($this->admins);
				$this->db->where('email',$formdata['email']);
				$query = $this->db->get();
				$count = $query->num_rows();
				if($count >0){
					return 2;
				}
			 }			
		 		
		}
		else{
				$this->db->from($this->admins);
				$this->db->where('email',$formdata['email']);
				$query = $this->db->get();
				$count = $query->num_rows();
				if($count >0){
					return 2;
				}else{
					$password =$this->randomPassword();
					$data = array(
								'role' =>2,
								'username' =>$formdata['username'],
								'email' =>$formdata['email'],
								'password' =>md5($password),
								'plain_password' =>$password,
								'created_date' =>date("Y-m-d H:i:s"),
								'updated_date' =>date("Y-m-d H:i:s")
								
								);
					$result = $this->db->insert($this->admins, $data);
					if($result){
						$lastID = $this->db->insert_id();
						$data = array(
								'user_id' =>$lastID,
								'hotel_name' =>$formdata['hotel_name'],
								'created_date' =>date("Y-m-d H:i:s"),
								'updated_date' =>date("Y-m-d H:i:s")
								
								);
						 $this->db->insert($this->hotels, $data);
						return 1;
						}
				}
		}
		
	}
	function editHotel($Hotelid){
		$id = base64_decode($Hotelid);
		$select =$this->admins.".*,".$this->hotels.".hotel_name";	   
		$this->db->select($select);
		$this->db->from($this->admins);
		$this->db->join($this->hotels, $this->hotels.'.user_id =' .$this->admins.'.id','left');
		$this->db->where($this->admins.'.role', 2);
		$this->db->where($this->admins.'.id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	function deleteHotel(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->admins);
	}
	
	
	public function deactiveHotel(){
		$id = $this->input->post('id');  
		$data = array(
					'status' => 0
					);
		$this->db->where('id', $id);
		$result = $this->db->update($this->admins, $data);
		if($result){ return 1;}
		  
	}
	public function activeHotel(){
		$id = $this->input->post('id');  
		$data = array(
					'status' => 1
					);
		$this->db->where('id', $id);
		$result = $this->db->update($this->admins, $data);
		if($result){ return 1;}
		  
	}
	
// End here//
	// Property
	 public function addProperty(){
		parse_str($_POST['formdata'], $formdata);
		
		
		/*$guest =0;
		$ptype =$formdata['room_type'][0];
		foreach($formdata['room_type'] as $room_type){
			
			
			if($room_type==1){
				$guest = $guest + 2;
			}
			if($room_type==2){
				$guest = $guest + 4;
			}
		}
		
		 $room_type = implode(',',$formdata['room_type']);
		// $room_type = json_encode($formdata['room_type']);
		*/
		
		$ptype = $formdata['number_of_guest'];
		$room_type = $formdata['number_of_guest'];
		$guest = $formdata['number_of_guest'];
		if(!empty($formdata['property_id'])){
			$data = array(
					'created_by' =>$this->session->userdata('user_id'),
					'hotel_id' =>$formdata['hotel_id'],
					'propertyname' =>$formdata['propertyname'],
					'ptype' =>$ptype,
					'property_type' =>$formdata['property_type'],
					'price' =>$formdata['price'],
					'discount' =>$formdata['discount'],
					'after_discount_price' =>$formdata['after_discount_price'],
					'description' =>$formdata['description'],
					'location' =>$formdata['location'],
					'address' =>$formdata['address'],
					'rating' =>$formdata['rating'],
					'rating_status' =>$formdata['rating_status'],
					'check_in' =>$formdata['check_in'],
					'check_out' =>$formdata['check_out'],
					'check_in_mode' =>$formdata['check_in_mode'],
					'check_out_mode' =>$formdata['check_out_mode'],
					'pro_type' =>$room_type,
					'guest' =>$guest,
					'room_category' =>$formdata['room_category'],
					'number_of_room' =>$formdata['number_of_room']
					
					);
					
				$this->db->where('id', $formdata['property_id']);
				$result = $this->db->update($this->properties, $data);
				return 1;			
		}
		else{
		$data = array(
					
					'hotel_id' =>$formdata['hotel_id'],
					'propertyname' =>$formdata['propertyname'],
					'ptype' =>$ptype,
					'property_type' =>$formdata['property_type'],
					'price' =>$formdata['price'],
					'discount' =>$formdata['discount'],
					'after_discount_price' =>$formdata['after_discount_price'],
					'description' =>$formdata['description'],
					'location' =>$formdata['location'],
					'address' =>$formdata['address'],
					'rating' =>$formdata['rating'],
					'rating_status' =>$formdata['rating_status'],
					'check_in' =>$formdata['check_in'],
					'check_out' =>$formdata['check_out'],
					'check_in_mode' =>$formdata['check_in_mode'],
					'check_out_mode' =>$formdata['check_out_mode'],
					'pro_type' =>$room_type,
					'guest' =>$guest,
					'created_date' =>date("Y-m-d H:i:s"),
					'updated_date' =>date("Y-m-d H:i:s"),
					'room_category' =>$formdata['room_category'],
					'number_of_room' =>$formdata['number_of_room']
					);
		$result = $this->db->insert($this->properties, $data);
	    return 1;
		}
			
	}
	
	
	function Properties(){
		$url =explode('/',$_SERVER['REQUEST_URI']);
		$select =$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city";	   
		$this->db->select($select);
		$this->db->from($this->properties);
		$this->db->join($this->properties_type_size, $this->properties_type_size.'.id =' .$this->properties.'.ptype','left');
		$this->db->join($this->hotels, $this->hotels.'.id =' .$this->properties.'.hotel_id','left');
		$this->db->join($this->cities, $this->cities.'.id =' .$this->properties.'.location','left');
		if(in_array('rooms',$url)){
			
			if($this->session->userdata('role')==2){
				$where =$this->properties.".created_by =".$this->session->userdata('user_id');
				$this->db->where($where);
			}
			
			
			$this->db->where($this->properties.'.property_type', 'room');
		}
		if(in_array('tents',$url)){
			$this->db->where($this->properties.'.property_type', 'tent');
		}
		if(in_array('cottages',$url)){
			$this->db->where($this->properties.'.property_type', 'cottage');
		}
		if(in_array('campings',$url)){
			$this->db->where($this->properties.'.property_type', 'camping');
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	function editProperty($type,$pid){
		$id = base64_decode($this->uri->segment(4));
		$select =$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city";	   
		$this->db->select($select);
		$this->db->from($this->properties);
		$this->db->join($this->properties_type_size, $this->properties_type_size.'.id =' .$this->properties.'.ptype','left');
		$this->db->join($this->hotels, $this->hotels.'.id =' .$this->properties.'.hotel_id','left');
		$this->db->join($this->cities, $this->cities.'.id =' .$this->properties.'.location','left');
		$this->db->where($this->properties.'.id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function deleteProperty(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->properties);
	}
	
	// End Here
	
	function allUsers(){
		$where_in = array('2','3','4');
		$this->db->from($this->admins);
		$this->db->where_in('role', $where_in);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalHotels(){
		$this->db->from($this->admins);
		$this->db->where_in('role', 2);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalRooms(){
		$this->db->from($this->properties);
		if($this->session->userdata('role')==2){
				$where =$this->properties.".created_by =".$this->session->userdata('user_id');
				$this->db->where($where);
			}
		$this->db->where('property_type', 'room');
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalTents(){
		$this->db->from($this->properties);
		$this->db->where_in('property_type', 'tent');
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalCottage(){
		$this->db->from($this->properties);
		$this->db->where_in('property_type', 'cottage');
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalCamping(){
		$this->db->from($this->properties);
		$this->db->where_in('property_type', 'camping');
		$query = $this->db->get();
		return $query->num_rows();
    }
	public function addGallery(){
			$tid = base64_decode($id);
			if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		  
	}
	public function addpropertyImages(){
		
		$id = base64_decode($this->uri->segment(4));
		$ptype = $this->uri->segment(3);
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
				
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++){   
			$ext = pathinfo($files['userfile']['name'][$i]);
			$files['userfile']['name'][$i] = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
			$this->upload->initialize($this->set_upload_options());
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				return $array['error'];
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$this->resizeImage($_FILES['userfile']['name']);
				$InData = array(
							'gallery_image' => $_FILES['userfile']['name'],
							'property_id' => $id,
							'ptype' => $ptype,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->properties_galleries, $InData);
			}
		}
		
		
	
	}
	private function set_upload_options(){   
		//upload an image options
		$config = array();
		$config['upload_path'] = './assets/upload/gallery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}
	
	public function resizeImage($filename){
	$source_path = './assets/upload/gallery/' . $filename;
	$target_path = './assets/upload/gallery/thumbnail/';
	 
	
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          //'create_thumb' => TRUE,
          //'thumb_marker' => '_thumb',
          'width' => 124,
          'height' => 62
      );

		$this->load->library('image_lib',$config_manip);
		$this->image_lib->initialize($config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
		$this->image_lib->clear();
   }
	function propertyImages(){
	   $ptype =$this->uri->segment(3);
	   $id = base64_decode($this->uri->segment(4));
	   $this->db->where('ptype',$ptype);
       $this->db->where('property_id',$id);
	   $this->db ->from($this->properties_galleries);
	   $query = $this->db->get();
       return $query->result();
    }
	function deletePropertyImage(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->properties_galleries);
	}
	function AllAmenity(){
       $this->db->from($this->amenities);
	   $query = $this->db->get();
       return $query->result();
    }
	function propertyAmenity(){
	   $id = base64_decode($this->uri->segment(4));
       $this->db->select('amenity_id')->where('property_id',$id)->from($this->properties_amenities);
	   $query = $this->db->get();
       $result = $query->result();
		$arary= array();
		foreach($result as $value){
			$arary[]= $value->amenity_id;
		}
		return $arary;
    }
	 public function addpropertyAmenity(){
		$id = base64_decode($this->uri->segment(4));
		$this->db->where('property_id', $id);
		$this->db->delete($this->properties_amenities);
		 
		 
		    $amdata = array('amenity_id' =>implode(',',$_POST['amenity']));
		     $this->db->where('id',$id)->update($this->properties, $amdata); 
		 
		 
		foreach($_POST['amenity'] as $amenity){
			$data = array(
					'property_id' =>$id,
					'amenity_id' =>$amenity,
					'created_date' => date("Y-m-d H:i:s")
					);
		     $result = $this->db->insert($this->properties_amenities, $data); 
			 
		    }
		  
		 
	}
	
	
	// Service Module
	function services(){
		$this->db->from($this->services);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function addService(){
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/service/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				
				return $array['error'];
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		
		$data = array(
			'title' =>$_POST['title'],
			'description' =>$_POST['description'],
			'image' =>$_FILES['image']["name"],
			'created_date' =>date("Y-m-d H:i:s"),
			'updated_date' =>date("Y-m-d H:i:s")
		);
		$result = $this->db->insert($this->services, $data);
					
	}
	function editService($id){
		$id = base64_decode($id);
		$this->db->from($this->services);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function UpdateService($id){
		$uid = base64_decode($id);
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/service/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				
				return $array['error'];
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }else{
			   $image = $_POST['oldimage'];
		   }
		
		$data = array(
			'title' =>$_POST['title'],
			'description' =>$_POST['description'],
			'image' =>$image,
			'created_date' =>date("Y-m-d H:i:s"),
			'updated_date' =>date("Y-m-d H:i:s")
		);
		 $this->db->where('id',$uid);
		$result = $this->db->update($this->services, $data);
					
	}
	
	function deleteService(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->services);
	}
	
	// Category Module
	function category(){
		$this->db->from($this->category);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function addCategory(){
		
		
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/category/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				
				return $array['error'];
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		
		$data = array(
			'title' =>$_POST['title'],
			'description' =>$_POST['description'],
			'image' =>$_FILES['image']["name"],
			'created_date' =>date("Y-m-d H:i:s"),
			'updated_date' =>date("Y-m-d H:i:s")
		);
		$result = $this->db->insert($this->category, $data);
					
	}
	function editCategory($id){
		$id = base64_decode($id);
		$this->db->from($this->category);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function UpdateCategory($id){
		$uid = base64_decode($id);
		
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/category/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				
				return $array['error'];
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }else{
			   $image = $_POST['oldimage'];
		   }
		
		$data = array(
			'title' =>$_POST['title'],
			'description' =>$_POST['description'],
			'image' =>$image,
			'created_date' =>date("Y-m-d H:i:s"),
			'updated_date' =>date("Y-m-d H:i:s")
		);
		 $this->db->where('id',$uid);
		$result = $this->db->update($this->category, $data);
					
	}
	
	function deleteCategory(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->category);
	}
	public function addbannerImages(){
		
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++){  
		$ext = pathinfo($files['userfile']['name'][$i]);
		$files['userfile']['name'][$i] = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
			$this->upload->initialize($this->set_upload_options_banner());
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				return $array['error'];
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$InData = array(
							'banner_image' => $_FILES['userfile']['name'],
							'banner_name' => '',
							'type' => 'banner',
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->banners, $InData);
			}
		}
		

	}
	private function set_upload_options_banner(){   
		//upload an image options
		$config = array();
		$config['upload_path'] = './assets/upload/banner/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}
	function bannerImages(){
	   $this->db->from($this->banners);
	   $query = $this->db->get();
       return $query->result();
    }
	function deleteBannerImage(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->banners);
	}
	public function deactiveProperty(){
		$id = $this->input->post('id');  
		$availability_start_date = $this->input->post('availability_start_date');  
		$availability_end_date = $this->input->post('availability_end_date');  
		$data = array(
					'status' => 0,
					'availability_start_date' => $availability_start_date,
					'availability_end_date' => $availability_end_date
					
					);
		$this->db->where('id', $id);
		$result = $this->db->update($this->properties, $data);
		if($result){ return 1;}
		  
	}
	public function activeProperty(){
		$id = $this->input->post('id');  
		$data = array(
					'status' => 1
					);
		$this->db->where('id', $id);
		$result = $this->db->update($this->properties, $data);
		if($result){ return 1;}
		  
	}
	public function myDiscount(){
		parse_str($_POST['formdata'], $formdata);
		$this->db->from($this->discount);
				$this->db->where('hotelid',$this->session->userdata('user_id'));
				$query = $this->db->get();
				$count = $query->num_rows();
		if($count >0){
			$data = array(
					   'discount_value' =>$formdata['discount_value']
					);
				$this->db->where('hotelid', $this->session->userdata('user_id'));
				$result = $this->db->update($this->discount, $data);
				return 1;			
		}
		else{
			 $data = array(
						'hotelid' =>$this->session->userdata('user_id'),
						'discount_value' =>$formdata['discount_value']
						);
			$result = $this->db->insert($this->discount, $data);
	    return 1;
		}
			
	}
	public function getDiscount(){
		$this->db->from($this->discount);
		$this->db->where('hotelid',$this->session->userdata('user_id'));
		$query = $this->db->get();
		$count = $query->num_rows();
		return  $query->row_array();
	}
	public function getDiscountbyId(){
		$this->db->select('discount_value')->from($this->discount);
		//$this->db->where('hotelid',$id);
		$query = $this->db->get();
		$count = $query->num_rows();
		return  $query->row_array();
	}
	public function cronjob(){
		$currentdata = date('Y-m-d');
		$where =" availability_end_date ='".$currentdata."'";
		$this->db->select('id,availability_end_date')->where($where)->from($this->properties);
		$query = $this->db->get();
		$count = $query->num_rows();
		$result = $query->result();
		if($count > 0){
			$result = $query->result();
			foreach($result  as $value){
				$data = array(
					'status' => 1,
					'availability_start_date' => '',
					'availability_end_date' =>'',
					);
		$this->db->where('id', $value->id);
		$resultData = $this->db->update($this->properties, $data);
				
			}
		}
		
		die();
		
		
		  
	}
	
}

?>