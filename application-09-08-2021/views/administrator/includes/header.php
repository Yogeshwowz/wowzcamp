<?php $url= explode('/',$_SERVER['REQUEST_URI']); 
$userdata = $this->administrator_model->getinfo();?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo SiteTitle;?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <?php if(in_array('hotels',$url) || in_array('rooms',$url) || in_array('tents',$url) || in_array('cottages',$url) || in_array('campings',$url) || in_array('services',$url)) { ?>
  <!-- Data Table Page plugins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <?php } ?>
  <!-- Argon CSS -->
  <link href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet" />
  
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.min5438.css" type="text/css">  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css">  
</head>

<body  class="g-sidenav-show g-sidenav-pinned" style="min-height: 100vh;">
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="<?php echo base_url(); ?>administrator/dashboard">
		<p class="logo-cls"><?php echo SiteTitle;?></p>
          <!--<img src="<?php echo base_url(); ?>assets/img/brand/blue-logo.png" class="navbar-brand-img" alt="...">-->
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php if(in_array('dashboard',$url)){ echo "active"; }?>" href="<?php echo base_url();?>administrator/dashboard" aria-controls="navbar-dashboards">
                <i class="ni ni-shop"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
           
		   </li>
		  <?php 
		  if(!empty($this->session->userdata('user_id')) && $this->session->userdata('user_id')==1){ ?>
		<li class="nav-item">
              <a class="nav-link <?php if(in_array('banner',$url) ){ echo "active"; }?>" href="<?php echo base_url();?>administrator/banner" >
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Home Banner</span>
              </a>
		  </li>
		   <li class="nav-item">
              <a class="nav-link <?php if(in_array('category',$url) || in_array('create-category',$url)  || in_array('edit-category',$url)){ echo "active"; }?>" href="<?php echo base_url();?>administrator/category" >
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Category</span>
              </a>
		  </li>
		     <li class="nav-item">
              <a class="nav-link <?php if(in_array('services',$url) || in_array('create-service',$url) || in_array('edit-service',$url)){ echo "active"; }?>" href="<?php echo base_url();?>administrator/services" >
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Courses & Program Section</span>
              </a>
		  </li>
		  <?php } ?>
		  
		 
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url()?>administrator/logout" >
				<i class="ni ni-button-power"></i>
					<span class="nav-link-text">Logout</span>
			</a>
			</li>
		 </ul>
          <!-- Divider -->
       <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Manage Hotels</span>
            <span class="docs-mini">D</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
		   <?php 
		  if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==1){ ?>
		  <li class="nav-item">
              <a class="nav-link <?php if(in_array('hotels',$url) || in_array('create-hotel',$url) || in_array('edit-hotel',$url)){ echo "active"; }?>" href="#navbar-resources-1" data-toggle="collapse" role="button" aria-expanded="<?php if(in_array('contact',$url) || in_array('about-us',$url)){ echo "true"; } else { ?>false <?php  } ?>" aria-controls="navbar-resources-1">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Manage Hotel</span>
              </a>
              <div class="collapse <?php if(in_array('create-hotel',$url) || in_array('hotels',$url) ){ echo "show"; }?>" id="navbar-resources-1">
                <ul class="nav nav-sm flex-column">
				 <li class="nav-item">
                    <a href="<?php echo base_url();?>administrator/hotels" class="nav-link">
                      <span class="sidenav-mini-icon"> M</span>
                      <span class="sidenav-normal">Hotels Lists</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>administrator/create-hotel" class="nav-link">
                      <span class="sidenav-mini-icon"> N </span>
                      <span class="sidenav-normal"> New Hotel</span>
                    </a>
                  </li>
                
				  
                </ul>
              </div>
            </li>
		  <?php } ?>
		  
            <li class="nav-item">
              <a class="nav-link <?php if(in_array('rooms',$url)|| in_array('create-room',$url) || in_array('edit-room',$url) || in_array('room-gallery',$url) || in_array('room-amenity',$url)){ echo "active"; }?> " href="<?php echo base_url();?>administrator/rooms" >
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Rooms</span>
              </a>
            </li>
           <?php /*<li class="nav-item">
              <a class="nav-link <?php if(in_array('tents',$url) || in_array('create-tent',$url) || in_array('edit-tent',$url) || in_array('tent-gallery',$url) || in_array('tent-amenity',$url)){ echo "active"; }?> " href="<?php echo base_url();?>administrator/tents" >
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Tents</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link <?php if(in_array('cottages',$url) || in_array('create-cottage',$url) || in_array('edit-cottage',$url) || in_array('cottage-gallery',$url) || in_array('cottage-amenity',$url)){ echo "active"; }?> " href="<?php echo base_url();?>administrator/cottages" >
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Cottage</span>
              </a>
            </li>
			<li class="nav-item">
             <a class="nav-link <?php if(in_array('campings',$url) || in_array('create-camping',$url) || in_array('edit-camping',$url) || in_array('camping-gallery',$url) || in_array('camping-amenity',$url)){ echo "active"; }?> " href="<?php echo base_url();?>administrator/campings" >
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Camping</span>
              </a>
            </li>*/?>
          </ul>
         <hr class="my-3">
		
		</div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
        

		 <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"> <?php if(!empty($userdata['first_name'])) { echo $userdata['first_name'];}?></span>
                  </div>
                </div>
              </a>
              <?php /*<div class="dropdown-menu  dropdown-menu-right ">
                <a class="dropdown-item" href="<?php echo base_url()?>administrator/logout" >
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
              </div>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            */?>
			
			</li>
          </ul>
        </div>
      </div>
    </nav>
	
	<input type="hidden" name="baseURL" id="baseURL" value="<?php echo base_url();?>" >
    <!-- Header -->
    <!-- Header -->
	<?php 
function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;
}

?>