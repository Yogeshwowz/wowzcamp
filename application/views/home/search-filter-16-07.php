   <?php 
   if(!empty($postdata['adults'])){
      $guest = 0;
		foreach($postdata['adults'] as $adults){
			$guest = $guest + $adults;
   }
   }
   ?>
   <div class="container">
        <div class="row">
            <div class="i-group">
                <label>Location</label>
                <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">-->
				<select id="locationid" class="form-control main-select search-filter1 " name="location">
                    <option value="">Search</option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>" <?php  if(!empty($postdata['location'])){ if($postdata['location']==$city->id) { echo"selected";} }?>><?php echo $city->name;?></option>
						<?php } ?>
                </select>
            </div>
            <div class="i-group">
                <label>Check In:</label>
                <input class="date-input form-control"  name="check_in" id="check_in" value="<?php  if(!empty($postdata['check_in'])){ echo $postdata['check_in'] ;}else{ echo date('Y-m-d');} ?>">
            </div>
            <div class="i-group">
                <label>Check Out:</label>
                <input class="date-input form-control" name="check_out" id="check_out"  value="<?php  if(!empty($postdata['check_out'])){ echo $postdata['check_out'] ;}else{ echo $tomorrow = date("Y-m-d", time() + 86400);} ?>">
				<span id="date-error" class="date-error hidecls">Check-out date is less than from check-in date</span>
            </div>
            <div class="i-group">
                <label>Guests</label>
                <div class="menu-select guest-drop" id="guest_div">
                   <span id="guest_room_span"><?php if(!empty($postdata['adults'])){ 
				   echo count($postdata['adults']); }else{ echo "1";}?></span>  <span id="guest_room">Room</span>  <span id="guest_span"><?php if(!empty($postdata['adults'])){ 
				   echo $guest; }else{ echo "2";}?></span> Guests
                </div>
				
                <div class="guest-option">
				<div class="field_wrapper">
				<?php if(!empty($postdata['adults'])){ 
				  $numadults = count($postdata['adults']);
				  if($numadults==1){ ?>
					<div class="row main-div m-0" id="add_more_div_1" rel="1">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper">1</span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="2"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							 </div>
						</div>
                <?php }
				
				if($numadults > 1){ 
				$counter =1;
				foreach($postdata['adults'] as  $adults){
				 ?>
				
					<div class="row main-div m-0" id="add_more_div_<?php echo $counter;?>" rel="<?php echo $counter;?>">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper"><?php echo $counter;?></span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="<?php echo $adults;?>"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<?php if($counter==1){?>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							<?php } ?>
							<?php if($counter >1){?>
							<a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fas fa-trash"></i> Remove Room</a>
							<?php } ?>
							 </div>
						</div>
				<?php 
				$counter = $counter + 1;
				}
				}
				}else{?>
					<div class="row main-div m-0" id="add_more_div_1" rel="1">
						<div class="col-md-12">
								<h6 class="main-color">Room <span class="roomper">1</span></h6>
						 </div>
						 <div class="col-md-12 room_list">
						  <label>Adults(12+ yr)</label>
							<div class="g-group adults ">
							   <div class="number">
									<span class="minus">-</span>
									<input type="text"  class="adultstext"  name="adults[]" value="2"/>
									<span class="plus plusmore">+</span>
								</div>
							</div>
							<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
							 </div>
						</div>
					
					
				<?php }				
				?>
				</div>
               </div>
				
            </div>  
			<input type="hidden"  id="search-by-filter" name="search-by-filter" value="0"/>	
			<input   type="hidden"  name="startField" id="startField" value="<?php  if(!empty($postdata['adults'])){ 
				   echo count($postdata['adults']); }else{ echo"1";} ?>">			
            <button class="btn main-btn my-md-2 my-sm-0 search-by-filter" type="button" >Search</button>
        </div>
    </div>
