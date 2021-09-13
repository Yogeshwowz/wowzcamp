<?php 
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

 
	if($nightcount >0){
		$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount'] * $nightcount))/100;
	}else{
		$discountamount = ($result['discount'] * $result['roomscount']) * ($result['after_discount_price'] * ($result['roomscount']))/100;
	}
$discountamount ;

$tax = 100;

$price_after_dis = $amount - $discountamount;	

$grandtotal = $price_after_dis - $tax;

?>
	
<section class="single-room-listing">
    <div class="container">
        <h2 class="main-color m-0 py-2 font-weight-bold">Hotel Details</h2>
            <div class="row pt-3">
                <div class="col-lg-8">
                    <div class="row pb-4">
                        
                        <div class="col-lg-8 col-md-12">
                            <h3><?php if(!empty($result['hotel_name'])) { echo $result['hotel_name'];}?></h3>
                            <p class="text-muted">Address : <?php if(!empty($result['address'])) { echo $result['address'];}?> </p>
                            <p>Rating: <span class="bg-success text-white d-inline-block p-2 br-3"><?php if(!empty($result['rating'])) { echo $result['rating'];}?> /5 </span></p>
                        </div>
                    </div>
                    <div class="p-3 mb-4 br-10 u-details">
                        <div class="pr-3 py-2">
                            <p class="text-muted">Check In</p>
                            <h6 class="m-0 py-1"><?php if(!empty($result['check_in_date'])) { 
							echo date( "d,M -Y", strtotime( $result['check_in_date'] ) );
							
							}?> </h6>
                            <p class="text-muted"><?php if(!empty($result['check_in'])) { echo $result['check_in'];}?>:00 <?php if(!empty($result['check_in_mode'])) { echo $result['check_in_mode'];}?></p>
                        </div>
                        <div class="pr-3 py-2">
                            <p class="text-muted">Check Out</p>
                            <h6 class="m-0 py-1"><?php if(!empty($result['check_out_date'])) { echo date( "d,M -Y", strtotime( $result['check_out_date'] ));}?></h6>
                            <p class="text-muted"><?php if(!empty($result['check_out'])) { echo $result['check_out'];}?>:00 <?php if(!empty($result['check_out_mode'])) { echo $result['check_out_mode'];}?></p>
                        </div>
                        <div class="pr-3 py-2">
                            <p class="text-muted">Guests</p>
                            <h6 class="m-0 py-1"><?php if(!empty($result['guestcount'])) { echo $result['guestcount'];}?> Guests | <?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> Rooms</h6>
                            <p class="text-muted"><?php if(!empty($result['check_in_date']) && !empty($result['check_out_date'])) { 
								echo $nightcount;
							}?> Nights</p>
                        </div>
                    </div>
                    <div class="b-1 mb-5 br-10 payment-body">
                        <h6 class="border-bottom m-0 px-3 py-2">3x Deluxe Ac Room</h6>
                        <p class="text-danger px-3 py-2">Non-refundable <a href="#" class="text-primary">Booking and cancellation Policy</a></p>
                    </div>
					<form class="formcls" action="<?php echo base_url();?>payment-method" method="post" role="form" novalidate=""   id="my_booking_form">
                    <div class="b-1 py-5 px-3 mb-5 br-10 g-details">
                        <h4 class="mb-4">GUEST DETAILS</h4>
                        <div class="row pb-3">
                            <div class="col-4 col-md-2">
                                <label for="title">Title</label>
                                <select name="title" id="g_title" required="true">
                                    <option value="Mr" selected="">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                            <div class="col-8 col-md-5">
                                <label>First Name</label>
                                <input type="text"  name="fname" placeholder="Enter First Name" required="true" >
                            </div>
                            <div class="col-md-5 col-12 mt-md-0 mt-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Enter Last Name" required="true">
                            </div>
                           
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-7">
                                <label>Email Address</label>
                                <input type="email" name="emailid" placeholder="Enter Email Address" required="true">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-7">
                                <label>Mobile Number</label>  
                                <div class="row">
                                    <div class="col-md-3 col-4">
                                        <select name="mobileno" id="mobileno" required="true" >
                                            <option value="91">+91</option>
                                         </select>
                                    </div>
                                    <div class="col-md-9 col-8">
                                        <input  class= "numbervalidation" name="phoneno" type="text" placeholder="Enter Phone Number" required="true" maxlength="10">
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12 d-flex">
                                <input type="checkbox" id="gst-d">
                                <label for="gst-d">Enter GST Details</label>
                            </div>
                        </div>
						<input  name="amount" type="hidden"  value="<?php if(!empty($grandtotal)) { echo $grandtotal;}?>">
						<input  class="main-btn w-100 py-2 br-5 h5" type="submit" name="booking-submit" Value="Proceed to payment">
						
                    </div>
				</form>	
                   
                </div>
                <div class="col-lg-4">
                    <div class="b-1 p-3 br-10 payment-tab">
                        <h4 class="font-weight-bold main-color">Price</h4>
                        <div class="listing-price py-3">
                            <span class="cur-price">₹<?php if(!empty($result['after_discount_price'])) { echo $result['after_discount_price'];}?> </span>
                            <span class="main-price"><?php if(!empty($result['price'])) { echo $result['price'];}?> </span>
                            <span class="off-price"> <?php if(!empty($result['discount'])) { echo $result['discount'];}?>% off</span>
                        </div>
                        <div class="row b-1 m-0 mb-4">
                            <div class="col-6 p-2">
                                <p class="border-right"><?php if(!empty($result['check_in_date'])) { echo date( "d,M -Y", strtotime( $result['check_in_date'] ));}?> - <?php if(!empty($result['check_out_date'])) { echo date( "d,M -Y", strtotime( $result['check_out_date'] ));}?></p>
                            </div>
                            <div class="col-6 p-2">
                                <p> <?php if(!empty($result['roomscount'])) { echo $result['roomscount'];}?> Room, <?php if(!empty($result['guestcount'])) { echo $result['guestcount'];}?> Guest</p>
                            </div>
                        </div>
                        <div class="row b-1 m-0 py-2 mb-4">
                            <div class="col-10">
                                <p><?php if(!empty($result['propertyname'])) { echo $result['propertyname'];}?></p>
                            </div>
                            <div class="col-2">
                                <p class="text-danger"><i class="fas fa-pen"></i></p>
                            </div>
                        </div>
                        <div class="row pb-3 border-bottom">
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
                                <div class="d-flex justify-content-between px-3 w-100">
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
                                </div>
                            </div>
                            <div class="row py-2 border-bottom">
                                <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                    <p>Price after discounts</p>
                                    <p>₹<?php echo $price_after_dis = $amount - $discountamount;?></p>
                                </div>
                                <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Taxes &amp; Fees</p>
                                    <p>₹<?php echo $tax ;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-6">
                                <h5 class="font-weight-bold main-color">Pay Now</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h5 class="font-weight-bold  main-color">₹<?php echo $grandtotal;?></h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            
    </div>
</section>