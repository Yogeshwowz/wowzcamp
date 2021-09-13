<style>.thumbnail-img{width:50px;height:50px;} .error-select { border: 1px solid #f00!important;}</style><section class="setting_page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4">
            <div class="nav flex-column nav-pills" id="setting_tab" role="tablist" aria-orientation="vertical">                        
               <a class="nav-link" href="<?php echo base_url();?>dashboard"><i class="fa fa-chevron-left back_btn pr-3" aria-hidden="true"></i>Back to Dashboard</a>
               <a class="nav-link active" id="contact-billing-tab-tab" data-toggle="pill" href="#contact-billing-tab" role="tab" aria-controls="contact-billing-tab" aria-selected="false">Contact &amp; Billing</a>
               <a class="nav-link" id="deal-preference-tab" data-toggle="pill" href="#deal-preference" role="tab" aria-controls="deal-preference" aria-selected="false">Deal Preferences</a>
               <a class="nav-link" id="change-password-tab" data-toggle="pill" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
			   <a class="nav-link" id="upgrade-plan-tab" data-toggle="pill" href="#upgrade-plan" role="tab" aria-controls="upgrade-plan" aria-selected="false">Upgrade Plan</a>
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
                    <form  id="buyer-profile-frm" method="POST" action="" role="form" novalidate=""enctype="multipart/form-data" >
               <div class="pro_box bg_white my-4">
                  <h3>Confidential Information</h3>
                  
                  <hr>
                  <div class="row">
                     <div class="col-md-6 mb-2 justify-content-between">                        <label class="w-100 mb-1 " for="your_name">Your Name</label>              <input class="w-100 p-1 px-2" type="text" name="your_name" value="<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>" required='true' >                     </div>
                     <div class="col-md-6 mb-2 justify-content-between">                        <label class="w-100 mb-1" for="email">Enter official email for quick verification</label>                        <input class="w-100 p-2" type="email" name="official_email" value="<?php if(!empty($userprofile['official_email'])) {echo  $userprofile['official_email'];}?>" required='true'>                     </div>
                     <div class="col-md-6 mb-2 justify-content-between">                        <label class="w-100 mb-1 " for="mobile_number">Your Mobile Number</label>                        <input class="w-100 p-1 px-2 numbervalidation" type="text" name="mobile_number" value="<?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?>" maxlength="10" required='true'>                     </div>
                  </div>
               </div>
               <div class="pro_box requirement_box bg_white">
                  <h3>Your Requirements</h3>
                 
                  <hr>
                  <div class="row">
                     <div class="col-md-6 mb-2">                        <label class="">You are interested in</label>                     </div>
                     <div class="col-md-6 mb-2">
                        <select class="select_menu js-example-basic-single" id="interested_in" name="interested_in" required='true'>
                           <option selected disabled hidden style='display: none' value=''></option>
                           <option value="1" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='1'){echo"selected";}}?>>Acquiring / Buying a Business</option>
                           <option value="2" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='2'){echo"selected";}}?>>Investing in a Business</option>
                           <option value="3" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='3'){echo"selected";}}?> >Lending to a Business</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">You are a(n)</label>                     </div>
                     <div class="col-md-6 mb-2">
                        <select   class="w-100 p-1 select_field_1 js-example-basic-single" name="field_1" id="field_1" required='true'>
                           <option selected disabled hidden style='display: none' value=''></option>
                           <option value="1" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='1'){echo"selected";}}?>>Individual Investor / Buyer</option>
                           <option value="2" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='2'){echo"selected";}}?>>Corporate Investor / Buyer</option>
                           <optgroup label="Lender">
                              <option value="3" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='3'){echo"selected";}}?>>Bank</option>
                              <option value="4" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='4'){echo"selected";}}?>>NBFC</option>
                              <option value="5" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='5'){echo"selected";}}?>>Credit Union</option>
                           </optgroup>
                           <optgroup label="Financial Advisor">
                              <option value="6" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='6'){echo"selected";}}?>>Accounting Firm</option>
                              <option value="7" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='7'){echo"selected";}}?>>Business Broker</option>
                              <option value="FINANCIAL_CONSULTANT">Financial Consultant</option>
                              <option value="8" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='8'){echo"selected";}}?>>Investment Bank</option>
                              <option value="9" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='9'){echo"selected";}}?>>Law Firm</option>
                              <option value="10" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='10'){echo"selected";}}?>>M&amp;A Advisor</option>
                              <option value="11" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='11'){echo"selected";}}?>>Merchant Bank</option>
                              <option value="12" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='12'){echo"selected";}}?>>Commercial Real Estate Broker</option>
                           </optgroup>
                           <optgroup label="Fund">
                              <option value="13" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='13'){echo"selected";}}?>>Venture Capital Firm</option>
                              <option value="14" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='14'){echo"selected";}}?>>Private Equity Firm</option>
                              <option value="15" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='15'){echo"selected";}}?>>Family Office</option>
                              <option value="16" <?php if(!empty($userprofile['field_1'])) { if($userprofile['field_1']=='16'){echo"selected";}}?>>Hedge Fund</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Your company</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input required='true'  class="w-100 p-1 px-2" type="text" name="your_company" value="<?php if(!empty($userprofile['your_company'])) {echo  $userprofile['your_company'];}?>">                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Your designation</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input  required='true' class="w-100 p-1 px-2" type="text" name="field_7" id="field_7" value="<?php if(!empty($userprofile['field_7'])) {echo  $userprofile['field_7'];}?>">                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Company website or LinkedIn profile </label>                     </div>
                     <div class="col-md-6 mb-2">                        <input required='true' class="w-100 p-1 px-2" type="text" name="field_8" id="field_8" value="<?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?>">                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Your company's sector</label>                     </div>
                     <div class="col-md-6 mb-2">
                        <!--<input required='true' class="w-100 p-1 px-2" type="text" name="field_9" id="field_9" value="<?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>">-->						  <?php if(!empty($userprofile['field_9'])) {                           $field_9 = unserialize($userprofile['field_9']);                                                      }?>						 
                        <select   class="w-100 p-1 select_field_1 js-example-basic-multiple" name="field_9[]" id="field_9" multiple="multiple" required='true'>
                           <option  disabled hidden style='display: none' value=''></option>
                           <?php foreach($businessindustry_1 as $businessindustry_1){ ?>                           
                           <option value="<?php echo $businessindustry_1['name'];?>" <?php if(!empty($field_9)) {  if(in_array($businessindustry_1['name'],$field_9)) { echo"selected";} }?>><?php echo $businessindustry_1['name'];?></option>
                           <?php } ?>                        
                        </select>
                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Brief info about your Company</label>                     </div>
                     <div class="col-md-6 mb-2">                        <textarea  required='true' class="form-control" rows="3" name="field_6" id="field_6"><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></textarea>                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Provide your investment range</label>                     </div>
                     <div class="col-md-6 mb-2">
                        <div class="row">
                           <div class="col-md-6">                              <input  required='true' class="w-100 p-1 price_input numbervalidation" type="text" name="field_4" id="field_4" value="<?php if(!empty($userprofile['field_4'])) {echo  $userprofile['field_4'];}?>">                              <span class="price">SGD |</span>                           </div>
                           <div class="col-md-6">                              <input required='true' class="w-100 p-1 price_input numbervalidation" type="text" name="investmentto" id="investmentto" value="<?php if(!empty($userprofile['investmentto'])) {echo  $userprofile['investmentto'];}?>">                              <span class="price">To |</span>                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Your current location</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input required='true' class="w-100 p-1 px-2" type="text" name="field_5" id="field_5" value="<?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?>">                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Select industries Preference you are interested in</label>                     </div>
                     <div class="col-md-6 mb-2">
                        <!--<input class="w-100 p-1 px-2" type="text" name="field_2" id="field_2" value="<?php //if(!empty($userprofile['field_2'])) {echo  $userprofile['field_2'];}?>">-->                        <?php if(!empty($userprofile['field_2'])) {                           $field_2 = unserialize($userprofile['field_2']);                                                      }?>                        
                        <select   class="w-100 p-1 select_field_1 js-example-basic-multiple" name="field_2[]" id="field_2" multiple="multiple" required='true'>
                           <option  disabled hidden style='display: none' value=''></option>
                           <?php foreach($businessindustry as $businessindustry){ ?>                           
                           <option value="<?php echo $businessindustry['name'];?>" <?php if(!empty($field_2)) {  if(in_array($businessindustry['name'],$field_2)) { echo"selected";} }?>><?php echo $businessindustry['name'];?></option>
                           <?php } ?>                        
                        </select>
                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Select locations Preference you are interested in</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input required='true' class="w-100 p-1 px-2" type="text" name="field_3" id="field_3" value="<?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?>">                     </div>
                     <div class="col-md-6 mb-2" style="display:none;">                        <label class="">Company Logo</label>                     </div>
                     <div class="col-md-6 mb-2" style="display:none;">                        <input style="display:none;" type="file" name="company_logo" id="company_logo">                        <label for="company_logo" class="add_file_btn">Add Logo</label>                     </div>
                     <!--- Image Show Data---->                     
                     <div class="col-md-6 mb-2">                        <label class=""></label>                     </div>
                     <div class="col-md-6 mb-2">
                        <div id="img-preview" class="row">
                           <?php if(!empty($Gimages)){                              foreach($Gimages as $Gimages){?>                           
                           <div class="col-md-2" id="<?php echo $Gimages['pmid']; ?>">
                              <div class="thumbnail"><img class="thumbnail-img" src="<?php echo base_url();?>/assets/upload/gallery/thumbnail/<?php echo $Gimages['image']; ?>" />                                 <span class="remove-image" onclick="removeimage(<?php echo $Gimages['pmid']; ?>)">X</span>                              </div>
                           </div>
                           <?php }                              }?>                        
                        </div>
                     </div>
                     <!--- End Image Show Data---->	                     
                     <div class="col-md-6 mb-2" style="display:none;">                        <label class="">Profile picture</label>                     </div>
                     <div class="col-md-6 mb-2" style="display:none;">                        <input rel="image" Itype="buyer" style="display:none;" type="file" name="add_photo" id="add_photo">                        <label for="add_photo" class="add_file_btn">Add Photos</label>                        <span id="imageextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf</span>                        <span id="imagefsize"  class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>                        <input id="imagecount" type="hidden"  value="0" >                     </div>
                     <!--- Documents Show Data---->                     
                     <div class="col-md-6 mb-2">                        <label class=""></label>                     </div>
                     <div class="col-md-6 mb-2">
                        <div id="documents-preview" class="row">
                           <?php if(!empty($Docimages)){                              $showpath =base_url()."assets/img/";                                                            foreach($Docimages as $Docimages){                                                            $ext = pathinfo($Docimages['image']);                                                                                                                        if($ext['extension']=='docx' || $ext['extension']=='doc'){ $nameicon = "word.png";}                                                            if($ext['extension']=='jpg' || $ext['extension']=='gif' || $ext['extension']=='png'){ $nameicon = "img-icon.png";}                                                            if($ext['extension']=='pdf'){ $nameicon = "pdf-icon.png";}                                                                                                                        ?>                           
                           <div class="col-md-2" id="<?php echo $Docimages['pmid']; ?>">
                              <div class="thumbnail"><img class="thumbnail-img" src="<?php echo $showpath.$nameicon;?>" />                                 <span class="remove-image" onclick="removeimage(<?php echo $Docimages['pmid']; ?>)">X</span>                              </div>
                           </div>
                           <?php }                              }?>                        
                        </div>
                     </div>
                     <!--- End Image Show Data---->                     
                     <div class="col-md-6 mb-2">                        <label>Attach Corporate Profile and Terms of Engagement if any</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input  Itype="buyer" rel="doc" style="display:none;" type="file" name="add_documents" id="add_documents">                        <label for="add_documents" class="add_file_btn">Add Documents</label>                        <span id="documentsextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf, doc, docx</span>                        <span id="documentssize"  class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>                        <input id="documentscount" type="hidden"  value="0" >                     </div>
                     <div class="col-md-6 mb-2">                        <label class="">Attach proof of business for faster verification</label>                     </div>
                     <div class="col-md-6 mb-2">                        <input   rel="proof" style="display:none;" type="file" name="attach_proof" id="attach_proof">                        <label for="attach_proof" class="add_file_btn">Attach Proof</label>                        <span id="proofextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, pdf, doc, docx</span>                        <span id="proofsize"  class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>                        <span id="proofupload"  class="error-image" style="display:none;">Attach Proof has been upload successfully</span>                     </div>
                     <div class="offset-md-6 col-md-6 mb-4">                        <input  type="submit" class="main-btn1 py-2 submit_profile_btn" value="Submit" name="confidentail-submit" >                     </div>
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
                                 <?php foreach($businessindustry_2 as $businessindustry_2){ ?>
                                 <option value="<?php echo $businessindustry_2['name'];?>" <?php if(!empty($dealindustries)) {  if(in_array($businessindustry_2['name'],$dealindustries)) { echo"selected";} }?>><?php echo $businessindustry_2['name'];?></option>
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
				<div class="tab-pane fade" id="upgrade-plan" role="tabpanel" aria-labelledby="upgrade-plan-tab">
                
                  <div class="setting_box">
                     <h6>Upgrade Plan</h6>
                     <hr class="mb-4">
                     <div class="pro_box requirement_box bg_white ">
               <div class="row">
                  <div class="col-md-12 mb-2">
                     <h3>For more introductions select plan</h3>
                  </div>
                  <div class="col-md-12 mb-2">
                     <label class="form-check-label text_bold pb-3  w-100">
                        <input type="radio" name="buy_plan" id="bp" value="1" <?php if($userprofile['user_plan']==1){ echo "checked";}?>>Basic
                        <div class="plan_box">
                           <div class="row">
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>Speedy profile activation within 1 business day</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>You can send up to 50 business proposals to investors and buyers</p>
                              </div>
                              <div class="col-1">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11">
                                 <p>Quick email support for your queries</p>
                              </div>
                           </div>
                        </div>
                     </label>
                  </div>
                  <div class="col-md-12 mb-2">
                     <label class="form-check-label text_bold pb-3  w-100">
                        <input type="radio" name="buy_plan" id="mp" value="2" <?php if($userprofile['user_plan']==2){ echo "checked";}?>>Professional
                        <div class="plan_box">
                           <div class="row">
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>Speedy profile activation within 1 business day</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>You can send up to 50 business proposals to investors and buyers</p>
                              </div>
                              <div class="col-1">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11">
                                 <p>Quick email support for your queries</p>
                              </div>
                           </div>
                        </div>
                     </label>
                  </div>
                  <div class="col-md-12 mb-2">
                     <label class="form-check-label text_bold pb-3  w-100">
                        <input type="radio" name="buy_plan" id="pp" value="3" <?php if($userprofile['user_plan']==3){ echo "checked";}?>>Premium
                        <div class="plan_box">
                           <div class="row">
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>Speedy profile activation within 1 business day</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                              </div>
                              <div class="col-1 pb-3">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11 pb-3">
                                 <p>You can send up to 50 business proposals to investors and buyers</p>
                              </div>
                              <div class="col-1">
                                 <span class="plan_check"></span>
                              </div>
                              <div class="col-11">
                                 <p>Quick email support for your queries</p>
                              </div>
                           </div>
                        </div>
                     </label>
                  </div>
                  <div class="col-lg-8 col-md-12 mb-3">
                     <div class="d-flex">
                        <input   type="checkbox" class="form-check-input" value="1" name="accept">
                        <label class="form-check-label text_bold pb-3  w-100">
                         I accept the Terms of Engagement 
                        </label>
                     </div>
                     
					 <span class="accept-error error" id="accept-error" style="display:none;">Please select first terms of engagement</span>
                  </div>
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