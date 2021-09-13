<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/banner"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/banner">Home Banner</a></li>
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
		  <?php if(!empty($result['error'])) { ?>
		  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">You can upload only these extension jpeg,png,jpg,gif | Max size less than 2 MB</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
		  <?php } ?>
            <!-- Card header -->
             <div class="row">
			 
			  <form class="formcls" action="<?php echo base_url();?>administrator/banner" method="post" role="form" novalidate=""   id="my_banner" enctype="multipart/form-data">
					<?php $success = $this->session->flashdata('success');
                           if($success){ ?>
                        <div class="alert alert-success alert-dismissable">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <?php echo $success; ?>                    
                        </div>
                        <?php 
                           } ?>
					<div class="form-row">
                       <div class="col-md-12">
						<label class="form-control-label">Add Banner Image</label>
						<div class="custom-file">
						<input type="file"  name="userfile[]" class="custom-file-input" id="customFileLang" multiple required>
						<label class="custom-file-label" for="customFileLang" id="g-images"></label>
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
	 
	<div class="container-fluid">
	<div class="card-header">
       <h5 class="h3 mb-1">Banner Images</h5>
     </div>
	 <?php  if(count($banner) >0){ ?>
	 <div class="card-columns">
	  <?php 
	 foreach($banner as $banner) { ?>
      <div class="card">
        <img class="card-img-top" src="<?php echo base_url();?>/assets/upload/banner/<?php echo $banner->banner_image;?>" alt="Card image cap">
        <div class="card-body">
          <span class="btn btn-primary delete-banner-image" data-type="banner"  rel="<?php echo $banner->id;?>">Delete</span>
        </div>
      </div>
	  <?php } ?>
	</div><?php } else{ ?>
	  <div class="col-md-12">
	  <p>No Data Found</p>
	  
	  </div>
	  <?php }?>
	</div>
  </div>