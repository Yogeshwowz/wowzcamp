<section class="page_body daskboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 profile-d">
                   <?php $this->load->view('dashboard/profile-left-side');?>
				</div>
                <div class="col-lg-9 col-md-12 business-p">

                    <div class="main_box mb-4">
                        <!--<div class="p_20 main_gradient">
                            <h4>  Attention Required - Complete Your Profile</h4>
                            <p class="m-0 text-white">Some of your profiles are on hold/incomplete and they will not be visible to busin.</p>
                        </div>-->
                        <div class="box_body main_line p_20">
                            <div class="d-flex justify-content-between">
                                <h4>Business Profile</h4>
                                <div class="d-flex">
								<?php if(empty($userprofile['user_plan'])) { ?>
                                    <a href="<?php echo base_url();?>profile"><button class="main_btn mr-2">Complete Profile</button></a>
								<!--<button class="main_btn px-2"><i class="fa fa-trash" aria-hidden="true"></i></button>--><?php } ?>
                                </div>                              
                            </div>
                            <div class="d-flex flex-column black_border px-4 py-3 my-4 br_10">
                               <?php if(empty($userprofile['user_plan'])) { ?> <p class="pb-3">You have No Active Plan, Please upgrade to a premium plan to get your profile activated faster and start sending proposals to investors and acquirers</p><?php } else{ ?> 
                               <p class="pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                               </p><?php } ?>
							   <?php if(empty($userprofile['amount'])) { ?>
							   <button class="main_btn ml-auto" data-toggle="modal" data-target="#SendProposal">Send Proposal</button><?php }else { 
							   if($this->session->userdata('role')==2 || $this->session->userdata('role')==1){?>
							   <a href="<?php echo base_url();?>sellers"> <button class="main_btn ml-auto" >Send Proposal</button>
							   </a><?php
							   }
							   if($this->session->userdata('role')==3){?>
							   <a href="<?php echo base_url();?>buyers"> <button class="main_btn ml-auto" >Send Proposal</button>
							   </a><?php
							   }
							   } ?>
                            </div>
                        </div>
                    </div>

                    <div class="bg_main py-3 br_10 mb-4">
                        <h5 class="m-0">Latest Activity</h5>
                    </div>
					<?php if($this->session->userdata('role')==2 || $this->session->userdata('role')==4){?>
				<?php if(!empty($allsellerProfile)) {
				foreach($allsellerProfile as $allsellerProfile){ ?>
                    
                        <div class="main_box my-4 w-100">
                            <div class="pak_tag">
                                <h5><?php if(!empty($allsellerProfile->user_plan)) { if($allsellerProfile->user_plan==1) { echo "Basic";} 
								if($allsellerProfile->user_plan==2) { echo "Professional";}
								if($allsellerProfile->user_plan==3) { echo "Premium";}
								}?></h5>
                            </div>
                            <div class="activity_head d-flex justify-content-between p_20 px_40">
                                <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>"><p><?php if(!empty($allsellerProfile->field_4)) {  $businessindustry= unserialize($allsellerProfile->field_4);
							  echo implode(',',$businessindustry);
							}?> for <?php 
							if(!empty($allsellerProfile->interested_in)) { 
							if($allsellerProfile->interested_in==1) { echo "Full sale of business";} 
							if($allsellerProfile->interested_in==2) { echo "Partial stake sale of business/investment";} 
							if($allsellerProfile->interested_in==3) { echo "Loan for business";}
							}?> in <?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></p></a>
                               
                            </div>
                            <hr class="latest_line m-0">
                            <div class="activity_body d-flex flex-column p_20 px_40">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p><b>Description : </b><?php if(!empty($allsellerProfile->field_8)) { echo $allsellerProfile->field_8; }?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="latest_share justify-content-end d-flex m-0">
											<?php 
											if(!empty($userprofile['amount'])){ ?>
											<li><a href="mailto:<?php if(!empty($allsellerProfile->official_email)) { echo $allsellerProfile->official_email;}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
											<li><a href="tel:<?php if(!empty($allsellerProfile->user_phone)) { echo $allsellerProfile->user_phone;}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li><?php } else { ?>
											<li><i class="fa fa-lock pr-2" aria-hidden="true"></i>Official Email</li>&nbsp;&nbsp;
											<li><i class="fa fa-lock pr-2" aria-hidden="true"></i>Phone</li>
											<?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Monthly sales</h5>
                                        <p>SGD <?php if(!empty($allsellerProfile->field_12)) { echo number_format_short($allsellerProfile->field_12, 1 ); }?></p>
                                    </div>
                                    <div class="right_side pr-1">
                                        <h5>Yearly Sales</h5>
                                        <p>SGD <?php if(!empty($allsellerProfile->field_13)) { echo number_format_short($allsellerProfile->field_13, 1 );																				}?></p>
                                    </div>                                
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Selling price</h5>
                                        <p>SGD <?php if(!empty($allsellerProfile->tentative_selling)) { echo number_format_short($allsellerProfile->tentative_selling, 1 ); }?></p>
                                    </div>
                                    <div class="left_side">
                                        <h5>Current Location</h5>
                                        <p><?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></p>
                                    </div>                                  
                                </div>
                                
                                <button class="user_btn ml-auto my-2"><a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>">Contact Business</a></button>
                            </div> 
                        </div>
                    
                   
			<?php } } ?>   
			<?php } ?>
			<?php if($this->session->userdata('role')==1 || $this->session->userdata('role')==3){?>
				<?php if(!empty($allbuyerProfile)) {
				foreach($allbuyerProfile as $allbuyerProfile){ ?>
                    
                        <div class="main_box my-4 w-100">
                            <div class="pak_tag">
                                <h5><?php if(!empty($allbuyerProfile->user_plan)) { if($allbuyerProfile->user_plan==1) { echo "Basic";} 
								if($allbuyerProfile->user_plan==2) { echo "Professional";}
								if($allbuyerProfile->user_plan==3) { echo "Premium";}
								}?></h5>
                            </div>
                            <div class="activity_head d-flex justify-content-between p_20 px_40">
                                <a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>"><p><?php if(!empty($allbuyerProfile->field_7)) { echo $allbuyerProfile->field_7; }?> looking to 
							<?php if(!empty($allbuyerProfile->interested_in)) { 
							if($allbuyerProfile->interested_in==1) { echo "Acquiring / Buying a Business";} 
							if($allbuyerProfile->interested_in==2) { echo "Investing in a Business";} 
							if($allbuyerProfile->interested_in==3) { echo "Lending to a Business";}
							}?> in <?php if(!empty($allbuyerProfile->field_2)) {  $businessindustry= unserialize($allbuyerProfile->field_2);

							  echo implode(',',$businessindustry);

							}?> 
							</p></a>
                                
                            </div>
                            <hr class="latest_line m-0">
                            <div class="activity_body d-flex flex-column p_20 px_40">
                               <h6>
								<?php if(!empty($allbuyerProfile->field_1)) {
								if($allbuyerProfile->field_1=='1'){echo"Individual Investor / Buyer";}
								if($allbuyerProfile->field_1=='2'){echo"Corporate Investor / Buyer";}

								if($allbuyerProfile->field_1=='3'){echo"Bank";}

								if($allbuyerProfile->field_1=='4'){echo"NBFC";}

								if($allbuyerProfile->field_1=='5'){echo"Credit Union";}

								if($allbuyerProfile->field_1=='6'){echo"Accounting Firm";}

								if($allbuyerProfile->field_1=='7'){echo"Business Broker";}

								if($allbuyerProfile->field_1=='8'){echo"Investment Bank";}

								if($allbuyerProfile->field_1=='9'){echo"Law Firm";}

								if($allbuyerProfile->field_1=='10'){echo"M&amp;A Advisor";}

								if($allbuyerProfile->field_1=='11'){echo"Merchant Bank";}

								if($allbuyerProfile->field_1=='12'){echo"Commercial Real Estate Broker";}

								if($allbuyerProfile->field_1=='13'){echo"Venture Capital Firm";}

								if($allbuyerProfile->field_1=='14'){echo"Private Equity Firm";}

								if($allbuyerProfile->field_1=='15'){echo"Family Office";}

								if($allbuyerProfile->field_1=='16'){echo"Hedge Fund";}

								if($allbuyerProfile->field_1=='17'){echo"NBFC";}
									}?> in <?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?> 
								Looking to invest <?php if(!empty($allbuyerProfile->field_4)) {
									echo number_format_short( $allbuyerProfile->field_4, 1 );
									}?> to <?php if(!empty($allbuyerProfile->investmentto)) {
									echo number_format_short( $allbuyerProfile->investmentto, 1 );
									} ?></h6>
								
								<div class="row">
                                    <div class="col-md-8">
                                        <p><b>Description : </b><?php if(!empty($allbuyerProfile->field_6)) { echo $allbuyerProfile->field_6; }?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="latest_share justify-content-end d-flex m-0">
											<?php 
											if(!empty($userprofile['amount'])) { ?>
											<li><a href="mailto:<?php if(!empty($allbuyerProfile->official_email)) { echo $allbuyerProfile->official_email;}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
											<li><a href="tel:<?php if(!empty($allbuyerProfile->user_phone)) { echo $allbuyerProfile->user_phone;}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li><?php } else { ?>
											<li><i class="fa fa-lock pr-2" aria-hidden="true"></i>Official Email</li>&nbsp;&nbsp;
											<li><i class="fa fa-lock pr-2" aria-hidden="true"></i>Phone</li>
											<?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>Investment Range</h5>
                                         <p><span>SGD</span><?php if(!empty($allbuyerProfile->field_4)) { echo number_format_short($allbuyerProfile->field_4, 1 ); }?> To  <?php if(!empty($allbuyerProfile->investmentto)) { echo number_format_short($allbuyerProfile->investmentto, 1 ); }?></p>
                                    </div>
                                    <div class="right_side pr-1">
                                        <h5>Industries Preference</h5>
                                        <p><?php if(!empty($allbuyerProfile->field_2)) {  $businessindustry= unserialize($allbuyerProfile->field_2);
											echo implode(',',$businessindustry);
										}?> </p>
                                    </div>                                
                                </div>
                                <div class="d-flex justify-content-between pt-4">
                                    <div class="left_side">
                                        <h5>locations Preference</h5>
                                       <p><?php if(!empty($allbuyerProfile->field_3)) { echo $allbuyerProfile->field_3; }?></p>
                                    </div>
                                    <div class="left_side">
                                        <h5>Current Location</h5>
                                        <p><?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?></p>
                                    </div>                              
                                </div>
                                
                                <button class="user_btn ml-auto my-2"><a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>">Contact Business</a></button>
                            </div> 
                        </div>
                   
                   
			<?php } } }	?> 
				
			
				
                    <!--<div class=" mb-3 w-100 d-flex mt-2">
                        <button class="main-btn1 mx-auto">Load More</button>
                    </div>-->

                </div>
            </div>
        </div>
    </section>
<div id="SendProposal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Send Proposal</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <p class="error">You have No Active Plan, Please upgrade your plan first </p>
         </div>
      </div>
   </div>
</div>
