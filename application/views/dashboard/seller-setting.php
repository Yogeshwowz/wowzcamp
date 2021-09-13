<section class="setting_page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="nav flex-column nav-pills" id="setting_tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" href="<?php echo base_url();?>dashboard"><i class="fa fa-chevron-left back_btn pr-3" aria-hidden="true"></i>Back to Dashboard</a> <a class="nav-link active" id="contact-billing-tab-tab" data-toggle="pill" href="#contact-billing-tab" role="tab" aria-controls="contact-billing-tab" aria-selected="false">Contact &amp; Billing</a> <a class="nav-link" id="deal-preference-tab" data-toggle="pill" href="#deal-preference" role="tab" aria-controls="deal-preference" aria-selected="false">Deal Preferences</a> <a class="nav-link" id="change-password-tab" data-toggle="pill" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a> <a class="nav-link" id="upgrade-plan-tab" data-toggle="pill" href="#upgrade-plan" role="tab" aria-controls="upgrade-plan" aria-selected="false">Upgrade Plan</a> </div>
			</div>
			<div class="col-md-8">
				<div class="tab-content" id="setting_tabContent">
					<div class="tab-pane fade show active" id="contact-billing-tab" role="tabpanel" aria-labelledby="contact-billing-tab-tab">
						<div id="c-success-msg" style="display:none;" class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Information has been updated successfull </div>
						<div class="setting_box">
							<h6>Contact &amp; Billing</h6>
							<hr class="mb-4">
							<form id="profile-frm" method="POST" action="" role="form" novalidate="" enctype="multipart/form-data">
								<div class="pro_box bg_white my-4">
									<h3>Confidential Information</h3>
									<hr>
									<div class="row">
										<div class="col-md-6 mb-2 justify-content-between">
											<label class="w-100 mb-2" for="your_name">Your Name</label>
											<input class="w-100 p-1" type="text" name="your_name" value="<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>" required='true'> </div>
										<div class="col-md-6 mb-2 justify-content-between">
											<label class="w-100 mb-2" for="company_name">Company Name</label>
											<input class="w-100 p-1" type="text" name="company_name" value="<?php if(!empty($userprofile['company_name'])) {echo  $userprofile['company_name'];}?>" required='true'> </div>
										<div class="col-md-6 mb-2 justify-content-between">
											<label class="w-100 mb-2" for="mobile_number">Your Mobile Number</label>
											<input class="w-100 p-1 numbervalidation" type="text" name="mobile_number" value="<?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?>" maxlength="10" required='true'> </div>
										<div class="col-md-6 mb-2 justify-content-between">
											<label class="w-100 mb-2" for="email">Enter official email for quick verification</label>
											<input class="w-100 p-1" type="email" name="official_email" value="<?php if(!empty($userprofile['official_email'])) {echo  $userprofile['official_email'];}?>" required='true'> </div>
									</div>
								</div>
								<div class="pro_box requirement_box bg_white">
									<h3>Business Information</h3>
									<hr>
									<div class="row">
										<div class="col-md-6 mb-2">
											<label class="">You are a(n)</label>
										</div>
										<div class="col-md-6 mb-2">
											<select class="w-100 p-1 select_field_1 js-example-basic-single" name="field_1" id="field_1">
												<option selected disabled hidden style='display: none' value=''></option>
												<option value="1" <?php if(!empty($userprofile[ 'field_1'])) {if($userprofile[ 'field_1']==1) { echo "selected";}}?>>Business Owner / Director</option>
												<option value="2" <?php if(!empty($userprofile[ 'field_1'])) {if($userprofile[ 'field_1']==2) { echo "selected";}}?>>Management Member</option>
												<option value="3" <?php if(!empty($userprofile[ 'field_1'])) {if($userprofile[ 'field_1']==3) { echo "selected";}}?>>Advisor / Business Broker</option>
											</select>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">you are interested in</label>
										</div>
										<div class="col-md-6 mb-2">
											<select class="select_field_2 js-example-basic-single" name="interested_in" required='true' id="interested_in">
												<option selected disabled hidden style='display: none' value=''></option>
												<option value="1" <?php if(!empty($userprofile[ 'interested_in'])) {if($userprofile[ 'interested_in']==1) { echo "selected";}}?>>Full sale of business</option>
												<option value="2" <?php if(!empty($userprofile[ 'interested_in'])) {if($userprofile[ 'interested_in']==2) { echo "selected";}}?>>Partial stake sale of business/investment</option>
												<option value="3" <?php if(!empty($userprofile[ 'interested_in'])) {if($userprofile[ 'interested_in']==3) { echo "selected";}}?>>Loan for business</option>
											</select>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">Select business industry</label>
										</div>
										<div class="col-md-6 mb-2">
											<?php if(!empty($userprofile['field_4'])) {                                    $field_4 = unserialize($userprofile['field_4']);                                                                        }?>
												<select class="w-100 p-1 select_field_1 js-example-basic-multiple" name="field_4[]" id="field_4" multiple="multiple" required='true'>
													<option disabled hidden style='display: none' value=''></option>
													<?php foreach($businessindustry as $businessindustry){ ?>
														<option value="<?php echo $businessindustry['name'];?>" <?php if(!empty($field_4)) { if(in_array($businessindustry[ 'name'],$field_4)) { echo "selected";} }?>>
															<?php echo $businessindustry['name'];?>
														</option>
														<?php } ?>
												</select>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">Where is the business located / headquartered?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1" type="text" name="field_5" id="field_5" value="<?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?>" required='true'> </div>
										<div class="col-md-6 mb-2">
											<label class="">What is the tentative selling price for the business?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1 price_input" type="number" name="tentative_selling" value="<?php if(!empty($userprofile['tentative_selling'])) {echo  $userprofile['tentative_selling'];}?>" required='true'> <span class="price">SGD |</span> </div>
										<div class="col-md-6 mb-2">
											<label class="">Provide reason for sale</label>
										</div>
										<div class="col-md-6 mb-2">
											<textarea required='true' class="p-1" name="reason_for_sale" cols="40" rows="2">
												<?php if(!empty($userprofile['reason_for_sale'])) {echo  $userprofile['reason_for_sale'];}?>
											</textarea>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">When was the business established?</label>
										</div>
										<div class="col-md-6 mb-2">
											<!--<input class="w-100 p-1" type="text" name="field_3" id="field_3" value="<?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?>">-->
											<select class="js-example-basic-single" name="field_3" id="field_3" required='true'>
												<option selected disabled hidden style='display: none' value=''></option>
												<?php for($i=2021; $i>1990;$i--){?>
													<option value="<?php echo $i;?>" <?php if(!empty($userprofile[ 'field_3'])) {if($userprofile[ 'field_3']==$i) { echo "selected";}}?>>
														<?php echo $i;?>
													</option>
													<?php } ?>
											</select>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">How many permanent employees does the business have?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input required='true' class="w-100 p-1" type="text" name="field_6" id="field_6" value="<?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?>"> </div>
										<div class="col-md-6 mb-2">
											<label class="">Select business legal entity type</label>
										</div>
										<div class="col-md-6 mb-2">
											<select class="js-example-basic-single" name="field_7" id="field_7" required='true'>
												<option selected disabled hidden style='display: none' value=''></option>
												<option value="1" <?php if(!empty($userprofile[ 'field_7'])) {if($userprofile[ 'field_7']==1) { echo "selected";}}?>>Sole Proprietorship/Sole Trader</option>
												<option value="2" <?php if(!empty($userprofile[ 'field_7'])) {if($userprofile[ 'field_7']==2) { echo "selected";}}?>>General Partnership</option>
												<option value="3" <?php if(!empty($userprofile[ 'field_7'])) {if($userprofile[ 'field_7']==3) { echo "selected";}}?>>Limited Liability Partnership (LLP)</option>
												<option value="4" <?php if(!empty($userprofile[ 'field_7'])) {if($userprofile[ 'field_7']==4) { echo "selected";}}?>>Limited Liability Company (LLC)</option>
												<option value="5" <?php if(!empty($userprofile[ 'field_7'])) {if($userprofile[ 'field_7']==5) { echo "selected";}}?>>Private Limited Company</option>
											</select>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">Describe the business in a single line</label>
										</div>
										<div class="col-md-6 mb-2">
											<textarea required='true' class="w-100 p-1" name="field_8" id="field_8" value="">
												<?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?>
											</textarea>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">Mention highlights of the business including number of clients, growth rate, promoter experience, business relationships, awards, etc</label>
										</div>
										<div class="col-md-6 mb-2">
											<textarea required='true' class="w-100 p-1" name="field_9" id="field_9">
												<?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>
											</textarea>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">List all products and services of the business</label>
										</div>
										<div class="col-md-6 mb-2">
											<textarea required='true' class="w-100 p-1" name="field_10" id="field_10">
												<?php if(!empty($userprofile['field_10'])) {echo  $userprofile['field_10'];}?>
											</textarea>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">Describe your facility such as built-up area, number of floors, rental/lease details </label>
										</div>
										<div class="col-md-6 mb-2">
											<textarea required='true' class="w-100 p-1" name="field_11" id="field_11">
												<?php if(!empty($userprofile['field_11'])) {echo  $userprofile['field_11'];}?>
											</textarea>
										</div>
										<div class="col-md-6 mb-2">
											<label class="">At present, what is your average monthly sales?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1 price_input numbervalidation" type="text" name="field_12" id="field_12" value="<?php if(!empty($userprofile['field_12'])) {echo  $userprofile['field_12'];}?>" required='true'> <span class="price">SGD |</span> </div>
										<div class="col-md-6 mb-2">
											<label class="">What was your latest reported yearly sales?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1 price_input numbervalidation" type="text" name="field_13" id="field_13" value="<?php if(!empty($userprofile['field_13'])) {echo  $userprofile['field_13'];}?>" required='true'> <span class="price">SGD |</span> </div>
										<div class="col-md-6 mb-2">
											<label class="">What is the value of physical assets owned by the business?</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1 price_input numbervalidation" type="text" name="field_16" id="field_16" value="<?php if(!empty($userprofile['field_16'])) {echo  $userprofile['field_16'];}?>" required='true'> <span class="price">SGD |</span> </div>
										<div class="col-md-6 mb-2" style="display:none;">
											<label class="">What is the EBITDA / Operating Profit Margin Percentage? </label>
										</div>
										<div class="col-md-6 mb-2" style="display:none;">
											<input class="w-100 p-1" type="text" name="field_14" id="field_14" value="<?php if(!empty($userprofile['field_14'])) {echo  $userprofile['field_14'];}?>"> </div>
										<div class="col-md-6 mb-2">
											<label class="">List all assets the business owns</label>
										</div>
										<div class="col-md-6 mb-2">
											<input class="w-100 p-1" type="text" name="field_15" id="field_15" value="<?php if(!empty($userprofile['field_15'])) {echo  $userprofile['field_15'];}?>" required='true'> </div>
										<!--- Image Show Data---->
										<div class="col-md-6 mb-2">
											<label class=""></label>
										</div>
										<div class="col-md-6 mb-2">
											<div id="img-preview" class="row">
												<?php if(!empty($Gimages)){                                      
												foreach($Gimages as $Gimages){?>
													<div class="col-md-2" id="<?php echo $Gimages['pmid']; ?>">
														<div class="thumbnail"><img class="thumbnail-img" src="<?php echo base_url();?>/assets/upload/gallery/thumbnail/<?php echo $Gimages['image']; ?>" /> <span class="remove-image" onclick="removeimage(<?php echo $Gimages['pmid']; ?>)">X</span> </div>
													</div>
													<?php }                                       }?>
											</div>
										</div>
										<!--- End Image Show Data---->
										<div class="col-md-6 mb-2">
											<label class="">Add business and product photos </label>
										</div>
										<div class="col-md-6 mb-2">
											<input rel="image" Itype="seller" style="display:none;" type="file" name="add_photo" id="add_photo">
											<label for="add_photo" class="add_file_btn">Add Photos</label> <span id="imageextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf</span> <span id="imagefsize" class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>
											<input id="imagecount" type="hidden" value="0"> </div>
										<!--- Documents Show Data---->
										<div class="col-md-6 mb-2">
											<label class=""></label>
										</div>
										<div class="col-md-6 mb-2">
											<div id="documents-preview" class="row">
												<?php if(!empty($Docimages)){                                      
												$showpath =base_url()."assets/img/";                                                                              
												foreach($Docimages as $Docimages){
												$ext = pathinfo($Docimages['image']);
												if($ext['extension']=='docx' || $ext['extension']=='doc'){ $nameicon = "word.png";}
												if($ext['extension']=='jpg' || $ext['extension']=='gif' || $ext['extension']=='png'){ $nameicon = "img-icon.png";}                                                                             
												if($ext['extension']=='pdf'){ $nameicon = "pdf-icon.png";}                                                                              ?>
													<div class="col-md-2" id="<?php echo $Docimages['pmid']; ?>">
														<div class="thumbnail"><img class="thumbnail-img" src="<?php echo $showpath.$nameicon;?>" /> <span class="remove-image" onclick="removeimage(<?php echo $Docimages['pmid']; ?>)">X</span> </div>
													</div>
													<?php }                                       }?>
											</div>
										</div>
										<!--- End Image Show Data---->
										<div class="col-md-6 mb-2">
											<label class="">Add business documents</label>
										</div>
										<div class="col-md-6 mb-2">
											<input Itype="seller" rel="doc" style="display:none;" type="file" name="add_documents" id="add_documents">
											<label for="add_documents" class="add_file_btn">Add Documents</label> <span id="documentsextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf, doc, docx</span> <span id="documentssize" class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>
											<input id="documentscount" type="hidden" value="0"> </div>
										<div class="col-md-6 mb-2">
											<label class="">Attach proof of business for faster verification</label>
										</div>
										<div class="col-md-6 mb-2">
											<input rel="proof" style="display:none;" type="file" name="attach_proof" id="attach_proof">
											<label for="attach_proof" class="add_file_btn">Attach Proof</label> <span id="proofextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf, doc, docx</span> <span id="proofsize" class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span> <span id="proofupload" class="error-image" style="display:none;">Attach Proof has been upload successfully</span> </div>
										<div class="offset-md-6 col-md-6 mb-2">
											<input type="submit" class="main-btn1 py-2 submit_profile_btn" value="Submit" name="confidentail-submit"> </div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="deal-preference" role="tabpanel" aria-labelledby="deal-preference-tab">
						<div id="d-success-msg" style="display:none;" class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Information has been updated successfull </div>
						<div class="setting_box">
							<h6>Deal Preferences</h6>
							<hr class="mb-4">
							<form action="" id="setting-deal-frm" method="POST" role="form" novalidate="">
								<div class="row">
									<div class="col-md-12 mb-3">
										<label class="w-100 mb-2" for="location">Locations</label>
										<input class="w-100 py-2" type="text" name="deallocations" placeholder="" value="<?php if(!empty($setting['deallocations'])) { echo $setting['deallocations']; }?>"> </div>
									<div class="col-md-12 mb-3">
										<label class="w-100 mb-2" for="industries">Industries</label>
										<?php if(!empty($setting['dealindustries'])) {                                 
										$dealindustries = unserialize($setting['dealindustries']);  
										}?>
											<select class="w-100 p-1  js-example-basic-multiple" name="dealindustries[]" id="dealindustries" multiple="multiple" required='true'>
												<option disabled hidden style='display: none' value=''></option>
												<?php foreach($businessindustry_2 as $businessindustry_2){ ?>
													<option value="<?php echo $businessindustry_2['name'];?>" <?php if(!empty($dealindustries)) { if(in_array($businessindustry_2[ 'name'],$dealindustries)) { echo "selected";} }?>>
														<?php echo $businessindustry_2['name'];?>
													</option>
													<?php } ?>
											</select>
									</div>
									<div class="col-md-12 mb-3">
										<input type="submit" class="save_change bg_main br_10 py-3" value="Save Changes" name="deal-contact-submit"> </div>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
						<div id="p-success-msg" style="display:none;" class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> password has been updated successfully. </div>
						<div class="setting_box">
							<h6>Change Password</h6>
							<hr class="mb-4">
							<form action="" id="change-password-frm" method="POST" role="form" novalidate="">
								<div class="row">
									<div class="col-md-12 mb-4">
										<h4>Change Password</h4> </div>
									<div class="col-md-12 mb-3">
										<label class="w-100 mb-2" for="password">Password :</label>
										<input class="w-100 py-2" type="text" id="password" name="password" placeholder="" required="true"> </div>
									<div class="col-md-12 mb-3">
										<label class="w-100 mb-2" for="repeat-password">Repeat Password :</label>
										<input class="w-100 py-2" type="text" id="rp" name="repeat-password" placeholder="" required="true"> <span id="error-pass" style="display:none;">password and repeat password does not match</span> </div>
									<div class="col-md-12 mb-3">
										<button class="save_change bg_main br_10 py-2 px-4">Change Password</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="upgrade-plan" role="tabpanel" aria-labelledby="upgrade-plan-tab">
						<div class="setting_box">
							<h6>Upgrade Plan</h6>
							<hr class="mb-4">
							<div class="pro_box requirement_box bg_white ">
								<div class="row">
									<div class="col-md-12 mb-2">
										<h3>For more introductions select plan</h3> </div>
									<div class="col-md-12 mb-2">
										<label class="form-check-label text_bold pb-3  w-100">
											<input type="radio" name="buy_plan" id="bp" value="1" <?php if($userprofile[ 'user_plan']==1){ echo "checked";}?>>Basic Plan -Free
											<div class="plan_box">
												<div class="row">
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Free Registration</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Publish your Business Profile</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Connect with Potential Buyers/Sellers/Investors and Advisors</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-12 mb-2">
										<label class="form-check-label text_bold pb-3  w-100">
											<input type="radio" name="buy_plan" id="mp" value="2" <?php if($userprofile[ 'user_plan']==2){ echo "checked";}?>>Starter Plan - $125
											<div class="plan_box">
												<div class="row">
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Signup and get profile verified instantly</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Send Proposal to Businesses </p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>One Month Subscription</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>25 Proposals</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-12 mb-2">
										<label class="form-check-label text_bold pb-3  w-100">
											<input type="radio" name="buy_plan" id="pp" value="3" <?php if($userprofile[ 'user_plan']==3){ echo "checked";}?>>Standard Plan - $240
											<div class="plan_box">
												<div class="row">
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Signup and get profile verified instantly</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Send Proposal to Businesses</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>3 Month Subscription </p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>80 Proposals</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Email Support</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>NDA (Coming soon)</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-12 mb-2">
										<label class="form-check-label text_bold pb-3  w-100">
											<input type="radio" name="buy_plan" id="pro" value="4" <?php if($userprofile[ 'user_plan']==4){ echo "checked";}?>>Pro Plan - $360
											<div class="plan_box">
												<div class="row">
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Signup and get profile verified instantly</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Send Proposal to Businesses</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>6 Month Subscription </p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Unlimited Proposal </p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>Email Support</p>
													</div>
													<div class="col-1 pb-3"> <span class="plan_check"></span> </div>
													<div class="col-11 pb-3">
														<p>NDA (Coming soon)</p>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-lg-8 col-md-12 mb-3">
										<div class="d-flex">
											<input type="checkbox" class="form-check-input" value="1" name="accept">
											<label class="form-check-label text_bold pb-3  w-100"> I accept 1% finder's fee (payable post transaction) and other terms of engagement </label>
										</div> <span class="accept-error error" id="accept-error" style="display:none;">Please select first terms of engagement</span> </div>
									<div class="col-lg-4 col-md-12 mb-3">
										<button id="buy-button" class="main-btn1 ml-auto py-2">Buy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	</div>
</section>