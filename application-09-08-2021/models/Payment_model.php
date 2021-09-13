<?php
	class Payment_model extends CI_Model
	{
		protected $booking = 'booking';
		public function __construct()
		{
			$this->load->database();
		}


	public function update_plan($chargeJson){
		$currentDate = date("Y-m-d H:i:s");
		$uid = $chargeJson['metadata']['uid'];
		$amount  = $chargeJson['amount']/100;
		if($chargeJson['metadata']['uid']==$this->session->userdata('uid')){
			
			$updatedata = array('amount' => $amount,'status' =>1,'transaction_id'=>$chargeJson['balance_transaction']);
			
		    $this->db->where('user_id', $uid);		  
			return  $this->db->update($this->booking, $updatedata);
		}
	}
	public function update_plan_byPaypal(){
	
		$order_array  = json_decode($_REQUEST['cm']);
		$uid = $order_array->user_id;
		$buy_plan = $order_array->buy_plan;
		$amount  = $_REQUEST['amt'];
		$tx  = $_REQUEST['tx'];
		$st  = $_REQUEST['st'];
		
		if($uid==$this->session->userdata('uid')){
			if($buy_plan==1){$cpoints = 5;}
			if($buy_plan==2){$cpoints = 10;}
			if($buy_plan==3){$cpoints = 15;}
			$updatedata = array(
							'user_plan' => $buy_plan,
							'amount' => $amount,
							'cpoints' => $cpoints
							
						);
				 $this->db->where('user_id', $uid);		  
               return  $this->db->update($this->booking, $updatedata);
		}
	}
				
		


	
		
}