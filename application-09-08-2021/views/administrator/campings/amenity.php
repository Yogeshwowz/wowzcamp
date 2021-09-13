<?php //echo"<pre>"; print_r($propertyAmenity); die();?>
<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/campings">Manage Campings</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
      <!-- Table -->
	   <form class="formcls" action="<?php echo base_url();?>administrator/camping-amenity/camping/<?php echo $this->uri->segment(4);?>" method="post" role="form" novalidate=""   >
      <div class="row">
        <div class="col">
		 
		 <div class="card">
          <div class="card-body">
		   <?php $success = $this->session->flashdata('success');
                           if($success){ ?>
                        <div class="alert alert-success alert-dismissable">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <?php echo $success; ?>                    
                        </div>
                        <?php 
                           } ?>
			<div class="card-header">
			<h5 class="h3 mb-1">Camping Amenity</h5>
			</div>
		  <!-- Card header -->
             <div class="row-example">
             <?php foreach($allAmenity as $allAmenity){?>
				      <div class="custom-control custom-checkbox" style="float:left; width:50%;">
						<input type="checkbox"  value="<?php echo $allAmenity->id;?>" name="amenity[]" class="custom-control-input" id="customCheck_<?php echo $allAmenity->id;?>" <?php if(in_array($allAmenity->id,$propertyAmenity)){ echo"checked";}?>>
						<label class="custom-control-label" for="customCheck_<?php echo $allAmenity->id;?>"><?php echo $allAmenity->amenity_name;?></label>
						</div>
						
			<?php }?>
			 
            </div>
			<input  class="btn btn-primary mt-3" type="submit" name="create-submit" Value="Submit">
            </div>
		  </div>
         </div>
         </div>
		 
      </div>
     </div>
	 
</div>