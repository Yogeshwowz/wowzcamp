<?php
$room_category= array('1'=>'Deluxe Rooms',
					'2' =>'Super Deluxe Rooms',
					'3' =>'Family Suites',
					'4' =>'Premium Family Suite'
						);
?>
<div class="header bg-primary">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/rooms">Manage Rooms</a></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="container-fluid">
		<!-- Table -->
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<!-- Card header -->
						<div class="row">
							<form class="formcls" action="<?php echo base_url();?>administrator/create-property" method="post" role="form" novalidate=""   id="my_property" enctype="multipart/form-data">
								<div  id="prop-form-success" class="alert alert-success alert-dismissible hide" role="alert">
									<span class="alert-icon"><i class="ni ni-like-2"></i></span>
									<span class="alert-text">Room property has been updated successfully</span>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<label class="form-control-label" for="editor1">Select Hotel Name</label>
										<select class="form-control js-example-basic-single" name="hotel_id" id="hotel_id" placeholder="Enter Category Name"
											required="true">
											<option selected disabled hidden style='display: none' value=''></option>
											<?php foreach($hotels as $hotels){?>
											<option value="<?php echo $hotels->hotelid;?>" <?php if(!empty($properties['hotel_id'])) {
											if($properties['hotel_id']==$hotels->hotelid) { echo "selected"; } }?>><?php echo $hotels->hotel_name;?></option>
											<?php } ?>
											
										</select>
									</div>
								</div>
								<div class="form-row" style="display:none;">
									<div class="col-md-12">
										<label class="form-control-label" for="editor1">Room Name</label>
										<input  type="text" class="form-control" name="propertyname" id="propertyname" placeholder="Enter Room name"  value="<?php if(!empty($properties['propertyname'])) { echo $properties['propertyname']; }?>" >
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4">
										<label class="form-control-label" for="edi">Select Room Category</label>
										<select class="form-control js-example-basic-single" name="room_category" id="room_category"
											required="true">
											<option value=''></option>
											<?php foreach($room_category as $key=>$value){?>
											<option value="<?php echo $key;?>" <?php if(!empty($properties['room_category'])) {
											if($properties['room_category']==$key) { echo "selected"; } }?>><?php echo $value;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-4">
										<label class="form-control-label" for="edi">Available Number of Rooms</label>
										<select class="form-control js-example-basic-single" name="number_of_room" id="number_of_room" placeholder="Enter Category Name"
											required="true">
											<option value=''></option>
											<?php for ($x = 1; $x <= 50; $x+=1) {?>
											<option value="<?php echo $x;?>" <?php if(!empty($properties['number_of_room'])) {
											if($properties['number_of_room']==$x) { echo "selected"; } }?>><?php echo $x;?></option>
											<?php } ?>
											
										</select>
									</div>
									<div class="col-md-4">
										<label class="form-control-label" for="edi">Number of guests in Room Category</label>
										<select class="form-control js-example-basic-single" name="number_of_guest_select" id="number_of_guest_select" placeholder="Enter Number of Guests"
											required="true" disabled>
											<option value=''></option>
											<?php for ($x = 2; $x <= 4; $x+=2) {?>
											<option value="<?php echo $x;?>" <?php if(!empty($properties['guest'])) {
											if($properties['guest']==$x) { echo "selected"; } }?>><?php echo $x;?></option>
											<?php } ?>
										</select>
										
										<input type="hidden" class="form-control" name="number_of_guest" id="number_of_guest" value="<?php if(!empty($properties['guest'])) { echo $properties['guest']; }?>">
									</div>
									
								</div>
								
								<?php /*
								<div class="form-row">
									<div class="col-md-12">
										<label class="form-control-label" for="edito">Number of beds</label>
										<div class="field_wrapper row">
											<div class="col-md-12 main-div">
												<div class="col-md-6" style="float:left;">
														<select class="form-control js-example-basic-single1" name="room_type[]"  placeholder="Enter Category Name" required="true">
															<option value="">Select beds</option>
														<?php foreach($properties_type as $properties_type){?>
														<option value="<?php echo $properties_type->id;?>" <?php if(!empty($properties['ptype'])) {
														if($properties['ptype']==$properties_type->id) { echo "selected"; } }?>><?php echo $properties_type->properties_type_size;?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-6" style="float:left;">
													<a href="javascript:void(0);" class="add_button" title="Add field"><i class="ni ni-fat-add"></i></a>
												</div>
											</div>
											<?php
											$pro_type = explode(',',$properties['pro_type']);
											
											$removed = array_shift($pro_type);
											?>
											<?php  foreach($pro_type as $pro_type){?>
											<div class="col-md-12 main-div">
												<div class="col-md-6" style="float:left;">
													<select class="form-control js-example-basic-single1" name="room_type[]" placeholder="Enter Category Name" required="true">
														<option value="">Select Type</option>
														<option value="1" <?php if(!empty($pro_type)) { if($pro_type==1) { echo "selected"; } }?>>Single</option><option value="2" <?php if(!empty($pro_type)) { if($pro_type==2) { echo "selected"; } }?>>Double</option>
													</select>
												</div>
												<div class="col-md-6" style="float:left;">
													<a href="javascript:void(0);" class="remove_button" title="Add field"><i class="ni ni-fat-delete"></i></a>
												</div>
											</div>
											<?php } ?>
										</div>
										
									</div>
								</div>
								*/?>
								
								
								
								
								<?php /*<div class="form-row">
									<div class="col-md-12">
										<label class="form-control-label" for="editor1">Room Type</label>
											<select class="form-control js-example-basic-single" name="room_type" id="room_type" placeholder="Enter Category Name" required="true">
												<option value="">Room Type</option>
											<?php foreach($properties_type as $properties_type){?>
											<option value="<?php echo $properties_type->id;?>" <?php if(!empty($properties['ptype'])) {
											if($properties['ptype']==$properties_type->id) { echo "selected"; } }?>><?php echo $properties_type->properties_type_size;?></option>
											<?php } ?>
										</select>
									</div>
								</div>*/ ?>
								
								
								<div class="form-row">
									<div class="col-md-4">
										<label class="form-control-label" >Enter Room Regular Price</label>
										<input type="text" class="form-control amount" name="price" id="price" placeholder="Enter Room Price" required="true" value="<?php if(!empty($properties['price'])) { echo $properties['price']; }?>">
									</div>
									<div class="col-md-4">
										<label class="form-control-label" >Enter Discount in %</label>
										<input type="text" class="form-control amount" name="discount" id="discount" placeholder="Enter Room Discount" value="<?php if(!empty($properties['discount'])) { echo $properties['discount']; }?>">
										<span id="discount_span"></span>
									</div>
									<div class="col-md-4">
										<label class="form-control-label" >After Discount Price</label>
										<input type="text" class="form-control" name="after_discount_price" id="after_discount_price" placeholder="Enter After Discount Price"  value="<?php if(!empty($properties['after_discount_price'])) { echo $properties['after_discount_price']; }?>"  readonly="">
									</div>
								</div>
								
								<div class="form-row">
									<div class="col-md-2">
										<label class="form-control-label">SelectLocation</label>
										
										<select class="form-control js-example-basic-single" name="location" id="location" placeholder="Enter Location" required="true">
											<option value="">Location</option>
											<?php foreach($city as $city){?>
											<option value="<?php echo $city->id;?>" <?php if(!empty($properties['location'])) {
											if($properties['location']==$city->id) { echo "selected"; } }?>><?php echo $city->name;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-9">
										<label class="form-control-label" >Enter Hotel Address</label>
										<input type="text" class="form-control amount" name="address" id="address" placeholder="Address" required="true" value="<?php if(!empty($properties['address'])) { echo $properties['address']; }?>">
									</div>
								</div>
								
								
								<div class="form-row" >
									<div class="col-md-2" style="display:none;">
										<label class="form-control-label" >Rating</label>
										<select class="form-control js-example-basic-single" name="rating" id="rating" placeholder="Enter Location" >
											<option value="5">rating</option>
											<?php for ($x = 1; $x <= 5; $x++) {?>
											<option value="<?php echo $x;?>" <?php if(!empty($properties['rating'])) {
											if($properties['rating']==$x) { echo "selected"; } }?>><?php echo $x;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-10">
										<label class="form-control-label" >Enter Room Tag line(For example Room per night)</label>
										<input type="text" class="form-control amount" name="rating_status" id="rating_status" placeholder="Price Tag line" required="true" value="<?php if(!empty($properties['rating_status'])) { echo $properties['rating_status']; }?>">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<label class="form-control-label">Enter check-in Time</label>
										<select class="form-control js-example-basic-single" name="check_in" id="check_in" placeholder="Enter Location" required="true">
											<option value="">check In</option>
											<?php for ($x = 12; $x >= 1; $x--) {?>
											<option value="<?php echo $x;?>" <?php if(!empty($properties['check_in'])) {
											if($properties['check_in']==$x) { echo "selected"; } }?>><?php echo $x;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-2">
										<label class="form-control-label">&nbsp;</label>
										<select class="form-control js-example-basic-single" name="check_in_mode" id="check_in_mode" placeholder="Enter Location" required="true">
											<option value="PM" <?php if(!empty($properties['check_in_mode'])) { if($properties['check_in_mode']=='PM') { echo "selected"; } }?>>PM</option>
											<option value="AM" <?php if(!empty($properties['check_in_mode'])) { if($properties['check_in_mode']=='AM') { echo "selected"; } }?>>AM</option>
										</select>
									</div>
									<div class="col-md-3">
										
									</div>
									<div class="col-md-2">
										<label class="form-control-label">Enter Check-out Time</label>
										<select class="form-control js-example-basic-single" name="check_out" id="check_out" placeholder="Enter Location" required="true">
											<option value="">Check Out</option>
											<?php for ($x = 1; $x <= 12; $x++) {?>
											<option value="<?php echo $x;?>" <?php if(!empty($properties['check_out'])) {
											if($properties['check_out']==$x) { echo "selected"; } }?>><?php echo $x;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-2">
										<label class="form-control-label">&nbsp;</label>
										<select class="form-control js-example-basic-single" name="check_out_mode" id="check_out_mode" placeholder="Enter Location" required="true">
											<option value="AM" <?php if(!empty($properties['check_out_mode'])) { if($properties['check_out_mode']=='AM') { echo "selected"; } }?>>AM</option>
											<option value="PM" <?php if(!empty($properties['check_out_mode'])) { if($properties['check_out_mode']=='PM') { echo "selected"; } }?>>PM</option>
											
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<label class="form-control-label">Enter Details Description of Hotel/Property</label>
										<textarea class="form-control" name="description" id="description" placeholder="Enter location" required="true"><?php if(!empty($properties['description'])) { echo $properties['description']; }?></textarea>
									</div>
								</div>
								
							</div>
							<input type="hidden" class="form-control" name="property_type" id="property_type" placeholder="Enter location" value="room">
							<input type="hidden" class="form-control" name="property_id" id="property_id"  value="<?php if(!empty($properties['id'])) { echo $properties['id']; }?>">
							<input  class="btn btn-primary mt-3" type="submit" name="create-submit" Value="Submit">
						</form>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

</div>