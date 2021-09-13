<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="rtl">

	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website"/>

		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template</title>

		<!-- Bootstrap Css -->
		<link href="<?php echo base_url(); ?>/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="../assets/css/style-rtl.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

		<!--Horizontal Menu-->
		<link href="../assets/plugins/horizontal-menu/horizontal-rtl.css" rel="stylesheet" />

		<!--Select2 Plugin -->
		<link href="../assets/plugins/select2/select2.min-rtl.css" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="../assets/plugins/cookie/cookie.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Color skin-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/skins/color-skins/color15.css" />

	</head>

	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="">
		</div>

		<!--Topbar-->
		<div class="header-main">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
							<div class="top-bar-right  d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
										</li>
									</ul>
								</div>
								<div class="clearfix">
									<ul class="contact">
										<li class="mr-5 d-lg-none">
											<a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
										</li>
										<li class="select-country ml-5">
											<select class="form-control select2-flag-search" data-placeholder="Select Country">
												<option value="UM">United States of America</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="AD">Andorra</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AU">Australia</option>
												<option value="AM">Armenia</option>
												<option value="AO">Angola</option>
												<option value="AR">Argentina</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BB">Barbados</option>
												<option value="BD">Bangladesh</option>
												<option value="BE">Belgium</option>
												<option value="BF">Burkina Faso</option>
												<option value="BG">Bulgaria</option>
												<option value="BH">Bahrain</option>
												<option value="BJ">Benin</option>
												<option value="BN">Brunei</option>
												<option value="BO">Bolivia</option>
												<option value="BT">Bhutan</option>
												<option value="BY">Belarus</option>
												<option value="CD">Congo</option>
												<option value="CA">Canada</option>
												<option value="CF">Central African Republic</option>
												<option value="CI">Cote d'Ivoire</option>
												<option value="CL">Chile</option>
												<option value="CM">Cameroon</option>
												<option value="CN">China</option>
												<option value="CO">Colombia</option>
												<option value="CU">Cuba</option>
												<option value="CV">Cabo Verde</option>
												<option value="CY">Cyprus</option>
												<option value="DJ">Djibouti</option>
												<option value="DK">Denmark</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EE">Estonia</option>
												<option value="ER">Eritrea</option>
												<option value="ET">Ethiopia</option>
												<option value="FI">Finland</option>
												<option value="FJ">Fiji</option>
												<option value="FR">France</option>
												<option value="GA">Gabon</option>
												<option value="GD">Grenada</option>
												<option value="GE">Georgia</option>
												<option value="GH">Ghana</option>
												<option value="GH">Ghana</option>
												<option value="HN">Honduras</option>
												<option value="HT">Haiti</option>
												<option value="HU">Hungary</option>
												<option value="ID">Indonesia</option>
												<option value="IE">Ireland</option>
												<option value="IL">Israel</option>
												<option value="IN">India</option>
												<option value="IQ">Iraq</option>
												<option value="IR">Iran</option>
												<option value="IS">Iceland</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JO">Jordan</option>
												<option value="JP">Japan</option>
												<option value="KE">Kenya</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="KI">Kiribati</option>
												<option value="KW">Kuwait</option>
												<option value="KZ">Kazakhstan</option>
												<option value="LA">Laos</option>
												<option value="LB">Lebanons</option>
												<option value="LI">Liechtenstein</option>
												<option value="LR">Liberia</option>
												<option value="LS">Lesotho</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="LV">Latvia</option>
												<option value="LY">Libya</option>
												<option value="MA">Morocco</option>
												<option value="MC">Monaco</option>
												<option value="MD">Moldova</option>
												<option value="ME">Montenegro</option>
												<option value="MG">Madagascar</option>
												<option value="MH">Marshall Islands</option>
												<option value="MK">Macedonia (FYROM)</option>
												<option value="ML">Mali</option>
												<option value="MM">Myanmar (formerly Burma)</option>
												<option value="MN">Mongolia</option>
												<option value="MR">Mauritania</option>
												<option value="MT">Malta</option>
												<option value="MV">Maldives</option>
												<option value="MW">Malawi</option>
												<option value="MX">Mexico</option>
												<option value="MZ">Mozambique</option>
												<option value="NA">Namibia</option>
												<option value="NG">Nigeria</option>
												<option value="NO">Norway</option>
												<option value="NP">Nepal</option>
												<option value="NR">Nauru</option>
												<option value="NZ">New Zealand</option>
												<option value="OM">Oman</option>
												<option value="PA">Panama</option>
												<option value="PF">Paraguay</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PH">Philippines</option>
												<option value="PK">Pakistan</option>
												<option value="PL">Poland</option>
												<option value="QA">Qatar</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SC">Seychelles</option>
												<option value="SD">Sudan</option>
												<option value="SE">Sweden</option>
												<option value="SG">Singapore</option>
												<option value="TG">Togo</option>
												<option value="TH">Thailand</option>
												<option value="TJ">Tajikistan</option>
												<option value="TL">Timor-Leste</option>
												<option value="TM">Turkmenistan</option>
												<option value="TN">Tunisia</option>
												<option value="TO">Tonga</option>
												<option value="TR">Turkey</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TW">Taiwan</option>
												<option value="UA">Ukraine</option>
												<option value="UG">Uganda</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VA">Vatican City (Holy See)</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="VU">Vanuatu</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</li>
										<li class="dropdown ml-5">
											<a href="#" class="text-dark" data-toggle="dropdown"><span> Language <i class="fa fa-caret-down text-muted"></i></span> </a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item" >
													English
												</a>
												<a class="dropdown-item" href="#">
													Arabic
												</a>
												<a class="dropdown-item" href="#">
													German
												</a>
												<a href="#" class="dropdown-item" >
													Greek
												</a>
												<a href="#" class="dropdown-item" >
													Japanese
												</a>
											</div>
										</li>
										<li class="dropdown">
											<a href="#" class="text-dark" data-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item" >
													USD
												</a>
												<a class="dropdown-item" href="#">
													EUR
												</a>
												<a class="dropdown-item" href="#">
													INR
												</a>
												<a href="#" class="dropdown-item" >
													GBP
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
							<div class="top-bar-left">
								<ul class="custom">
									<li>
										<a href="register.html" class="text-dark"><i class="fa fa-user ml-1"></i> <span>Register</span></a>
									</li>
									<li>
										<a href="login.html" class="text-dark"><i class="fa fa-sign-in ml-1"></i> <span>Login</span></a>
									</li>
									<li class="dropdown">
										<a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home ml-1"></i><span> My Dashboard</span></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a href="mydash.html" class="dropdown-item" >
												<i class="dropdown-icon icon icon-user"></i> My Profile
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-speech"></i> Inbox
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-bell"></i> Notifications
											</a>
											<a href="mydash.html" class="dropdown-item" >
												<i class="dropdown-icon  icon icon-settings"></i> Account Settings
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-power"></i> Log out
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Topbar-->

			<!-- Header -->
			<div class="horizontal-header clearfix ">
				<div class="container">
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><img src="../assets/images/brand/logo.png" width="120" alt=""/></span>
					<a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div>
			</div>
			<!--/Header -->

			<!--Start Horizontal-main -->
			<div class="horizontal-main bg-dark-transparent clearfix">
				<div class="horizontal-mainwrapper container clearfix">
					<div class="desktoplogo">
						<a href="index.html"><img src="../assets/images/brand/logo1.png" alt=""></a>
					</div>
					<div class="desktoplogo-1">
						<a href="index.html"><img src="../assets/images/brand/logo1.png" alt=""></a>
					</div>
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true" class="li-list"><a href="#" class="active">Home <span class="fa fa-caret-down m-0"></span></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="index.html">Home-default</a></li>
									<li aria-haspopup="true"><a href="index-text.html">Home style-1</a></li>
									<li aria-haspopup="true"><a href="index-slides.html">Home style-2</a></li>
									<li aria-haspopup="true"><a href="index-video.html">Home style-3</a></li>
									<li aria-haspopup="true"><a href="index-animation.html">Home style-4 </a></li>
									<li aria-haspopup="true"><a href="index-map.html">Home style-5</a></li>
									<li aria-haspopup="true"><a href="intro-page.html">Home Intro Page</a></li>
									<li aria-haspopup="true"><a href="popup-login.html">Home Pop-up login</a></li>
									<li aria-haspopup="true"><a href="banner.html">Banners</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="about.html">About Us </a></li>
							<li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
							<li aria-haspopup="true"><a href="#">Pages <span class="fa fa-caret-down m-0"></span></a>
								<div class="horizontal-megamenu clearfix">
									<div class="container">
										<div class="megamenu-content">
											<div class="row">
												<ul class="col link-list">
													<li class="title">Custom Pages</li>
													<li>
														<a href="page-list.html">RealEstate List</a>
													</li>
													<li>
														<a href="page-list-right.html">RealEstate  Right</a>
													</li>
													<li>
														<a href="page-list-map.html">RealEstate Map list</a>
													</li>
													<li>
														<a href="page-list-map2.html">RealEstate Map list 02</a>
													</li>
													<li>
														<a href="page-list-map3.html">RealEstate Map style 03</a>
													</li>
													<li>
														<a href="categories.html">Categories</a>
													</li>
													<li>
														<a href="inovice.html">Invoice</a>
													</li>
													<li>
														<a href="usersall.html">User Lists</a>
													</li>
													<li>
														<a href="pricing.html">Pricing</a>
													</li>
												</ul>
												<ul class="col link-list">
													<li class="title">Custom Pages</li>
													<li>
														<a href="ad-list.html">Ad Listing</a>
													</li>
													<li>
														<a href="ad-list-right.html">Ad Listing Right</a>
													</li>
													<li>
														<a href="ad-details.html">Ad Details</a>
													</li>
													<li>
														<a href="ad-details1.html">Ad Details 1</a>
													</li>
													<li>
														<a href="ad-details-right.html">Ad Details Right</a>
													</li>
													<li>
														<a href="ad-posts.html">Ad Posts</a>
													</li>
													<li>
														<a href="ad-posts2.html">Ad Posts2</a>
													</li>
													<li>
														<a href="typography.html">Typography</a>
													</li>
													<li>
														<a href="testimonial.html">Testimonials</a>
													</li>
												</ul>
												<ul class="col link-list">
													<li class="title">Custom Pages</li>
													<li>
														<a href="userprofile.html"> User Profile</a>
													</li>
													<li>
														<a href="mydash.html">My Dashboard</a>
													</li>
													<li>
														<a href="myads.html">Ads</a>
													</li>
													<li>
														<a href="myfavorite.html">Favorite Ads</a>
													</li>
													<li>
														<a href="manged.html">Manged Ads</a>
													</li>
													<li>
														<a href="payments.html">Payments</a>
													</li>
													<li>
														<a href="orders.html"> Orders</a>
													</li>
													<li>
														<a href="settings.html"> Settings</a>
													</li>
													<li>
														<a href="tips.html">Tips</a>
													</li>

												</ul>
												<ul class="col link-list">
													<li class="title">Custom Pages</li>
													<li><a href="underconstruction.html">Under 3BHk Homes</a></li>
													<li><a href="404.html">404</a></li>
													<li><a href="register.html">Register</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="login-2.html">Login 02</a></li>
													<li><a href="forgot.html">Forgot Password</a></li>
													<li><a href="lockscreen.html">Lock Screen</a></li>
													<li><a href="faq.html">Faq</a></li>
													<li><a href="userprofile2.html"> User Profile2</a></li>
												</ul>
												<ul class="col link-list">
													<li class="title">Custom Pages</li>
													<li><a href="header-style1.html">Header Style 01</a></li>
													<li><a href="header-style2.html">Header Style 02</a></li>
													<li><a href="header-style3.html">Header Style 03</a></li>
													<li><a href="header-style4.html">Header Style 04</a></li>
													<li><a href="footer-style.html">Footer Style 01</a></li>
													<li><a href="footer-style2.html">Footer Style 02</a></li>
													<li><a href="footer-style3.html">Footer Style 03</a></li>
													<li><a href="footer-style4.html">Footer Style 04</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li aria-haspopup="true" class="li-list"><a href="#">Blog <span class="fa fa-caret-down m-0"></span></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="#">Blog Grid <i class="fa fa-angle-left  float-left  mt-1 d-none d-lg-block"></i></a>
										 <ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-grid.html">Blog Grid Left</a></li>
											<li aria-haspopup="true"><a href="blog-grid-right.html">Blog Grid Right</a></li>
											<li aria-haspopup="true"><a href="blog-grid-center.html">Blog Grid Center</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#">Blog List <i class="fa fa-angle-left  float-left  mt-1 d-none d-lg-block"></i></a>
										 <ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-list.html">Blog List Left</a></li>
											<li aria-haspopup="true"><a href="blog-list-right.html">Blog List Right</a></li>
											<li aria-haspopup="true"><a href="blog-list-center.html">Blog List Center</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#">Blog Details <i class="fa fa-angle-left  float-left  mt-1 d-none d-lg-block"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-details.html">Blog Details Left</a></li>
											<li aria-haspopup="true"><a href="blog-details-right.html">Blog Details Right</a></li>
											<li aria-haspopup="true"><a href="blog-details-center.html">Blog Details Center</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li aria-haspopup="true" class="li-list"><a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="col-left.html">RealEstate Left</a></li>
									<li aria-haspopup="true"><a href="col-right.html">RealEstate  Right </a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="contact.html"> Contact Us <span class="hmarrow"></span></a></li>
							<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
								<span><a class="btn btn-secondary" href="ad-posts.html">Post Property Ad</a></span>
							</li>
						</ul>
						<ul class="mb-0">
							<li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn">
								<span><a class="btn btn-secondary ad-post " href="ad-posts.html">Post Property Ad</a></span>
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>
		<!--/Horizontal-main -->

		<!--Start Section-->
		<section>
			<div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-image-src="../assets/images/banners/banner1.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white mb-7">
							<h1 class="mb-1">Find Your Best Property</h1>
							<p>It is a long established fact that a reader will be distracted by the readable.</p>
						</div>
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="search-background bg-transparent">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Enter Loaction, Landmark">
											<span><i class="fa fa-map-marker location-gps mr-1"></i></span>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Property Type">
												<optgroup label="Categories">
													<option>Property Type</option>
													<option value="1">Deluxe Houses</option>
													<option value="2">Modren Flats</option>
													<option value="3">Apartments</option>
													<option value="4">Stylish Houses</option>
													<option value="5">Offices Houses</option>
													<option value="6">Laxury Houses</option>
													<option value="7">Nature Houses</option>
												</optgroup>
											</select>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Min Value">
												<option value="1" selected>Min Price</option>
												<option value="2">$50</option>
												<option value="3">$60</option>
												<option value="4">$70</option>
												<option value="5">$80</option>
												<option value="5">$90</option>
											</select>
										</div>
										<div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Max Value">
												<option value="1" selected>Max Price</option>
												<option value="2">$100</option>
												<option value="3">$110</option>
												<option value="4">$120</option>
												<option value="5">$130</option>
												<option value="5">$140</option>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tr-md-0 br-br-md-0">Search Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="categories">
			<div class="container">
				<div class="card mb-0 box-shadow-0">
					<div class="card-body">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
							<div class="d-flex">
								<div>
									<span class="bg-primary-transparent icon-service1 text-primary">
										<i class="fa fa-map-o"></i>
									</span>
								</div>
								<div class="mr-4 mt-1">
									<h3 class=" mb-0 font-weight-bold">1,200</h3>
									<p class="mb-0 text-muted">Commercial Lands</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
							<div class="d-flex">
								<div>
									<span class="bg-secondary-transparent icon-service1 text-secondary">
										<i class="fa fa-home"></i>
									</span>
								</div>
								<div class="mr-4 mt-1">
									<h3 class=" mb-0 font-weight-bold">894</h3>
									<p class="mb-0 text-muted">Showrooms & Shops</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-sm-0">
							<div class="d-flex">
								<div>
									<span class="bg-warning-transparent icon-service1 text-warning">
										<i class="fa fa-object-group"></i>
									</span>
								</div>
								<div class="mr-4 mt-1">
									<h3 class=" mb-0 font-weight-bold">1,089</h3>
									<p class="mb-0 text-muted">Office rooms</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 ">
							<div class="d-flex">
								<div>
									<span class="bg-info-transparent icon-service1 text-info">
										<i class="fa fa-building-o"></i>
									</span>
								</div>
								<div class="mr-4 mt-1">
									<h3 class=" mb-0 font-weight-bold ">789</h3>
									<p class="mb-0 text-muted">Residential</p>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Categories</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div id="small-categories" class="owl-carousel owl-carousel-icons2">
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/1.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Stylish Houses</h4>
										<span class="badge badge-pill badge-primary w-15">45</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/2.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Laxury Houses</h4>
										<span class="badge badge-pill badge-secondary w-15">23</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/3.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Apartments</h4>
										<span class="badge badge-pill badge-warning w-15">48</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/9.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Deluxe Houses</h4>
										<span class="badge badge-pill badge-info w-15">15</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/10.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Nature Houses</h4>
										<span class="badge badge-pill badge-success w-15">12</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card ">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/11.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">2BHK Houses</h4>
										<span class="badge badge-pill badge-pink w-15">05</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/3.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">3BK Houses</h4>
										<span class="badge badge-pill badge-primary w-15">09</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/12.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Duplex House</h4>
										<span class="badge badge-pill badge-secondary w-15">65</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/13.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Office Houses</h4>
										<span class="badge badge-pill badge-warning w-15">45</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/14.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">KidsFriendly Houses</h4>
										<span class="badge badge-pill badge-info w-15">36</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card">
								<div class="item-card-desc">
									<a href="#"></a>
									<div class="item-card-img">
										<img src="../assets/images/products/4.png" alt="img" class="br-tr-7 br-tl-7">
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">Budget Homes</h4>
										<span class="badge badge-pill badge-success w-15">59</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Latest Properties</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/f1.jpg" alt="img" class="cover-image">
								<div class="tag-text">
									<span class="bg-danger tag-option">For Sale </span>
									<span class="bg-pink tag-option">Open</span>
								</div>
							</div>
							<div class="item-card2-icons">
								<a href="col-left.html" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body">
								<div class="item-card2">
									<div class="item-card2-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Deluxe Houses</h4></a>
										<p class="mb-2"><i class="fa fa-map-marker text-danger ml-1"></i> Preston Street Wichita , USA </p>
										<h5 class="font-weight-bold mb-3">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
									</div>
									<ul class="item-card2-list">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 256 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 3 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 2 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0">
										<img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  ml-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-1 mb-0">Wendy	Peake<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<div class="mt-2 footerimg-r mr-auto">
										<small class="text-muted">1 day ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/h4.jpg" alt="img" class="cover-image">
								<div class="tag-text"><span class="bg-danger tag-option">For Rent </span></div>
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body">
								<div class="item-card2">
									<div class="item-card2-text">
										<a href="col-left.html" class="text-dark"><h4 class="">2BK Houses</h4></a>
										<p class="mb-2"><i class="fa fa-map-marker text-danger ml-1"></i> Preston Street Wichita , USA </p>
										<h5 class="font-weight-bold mb-3">$12,890 <span class="fs-12  font-weight-normal">Per Month</span></h5>
									</div>
									<ul class="item-card2-list">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 150 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 2 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0">
										<img src="../assets/images/faces/female/12.jpg" alt="image" class="avatar brround  ml-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-1 mb-0">Ryan Lyman<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<div class="mt-2 footerimg-r mr-auto">
										<small class="text-muted">55 mins ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card2-img">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/b1.jpg" alt="img" class="cover-image">
								<div class="tag-text">
									<span class="bg-danger tag-option">For Rent </span>
									<span class="bg-pink tag-option">Hot</span>
								</div>
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body">
								<div class="item-card2">
									<div class="item-card2-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Office Rooms</h4></a>
										<p class="mb-2"><i class="fa fa-map-marker text-danger ml-1"></i> Preston Street Wichita , USA </p>
										<h5 class="font-weight-bold mb-3">$25,784 <span class="fs-12  font-weight-normal">Per Month</span></h5>
									</div>
									<ul class="item-card2-list">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 256 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 8 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 4 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 4 Car</a></li>
									</ul>
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0">
										<img src="../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  ml-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-1 mb-0">Joan Hunter<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<div class="mt-2 footerimg-r mr-auto">
										<small class="text-muted">2 day ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/v1.jpg" alt="img" class="cover-image">
								<div class="tag-text"><span class="bg-danger tag-option">For Sale </span></div>
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body">
								<div class="item-card2">
									<div class="item-card2-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Apartments</h4></a>
										<p class="mb-2"><i class="fa fa-map-marker text-danger ml-1"></i> Preston Street Wichita , USA </p>
										<h5 class="font-weight-bold mb-3">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
									</div>
									<ul class="item-card2-list">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 700 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 20 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 10 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 10 Car</a></li>
									</ul>
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0">
										<img src="../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  ml-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-1 mb-0">Elizabeth<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<div class="mt-2 footerimg-r mr-auto">
										<small class="text-muted">50 mins ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item sold-out">
						<div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/f3.jpg" alt="img" class="cover-image">
								<div class="tag-text">
									<span class="bg-danger tag-option">For Sale </span>
									<span class="bg-pink tag-option">New</span>
								</div>
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body">
								<div class="item-card2">
									<div class="item-card2-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Duplex House</h4></a>
										<p class="mb-2"><i class="fa fa-map-marker text-danger ml-1"></i> Preston Street Wichita , USA </p>
										<h5 class="font-weight-bold mb-3">$23,789 <span class="fs-12  font-weight-normal">Per Month</span></h5>
									</div>
									<ul class="item-card2-list">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0">
										<img src="../assets/images/faces/female/18.jpg" alt="image" class="avatar brround  ml-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-1 mb-0">Boris Nash<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<div class="mt-2 footerimg-r mr-auto">
										<small class="text-muted">12 mins ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb bg-patterns">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Featured Properties</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
					<!-- Wrapper for carousel items -->
					<div class="item">
						<div class="card mb-0">
							<div class="arrow-ribbon bg-primary">For Sale</div>
							<div class="item-card7-imgs">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/b3.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card7-overlaytext">
								<a href="col-left.html" class="text-white"> Featured </a>
								<span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Deluxe Flat</h4></a>
										<p class=""><i class="icon icon-location-pin text-muted ml-2 mt-1 float-right"></i> New York, NY 10012, US </p>
									</div>
									<ul class="item-cards7-ic mb-0">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
									<h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex mb-0">
									<span class="fs-12"><i class="icon icon-event ml-2 float-right  icon-c"></i>Jul 10 2019 </span>
									<div class="mr-auto">
										<a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="arrow-ribbon bg-purple">For Buy</div>
							<div class="item-card7-imgs">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/h3.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card7-overlaytext">
								<a href="col-left.html" class="text-white">Featured</a>
								<span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="col-left.html" class="text-dark"><h4 class="">2BHk Deluxe Flat</h4></a>
										<p class=""><i class="icon icon-location-pin text-muted ml-2 mt-1 float-right"></i> New York, NY 10012, US </p>
									</div>
									<ul class="item-cards7-ic mb-0">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
									<h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex mb-0">
									<span class="fs-12"><i class="icon icon-event ml-2 float-right  icon-c"></i>Jul 05 2019 </span>
									<div class="mr-auto">
										<a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="arrow-ribbon bg-secondary">For Rent</div>
							<div class="item-card7-imgs">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/v4.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card7-overlaytext">
								<a href="col-left.html" class="text-white">Featured</a>
								<span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="col-left.html" class="text-dark"><h4 class="">House For Sale</h4></a>
										<p class=""><i class="icon icon-location-pin text-muted ml-2 mt-1 float-right"></i> New York, NY 10012, US </p>
									</div>
									<ul class="item-cards7-ic mb-0">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
									<h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex mb-0">
									<span class="fs-12"><i class="icon icon-event ml-2 float-right  icon-c"></i>June 29 2019 </span>
									<div class="mr-auto">
										<a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="arrow-ribbon bg-primary">For Sale</div>
							<div class="item-card7-imgs">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/f2.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card7-overlaytext">
								<a href="col-left.html" class="text-white"> Featured</a>
								<span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="col-left.html" class="text-dark"><h4 class="">Office For Rent</h4></a>
										<p class=""><i class="icon icon-location-pin text-muted ml-2 mt-1 float-right"></i> New York, NY 10012, US </p>
									</div>
									<ul class="item-cards7-ic mb-0">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
									<h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex mb-0">
									<span class="fs-12"><i class="icon icon-event ml-2 float-right  icon-c"></i>June 25 2019 </span>
									<div class="mr-auto">
										<a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item sold-out">
						<div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
						<div class="card mb-0">
							<div class="arrow-ribbon bg-secondary">For Rent</div>
							<div class="item-card7-imgs">
								<a href="col-left.html"></a>
								<img src="../assets/images/products/pictures/j3.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card7-overlaytext">
								<a href="col-left.html" class="text-white">Featured</a>
								<span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text ">
										<a href="col-left.html" class="text-dark"><h4 class="">Modern House For Sale</h4></a>
										<p class=""><i class="icon icon-location-pin text-muted ml-2 mt-1 float-right"></i> New York, NY 10012, US </p>
									</div>
									<ul class="item-cards7-ic mb-0">
										<li><a href="#"><i class="fa fa-arrows-alt text-muted ml-1"></i> 300 Sqft</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bed text-muted ml-1"></i> 4 Beds</a></li>
										<li><a href="#" class="icons"><i class="fa fa-bath text-muted ml-1"></i> 3 Bath</a></li>
										<li><a href="#" class="icons"><i class="fa fa-car text-muted ml-1"></i> 1 Car</a></li>
									</ul>
									<h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex mb-0">
									<span class="fs-12"><i class="icon icon-event ml-2 float-right  icon-c"></i>June 19 2019 </span>
									<div class="mr-auto">
										<a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Strat Section-->
		<section>
			<div class="about-1 cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner5.jpg">
				<div class="content-text mb-0 text-white info">
					<div class="container">
						<div class="row text-center">
							<div class="col-lg-3 col-md-6">
								<div class="counter-status md-mb-0">
									<div class="counter-icon">
										<i class="icon icon-people"></i>
									</div>
									<h5>Total Agents</h5>
									<h2 class="counter mb-0 font-weight-bold">893</h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status-1 md-mb-0">
									<div class="counter-icon text-warning">
										<i class="icon icon-rocket"></i>
									</div>
									<h5>Total Sales</h5>
									<h2 class="counter mb-0 font-weight-bold">1765</h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status md-mb-0">
									<div class="counter-icon text-primary">
										<i class="icon icon-docs"></i>
									</div>
									<h5>Total Projects</h5>
									<h2 class="counter mb-0 font-weight-bold">846</h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status">
									<div class="counter-icon text-success">
										<i class="icon icon-emotsmile"></i>
									</div>
									<h5>Happy Customers</h5>
									<h2 class="counter font-weight-bold mb-0">7253</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
		    <div class="container">
				<div class="col-md-12">
					<div class="items-gallery">
						<div class="items-blog-tab text-center">
							<h2 class="">Best Property Collections</h2>
							<div class="items-blog-tab-heading">
								<div class="">
									<ul class="nav items-blog-tab-menu">
										<li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
										<li><a href="#tab-2" data-toggle="tab" class="">2BHK Homes</a></li>
										<li><a href="#tab-3" data-toggle="tab" class="">Villas</a></li>
										<li><a href="#tab-4" data-toggle="tab" class="">Apartments</a></li>
										<li><a href="#tab-5" data-toggle="tab" class="">Deplux Houses</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content p-0">
								<div class="tab-pane active" id="tab-1">
									<div class="row" id="container3">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Laxury Room</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">16 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<span class="ribbon-3">
												<span><i class="fa fa-building-o"></i></span>
											</span>
											<div class="card">
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/b1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info  mb-0">Villa</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">05 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<span class="ribbon-2">
												<span><i class="fa fa-home"></i></span>
											</span>
											<div class="card">
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h4.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Apartments</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">21 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
												<span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f4.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info  mb-0">Deplux Rooms</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">20 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary mb-0">2BHK House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">11 June 2019 </p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-2">
													<span><i class="fa fa-building-o"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/b2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Villa</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">26 May 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info mb-0">Apartments</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">18 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-1">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary mb-0">Duplex House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">19 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info mb-0">2BHK House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">10 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-lg-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building-o"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary  mb-0">Villa</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">16 November 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary  mb-0">Apartments</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">06 July 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Duplex Room</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">13 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Laxury Room</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">16 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary mb-0">2BHK House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">11 June 2019 </p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info mb-0">Modren Kitchen</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">10 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-3">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
										    <span class="ribbon-3">
												<span><i class="fa fa-building-o"></i></span>
											</span>
											<div class="card mb-xl-0">
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/b1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info  mb-0">Villa</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">05 June 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building-o"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/b2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Garden House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">26 May 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-lg-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building-o"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/j1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary  mb-0">Villa</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">16 November 2019.</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-4">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<span class="ribbon-2">
												<span><i class="fa fa-home"></i></span>
											</span>
											<div class="card mb-xl-0">
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h4.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Apartments</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">21 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info mb-0">2BHK House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">18 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/h3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary  mb-0">3BHK House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">06 July 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-5">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f4.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info  mb-0">Deplux Rooms</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">20 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f3.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary mb-0">Duplex House</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">19 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building"></i></span>
												</span>
												<div class="item-card8-img">
													<a href="ad-details.html"></a>
													<img src="../assets/images/products/f2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary  mb-0">Duplex Room</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted">13 June 2019</p>
														<a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
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
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb position-relative pattern">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1 class="text-white position-relative">Testimonials</h1>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page active">
														<span class=""></span>
													</div>
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
												</div>
											</div>
										    <p class="text-white-80">
												<i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in cillum dolore eu fugiat nulla pariatur.
											</p>
											<h3 class="title">Elizabeth</h3>
											<div class="rating-stars mb-3">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
												<div class="rating-stars-container">
													<div class="rating-star sm ">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm ">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm ">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
											<a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page active">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
												</div>
											</div>
											<p class="text-white-80"><i class="fa fa-quote-left"></i> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nor again is there anyone who loves or pursues obtain pain of itself, because laboriosam ex ea commodi consequatur. </p>
											<div class="testimonia-data">
												<h3 class="title">williamson</h3>
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
													<div class="rating-stars-container mb-3">
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
													</div>
													<a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
													<div class="owl-page active">
														<span class=""></span>
													</div>
												</div>
											</div>
											<p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi.</p>
											<div class="testimonia-data">
											    <h3 class="title">Sophie Carr</h3>
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
													<div class="rating-stars-container mb-3">
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
													</div>
													<a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
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
		<!--/Section-->

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Top Lisiting Places</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
                <div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-6">
						<div class="row">
							<div class="col-sm-12 col-lg-6 col-md-6 ">
								<div class="item-card overflow-hidden">
									<div class="item-card-desc">
										<div class="card text-center overflow-hidden">
											<div class="card-img">
												<img src="../assets/images/locations/germany.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-tags">
												<div class="bg-primary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 786</div>
											</div>
											<div class="item-card-text">
												<h4 class="mb-0">44,327<span><i class="fa fa-map-marker ml-1 text-primary"></i>GERMANY</span></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 ">
								<div class="item-card overflow-hidden">
									<div class="item-card-desc">
										<div class="card text-center overflow-hidden">
											<div class="card-img">
												<img src="../assets/images/locations/london.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-tags">
												<div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 89</div>
											</div>
											<div class="item-card-text">
												<h4 class="mb-0">52,145<span><i class="fa fa-map-marker ml-1 text-primary"></i> LONDON</span></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 ">
							    <div class="item-card overflow-hidden">
									<div class="item-card-desc">
										<div class="card text-center overflow-hidden mb-lg-0">
											<div class="card-img">
												<img src="../assets/images/locations/austerlia.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-tags">
												<div class="bg-primary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 894</div>
											</div>
											<div class="item-card-text">
												<h4 class="mb-0">63,263<span><i class="fa fa-map-marker text-primary ml-1"></i>AUSTERLIA</span></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 ">
								<div class="item-card overflow-hidden">
									<div class="item-card-desc">
										<div class="card text-center overflow-hidden mb-lg-0">
											<div class="card-img">
												<img src="../assets/images/locations/chicago.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-tags">
												<div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 123 </div>
											</div>
											<div class="item-card-text">
												<h4 class="mb-0">36,485<span><i class="fa fa-map-marker text-primary ml-1"></i>CHICAGO</span></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
						<div class="item-card overflow-hidden">
							<div class="item-card-desc">
								<div class="card overflow-hidden mb-0">
									<div class="card-img">
										<img src="../assets/images/locations/losangels-1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-tags">
										<div class="bg-primary tag-option"><i class="fa fa fa-heart-o mr-1"></i> 567 </div>
									</div>
									<div class="item-card-text">
										<h4 class="mb-0">64,825<span><i class="fa fa-map-marker text-primary ml-1"></i>WASHINGTON</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Download</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
                <div class="row">
					<div class="col-md-12">
						<div class="text-center text-wrap">
							<div class="btn-list">
								<a href="#" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x ml-2"></i> App Store</a>
								<a href="#" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-android fa-1x ml-2"></i> Google Play</a>
								<a href="#" class="btn btn-info btn-lg mb-0"><i class="fa fa-windows fa-1x ml-2"></i> Windows</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Recent Posts</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/ed1.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-info">Farm House</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>July-03-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Laxury Flat For Rent</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/male/5.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Joanne Nash</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/j2.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-primary">Laxury Room</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>June-03-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Deluxe Flat For Sale</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/male/7.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Tanner Mallari</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/ed2.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-success">2BHK Flat</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>June-19-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Laxury Home  For Sale</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/female/15.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Aracely Bashore</a>
										<small class="d-block text-muted">5 days ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/h1.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-primary">Duplex House</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>June-03-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Laxury Flat For Rent</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/male/15.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Royal Hamblin</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/j3.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-pink">Budget House</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>May-28-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Home  For Sale</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/female/5.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Rosita Chatmon</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="blog-details.html"></a>
								<img src="../assets/images/products/pictures/ed4.jpg" alt="img" class="cover-image">
								<div class="item7-card-text">
									<span class="badge badge-success">3BHK Flats</span>
								</div>
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#" class="text-muted"><i class="fa fa-calendar-o text-muted ml-2"></i>May-19-2019</a>
									<div class="mr-auto">
										<a href="#" class="text-muted"><i class="fa fa-comment-o text-muted ml-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Laxury Home  For Sale</h4></a>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="../assets/images/faces/male/6.jpg" class="avatar brround avatar-md ml-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Loyd Nolf</a>
										<small class="d-block text-muted">15 days ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Footer Section-->
		<section>
			<footer class="bg-dark-purple text-white">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<h6>About</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  exercitation ullamco laboris </p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
							</div>
							<div class="col-lg-2 col-md-12">
								<h6>Our Quick Links</h6>
								 <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li><a href="javascript:;">Our Team</a></li>
									<li><a href="javascript:;">Contact US</a></li>
									<li><a href="javascript:;">About</a></li>
									<li><a href="javascript:;">Laxury Rooms</a></li>
									<li><a href="javascript:;">Blog</a></li>
									<li><a href="javascript:;">Terms</a></li>
								</ul>
							</div>

							<div class="col-lg-3 col-md-12">
								<h6>Contact</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="#"><i class="fa fa-home ml-3 text-primary"></i> New York, NY 10012, US</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-envelope ml-3 text-primary"></i> info12323@example.com</a></li>
									<li>
										<a href="#"><i class="fa fa-phone ml-3 text-primary"></i> + 01 234 567 88</a>
									</li>
									 <li>
										<a href="#"><i class="fa fa-print ml-3 text-primary"></i> + 01 234 567 89</a>
									</li>
								</ul>
								<ul class="list-unstyled list-inline mt-3">
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-facebook bg-facebook"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-twitter bg-info"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-google-plus bg-danger"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-linkedin bg-linkedin"></i>
									  </a>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 col-md-12">
								<h6>Subscribe</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<div class="input-group w-100">
									<input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tl-3  br-bl-3"> Subscribe </button>
									</div>
								</div>
								<h6 class="mb-0 mt-5">Payments</h6>
								<hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<ul class="footer-payments">
									<li class="pr-0"><a href="javascript:;"><i class="fa fa-cc-amex text-muted" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-visa text-muted" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-credit-card-alt text-muted" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-mastercard text-muted" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-paypal text-muted" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-dark-purple text-white p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2019 <a href="#" class="fs-14 text-primary">Reallist</a>. Designed by <a href="#" class="fs-14 text-primary">Spruko</a> All rights reserved.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!--/Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="../assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap-4.3.1-dist/js/bootstrap-rtl.js"></script>

		<!--JQuery Sparkline Js-->
		<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="../assets/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Counters -->
		<script src="../assets/plugins/counters/counterup.min.js"></script>
		<script src="../assets/plugins/counters/waypoints.min.js"></script>
		<script src="../assets/plugins/counters/numeric-counter.js"></script>

		<!--Owl Carousel js -->
		<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>

		<!--Horizontal Menu-->
		<script src="../assets/plugins/horizontal-menu/horizontal.js"></script>

		<!--JQuery TouchSwipe js-->
		<script src="../assets/js/jquery.touchSwipe.min.js"></script>

		<!--Select2 js -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>
		<script src="../assets/js/select2.js"></script>

		<!-- sticky Js-->
		<script src="../assets/js/sticky.js"></script>

		<!-- Cookie js -->
		<script src="../assets/plugins/cookie/jquery.ihavecookies.js"></script>
		<script src="../assets/plugins/cookie/cookie.js"></script>

        <!-- Custom scroll bar Js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Showmore Js-->
		<script src="../assets/js/jquery.showmore.js"></script>
		<script src="../assets/js/showmore.js"></script>

		<!-- Swipe Js-->
		<script src="../assets/js/swipe.js"></script>

		<!-- Scripts Js-->
		<script src="../assets/js/owl-carousel-rtl.js"></script>

		<!-- Custom Js-->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>