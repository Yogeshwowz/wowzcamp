<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>profile">My Profile</a></li>
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
                <form  action="<?php echo base_url();?>profile" method="post" role="form" novalidate=""   id="my_profile_form">
					<div  id="add-admin-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">your profile has been updated successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="form-row">
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom01">First name </label>
                      <input name="first_name" type="text" class="form-control" id="validationCustom01" placeholder="First name"  required="true" value="<?php if(!empty($profile['first_name'])) { echo $profile['first_name'];}?>">
                      <div class="invalid-feedback">
                        Please enter a first name.
                      </div>
                    </div>
					
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom02">Last Name</label>
                      <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="Last Name"  required="true" value="<?php if(!empty($profile['last_name'])) { echo $profile['last_name'];}?>">
                      <div class="invalid-feedback">
                       Please enter a last Name.
                      </div>
                    </div>
                  </div>
					
                  <div class="form-row pt-3">
				  <?php if($this->session->userdata('role')==2) { ?>
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom01">Account name </label>
                      <input name="account_name" type="text" class="form-control" id="validationCustom01" placeholder="Business name"   value="<?php if(!empty($profile['account_name'])) { echo $profile['account_name'];}?>">
                      <div class="invalid-feedback">
                        Please enter a business name.
                      </div>
                    </div>
				  <?php } ?>
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom02">Location</label>
                      <input name="location" type="text" class="form-control" id="validationCustom02" placeholder="City Name &Region name"  required="true" value="<?php if(!empty($profile['location'])) { echo $profile['location'];}?>">
                      <div class="invalid-feedback">
                       Please enter a city Name or region name.
                      </div>
                    </div>
                  </div>
                  <div class="form-row pt-3">
                    
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustom03">Password</label>
                      <input  name="password" type="text" class="form-control" id="validationCustom03" placeholder="Password">
                      <div class="invalid-feedback">
                       Please enter a password
                      </div>
                    </div>
                  </div>
                 
                  <input  class="btn btn-primary mt-3" type="submit" name="add_admin" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>