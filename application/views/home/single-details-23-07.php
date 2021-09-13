<?php 

$array_amenities = array();
foreach($result['amenities'] as $amty){
	$array_amenities[] = $amty->amenity_id;
}

if(!empty($booking['check_in_date']) && !empty($booking['check_out_date'])) { 
	$start_date = strtotime($booking['check_in_date']);
	$end_date = strtotime($booking['check_out_date']);
	$nightcount =  ($end_date - $start_date)/60/60/24;
} 
	if($nightcount >0){
	$amount  = $booking['after_discount_price'] * ($booking['roomscount'] * $nightcount);
	}else{
	$amount  = $booking['after_discount_price'] * $booking['roomscount'];
	}
	$amount;

 
	if($nightcount >0){
		$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount'] * $nightcount))/100;
	}else{
		$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount']))/100;
	}
$discountamount ;

$tax = 100;

$price_after_dis = $amount - $discountamount;	

$grandtotal = $price_after_dis - $tax;


?>
<form role="form" action="<?php echo base_url();?>rooms" method="POST" id="search-form">

<div class="header-search">
 <div class="container">
        <div class="row">
            <div class="i-group">
                <label>Location <?php //echo $booking['location'];?> <?php //echo session_id();?></label>
                <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">-->
				<select id="locationid" class="form-control main-select search-filter-single " name="location">
                    <option value="">Search </option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>"  <?php  if(!empty($booking['location_id'])){ if($booking['location_id']==$city->id) { echo"selected";} }?>><?php echo $city->name;?></option>
						<?php } ?>
                </select>
            </div>
            <div class="i-group">
                <label>Check In:</label>
                <input class="date-input form-control"  name="check_in" id="check_in"  value="<?php  if(!empty($booking['check_in_date'])){ echo $booking['check_in_date'] ;}else{ echo date('Y-m-d');} ?>">
            </div>
            <div class="i-group">
                <label>Check Out:</label>
                <input class="date-input form-control" name="check_out" id="check_out"  value="<?php  if(!empty($booking['check_out_date'])){ echo $booking['check_out_date'] ;}else{ echo $tomorrow = date("Y-m-d", time() + 86400);
				} ?>">
				<span id="date-error" class="date-error hidecls">Check-out date is less than from check-in date</span>
            </div>
            <div class="i-group">
                <label>Guests</label>
                <div class="menu-select guest-drop" id="guest_div">
                   <span id="guest_room_span"><?php if(!empty($booking['roomscount'])){ 
				   echo $booking['roomscount']; }else{ echo "1";}?></span>  <span id="guest_room">Room </span>  <span id="guest_span"><?php if(!empty($booking['roomscount'])){ 
				   echo $booking['guestcount']; }else{ echo "2";}?></span> Guests
                </div>
                 <div class="guest-option">
				<div class="field_wrapper">
				<?php if(!empty($booking['guestcount'])){ 
				   $numadults = $booking['guestcount'];
				  if($numadults==1){ ?>
					<div class="row main-div m-0" id="add_more_div_1" rel="1">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper">1</span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="2"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							 </div>
						</div>
                <?php }
				
				if($numadults > 1){ 
				$counter =1;
				foreach($bookingbyguest as  $key=>$adults){
				 ?>
				
					<div class="row main-div m-0" id="add_more_div_<?php echo $counter;?>" rel="<?php echo $counter;?>">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper"><?php echo $counter;?></span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="<?php echo $adults['adults'];?>"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<?php if($counter==1){?>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							<?php } ?>
							<?php if($counter >1){?>
							<a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fas fa-trash"></i> Remove Room</a>
							<?php } ?>
							 </div>
						</div>
				<?php 
				$counter = $counter + 1;
				}
				}
				}else{?>
					<div class="row main-div m-0" id="add_more_div_1" rel="1">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper">1</span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="2"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							 </div>
						</div>
					
					
				<?php }				
				?>
				</div>
               </div>
            </div>  
			
			<input type="hidden"  id="search-by-filter" name="search-by-filter" value="0"/>	
			<input   type="hidden"  name="startField" id="startField" value="<?php  if(!empty($booking['roomscount'])){ 
				   echo $booking['roomscount']; }else{ echo"1";} ?>">					
            <button class="btn main-btn my-2 my-sm-0 search-by-filter-single" type="button"  data-path="<?php echo base_url();?>single-details/room/<?php echo $this->uri->segment(3);?>" rel="<?php echo base64_decode($this->uri->segment(3));?>">Search</button>
			<input   class="form-check-input search-filter-radio" type="hidden" name="ptype"  value="<?php echo $this->uri->segment(2);?>"> 
        </div>
    </div>
    </div>


    <div class="large-divider"></div>

    <section class="single-room-listing">
        <div class="container">
            <div class="breadcrump">
                <h4 class="main-color">
                    <span>WOWz STAYS	> </span> 
                    <span> <?php if(!empty($result['property_type'])) { echo ucfirst($result['property_type']);}?> > </span> 
                    <span><?php if(!empty($result['hotel_name'])) { echo $result['hotel_name'];}?></span>
                </h4>
            </div>
            <h4 class="rating py-2 m-0">
			 <span class="star-icons">
					<?php
					 if(!empty($result['rating'])) {
							for ($x = 1; $x <= $result['rating']; $x++) { ?>
							 <i class="fas fa-star"></i><?php 
								
							}
					 }
					?>
               
                   
                </span>
                <span class="rating-no"><?php if(!empty($result['rating'])) { echo $result['rating'];}?></span>
            </h4>
            <h3 class="main-color m-0 py-2"><?php if(!empty($result['propertyname'])) { echo $result['propertyname'];}?></h3>
            <p>Address : <?php if(!empty($result['address'])) { echo $result['address'];}?></p>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pt-3">
                        <div class="col-lg-7 sroom-crousal">
                            <div id="room-listing-c" class="room-listing-c owl-carousel owl-theme">
							<?php 
							if(!empty($result['gallery'])){
							foreach($result['gallery'] as $key=>$value){?>
                                <div class="item">
                                    <img src="<?php echo base_url();?>assets/upload/gallery/<?php echo $value->gallery_image;?>" alt="" class="img-fluid">
                                </div>
							<?php } 
							}else{?>
								<div class="item">
                                    <img src="<?php echo base_url();?>assets/img/no-image.png" alt="" class="img-fluid">
                                </div>
							<?php }?>
                              
                            </div>
                            <div id="room-listing-c-thumb" class="room-listing-c-thumb owl-carousel owl-theme">
							<?php foreach($result['gallery'] as $key=>$gallery){?>
                                <div class="item">
                                     <img src="<?php echo base_url();?>assets/upload/gallery/<?php echo $gallery->gallery_image;?>" alt="" class="img-fluid">
                                </div>
								<?php } ?>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 pr-lg-0">
                            <div class="b-1 br-5 p-4 position-relative">
							<?php if(count($result['amenities']) > 0){?>
                                <h4 class="main-color">Amenities & Services </h4>
                                <ul class="pt-2 m-0">
								<?php 
                                   	 foreach($result['amenities'] as $i => $amenities){
										
										if($i==3) break;	
											?>
                                    <li class="pb-3"> <img src="<?php echo base_url();?>assets/img/check-icon.png" class="mr-4" alt=""> <?php echo $amenities->amenity_name;?> </li>
								<?php } 
									?>
                                <li class="pb-3"> <a href="#des-tab" class="main-color">View all Amenities</a></li>   
                                </ul>
							<?php } ?>
                                <div class="row">
                                    <div class="bottom-line"></div>
                                    <div class="col-md-6 pt-3">
                                        <p>Check In</p>
                                        <h6 class="font-weight-bold"><?php if(!empty($result['check_in'])) { echo $result['check_in'];}?> <?php if(!empty($result['check_in_mode'])) { echo $result['check_in_mode'];}?></h6>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <p>Check Out</p>
                                        <h6 class="font-weight-bold"><?php if(!empty($result['check_out'])) { echo $result['check_out'];}?> <?php if(!empty($result['check_out_mode'])) { echo $result['check_out_mode'];}?></h6>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-block d-lg-none">
                            <div class="b-1 p-3 br-5 payment-tab">
                                <h4 class="font-weight-bold main-color">Price</h4>
                                <div class="listing-price pt-">
                                    <span class="cur-price mr-2">₹<?php if(!empty($result['after_discount_price'])) { echo $result['after_discount_price'];}?> </span>
                                    <span class="main-price"><?php if(!empty($result['price'])) { echo $result['price'];}?></span>
                                    <span class="off-price"> <?php if(!empty($result['discount'])) { echo $result['discount'];}?>% off</span>
                                </div>
                                <span class="mute-small d-block pb-3">inclusive of all taxes</span>
                                <div class="row b-1 m-0 mb-2">
                                    <div class="col-md-6 p-2">
                                        <p class="border-right"><?php if(!empty($booking['check_in_date'])) { echo date( "d,M -Y", strtotime( $booking['check_in_date'] ));}?> - <?php if(!empty($booking['check_out_date'])) { echo date( "d,M -Y", strtotime( $booking['check_out_date'] ));}?></p>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <p> <?php if(!empty($booking['roomscount'])) { echo $booking['roomscount'];}?> Room, <?php if(!empty($booking['guestcount'])) { echo $booking['guestcount'];}?> Guest</p>
                                    </div>
                                </div>
                                <div class="row b-1 m-0 py-2 mb-2">
                                    <div class="col-md-10">
                                         <p><?php if(!empty($booking['propertyname'])) { echo $booking['propertyname'];}?></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="text-danger"><i class="fas fa-pen"></i></p>
                                    </div>
                                </div>
                                <div class="row pb-2 border-bottom">
                                    <div class="col-7">
                                        <h5>Price Summary</h5>
                                    </div>
                                    <div class="col-5 text-right">
                                        <p class="text-primary">View Full <i class="fas fa-chevron-circle-down"></i></p>
                                    </div>
                                </div>
                                <div class="row py-2 border-bottom">
                                    <div class="d-flex justify-content-between px-3 w-100 pb-2">
                                         <p>Room Charges (<?php if(!empty($booking['roomscount'])) { echo $booking['roomscount'];}?> rooms X <?php if(!empty($booking['check_in_date']) && !empty($booking['check_out_date'])) { 
    								echo $nightcount;
    							}?> night)</p>
                                       <p>₹<?php echo $amount;?></p>
                                    </div>
                                    <div class="d-flex justify-content-between px-3 w-100">
                                          <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($booking['discount'])) { 
    								echo $booking['discount'] * $booking['roomscount'];}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								if($nightcount >0){
    									$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount'] * $nightcount))/100;
    								}else{
    									$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount']))/100;
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
                                        <p>Taxes & Fees</p>
                                        <p>₹<?php echo $tax ;?></p>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-6">
                                        <h5 class="font-weight-bold">Pay Now</h5>
                                    </div>
                                    <div class="col-6 text-right">
                                        <h5 class="font-weight-bold">₹<?php echo $grandtotal;?></h5>
                                    </div>
                                </div>
                               <a href="javascript:void(0);" class="main-btn w-100 py-2 br-5 h5 book_now" rel="<?php echo $booking['pid']?>">BOOK NOW</a>
                            </div>
                        </div>
                        <div class="col-lg-12 pr-md-0">
                            <ul class="option-list main-color">
                                <li><a href="#des-tab">About this Hotel</a></li>
                                <li><a href="#des-tab">Amenities</a></li>
                                <li><a href="#c-room">Choose your room</a></li>
                                <!--<li><a href="#">Ratings and Reviews</a></li>
                                <li><a href="#">Hotel Rules</a></li>
                                <li><a href="#">What's nearby</a></li>-->
                            </ul>

                            <div class="des-tab" id="des-tab">
                                <h3 class="pt-3 font-weight-bold">Description</h3>
								<div  class="complete full" id="test_full_<?php echo $result['id'];  ?>">
								<?php if(!empty($result['description'])) { 
									echo $result['description'];  } ?><span class="less main-color pt-3" rel="<?php echo $result['id'];?>">  Less...</span></div>
							
							<div  class="half"  id="test_half_<?php echo $result['id'];  ?>">
							<?php if(!empty($result['description'])) { 
							$string = strip_tags($result['description']);
							
								if( strlen( $string ) > 100 ) {
										echo $string = substr( $string, 0, 800 ) . '<span class="more main-color pt-3" rel="'. $result['id'].'">  Read More... </span>';
								}

							} ?></div>
                                
                            </div>

                            <div class="amenties-tab" id="amenties-tab">
							
                                <h3 class="pt-3 font-weight-bold">Amenities</h3>
                                                          
                               
                                <div class="amenities-items py-4" id="allamenity_more">
								 <h5   class="main-color"><span id="show_more_allamenity">Show More</span></h5>
                                   <div class="row">
									<?php 
									foreach($allAmenity as $key=>$allamenity) {
										if($key <= 5){
										?>
                                        <div class="col-md-4 pb-3">
                                           <?php if( in_array($allamenity->id,$array_amenities)) {?>
                                            <img src="<?php echo base_url();?>assets/img/check-icon.png" class="mr-2" alt=""><?php echo $allamenity->amenity_name;?>
										<?php } else {?> 
										<img  style="width:20px; height:20px;"src="<?php echo base_url();?>assets/img/rejected.png" class="mr-2" alt=""><?php echo $allamenity->amenity_name;?>
										<?php } ?>
                                        </div>
                                        <?php }
									}?>
                                    </div>
								</div>
								
								<div id="allamenity_less" class="amenities-items py-4 complete-amenities">
                                   <div class="row">
									<?php 
									foreach($allAmenity as $key=>$allamenity) {
										
										?>
                                        <div class="col-md-4 pb-3">
										<?php if( in_array($allamenity->id,$array_amenities)) {?>
                                            <img src="<?php echo base_url();?>assets/img/check-icon.png" class="mr-2" alt=""><?php echo $allamenity->amenity_name;?>
										<?php } else {?> 
									    <img  style="width:20px; height:20px;"src="<?php echo base_url();?>assets/img/rejected.png" class="mr-2" alt=""> <?php echo $allamenity->amenity_name;?>
										<?php } ?>
                                        </div>
                                        <?php 
									}?>
                                    </div>
									<h5 class="main-color"><span id="show_less_allamenity">Show Less</span></h5>
								</div>
                                
                            </div>
                            
                            <div class="choose-room-tab" id="c-room">
							
							<input   class="form-check-input search-filter-radio" type="hidden" name="ptype" id="inlineCheckbox2" value="<?php echo $this->uri->segment(2);?>">
                                <h4 class=" pt-5">Choose your room</h4>
                                <div class="row">                
                                    <div class="col-md-10">
                                        <div class="main-bgcolor br-5 py-1 px-5">
                                            SELECTED CATAGORY
                                        </div>
										<div id='postsList'> </div>
                                       
                                       
									   </div>
                                   
                                </div>
								<div id='single_pagination' class="text-center my-5 v-page"></div>
                            
								
								
                            </div>

						</div>                    
                    </div>
                </div>
                <div class="col-lg-4 pt-3 d-none d-lg-block">
                   <div class="b-1 p-3 br-5 payment-tab">
                        <h4 class="font-weight-bold main-color">Price</h4>
                        <div class="listing-price py-3">
                            <span class="cur-price">₹<?php if(!empty($booking['after_discount_price'])) { echo $booking['after_discount_price'];}?> </span>
                            <span class="main-price"><?php if(!empty($booking['price'])) { echo $booking['price'];}?> </span>
                            <span class="off-price"> <?php if(!empty($booking['discount'])) { echo $booking['discount'];}?>% off</span>
                        </div>
						<span class="mute-small d-block pb-3">Price Per Night</span>
                        <div class="row b-1 m-0 mb-4">
                            <div class="col-md-6 p-2">
                                <p class="border-right"><?php if(!empty($booking['check_in_date'])) { echo date( "d,M -Y", strtotime( $booking['check_in_date'] ));}?> - <?php if(!empty($booking['check_out_date'])) { echo date( "d,M -Y", strtotime( $booking['check_out_date'] ));}?></p>
                            </div>
                            <div class="col-md-6 p-2">
                                <p> <?php if(!empty($booking['roomscount'])) { echo $booking['roomscount'];}?> Room, <?php if(!empty($booking['guestcount'])) { echo $booking['guestcount'];}?> Guest</p>
                            </div>
                        </div>
                        <div class="row b-1 m-0 py-2 mb-4">
                            <div class="col-md-10">
                                <p><?php if(!empty($booking['propertyname'])) { echo $booking['propertyname'];}?></p>
                            </div>
                            <div class="col-md-2">
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
                                    <p>Room Charges (<?php if(!empty($booking['roomscount'])) { echo $booking['roomscount'];}?> rooms X <?php if(!empty($booking['check_in_date']) && !empty($booking['check_out_date'])) { 
    								echo $nightcount;
    							}?> night)</p>
                                    <p>₹<?php echo $amount;?></p>
                                </div>
                                <div class="d-flex justify-content-between px-3 w-100">
                                    <p>Total Discounts<span class="badge badge-danger ml-2"><?php if(!empty($booking['discount'])) { 
    								echo $booking['discount'] * $booking['roomscount'];}?>% off</span></p>
                                    <p class="text-success">-₹<?php 
    								if($nightcount >0){
    									$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount'] * $nightcount))/100;
    								}else{
    									$discountamount = ($booking['discount'] * $booking['roomscount']) * ($booking['after_discount_price'] * ($booking['roomscount']))/100;
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
                                <h5 class="font-weight-bold">Pay Now</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h5 class="font-weight-bold">₹<?php echo $grandtotal;?></h5>
                            </div>
                        </div>
						<a href="javascript:void(0);" class="main-btn w-100 py-2 br-5 h5 book_now" rel="<?php echo $booking['pid']?>">BOOK NOW</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>