<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Payment extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('login_model');
        
        $this->load->model('Payment_model');
    }

    /**
     * Index Page for this controller.
     */
   

	 public function paymentMethod(){
		$this->load->view('template/frontend/header');
		$this->load->view('payment/paymentmethod');
		$this->load->view('template/frontend/footer');
		
		
    }
    
   
}

?>