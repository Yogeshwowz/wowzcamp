<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/campings">Manage Campings</a></li>
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
					<span class="alert-text">Camping property has been created successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Hotel Name</label>
						<select class="form-control js-example-basic-single" name="hotel_id" id="hotel_id" placeholder="Enter Category Name" 
						required="true">
						<option selected disabled hidden style='display: none' value=''></option>
						<?php foreach($hotels as $hotels){?>
						<option value="<?php echo $hotels->hotelid;?>"><?php echo $hotels->hotel_name;?></option>
						<?php } ?>
						
						</select>
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Camping Name</label>
						 <input  type="text" class="form-control" name="propertyname" id="propertyname" placeholder="Enter Camping name" required="true">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                       <label class="form-control-label" for="edito">Camping Capacity</label>
					  <div class="field_wrapper row">
					  <div class="col-md-12 main-div">
					  <div class="col-md-6" style="float:left;">
					  
						<select class="form-control js-example-basic-single1" name="room_type[]"  placeholder="Enter Category Name" required="true">
						<option value="">Select Capacity</option>
						<?php foreach($properties_type as $properties_type){?>
						<option value="<?php echo $properties_type->id;?>"><?php echo $properties_type->properties_type_size;?></option>
						<?php } ?>
						</select>
						 </div>
						  <div class="col-md-6" style="float:left;">
						<a href="javascript:void(0);" class="add_button" title="Add field"><i class="ni ni-fat-add"></i></a>
                      </div>
						 </div>
						
                      </div>
					</div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >Camping Regular Price</label>
                      <input type="text" class="form-control amount" name="price" id="price" placeholder="Enter Camping Price" required="true">
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >Discount</label>
                     <input type="text" class="form-control amount" name="discount" id="discount" placeholder="Enter Camping Discount">
					 <span id="discount_span"></span>
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >After Discount Price</label>
                      <input type="text" class="form-control" name="after_discount_price" id="after_discount_price" placeholder="Enter After Discount Price">
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >Rating</label>
                      <select class="form-control js-example-basic-single" name="rating" id="rating" placeholder="Enter Location" required="true">
						<option value="">rating</option>
						<?php for ($x = 1; $x <= 5; $x++) {?>
						<option value="<?php echo $x;?>"><?php echo $x;?></option>
						<?php } ?>
						</select>
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label">Location</label>
                      
					  <select class="form-control js-example-basic-single" name="location" id="location" placeholder="Enter Location" required="true">
						<option value="">Location</option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>"><?php echo $city->name;?></option>
						<?php } ?>
						</select>
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >Address</label>
                      <input type="text" class="form-control amount" name="address" id="address" placeholder="Address" required="true">
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" >Tag Line</label>
                      <input type="text" class="form-control amount" name="rating_status" id="rating_status" placeholder="Tag Line" required="true" >
					   </div>
					</div>
						<div class="form-row">
                      <div class="col-md-2">
                      <label class="form-control-label">check In Time</label>
                      <select class="form-control js-example-basic-single" name="check_in" id="check_in" placeholder="Enter Location" required="true">
						<option value="">check In</option>
						<?php for ($x = 12; $x >= 1; $x--) {?>
						<option value="<?php echo $x;?>"><?php echo $x;?></option>
						<?php } ?>
						</select>
					   </div>
					   <div class="col-md-2">
                      <label class="form-control-label">&nbsp;</label>
                      <select class="form-control js-example-basic-single" name="check_in_mode" id="check_in_mode" placeholder="Enter Location" required="true">
						<option value="PM">PM</option>
						<option value="AM">AM</option>
						</select>
					   </div>
					     <div class="col-md-3">
                      
					   </div>
					    <div class="col-md-2">
                      <label class="form-control-label">check Out Time</label>
                      <select class="form-control js-example-basic-single" name="check_out" id="check_out" placeholder="Enter Location" required="true">
						<option value="">Check Out</option>
						<?php for ($x = 1; $x <= 12; $x++) {?>
						<option value="<?php echo $x;?>"><?php echo $x;?></option>
						<?php } ?>
						</select>
					   </div>
					   <div class="col-md-2">
                      <label class="form-control-label">&nbsp;</label>
                      <select class="form-control js-example-basic-single" name="check_out_mode" id="check_out_mode" placeholder="Enter Location" required="true">
					  <option value="AM">AM</option>
						<option value="PM">PM</option>
						
						</select>
					   </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label">Description</label>
                      <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter location" required="true"></textarea>
					   </div>
					</div>
					
					</div>
					<input type="hidden" class="form-control" name="property_type" id="property_type" placeholder="Enter location" value="camping">
					<input type="hidden" class="form-control" name="property_id" id="property_id" placeholder="Enter location" >
                  <input  class="btn btn-primary mt-3" type="submit" name="create-submit" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>