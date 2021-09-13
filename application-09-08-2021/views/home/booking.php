<?php 

if(!empty($result['created_by'])){
	$discountbyid = $this->administrator_model->getDiscountbyId($result['created_by']);
     $discount_value = $discountbyid['discount_value'];

}else{
	$discount_value = 0;
}

	if(!empty($result['check_in_date']) && !empty($result['check_out_date'])) { 
	$start_date = strtotime($result['check_in_date']);
	$end_date = strtotime($result['check_out_date']);
	$nightcount =  ($end_date - $start_date)/60/60/24;
} 
	if($nightcount >0){
	$amount  = $result['after_discount_price'] * ($result['roomscount'] * $nightcount);
	}else{
	$amount  = $result['after_discount_price'] * $result['roomscount'];
	}
	$amount;

 
	/*if($nightcount >0){
		$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount'] * $nightcount))/100;
	}else{
		$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount']))/100;
	}*/
//$discountamount ;

$tax = 100;

//$price_after_dis_1 = $amount - $discountamount;	
if($discount_value >0){
 $discountamount = $amount / $discount_value;	
 $discountamount = number_format($discountamount,2);	
 $price_after_dis = $amount - $discountamount;
}else{
	$discount_value = 0;
	$discountamount = 0;
	$price_after_dis = $amount - $discountamount;
}


//$grandtotal = $price_after_dis + $tax;
$grandtotal = $price_after_dis;

?>
	
