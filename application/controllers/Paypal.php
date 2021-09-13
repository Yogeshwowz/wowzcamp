<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Paypal extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('paypal_lib');
		$this->load->model('Payment_model');
		

	}


 public function payment(){
//echo"<pre>"; print_r($_POST);die();
		$userID = $this->session->userdata('uid'); //admin id
		$buy_plan = $_POST['buy_plan'];
		$buy_plan = base64_decode($_POST['buy_plan']);
		$customdata =array('buy_plan'=>$buy_plan,'user_id'=> $userID);
		
		 $custom = json_encode($customdata);
		
		//echo"<pre>";
	//	print_r($order_id_array);
		//die();
		$businessEmail = "poonam-merchant@gmail.com";
		$amount =$_POST['amount'];
		//$amount =241.80;
		//Set variables for paypal form
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
       
        $logo = base_url().'assets/images/codexworld-logo.png';
        $this->paypal_lib->add_field('business',$businessEmail);
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', "Payment of this ");
        $this->paypal_lib->add_field('custom', $custom);
       //$this->paypal_lib->add_field('custom', '5');
         
        $this->paypal_lib->add_field('item_number', "testing");
        $this->paypal_lib->add_field('amount',  $amount);  
          
        $this->paypal_lib->add_field('notify_url', $notifyURL);      
        //$this->paypal_lib->image($logo);
        
        //$this->paypal_lib->paypal_auto_form();
		if(!empty($businessEmail)){
			$this->paypal_lib->paypal_auto_form();   
		}else{
			$this->session->set_flashdata('danger', 'admin have not paypalid of this candidate');
			redirect('cart');
		}
       
    }


	function success(){
	    $this->Payment_model->update_plan_byPaypal(); 
		$this->session->set_flashdata('payment_success', 'Your payment has been credited successfully. Now you can search data According to your subscription plan');
		redirect('profile');	 
	}
         
    function cancel(){
       redirect('profile');
    }
         
         function ipn(){
            //paypal return transaction details array
            /*$paypalInfo    = $this->input->post();
            
            $data['user_id'] = $paypalInfo['custom'];
            $data['product_id']    = $paypalInfo["item_number"];
            $data['txn_id']    = $paypalInfo["txn_id"];
            $data['payment_gross'] = $paypalInfo["payment_gross"];
            $data['currency_code'] = $paypalInfo["mc_currency"];
            $data['payer_email'] = $paypalInfo["payer_email"];
            $data['payment_status']    = $paypalInfo["payment_status"];

            $paypalURL = $this->paypal_lib->paypal_url;        
            $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
            
            //check whether the payment is verified
            if(preg_match("/VERIFIED/i",$result)){
                //insert the transaction data into the database
               // $this->product->insertTransaction($data);

                $result = $this->Paypal_model->insertTransaction($data);
            }*/
        }
}