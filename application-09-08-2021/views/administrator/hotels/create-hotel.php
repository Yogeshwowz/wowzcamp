<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/hotels">Manage Hotel</a></li>
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
			  <form class="formcls" action="<?php echo base_url();?>administrator/create-hotel" method="post" role="form" novalidate=""   id="my_hotel" enctype="multipart/form-data">
					<div  id="reg-form-success" class="alert alert-success alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">Hotel has been created successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div  id="reg-form-warning" class="alert alert-danger alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">This Email is already exist.Please try other Email ID </span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					 <div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">User Name</label>
                      
					   <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" required="true">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter User Email" required="true">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Hotel Name</label>
                      <input type="text" class="form-control" name="hotel_name" id="hotel_name" placeholder="Enter User Hotel Name" required="true">
					   <input type="hidden" class="form-control" name="hotel_id" id="hotel_id" placeholder="Enter User Hotel Name" >
					  
                      </div>
					</div>
					
					</div>
                  <input  class="btn btn-primary mt-3" type="submit" name="create-submit" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>