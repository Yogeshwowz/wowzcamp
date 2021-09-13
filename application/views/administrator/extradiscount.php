<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                          
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
                <form  class="formcls" action="" method="post" role="form" novalidate=""   id="my_discount">
					<div  id="discount-form-success" class="alert alert-success alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">Discount has been added successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="form-row">
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom01">Discount</label>
                      <input name="discount_value" type="text" class="form-control" id="discount_value" placeholder="Discount"  required="true" value="<?php if(!empty($discount['discount_value'])) { echo $discount['discount_value'];}?>">
                      
                    </div>
					
                   
                  </div>
					
                 
                  <input  class="btn btn-primary mt-3" type="submit" name="add_discount" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>