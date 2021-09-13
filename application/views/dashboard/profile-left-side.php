 <div class="row main_box p_20">
                        <div class="col-md-4 profile_img">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/user.png">
                        </div>
                        <div class="col-md-8">
                            <h4 class="m-0 text-limit"><?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?></h4>
                            <p class="pb-2 text-limit border_bottom"><?php if(!empty($this->session->userdata('email'))){ echo $this->session->userdata('email'); }?></p>
                            <button class="main_btn mt-2 py-2"> 
							<?php if(($userprofile['user_plan']==0)) { echo "No Active Plan"; }?>
							<?php if(($userprofile['user_plan']==1)) { echo "Basic Plan"; }?>
							<?php if(($userprofile['user_plan']==2)) { echo "Starter Plan"; }?>
							<?php if(($userprofile['user_plan']==3)) { echo "Standard Plan"; }?></button>
							<?php if(($userprofile['user_plan']==4)) { echo "Pro Plan"; }?></button>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between pt-4 pb-3">
                            <h6><b>Profile</b></h6>
                            <h6><?php if(!empty($this->session->userdata('role'))){ 
									if($this->session->userdata('role')==1){ echo "Investor"; }
									if($this->session->userdata('role')==2){ echo "Buyer"; }
									if($this->session->userdata('role')==3){ echo "Seller";}
									if($this->session->userdata('role')==4){ echo "Advisory";}
							}?></h6>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between pb-3">
                            <h6><b>Location</b></h6>
                            <h6><?php echo $users['countryName'];?></h6>
                        </div>
                        <!--<div class="col-md-12 d-flex justify-content-between pb-4">
                            <h6>Free Trial</h6>
                            <h6></h6>
                        </div>-->
                        <div class="col-md-12">
                            <hr class="profile_line">
                        </div>                        
                        <!--<div class="col-md-12 d-flex justify-content-between pt-4 pb-3">
                            <p><i class="fa fa-map-marker pr-2" aria-hidden="true"></i><?php echo $users['countryName'];?></p>
                            <p>Joined <?php echo $users['created_date'];?></p>
                        </div>-->
                        <div class="col-md-12 d-flex justify-content-between  pb-3">    
						<?php if(!empty($this->session->userdata('loginmode'))){ ?> 
						<p>Login With :  <?php echo $this->session->userdata('loginmode');   ?></p><?php } ?>
                            
                        </div>
                       
                    </div>
                
