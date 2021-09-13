<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends CI_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
       $this->load->model('Payment_model');
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {
        $this->load->view('templates/header');
         $this->load->view('home/payment');
         $this->load->view('templates/footer');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripePost(){
	$uid = $this->session->userdata('uid');
	$serviceID = 1;
	$email  =  	 $_POST['emailId'];
	$nickname  = $_POST['emailId'];
	require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
		if($serviceID==3){
			$plan = \Stripe\Plan::create(array(
		"product" => [
			"name" => $planName
		],
		
		"metadata" => [
			"order_id" => $order_id,
			'carduserName' => $this->input->post('userName')
		],		
		"nickname" => $nickname,
		"interval" => "month",
		"interval_count" => $interval_count,
		"currency" => "EUR",
		"amount" => $amount * 100,
		));
		$customer = \Stripe\Customer::create([
			'email' => $email,
			'source'  =>$this->input->post('stripeToken'),
		]);
		$subscription = \Stripe\Subscription::create(array(
		"customer" => $customer->id,
		"items" => array(
		array(
		"plan" => $plan->id,
		),
		),
		));
		
		$subscriptionJson = $subscription->jsonSerialize();
		 if($subscriptionJson!==''){
		 	 $this->Payment_model->add_payment($subscriptionJson); 
		 	$this->session->set_flashdata('payment_success', 'Your payment has been credited successfully. Now you can Search data According to your subscription plan');		
		 	 redirect('searching');
		} 
			
		}
		
		else {
			  $charge = \Stripe\Charge::create ([
                "amount" => $_POST['amount'] * 100,
                "currency" => "INR",
                "source" => $this->input->post('stripeToken'),
                "description" => "Payment from wowz Stays" ,
				 "metadata" => array("uid" =>$uid,'carduserName' => $this->input->post('userName'),'bookingid'=>$this->input->post('bookingid'))
				]);
			   $chargeJson = $charge->jsonSerialize();
			   
			if($chargeJson!==''){
				  $this->Payment_model->update_plan($chargeJson); 
				   //$this->session->set_flashdata('payment_success', 'Your payment has been credited successfully. Now you can search data According to your subscription plan');
					redirect('thanks');				   
				  	   
			   }  
		}
		
	}
}