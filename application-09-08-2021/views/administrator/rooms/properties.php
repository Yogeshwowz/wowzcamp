<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/rooms">Manage Rooms</a></li>
                  
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
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/create-room">Add New Room</a></li>
                  
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
                    <th>Room Name</th>
					<th>Room Price</th>
					<th>No. Of Guest</th>
					<th>Location</th>
					<th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($properties as $properties) { ?>
                  <tr>
                    <td><?php //if(!empty($properties->hotel_name)) { echo $properties->hotel_name; } ?>
					<?php if(!empty($properties->hotel_name)) { 
					$string = $properties->hotel_name;
					if (strlen($string) > 15) {
						$trimstring = substr($string, 0, 23). ' ....';
					} else {
						$trimstring = $string;
					}
					echo $trimstring;
					}				
					?>
					</td>
					<td><?php //if(!empty($properties->propertyname)) { echo $properties->propertyname; }?>
					<?php if(!empty($properties->propertyname)) { 
					$propertyname = $properties->propertyname;
					if (strlen($propertyname) > 15) {
						$trimstring = substr($propertyname, 0, 15). ' ....';
					} else {
						$trimstring = $propertyname;
					}
					echo $trimstring;
					}				
					?>
					</td>
					<td><span>₹</span><?php if(!empty($properties->price)) { echo $properties->price; } ?></td>
					<td><?php if(!empty($properties->guest)) { echo $properties->guest; } ?></td>
					<td><?php if(!empty($properties->city)) { echo $properties->city; } ?></td>
					<td><?php if(!empty($properties->status) && $properties->status==1) { echo"Available"; }else{ echo"Not Available";} ?></td>
					<td><?php if(!empty($properties->created_date)) { echo  date('Y-m-d', strtotime($properties->created_date));  } ?></td>
					 <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a  target="_blank" class="dropdown-item aeditclass" href="<?php echo base_url();?>administrator/edit-room/room/<?php echo base64_encode($properties->id)?>">Edit</a>
                          <span rel="<?php echo $properties->id;?>"  data-type="room" class="delete-property dropdown-item">Delete</span>
                          <a  target="_blank"  class="dropdown-item agalleryclass" href="<?php echo base_url();?>administrator/room-gallery/room/<?php echo base64_encode($properties->id)?>">Gallery</a>
						    <a  target="_blank"  class="dropdown-item aamenityclass" href="<?php echo base_url();?>administrator/room-amenity/room/<?php echo base64_encode($properties->id)?>">Amenity</a>
							<?php  if($properties->status==0){?>
					<span rel="<?php echo $properties->id;?>" class="change-status deactive-property dropdown-item">Change Status</span>
					<?php }else { ?>
					<span rel="<?php echo $properties->id;?>" class="change-status active-property dropdown-item">Change Status</span>
					<?php  }?>
                        </div>
                      </div>
                    </td>
					
                   <?php /* <td><a target="_blank" class="aeditclass" href="<?php echo base_url();?>administrator/edit-room/room/<?php echo base64_encode($properties->id)?>">Edit</a>
					|<span rel="<?php echo $properties->id;?>"  data-type="room" class="delete-property">Delete</span>| <a target="_blank" class="agalleryclass" href="<?php echo base_url();?>administrator/room-gallery/room/<?php echo base64_encode($properties->id)?>">Gallery</a>| <a target="_blank" class="aamenityclass" href="<?php echo base_url();?>administrator/room-amenity/room/<?php echo base64_encode($properties->id)?>">Amenity</a>|<?php  if($properties->status==0){?>
					<span rel="<?php echo $properties->id;?>" class="change-status deactive-property-user">Change Status</span>
					<?php }else { ?>
					<span rel="<?php echo $properties->id;?>" class="change-status active-property-user">Change Status</span>
					<?php  }?>
					</td>*/ ?>
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>