<section class="single-room-listing">
    <div class="container">
        <h2 class="main-color m-0 py-2 font-weight-bold">Hotel Details</h2>
            <div class="row pt-md-3">
                <div class="col-lg-8">
                    <div class="row pb-4">
                        <div class="col-lg-8 col-md-12">
                            <h3><?php if(!empty($result['hotel_name'])) { echo $result['hotel_name'];}?></h3>
                            <p class="text-muted">Address : <?php if(!empty($result['address'])) { echo $result['address'];}?> </p>
                            <p>Rating: <span class="bg-success text-white d-inline-block p-2 br-3"><?php if(!empty($result['rating'])) { echo $result['rating'];}?> /5 </span></p>
                        </div>
                    </div>
                    <div class="w-100 d-block d-lg-none mb-4">
                    <div class="b-1 p-3 br-10 payment-tab">
                        <h4>BOOKING DETAILS</h4>
                        <div class="d-flex justify-content-between py-2">
                            <h4 class="font-weight-bold main-color">Price</h4>
                            <div class="listing-price">
                                <span class="cur-price">₹<?php if(!empty($result['after_discount_price'])) { echo $result['after_discount_price'];}?> </span>
                                <span class="main-price pr-1">₹<?php if(!empty($result['price'])) { echo $result['price'];}?> </span>
                                <?php /*<span class="off-price"> <?php if(!empty($result['discount'])) { echo $result['discount'];}?>% off</span>*/?>
                            </div>
                        </div>
                        <div class="row m-0 mb-3 u-details">
                            <div class="col-sm-6 col-12 p-2 border-right">
                                <h6 class="font-weight-bold">Check In/Out</h6>
                                <p> <span><?php if(!empty($result['check_in_date'])) { echo date( "d,M -Y", strtotime( $result['check_in_date'] ));}?> </span> - <span> <?php if(!empty($result['check_out_date'])) { echo date( "d,M -Y", strtotime( $result['check_out_date'] ));}?></span></p>
                            </div>
                            <div class="col-sm-6 col-12 p-2">
                                <h6 class="font-weight-bold">Guest Details</h6>
                                <p> <?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> Room, <?php if(!empty($result['guestcount'])) { echo $result['guestcount'];}?> Guest</p>
                            </div>
                        </div>
                        <div class="row pb-2 border-bottom">
                            <div class="col-7">
                                <h5>Price Summary</h5>
                            </div>
                            <div class="col-5 text-right">
                                <a class="text-primary" data-toggle="collapse" href="#price-tab-sum-m" role="button" aria-expanded="false" aria-controls="price-tab-sum-m">View Full <i class="fas fa-chevron-circle-down"></i></a>
                            </div>
                        </div>
                        <div class="collapse" id="price-tab-sum-m">
                            <div class="row py-2 border-bottom">
                                <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                    <p>Room Charges (<?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> rooms X <?php if(!empty($result['check_in_date']) && !empty($result['check_out_date'])) { 
    								echo $nightcount;
    							}?> night)</p>
                                    <p>₹<?php echo $amount;?></p>
                                </div>
                                <?php /*<div class="d-flex justify-content-between px-3 w-100">
                                    <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($result['discount'])) { 
    								echo $result['discount'] * $result['roomscount'];}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								/*if($nightcount >0){
    									$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount'] * $nightcount))/100;
    								}else{
    									$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount']))/100;
    								}
    								echo $discountamount ;*/
    								?>
									<?php /*</p>
                                </div>*/ ?>
								<?php if(!empty($discount_value)) { ?>
								 <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($discount_value)) { 
    								echo $discount_value;}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								
    								echo $discountamount;
    								?></p>
                                </div>
								<?php } ?>
								
								
                            </div>
                            <div class="row py-2 border-bottom">
                                <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                    <p>Price after discounts</p>
                                    <p>₹<?php echo $price_after_dis ;?></p>
                                </div>
                                <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Taxes Extra as Per Govt Rates</p>
                                    <p><?php //echo $tax ;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-2">
                            <div class="col-7">
                                <h5 class="font-weight-bold main-color">Total Amount</h5>
                            </div>
                            <div class="col-5 text-right">
                                <h5 class="font-weight-bold  main-color">₹<?php echo $grandtotal;?></h5>
                            </div>
                        </div>
                        <p class="text-danger">Non-refundable <a href="#" class="text-primary">Booking and cancellation Policy</a></p>
                        
                    </div>
                </div>
                    <!--<div class="b-1 mb-5 br-10 payment-body">-->
                    <!--    <h6 class="border-bottom m-0 px-3 py-2">3x Deluxe Ac Room</h6>-->
                    <!--    <p class="text-danger px-3 py-2">Non-refundable <a href="#" class="text-primary">Booking and cancellation Policy</a></p>-->
                    <!--</div>-->
					<form class="formcls" action="<?php echo base_url();?>payment-method" method="post" role="form" novalidate=""   id="my_booking_form">
                    <div class="b-1 py-md-5 py-4 px-3 mb-5 br-10 g-details">
                        <h4 class="mb-4">GUEST DETAILS</h4>
                        <div class="row pb-3">
                            <!--<div class="col-4 col-md-2">-->
                            <!--    <label for="title">Title</label>-->
                            <!--    <select name="title" id="g_title" required="true">-->
                            <!--        <option value="Mr" selected="">Mr</option>-->
                            <!--        <option value="Mrs">Mrs</option>-->
                            <!--        <option value="Miss">Miss</option>-->
                            <!--    </select>-->
                            <!--</div>-->
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text"  name="fname" placeholder="Enter First Name" required="true" >
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Enter Last Name" required="true">
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email Address</label>
                                <input type="email" name="emailid" placeholder="Enter Email Address" required="true">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <label>Mobile Number</label> 
                                <input  class= "numbervalidation" name="phoneno" type="text" placeholder="Enter Phone Number" required="true" maxlength="10">
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-12 d-flex">
                                <input type="checkbox" id="gst-d">
                                <label for="gst-d">I Agree to Terms and Conditions</label>
                            </div>
                        </div>
						<input  name="amount" type="hidden"  value="<?php if(!empty($grandtotal)) { echo $grandtotal;}?>">
						<input  class="main-btn w-100 py-2 br-5 h5" type="submit" name="booking-submit" Value="Proceed to payment">
						
                    </div>
				</form>	
                   
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="b-1 p-3 br-10 payment-tab">
                        <h4>BOOKING DETAILS</h4>
                        <div class="d-flex justify-content-between py-2">
                            <h4 class="font-weight-bold main-color">Price</h4>
                            <div class="listing-price">
                                <span class="cur-price">₹<?php if(!empty($result['after_discount_price'])) { echo $result['after_discount_price'];}?> </span>
                                <span class="main-price pr-1">₹<?php if(!empty($result['price'])) { echo $result['price'];}?> </span>
                                 <?php /*<span class="off-price"> <?php if(!empty($result['discount'])) { echo $result['discount'];}?>% off</span> */ ?>
                            </div>
                        </div>
                        <div class="row m-0 mb-3 u-details">
                            <div class="col-lg-12 p-2 border-bottom">
                                <h6 class="font-weight-bold">Check In/Out</h6>
                                <p> <span><?php if(!empty($result['check_in_date'])) { echo date( "d,M -Y", strtotime( $result['check_in_date'] ));}?> </span> - <span> <?php if(!empty($result['check_out_date'])) { echo date( "d,M -Y", strtotime( $result['check_out_date'] ));}?></span></p>
                            </div>
                            <div class="col-lg-12 p-2">
                                <h6 class="font-weight-bold">Guest Details</h6>
                                <p> <?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> Room, <?php if(!empty($result['guestcount'])) { echo $result['guestcount'];}?> Guest</p>
                            </div>
                        </div>
                        <div class="row pb-2 border-bottom">
                            <div class="col-7">
                                <h5>Price Summary</h5>
                            </div>
                            <div class="col-5 text-right">
                                <a class="text-primary" data-toggle="collapse" href="#price-tab-sum" role="button" aria-expanded="false" aria-controls="price-tab-sum">View Full <i class="fas fa-chevron-circle-down"></i></a>
                            </div>
                        </div>
                        <div class="collapse" id="price-tab-sum">
                            <div class="row py-2 border-bottom">
                                <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                    <p>Room Charges (<?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> rooms X <?php if(!empty($result['check_in_date']) && !empty($result['check_out_date'])) { 
    								echo $nightcount;
    							}?> night)</p>
                                    <p>₹<?php echo $amount;?></p>
                                </div>
                                <?php /*<div class="d-flex justify-content-between px-3 w-100">
                                    <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($result['discount'])) { 
    								echo $result['discount'] * $result['roomscount'];}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								if($nightcount >0){
    									$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount'] * $nightcount))/100;
    								}else{
    									$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount']))/100;
    								}
    								echo $discountamount ;
    								?></p>
                                </div>*/ ?>
								<?php if(!empty($discount_value)) { ?>
								  <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($discount_value)) { 
    								echo $discount_value;}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								
    								echo $discountamount;
    								?></p>
                                </div><?php } ?>
								
                            </div>
                            <div class="row py-2 border-bottom">
                                <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                    <p>Price after discounts </p>
                                    <p>₹<?php echo $price_after_dis ;?></p>
                                </div>
								 
                                <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Taxes Extra as Per Govt Rates</p>
                                    <p><?php //echo $tax ;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-2">
                            <div class="col-7">
                                <h5 class="font-weight-bold main-color">Total Amount</h5>
                            </div>
                            <div class="col-5 text-right">
                                <h5 class="font-weight-bold  main-color">₹<?php echo $grandtotal;?></h5>
                            </div>
                        </div>
                        <p class="text-danger">Non-refundable <a href="#" class="text-primary">Booking and cancellation Policy</a></p>
                    </div>
                </div>
            </div>

            
    </div>
</section>