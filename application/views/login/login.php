<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MVP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/carousel.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/style.css?v=1.1">
    
  </head>
  <body>

    <section class="login-section">
        <div class="container">
            <div class="row">
			    <input type="hidden" name="baseURL" id="baseURL" value="<?php echo base_url();?>" >
                <div class="user_forms d-flex flex-column justify-content-center align-items-center">
                    <div class="user_forms_body">
                        <a class="close_form" href="<?php echo base_url();?>">X</a>
                        <ul class="nav nav-tabs">
                            <li><a href="#social_form" data-toggle="tab">SOCIAL</a></li>
                            <li  class="active"><a class="active" href="#login_form" data-toggle="tab">LOGIN</a></li>
                            <li><a href="#register_form" data-toggle="tab">REGISTER</a></li>
                        </ul>
						
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade" id="social_form">
                                <form >
                                    <h6 class="text-center pb-4">SOCIAL PROFILES</h6>
                                    <select class="select_menu mb-4" id="select_profile_socail">
                                        <option value="0" selected>Choose Your Profile</option>
                                        <option value="1">As a Investor</option>
                                        <option value="2">As a Buyer</option>
                                        <option value="3" >As a Seller</option>
                                    </select>
                                    <select class="select_menu mb-3" id="select_country_socail">
                                        <option value="0" selected>Country</option>
                                        <?php foreach($socailmediacountry as $socailmediacountry) { ?>
                                         <option value="<?php echo $socailmediacountry['id']?>"><?php echo $socailmediacountry['name']?></option>
										<?php } ?>
                                    </select>
                                    <a id="agoogleid" href="<?php echo base_url();?>googlelogin/login" class="google btn">
                                        <h5 class="m-0"><i class="fa fa-google-plus"></i> Login with Google+</h5>
                                    </a>
									
                                    <a  id="afacebookid"  href="<?php echo $link;?>" class="fb btn">
                                      <h5 class="m-0"><i class="fa fa-facebook"></i> Login with Facebook</h5>
                                     </a>                                    
                                </form>
                            </div>
                            <div class="tab-pane active in" id="login_form">
                                <form id="login-frm" method="POST" action="" role="form" novalidate="">
									<div  id="login-form-warning" class="alert alert-warning alert-dismissible fade show hidecls" role="alert">
									<span class="alert-icon"><i class="ni ni-like-2"></i></span>
									<span class="alert-text">Invaild Email and Password .Please try again</span>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>
                                    <input class="mb-4" type="email" name="login_email" placeholder="Email" required="true" id="login_email">
                                    <input class="mb-3" type="password" name="login_password" id="login_password" placeholder="Password" required="true">
                                    <div class="float-right">
                                        <p><a href="#">Forget Your Password?</a></p>
                                    </div>
                                   
									 <input  type="submit" class="login_btn main-btn1 w-100 mt-4" value="Login" name="login-submit" >
                                </form>                
                            </div>
                            <div class="tab-pane fade" id="register_form">
                               <form id="register-frm" method="POST" action="" role="form" novalidate="">
							   	<div  id="reg-form-success" class="alert alert-success alert-dismissible fade show hidecls" role="alert">
							<span class="alert-icon"><i class="ni ni-like-2"></i></span>
							<span class="alert-text">Thank You for Registration. Please verify using the link sent to your email and login with your Credentails!</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div  id="reg-form-warning" class="alert alert-warning alert-dismissible fade show hidecls" role="alert">
							<span class="alert-icon"><i class="ni ni-like-2"></i></span>
							<span class="alert-text">This Email is alreadly exist in database .Please try other email id</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
                                    <input class="mb-4" type="email" name="reg_email" placeholder="Email" required="true" id="reg_email">
                                    <input class="mb-4" type="password" id="reg_password" name="reg_password" placeholder="Password" required="true">
                                    <input class="mb-4" type="password" name="reg_cpassword"  id="reg_cpassword" placeholder="Confirm Password" required="true">
									<span id="reg-error-pass" class="hidecls">password and confirm password does not match</span>
                                    <select class="select_menu mb-4" id="reg_profile" required="true" name="reg_profile">
                                        <option value="0" selected>Choose Your Profile</option>
                                        <option value="1">As a Investor</option>
                                        <option value="2">As a Buyer</option>
                                        <option value="3" >As a Seller</option>
                                    </select>
                                    <select class="select_menu" id="reg_country" required="true" name="reg_country">
                                        <option value="0" selected>Country</option>
										<?php foreach($country as $country) { ?>
                                         <option value="<?php echo $country['id']?>"><?php echo $country['name']?></option>
										<?php } ?>
                                    </select>
                                    <input  type="submit" class="register_btn main-btn1 w-100 mt-4" value="Verify Email" name="reg-submit" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
	
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/front-end/js/slick.js" type="text/javascript" charset="utf-8"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/loading/loading.css">
	<script src="<?php echo base_url(); ?>assets/plugins/loading/loading.js"></script>    
	<script src="<?php echo base_url();?>assets/front-end/js/custom.js" type="text/javascript" charset="utf-8"></script> 
  </body>
</html>