<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
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
        $data['title'] = 'Home';
		$data['banner'] = $this->administrator_model->bannerImages();
		$data['services'] = $this->administrator_model->services();
		$data['category'] = $this->administrator_model->category();
		$data['allimages'] = $this->dashboard_model->allimages();
		$data['roomimages'] = $this->dashboard_model->roomimages();
		$data['tentimages'] = $this->dashboard_model->tentimages();
		$data['city'] = $this->administrator_model->getCity();
			$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/index', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	
    public function rooms(){
        $data['title'] = 'rooms';
		$data['city'] = $this->administrator_model->getCity();
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		if(!empty($_POST['homesearch'])){
			$data['postdata']  = $_POST;
		}
		if(!empty($_POST['ptype'])){
			$data['postdata']  = $_POST;
		}
		$this
            ->load
            ->view('template/frontend/header',$data);
        $this
            ->load
            ->view('home/rooms', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	 public function tents(){
        $data['title'] = 'tents';
		$data['city'] = $this->administrator_model->getCity();
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/tents', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	public function cottage(){
        $data['title'] = 'cottage';
		$data['city'] = $this->administrator_model->getCity();
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/cottage', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	public function camping(){
        $data['title'] = 'camping';
		$data['city'] = $this->administrator_model->getCity();
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/camping', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	public function singleDetails($id){
        $data['title'] = 'Details';
		$data['city'] = $this->administrator_model->getCity();
		$data['result'] = $this->dashboard_model->getsingleDetails($id);
		$data['allAmenity'] = $this->administrator_model->AllAmenity();
		$data['booking'] = $this->dashboard_model->getbookingDetails();
		$data['bookingbyguest'] = $this->dashboard_model->bookingbyguest();
		
		
		if(!empty($data['booking'])){
			$data['postdata']  = $data['booking']['roomscount'];
		}
		
		$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/single-details', $data);
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
	
	
	public function bookNow(){
		$data = $this->dashboard_model->bookNow();
		echo 1;
	}
	
	 public function booking(){
        $data['title'] = 'booking';
		$data['result'] = $this->dashboard_model->getbookingDetails();
		$this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/booking', $data);
        $this
            ->load
            ->view('template/frontend/footer');
     }
	 public function paymentMethod(){
		
		$data['result'] = $this->dashboard_model->getbookingDetailsbyID();
		$this->load->view('template/frontend/header');
		$this->load->view('payment/paymentmethod',$data);
		$this->load->view('template/frontend/footer');
	}
	public function orderbooking(){
		$data = $this->dashboard_model->orderbooking();
		echo 1;
	}
	public function thanks(){
		$result = $this->dashboard_model->getuserinfo();
		
		$to = $result['email'];
		$subject = "Thank For Booking";
		$message ="<html>
					<head>
					<title>WOWz Stays</title>
					</head>
					<body>
					<p>Dear User</p>
					<table>
					<tr>
					<td><p>Thank you for booking with WOWzStay, We would love to host you.</p></td>
					</tr>
					<tr>
					<td><p>Please find attached receipt of booking details.</p></td>
					</tr>
					
					
					<tr><td><p>Thank You</p></td>
					</tr>
					</tr>
					<tr><td><p>WOWzStay</p></td>
					</tr>
					</table>
					</body>
					</html>";
			  $send = $this->send($to,$subject,$message);	
				if($send){
					//echo"mailsend";
				}else{
					//echo"not send";
				}
			
		$this->load->view('template/frontend/header');
		$this->load->view('home/thanks');
		$this->load->view('template/frontend/footer');
	}
	function send($to,$subject,$message) {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $to;
        $subject = $subject;
        $message = $message;
		$this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) { return 1;} else { return 0;}
    }
	
	 public function emailsend(){
		 $to = "keshav.wowz@gmail.com";
		$subject = "Thank you for registering Us";
					echo $message ="<html>
					<head>
					<title>WOWz Stays</title>
				
					</head>
					<body>
					<table sytle='border: 1px solid #ccc;border-radius: 5px;padding: 20px;margin: 0 20px;'>
					<tr>
					<td><p style='margin: 0;'>Dear Sir,</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Namaste!</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;padding: 10px 0 5px;'>AS per our discussion we are pleased to confirm your booking as per details below :-</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Guest Name : Mr Ankush Surajmukhi x 02</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Hotel Name: Snow Peak Retreat & Cottages, Manali, Himachal Pradesh</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Check in: 2 July 2021</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Check out: 5 July 2021</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Night: 03</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Room Category: 01 double Premium room (Private Balcony)</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Meal:- without meal</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;padding: 10px 0 5px;'>With honeymoon inclusion as per detail below:-</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Applicable amount as :- Rs 10500 in total</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Advance received:- Rs 4000 in total</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Balance amount Rs 6500 in total</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;padding-top: 10px;'>Package Includes</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Welcome Drinks on Arrival (non alcoholic)</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Complimentary 01 mineral water in room during stay</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Daily Morning tea & Coffee</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Children below 5 years complimentary (without extra bed)</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Tea/Coffee maker in Each Room complimentary in-room tea/ coffee)</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>15 % Discount on additional Food and beverages</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>Free WIFI service</p></td>
					</tr>
					<tr>
					<td><p style='margin: 0;'>All Taxes Included (Inclusive of all Tax)</p></td>
					</tr>
					</table>
					
					</body>
					</html>";
			$send = $this->send($to,$subject,$message);	
				if($send){
					echo"mailsend";
				}else{
					echo"not send";
				}
	 }
	
} 
?>
