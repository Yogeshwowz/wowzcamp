<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/Campings">Manage Campings</a></li>
                  
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
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/create-camping">Add New Camping</a></li>
                  
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
                   <th>Hotel Name</th>
                    <th>Camping Name</th>
					<th>Camping Price</th>
					<th>No. Of Guest</th>
					<th>Location</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($properties as $properties) { ?>
                  <tr>
                    <td><?php if(!empty($properties->hotel_name)) { echo $properties->hotel_name; } ?></td>
					<td><?php if(!empty($properties->propertyname)) { echo $properties->propertyname; }?></td>
					<td><span>₹</span><?php if(!empty($properties->price)) { echo $properties->price; } ?></td>
					<td><?php if(!empty($properties->guest)) { echo $properties->guest; } ?></td>
					<td><?php if(!empty($properties->city)) { echo $properties->city; } ?></td>
					 <td><?php if(!empty($properties->created_date)) { echo $properties->created_date; } ?></td>
                    <td><a target="_blank" class="aeditclass" href="<?php echo base_url();?>administrator/edit-camping/camping/<?php echo base64_encode($properties->id)?>">Edit</a>
					|<span rel="<?php echo $properties->id;?>"  data-type="camping" class="delete-property">Delete</span>| <a target="_blank" class="agalleryclass" href="<?php echo base_url();?>administrator/camping-gallery/camping/<?php echo base64_encode($properties->id)?>">Gallery</a>| <a target="_blank" class="aamenityclass" href="<?php echo base_url();?>administrator/camping-amenity/camping/<?php echo base64_encode($properties->id)?>">Amenity</a> 
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