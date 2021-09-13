<section class="page_body notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <h5 class="m-0">Notifications</h5>
                </div>
                <div class="col-lg-9 col-md-12">
                    <?php 
					
					if($this->session->userdata('role')==2){
					   foreach($notifications as $notifications){
						$allsellerProfileN = $this->dashboard_model->viewProfile(base64_encode($notifications->from_id)); ?>
					
                    <a href="#">
                        <div class="main_box my-4 w-100">
                            <div class="pak_tag">
                                <h5><?php if(!empty($allsellerProfileN['user_plan'])) { if($allsellerProfileN['user_plan']==1) { echo "Basic";} 
								if($allsellerProfileN['user_plan']==2) { echo "Professional";}
								if($allsellerProfileN['user_plan']==3) { echo "Premium";}
								}?></h5>
                            </div>
                            <div class="activity_head d-flex justify-content-between p_20 px_40">
                                <p><?php if(!empty($allsellerProfileN['field_4'])) {  $businessindustry= unserialize($allsellerProfileN['field_4']);
							  echo implode(',',$businessindustry);
							}?> for <?php 
							if(!empty($allsellerProfileN['interested_in'])) { 
							if($allsellerProfileN['interested_in']==1) { echo "Full sale of business";} 
							if($allsellerProfileN['interested_in']==2) { echo "Partial stake sale of business/investment";} 
							if($allsellerProfileN['interested_in']==3) { echo "Loan for business";}
							}?> in <?php if(!empty($allsellerProfileN['field_5'])) { echo $allsellerProfileN['field_5']; }?></p>
                               
                            </div>
                            <hr class="latest_line m-0">
                            <div class="activity_body d-flex flex-column p_20 px_40">
                                <h5 class="w_88"><?php if(!empty($allsellerProfileN['>field_8'])) { echo $allsellerProfileN['field_8']; }?></h5>
                                <ul class="latest_share d-flex py-3">
                                    <li><a href="mailto:<?php if(!empty($allsellerProfileN['official_email'])) { echo $allsellerProfileN['official_email'];}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
                                        <li><a href="tel:<?php if(!empty($allsellerProfileN['user_phone'])) { echo $allsellerProfileN['user_phone'];}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li>
                                </ul>
                                <p><b>Description : </b><?php if(!empty($allsellerProfileN['field_8'])) { echo $allsellerProfileN->field_8; }?></p>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Monthly sales</h5>
                                        <p>SGD <?php if(!empty($allsellerProfileN['field_12'])) { echo number_format_short($allsellerProfileN->field_12, 1 ); }?></p>
                                    </div>
                                    <div class="right_side pr-1">
                                        <h5>Yearly Sales</h5>
                                        <p>SGD <?php if(!empty($allsellerProfileN['field_13'])) {echo number_format_short($allsellerProfileN->field_13, 1 ); }?></p>
                                    </div>                                
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Selling price</h5>
                                        <p>SGD <?php if(!empty($allsellerProfileN['tentative_selling'])) { echo number_format_short($allsellerProfileN->tentative_selling, 1 ); }?></p>
                                    </div>
                                                                  
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5> Current Location</h5>
                                        <p><?php if(!empty($allsellerProfileN['field_5'])) { echo $allsellerProfileN['field_5']; }?></p>
                                    </div>                               
                                </div>
                                
                                <button class="user_btn ml-auto my-2"><a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfileN['user_id']);?>">Contact Business</a></button>
                            </div> 
                        </div>
                    </a>
                   <?php 
						
					}
					}
					?>
             <?php 
					
					if($this->session->userdata('role')==3){
					   foreach($notifications as $notifications){
						$allbuyerProfile = $this->dashboard_model->viewProfile(base64_encode($notifications->from_id)); 
						?>
						
						
                        <div class="main_box my-4 w-100">
                            <div class="pak_tag">
                                <h5><?php if(!empty($allbuyerProfile['user_plan'])) { if($allbuyerProfile['user_plan']==1) { echo "Basic";} 
								if($allbuyerProfile['user_plan']==2) { echo "Professional";}
								if($allbuyerProfile['user_plan']==3) { echo "Premium";}
								}?></h5>
                            </div>
                            <div class="activity_head d-flex justify-content-between p_20 px_40">
                                <p><?php if(!empty($allbuyerProfile['field_7'])) { echo $allbuyerProfile['field_7']; }?> for 
								<?php if(!empty($allbuyerProfile['field_1'])) {
								if($allbuyerProfile['field_1']=='1'){echo"Individual Investor / Buyer";}
								if($allbuyerProfile['field_1']=='2'){echo"Corporate Investor / Buyer";}
								if($allbuyerProfile['field_1']=='3'){echo"Bank";}
								if($allbuyerProfile['field_1']=='4'){echo"NBFC";}
								if($allbuyerProfile['field_1']=='5'){echo"Credit Union";}
								if($allbuyerProfile['field_1']=='6'){echo"Accounting Firm";}
								if($allbuyerProfile['field_1']=='7'){echo"Business Broker";}
								if($allbuyerProfile['field_1']=='8'){echo"Investment Bank";}
								if($allbuyerProfile['field_1']=='9'){echo"Law Firm";}
								if($allbuyerProfile['field_1']=='10'){echo"M&amp;A Advisor";}
								if($allbuyerProfile['field_1']=='11'){echo"Merchant Bank";}
								if($allbuyerProfile['field_1']=='12'){echo"Commercial Real Estate Broker";}
								if($allbuyerProfile['field_1']=='13'){echo"Venture Capital Firm";}
								if($allbuyerProfile['field_1']=='14'){echo"Private Equity Firm";}
								if($allbuyerProfile['field_1']=='15'){echo"Family Office";}
								if($allbuyerProfile['field_1']=='16'){echo"Hedge Fund";}
								if($allbuyerProfile['field_1']=='17'){echo"NBFC";}
								
								
								}?>
								in
							<?php if(!empty($allbuyerProfile['field_5'])) { echo $allbuyerProfile['field_5']; }?>  
							</p>
                                
                            </div>
                            <hr class="latest_line m-0">
                            <div class="activity_body d-flex flex-column p_20 px_40">
                                <h5 class="w_88"><?php if(!empty($allbuyerProfile['field_6'])) { echo $allbuyerProfile['field_6']; }?></h5>
                                <ul class="latest_share d-flex py-3">
                                  <li><a href="mailto:<?php if(!empty($allbuyerProfile['official_email'])) { echo $allbuyerProfile['official_email'];}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
                                        <li><a href="tel:<?php if(!empty($allbuyerProfile['user_phone'])) { echo $allbuyerProfile['user_phone'];}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li>
                                </ul>
                                <p><b>Description : </b><?php if(!empty($allbuyerProfile['field_6'])) { echo $allbuyerProfile['field_6']; }?></p>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Investment Range</h5>
                                         <p><span>SGD</span> <?php if(!empty($allbuyerProfile['field_4'])) { echo number_format_short($allbuyerProfile['field_4'], 1 ); }?> To  <?php if(!empty($allbuyerProfile['investmentto'])) { echo number_format_short($allbuyerProfile['investmentto'], 1 ); }?></p>
                                    </div>
                                    <div class="right_side pr-1">
                                        <h5>Industries Preference</h5>
                                        <p><?php if(!empty($allbuyerProfile['field_2'])) {  $businessindustry= unserialize($allbuyerProfile['field_2']);
											echo implode(',',$businessindustry);
										}?> </p>
                                    </div>                                
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>locations Preference</h5>
                                       <p><?php if(!empty($allbuyerProfile['field_3'])) { echo $allbuyerProfile['field_3']; }?></p>
                                    </div>
                                                                  
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Current Location</h5>
                                        <p><?php if(!empty($allbuyerProfile['field_5'])) { echo $allbuyerProfile['field_5']; }?></p>
                                    </div>                               
                                </div>
                                
                                <button class="user_btn ml-auto my-2"><a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile['user_id']);?>">Contact Business</a></button>
                            </div> 
                        </div>
                   
					   <?php }
					    }
					   ?>

                </div>
            </div>
        </div>
    </section>
