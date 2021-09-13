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
            <div class="col-lg-3 col-7">
             
            </div>
            <div class="col-lg-3 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/create-service">Add New Service</a></li>
                  
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
            <!-- Card header -->
            <div class="py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                   <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($result as $result) { ?>
                  <tr>
                    
                    <td><?php if(!empty($result->title)) { echo $result->title; } ?></td>
                    <td class="table-user"><img src="<?php echo base_url();?>/assets/upload/service/<?php  echo $result->image; ?>" class=" avatar rounded-circle mr-3">
                   </td>
                    <td><?php if(!empty($result->description)) { echo $result->description; } ?></td>
					
                    <td><?php if(!empty($result->created_date)) { echo $result->created_date; } ?></td>
                    <td><a target="_blank" class="aeditclass" href="<?php echo base_url();?>administrator/edit-service/<?php echo base64_encode($result->id)?>">Edit</a>
					|<span rel="<?php echo $result->id;?>" class="delete-service">Delete</span> 
				</td>
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>