<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model{
    
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
    protected $booking = 'booking';
	
	public function __construct(){
			parent::__construct();
			$this->load->database();
	}
    
	function allimages(){
		$array =array();
		$rowperpage = 3;
		$Sql = "SELECT count(*) as allcount from  {$this->properties_galleries}";
		$query = $this->db->query($Sql);
		$resultData = $query->result();
		$allcount = $resultData[0]->allcount;
		 
		$str = "SELECT * from  {$this->properties_galleries}
		order by  id DESC limit 0,$rowperpage ";
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$array['allcount'] = $allcount;
		return $array;
	}
	
	function loadMoreGallery(){
		$array =array();
		$row = $_POST['row'];
		$rowperpage = 3;
		$str = "SELECT * from  {$this->properties_galleries}
		order by  id DESC limit ".$row.",".$rowperpage;
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$html = '';
			if($count >0 ){
				foreach($result as $result){
					$id=$result->id;
					$url = base_url()."assets/upload/gallery/".$result->gallery_image;
					$html .='<div class="postcls" id="post_'.$id.'"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="'.$url.'"><img class="image-gallery" src="'.$url.'" alt=""></a></div>';
				}
			}
			return $html;
    }
	
	
	function roomimages(){
	    $ptype ='room';
	    $array =array();
		$rowperpage = 8;
		$Sql = "SELECT count(*) as allcount from  {$this->properties_galleries} where ptype='".$ptype."'";
		$query = $this->db->query($Sql);
		$resultData = $query->result();
		$allcount = $resultData[0]->allcount;
		 
		$str = "SELECT * from  {$this->properties_galleries} where  ptype='".$ptype."'
		order by  id DESC limit 0,$rowperpage ";
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$array['allcount'] = $allcount;
		return $array;
    }
	
	function loadMoreRoomGallery(){
		$ptype ='room';
		$array =array();
		$row = $_POST['row'];
		$rowperpage = 8;
		$str = "SELECT * from  {$this->properties_galleries} where  ptype='".$ptype."'
		order by  id DESC limit ".$row.",".$rowperpage;
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$html = '';
			if($count >0 ){
				foreach($result as $result){
					$id=$result->id;
					$url = base_url()."assets/upload/gallery/".$result->gallery_image;
					$html .='<div class="postroomcls" id="post_'.$id.'"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="'.$url.'"><img class="image-gallery" src="'.$url.'" alt=""></a></div>';
				}
			}
			return $html;
    }
	function tentimages(){
	   $ptype ='tent';
	    $array =array();
		$rowperpage = 3;
		$Sql = "SELECT count(*) as allcount from  {$this->properties_galleries} where ptype='".$ptype."'";
		$query = $this->db->query($Sql);
		$resultData = $query->result();
		$allcount = $resultData[0]->allcount;
		 
		$str = "SELECT * from  {$this->properties_galleries} where  ptype='".$ptype."'
		order by  id DESC limit 0,$rowperpage ";
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$array['allcount'] = $allcount;
		return $array;
    }
		function loadMoreTentGallery(){
		$ptype ='tent';
		$array =array();
		$row = $_POST['row'];
		$rowperpage = 3;
		$str = "SELECT * from  {$this->properties_galleries} where  ptype='".$ptype."'
		order by  id DESC limit ".$row.",".$rowperpage;
		$queryresult = $this->db->query($str);
		$result = $queryresult->result();
		$count = $queryresult->num_rows();

		$array['count'] = $count;
		$array['result'] = $result;
		$html = '';
			if($count >0 ){
				foreach($result as $result){
					$id=$result->id;
					$url = base_url()."assets/upload/gallery/".$result->gallery_image;
					$html .='<div class="posttentcls" id="post_'.$id.'"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="'.$url.'"><img class="image-gallery" src="'.$url.'" alt=""></a></div>';
				}
			}
			return $html;
    }
	
	
	
	 // Select total records
 public function getrecordCountRoom() {
	   $where  =" where 1 ";
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		
		
		
		if(!empty($searcharray['sortproperties']) && $searcharray['sortproperties']=='price-desc') {
		  $orderby = ' price DESC';
		}
		else if(!empty($searcharray['sortproperties']) && $searcharray['sortproperties']=='price-asc'){
		  $orderby = ' price ASC';
		}else{
			$orderby = ' id desc';
		}
		
		if(!empty($searcharray['ptype'])){
			if($searcharray['ptype']=='all'){
			}else{
				$where  .=" AND  property_type='".$searcharray['ptype']."'";
			}
		}
		if(!empty($searcharray['rating'])){
		    $rating =implode("','",$searcharray['rating']);
			 $where  .= " AND rating IN ( '".$rating."' )";
		}
		if(!empty($searcharray['location'])){
		  $where  .=" AND  location='".$searcharray['location']."'";
		}
		if(!empty($searcharray['range'])){
			
			if($searcharray['range']==1){
				$price =2000;
				$where  .= " AND price <=".$price ;
			}
			if($searcharray['range']==2){
				$price =2000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==3){
				$price =4000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==4){
				$price =6000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==5){
				$price =8000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==6){
				$price =1;
				$where  .= " AND price >=".$price ;
			}
		}
		
		if(!empty($searcharray['amenity'])){
		  //$amdata = implode(',',$searcharray['amenity']);
		  //$where  .=" AND  FIND_IN_SET(".$amdata.",amenity_id)";
		  $parts = $searcharray['amenity'];
		  for( $i=0; $i<=count($parts)-1; $i++ ) {
			  if($i==0){
				  $where  .=( " AND find_in_set('{$parts[$i]}' , amenity_id)" );
			  }else{
				  $where  .=( " OR find_in_set('{$parts[$i]}' , amenity_id)" );
			  }
					
			}
		}
		if(!empty($searcharray['search-by-filter']) && $searcharray['search-by-filter']==1){
			/*if(!empty($searcharray['adults'])){
				$partsadults = $searcharray['adults'];
						for( $i=0; $i<=count($partsadults)-1; $i++ ) {
							if($i==0){
								$where  .=" AND (  find_in_set('{$partsadults[$i]}',pro_type))";
							}else{
								 $ii = $i -1;
								$where  .=" AND (  find_in_set('{$partsadults[$ii]}',pro_type) OR  find_in_set('{$partsadults[$i]}',pro_type))";
								//$where  .=( " OR find_in_set('{$partsadults[$i]}' , pro_type)" );
							}
							
							
					}
		
			}*/
			
				
		}
		
		if(!empty($searcharray['adults'])){
				$sumadults =0;
				foreach($searcharray['adults'] as $value){
					$sumadults = $sumadults +  $value;
				}
					$where  .=" AND  guest='".$sumadults."'";
				}
		
		 $Sql ="select ".$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this->properties."
				left join  ".$this->properties_type_size." on ".$this->properties_type_size.".id=".$this->properties.".ptype
				left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
				left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".
				$where .' order by'.$orderby;
		
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount; 
		} 
		// Fetch records
	 	public function getDataRoom($rowno,$rowperpage) {
		$where  =" where 1 ";
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		if(!empty($searcharray['ptype'])){
			if($searcharray['ptype']=='all'){
				
			}else{
				$where  .=" AND  property_type='".$searcharray['ptype']."'";
			}
		}
		
		if(!empty($searcharray['sortproperties']) && $searcharray['sortproperties']=='price-desc') {
		  $orderby = ' price DESC';
		}
		else if(!empty($searcharray['sortproperties']) && $searcharray['sortproperties']=='price-asc'){
		  $orderby = ' price ASC';
		}else{
			$orderby = ' id desc';
		}
		if(!empty($searcharray['rating'])){
		    $rating =implode("','",$searcharray['rating']);
			 $where  .= " AND rating IN ( '".$rating."' )";
		}
		if(!empty($searcharray['location'])){
		  $where  .=" AND  location='".$searcharray['location']."'";
		}
		if(!empty($searcharray['range'])){
			
			if($searcharray['range']==1){
				$price =2000;
				$where  .= " AND price <=".$price ;
			}
			if($searcharray['range']==2){
				$price =2000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==3){
				$price =4000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==4){
				$price =6000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==5){
				$price =8000;
				$where  .= " AND price >=".$price ;
			}
			if($searcharray['range']==6){
				$price =1;
				$where  .= " AND price >=".$price ;
			}
		  
		}
		if(!empty($searcharray['amenity'])){
		  //$amdata = implode(',',$searcharray['amenity']);
		  //$where  .=" AND  FIND_IN_SET(".$amdata.",amenity_id)";
		  $parts = $searcharray['amenity'];
		  for( $i=0; $i<=count($parts)-1; $i++ ) {
			  if($i==0){
				  $where  .=( " AND find_in_set('{$parts[$i]}' , amenity_id)" );
			  }else{
				  $where  .=( " OR find_in_set('{$parts[$i]}' , amenity_id)" );
			  }
					
			}
		}
		if(!empty($searcharray['search-by-filter']) && $searcharray['search-by-filter']==1){
			/*if(!empty($searcharray['adults'])){
				$partsadults = $searcharray['adults'];
						for( $i=0; $i<=count($partsadults)-1; $i++ ) {
							if($i==0){
								$where  .=" AND (  find_in_set('{$partsadults[$i]}',pro_type))";
							}else{
								 $ii = $i -1;
								$where  .=" AND (  find_in_set('{$partsadults[$ii]}',pro_type) OR  find_in_set('{$partsadults[$i]}',pro_type))";
								//$where  .=( " OR find_in_set('{$partsadults[$i]}' , pro_type)" );
							}
							
							
					}
		
			}*/
			
		}
		if(!empty($searcharray['adults'])){
				$sumadults =0;
				foreach($searcharray['adults'] as $value){
					$sumadults = $sumadults +  $value;
				}
					$where  .=" AND  guest='".$sumadults."'";
				}
		
			
			$Sql ="select ".$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this->properties."
				left join  ".$this->properties_type_size." on ".$this->properties_type_size.".id=".$this->properties.".ptype
				left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
				left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".$where." ORDER BY ".$orderby." LIMIT ".$rowno." , ".$rowperpage;
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allRooms){
					//$array[] = $allRooms;
					$array[$key]['id'] = $allRooms['id'];
					$array[$key]['pid'] =  base64_encode($allRooms['id']);
					$array[$key]['property_type'] =  $allRooms['property_type'];
					$array[$key]['hotel_name'] =  $allRooms['hotel_name'];
					$array[$key]['price'] =  $allRooms['price'];
					$array[$key]['after_discount_price'] =  $allRooms['after_discount_price'];
					$array[$key]['city'] =  $allRooms['city'];
					$array[$key]['rating'] =  $allRooms['rating'];
					$array[$key]['description'] =  $allRooms['description'];
					$array[$key]['discount'] = $allRooms['discount'];
					$array[$key]['address'] = $allRooms['address'];
					$array[$key]['rating_status'] = $allRooms['rating_status'];
					$array[$key]['propertyname'] = $allRooms['propertyname'];
					//Property Images
						//$this->db->where('ptype','room');
						$this->db->where('property_id',$allRooms['id']);
						
						$this->db ->select('gallery_image')->from($this->properties_galleries);
						$Gquery = $this->db->get();
						$gallery = $Gquery->result();
						
					   $array[$key]['gallery'] = $gallery;
					// End Here//

			$this->db->select('amenity_id')->where('property_id',$allRooms['id'])->from($this->properties_amenities);
			$query = $this->db->get();
			$result = $query->result();
			
			$select_amenities =$this->properties_amenities.".amenity_id,".$this->amenities.".amenity_name";	   
			$this->db->select($select_amenities);
			$this->db->from($this->properties_amenities);
			$this->db->join($this->amenities, $this->amenities.'.id =' .$this->properties_amenities.'.amenity_id','left');
			$this->db->where('property_id',$allRooms['id']);
			$Aquery = $this->db->get();
			$amenities = $Aquery->result();
			$array[$key]['amenities'] = $amenities;
			}
			
			
			return  $array;
		} 
		
		public function getsingleDetails($id) {
			$pid = base64_decode($this->uri->segment(3));
			$where  =" where ".$this->properties.".id='".$pid."' ";
		
			
			$Sql ="select ".$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this->properties."
				left join  ".$this->properties_type_size." on ".$this->properties_type_size.".id=".$this->properties.".ptype
				left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
				left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".$where;
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->row_array();
			$array = array();
			
					//$array[] = $result;
					$array['id'] = $result['id'];
					$array['pid'] =  base64_encode($result['id']);
					$array['property_type'] =  $result['property_type'];
					$array['hotel_name'] =  $result['hotel_name'];
					$array['price'] =  $result['price'];
					$array['after_discount_price'] =  $result['after_discount_price'];
					
					$array['city'] =  $result['city'];
					$array['rating'] =  $result['rating'];
					$array['description'] =  $result['description'];
					$array['discount'] = $result['discount'];
					$array['address'] = $result['address'];
					$array['rating_status'] = $result['rating_status'];
					$array['check_in'] = $result['check_in'];
					$array['check_in_mode'] = $result['check_in_mode'];
					$array['check_out'] = $result['check_out'];
					$array['check_out_mode'] = $result['check_out_mode'];
					$array['propertyname'] = $result['propertyname'];
					//Property Images
						$this->db->where('ptype','room');
						$this->db->where('property_id',$pid);
						$this->db ->select('gallery_image')->from($this->properties_galleries);
						$Gquery = $this->db->get();
						$gallery = $Gquery->result();
						
					   $array['gallery'] = $gallery;
					// End Here//

			$this->db->select('amenity_id')->where('property_id',$pid)->from($this->properties_amenities);
			$query = $this->db->get();
			$result = $query->result();
			
			$select_amenities =$this->properties_amenities.".amenity_id,".$this->amenities.".amenity_name";	   
			$this->db->select($select_amenities);
			$this->db->from($this->properties_amenities);
			$this->db->join($this->amenities, $this->amenities.'.id =' .$this->properties_amenities.'.amenity_id','left');
			$this->db->where('property_id',$pid);
			$Aquery = $this->db->get();
			$amenities = $Aquery->result();
			$array['amenities'] = $amenities;
			
			return  $array;
		} 
		
		
	/*public function get_count($rating='',$location='',$orderby='',$range,$ptype) {
		//$where  =" where property_type='room' ";
		if($ptype!= ''){
		  $where  =" where property_type='".$ptype."'";
		}else{
			$where  =" where property_type='room' ";
		}
		
		
		if($rating!= ''){
		  $where  .=" AND  rating='".$rating."'";
		}
		if($location!= ''){
		  $where  .=" AND  location='".$location."'";
		}
		if($range!= ''){
		   $where  .= " AND price <=".$range;
		}
		echo $Sql ="select ".$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this->properties."
				left join  ".$this->properties_type_size." on ".$this->properties_type_size.".id=".$this->properties.".ptype
				left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
				left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".
				$where.' order by'.$orderby;
				
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount;
	}

    public function get_rooms($rowno,$rowperpage,$rating='',$location='',$orderby='',$range='',$ptype='') {
		//$where  =" where property_type='room' ";
		if($ptype!= ''){
		  $where  =" where property_type='".$ptype."'";
		}else{
			$where  =" where property_type='room' ";
		}
		if(!empty($rating)){
		  $where  .=" AND  rating='".$rating."'";
		}if($location!= ''){
		  $where  .=" AND  location='".$location."'";
		}
		if($range!= ''){
		  $where  .= " AND price <=".$range;
		}
		
			$Sql ="select ".$this->properties.".*,".$this->properties_type_size.".properties_type_size,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this->properties."
				left join  ".$this->properties_type_size." on ".$this->properties_type_size.".id=".$this->properties.".ptype
				left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
				left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".$where." ORDER BY ".$orderby." LIMIT ".$rowno." , ".$rowperpage;
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allRooms){
					//$array[] = $allRooms;
					$array[$key]['id'] = $allRooms['id'];
					$array[$key]['pid'] =  base64_encode($allRooms['id']);
					$array[$key]['property_type'] =  $allRooms['property_type'];
					$array[$key]['hotel_name'] =  $allRooms['hotel_name'];
					$array[$key]['price'] =  $allRooms['price'];
					$array[$key]['after_discount_price'] =  $allRooms['after_discount_price'];
					$array[$key]['city'] =  $allRooms['city'];
					$array[$key]['rating'] =  $allRooms['rating'];
					$array[$key]['description'] =  $allRooms['description'];
					$array[$key]['discount'] = $allRooms['discount'];
					$array[$key]['address'] = $allRooms['address'];
					$array[$key]['rating_status'] = $allRooms['rating_status'];
					//Property Images
						$this->db->where('ptype','room');
						$this->db->where('property_id',$allRooms['id']);
						$this->db ->from($this->properties_galleries);
						$Gquery = $this->db->get();
						$gallery = $Gquery->result();
					   $array[$key]['gallery'] = $gallery;
					// End Here//

			$this->db->select('amenity_id')->where('property_id',$allRooms['id'])->from($this->properties_amenities);
			$query = $this->db->get();
			$result = $query->result();
			
			$select_amenities =$this->properties_amenities.".amenity_id,".$this->amenities.".amenity_name";	   
			$this->db->select($select_amenities);
			$this->db->from($this->properties_amenities);
			$this->db->join($this->amenities, $this->amenities.'.id =' .$this->properties_amenities.'.amenity_id','left');
			$this->db->where('property_id',$allRooms['id']);
			$Aquery = $this->db->get();
			$amenities = $Aquery->result();
			$array[$key]['amenities'] = $amenities;
			}
			return  $array;
	}*/
	
 public function bookNow() {
	    $session_Array = array('browser_id' => session_id());
		$this->session->set_userdata($session_Array);
		$browser_id = $this->session->userdata('browser_id');
		
		$this->db->where('browser_id', $browser_id);
		$this->db->delete($this->booking);
	   
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
			
		}
		$pid = $_POST['pid'];
	    $adults = $searcharray['adults'];
		if(!empty($searcharray['location'])){
			$location = $searcharray['location'];
		}else{
			$location = 0;
		}
		$check_in = $searcharray['check_in'];
		$check_out = $searcharray['check_out'];
		
		$counter =1;
		$roomscount = count($adults);
		$guest = 0;
		foreach($adults as $adults){
			$guest = $guest + $adults;
			$data= array(
			'browser_id' => $browser_id,
			'pid' =>$pid,
			'roomno' =>$counter,
			'adults' =>$adults,
			'location_id' =>$location,
			'check_in_date' =>$check_in,
			'check_out_date' =>$check_out,
			'roomscount' =>$roomscount,
			);
			
		 $result = $this->db->insert($this->booking, $data);
		 $lastID = $this->db->insert_id();
		 $counter = $counter + 1;
		}
		$updateData = array('guestcount' => $guest);
		return $update =$this->db->where('browser_id',$browser_id)->update($this->booking,$updateData);
	  
	}
	public function getbookingDetails() {
		$browser_id = $this->session->userdata('browser_id');
		$where  =" where ".$this->booking.".browser_id='".$browser_id."' ";
		$Sql ="select ".$this->booking.".*, ".$this->properties.".*,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this-> booking."
			left join  ".$this->properties." on ".$this->properties.".id=".$this->booking.".pid
			left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
			left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".$where;
			$query = $this->db->query($Sql);
			//$numRow = $query->num_rows();
			return $result = $query->row_array();
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
	
	 public function orderbooking(){
		 $this->session->unset_userdata('uid');
		 $this->session->unset_userdata('browser_id');
		
		$session_Array = array('browser_id' => session_id());
		$this->session->set_userdata($session_Array);
		$browser_id = $this->session->userdata('browser_id');
		 $password =$this->randomPassword();
		 parse_str($_POST['formdata'], $formdata);
		  $userdata = array(
					
					'fname' =>$formdata['fname'],
					'lname' =>$formdata['lname'],
					'email' =>$formdata['emailid'],
					'phoneno' =>$formdata['phoneno'],
					'password' =>md5($password),
					'plain_password' =>$password,
					'created_date' =>date("Y-m-d"),
					);
		 $result = $this->db->insert($this->users, $userdata);
		 $lastID = $this->db->insert_id();
		  $data = array(
					'user_id' =>$lastID,
					'fname' =>$formdata['fname'],
					'lname' =>$formdata['lname'],
					'emailid' =>$formdata['emailid'],
					'phoneno' =>$formdata['phoneno'],
					'amount' =>$formdata['amount']
					
					);
					
				$this->db->where('browser_id', $browser_id);
				$result = $this->db->update($this->booking, $data);
				$session_Array = array('uid' => $lastID);
				$this->session->set_userdata($session_Array);
				return 1;			
	}
	
	function getbookingDetailsbyID(){
	  $uid = $this->session->userdata('uid');
       $this->db->from($this->booking);
	   $this->db->where('user_id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	public function bookingbyguest() {
		$browser_id = $this->session->userdata('browser_id');
		$where  =" where ".$this->booking.".browser_id='".$browser_id."' ";
		$Sql ="select  adults  from ".$this->booking.$where;
			$query = $this->db->query($Sql);
			//$numRow = $query->num_rows();
			return $result = $query->result_array();
			
	}
	function getuserinfo(){
	  $uid = $this->session->userdata('uid');
       $this->db->from($this->users);
	   $this->db->where('id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	public function getbookingDetailsForPdf() {
		$uid = $this->session->userdata('uid');
		$where  =" where ".$this->booking.".user_id='".$uid."' ";
		$Sql ="select ".$this->booking.".*, ".$this->properties.".*,".$this->hotels.".hotel_name as hotel_name,".$this->cities.".name as city     from  ".$this-> booking."
			left join  ".$this->properties." on ".$this->properties.".id=".$this->booking.".pid
			left join  ".$this->hotels." on ".$this->hotels.".id=".$this->properties.".hotel_id
			left join  ".$this->cities." on ".$this->cities.".id=".$this->properties.".location".$where;
			$query = $this->db->query($Sql);
			//$numRow = $query->num_rows();
			return $result = $query->row_array();
	}
	
}
?>