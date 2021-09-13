<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/services">Manage Courses & Program Section</a></li>
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
			  <form class="formcls" action="<?php echo base_url();?>administrator/create-service" method="post" role="form" novalidate=""   id="my_service" enctype="multipart/form-data">
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
                      <label class="form-control-label" for="editor1">Title</label>
                      
					   <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required="true">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Description</label>
                      <textarea class="form-control" name="description" id="description" placeholder="Enter User Email" required="true"></textarea>
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Image</label>
                      <input type="file" class="form-control" name="image" id="image"  required="true">
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