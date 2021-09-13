<style>.avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: .375rem;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}
.guest-option .number span.minus-1 {
     border-radius: 40px 0 0 40px; 
}

</style>
<section class="h-banner">
        <div class="h-banner-content">
        <h1 class="h-banner-head">Find and book best Stays in Kasauli</h1>
		<form role="form" action="<?php echo base_url();?>rooms" method="POST" id="search-form-home">
		<div class="header-search">
		   <div class="">
        <div class="row">
            <div class="i-group">
                <label>Location</label>
                <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">-->
				<select id="locationid" class="form-control main-select search-filter1 " name="location">
                    <option value="">Search</option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>" <?php if($city->id=='1233') { echo "selected";}?>  ><?php echo $city->name;?></option>
						<?php } ?>
                </select>
            </div>
            <div class="i-group">
                <label>Check In:</label>
                <input class="date-input form-control"  name="check_in" id="check_in" value="<?php echo date('Y-m-d');?>">
            </div>
            <div class="i-group">
                <label>Check Out:</label>
                <input class="date-input form-control" name="check_out" id="check_out" value="<?php echo $tomorrow = date("Y-m-d", time() + 86400); ?>">
				<span id="date-error" class="date-error hidecls">Check-out date is less than from check-in date</span>
            </div>
            <div class="i-group">
                <label>Guests</label>
                <div class="menu-select guest-drop" id="guest_div">
                   <span id="guest_room_span">1</span>  <span id="guest_room">Room</span>  <span id="guest_span">2</span> Guests
                   <a href="#" class="i-add-room">Add Room</a>
                </div>
				
                <div class="guest-option">
				<div class="field_wrapper">
				<div class="row main-div m-0" id="add_more_div_1" rel="1">
				<div class="col-md-12">
            			<h6 class="main-color">Room <span class="roomper">1</span></h6>
                 </div>
				 <div class="col-md-12 room_list">
				  <label>Adults(12+ yr)</label>
					<div class="g-group adults ">
                       
                        <div class="number">
                            <span class="minus-1">-</span>
                            <input type="text"  class="adultstext"  name="adults[]" value="2"/>
                            <span class="plus plusmore">+</span>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="add_button" title="Add field">Add Room</a>
					 </div>
					</div>
                
				</div>
               </div>
				
            </div>  
			<input type="hidden"  id="search-by-filter" name="search-by-filter" value="0"/>			
            <input class="btn main-btn my-2 my-sm-0 " type="submit" value="Search" name="homesearch">
        </div>
    </div>

		</div>
		</form>
        </div>
</section>
