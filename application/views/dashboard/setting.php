<section class="setting_page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills" id="setting_tab" role="tablist" aria-orientation="vertical">                        
                      <a class="nav-link" href="<?php echo base_url();?>dashboard"><i class="fa fa-chevron-left back_btn pr-3" aria-hidden="true"></i>Back to Dashboard</a>
                      <a class="nav-link active" id="contact-billing-tab-tab" data-toggle="pill" href="#contact-billing-tab" role="tab" aria-controls="contact-billing-tab" aria-selected="false">Contact &amp; Billing</a>
                      <a class="nav-link" id="deal-preference-tab" data-toggle="pill" href="#deal-preference" role="tab" aria-controls="deal-preference" aria-selected="false">Deal Preferences</a>
                      <a class="nav-link" id="change-password-tab" data-toggle="pill" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="setting_tabContent">
                        <div class="tab-pane fade show active" id="contact-billing-tab" role="tabpanel" aria-labelledby="contact-billing-tab-tab">
						<div id="c-success-msg"  style="display:none;" class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					   Information has been updated successfull
						</div>
                            <div class="setting_box">
                                <h6>Contact &amp; Billing</h6>
                                <hr class="mb-4">
                                 <form action=""  id="setting-contact-frm" method="POST" role="form" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="name">Name</label>
                                            <input class="w-100 py-2" type="text" name="name" placeholder="" required="true" value="<?php if(!empty($setting['first_name'])) { echo $setting['first_name']; }?>">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="Mobile-number">Mobile Number</label>
                                            <input class="w-100 py-2" type="number" name="mobilenumber" placeholder=""  value="<?php if(!empty($setting['user_phone'])) { echo $setting['user_phone']; }?>" required="true">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="location">Location</label>
                                            <input class="w-100 py-2" type="text" name="location" placeholder="" value="<?php if(!empty($setting['location'])) { echo $setting['location']; }?>" required="true">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="timezone">Timezone</label>
                                            <input class="w-100 py-2" type="text" name="timezone" placeholder="" value="<?php if(!empty($setting['timezone'])) { echo $setting['timezone']; }?>" required="true">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="company_name">Company Name</label>
                                            <input class="w-100 py-2" type="text" name="companyname" placeholder="" value="<?php if(!empty($setting['company_name'])) { echo $setting['company_name']; }?>" required="true">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="designation">Designation</label>
                                            <input class="w-100 py-2" type="text" name="designation" placeholder="" value="<?php if(!empty($setting['designation'])) { echo $setting['designation']; }?>" required="true">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="w-100 mb-2" for="gst_number">GST Number</label>
                                            <input class="w-100 py-2" type="number" name="gstnumber" placeholder="" value="<?php if(!empty($setting['gstnumber'])) { echo $setting['gstnumber']; }?>" required="true">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="w-100 mb-2" for="address">Address</label>
                                            <input class="w-100 py-2" type="text" name="address" placeholder="" value="<?php if(!empty($setting['address'])) { echo $setting['address']; }?>" required="true">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            
											 <input type="submit" class="save_change bg_main br_10 py-3" value="Save Changes" name="contact-submit">
                                        </div>                                    
                                    </div>                                      
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="deal-preference" role="tabpanel" aria-labelledby="deal-preference-tab">
						<div id="d-success-msg"  style="display:none;" class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					   Information has been updated successfull
						</div>
                            <div class="setting_box">
                                <h6>Deal Preferences</h6>
                                <hr class="mb-4">
                              <form action=""  id="setting-deal-frm" method="POST" role="form" novalidate="">
                                    <div class="row">                                    
                                        <div class="col-md-12 mb-3">
                                            <label class="w-100 mb-2" for="location">Locations</label>
                                            <input class="w-100 py-2" type="text" name="deallocations" placeholder="" value="<?php if(!empty($setting['deallocations'])) { echo $setting['deallocations']; }?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="w-100 mb-2" for="industries">Industries</label>
                                            
											<?php if(!empty($setting['dealindustries'])) {
                           $dealindustries = unserialize($setting['dealindustries']);
                           
                           }?>
                        <select   class="w-100 p-1  js-example-basic-multiple" name="dealindustries[]" id="dealindustries" multiple="multiple" required='true' >
                           <option  disabled hidden style='display: none' value=''></option>
                           <?php foreach($businessindustry as $businessindustry){ ?>
                           <option value="<?php echo $businessindustry['name'];?>" <?php if(!empty($dealindustries)) {  if(in_array($businessindustry['name'],$dealindustries)) { echo"selected";} }?>><?php echo $businessindustry['name'];?></option>
                           <?php } ?>
                        </select>
											
											
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            
											 <input type="submit" class="save_change bg_main br_10 py-3" value="Save Changes" name="deal-contact-submit">
                                        </div>                                    
                                    </div>                                      
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
						<div id="p-success-msg"  style="display:none;" class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					   password has been updated successfully.
						</div>
                            <div class="setting_box">
                                <h6>Change Password</h6>
                                
                                <hr class="mb-4">
                              <form action=""  id="change-password-frm" method="POST" role="form" novalidate="">
								<div class="row">
								<div class="col-md-12 mb-4">
								<h4>Change Password</h4>
								</div>
								<div class="col-md-12 mb-3">
								<label class="w-100 mb-2" for="password">Password :</label>
								<input class="w-100 py-2" type="text" id="password" name="password" placeholder="" required="true">
								</div>
								<div class="col-md-12 mb-3">
								<label class="w-100 mb-2" for="repeat-password">Repeat Password :</label>
								<input class="w-100 py-2" type="text" id="rp" name="repeat-password" placeholder="" required="true">
								<span id="error-pass" style="display:none;">password and repeat password does not match</span>
								</div>
								<div class="col-md-12 mb-3">
								<button class="save_change bg_main br_10 py-2 px-4">Change Password</button>
								</div>                                    
								</div>                                      
                                </form>
                            </div>
                       
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>