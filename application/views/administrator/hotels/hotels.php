<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/hotels">Manage Hotels</a></li>
                  
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
                   <th>User Name</th>
                    <th>Email</th>
					<th>Password</th>
					<th>Role</th>
                   <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($users as $users) { ?>
                  <tr>
                    
                    <td class="text-limit"><?php if(!empty($users->hotel_name)) { 
					$string = $users->hotel_name;
					
					
					if (strlen($string) > 15) {
						$trimstring = substr($string, 0, 23). ' ....';
					} else {
						$trimstring = $string;
					}
					echo $trimstring;
					}				
					?></td>
                    <td><?php if(!empty($users->username)) { echo $users->username; } ?></td>
					<td><?php if(!empty($users->email)) { echo $users->email; }?></td>
					<td><?php if(!empty($users->plain_password)) { echo $users->plain_password; } ?></td>
					<td>Admin</td>
                    <td><?php  if($users->status==0){ echo"Deactive";}else { echo "Active"; }?></td>
                    <td><?php if(!empty($users->created_date)) { echo $users->created_date; } ?></td>
                    <td><a target="_blank" class="aeditclass" href="<?php echo base_url();?>administrator/edit-hotel/<?php echo base64_encode($users->id)?>">Edit</a>
					|<span rel="<?php echo $users->id;?>" class="delete-hotel-user">Delete</span> |
					<?php  if($users->status==0){?>
					<span rel="<?php echo $users->id;?>" class="change-status deactive-hotel-user">Change Status</span>
					<?php }else { ?>
					<span rel="<?php echo $users->id;?>" class="change-status active-hotel-user">Change Status</span>
					<?php  }?></td>
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>