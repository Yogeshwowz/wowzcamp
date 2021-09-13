<?php
	class Payment_model extends CI_Model
	{
		protected $booking = 'booking';
		protected $properties = 'properties';
		
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
			 $this->db->update($this->booking, $updatedata);

			$this->db->select('pid,roomscount')->from($this->booking);
			$this->db->where('bookingid',$chargeJson['metadata']['bookingid']);  
			$queryRB = $this->db->get();
			$rsB = $queryRB->row_array();

			
			if($rsB['pid']){
				$this->db->select('number_of_room')->from($this->properties);
				$this->db->where('id',$rsB['pid']);  
				$queryR = $this->db->get();
				$rs = $queryR->row_array();
				if($rs['number_of_room']){
					$leftRooms = $rs['number_of_room'] - $rsB['roomscount'];
					$data_1 = array(
							'number_of_room' =>$leftRooms,
							
							);
				 $this->db->where('id', $rsB['pid']);
				return  $this->db->update($this->properties, $data_1);	

		
			}
		}


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