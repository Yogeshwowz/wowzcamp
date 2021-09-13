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
}</style>
<section class="h-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
		<?php foreach($banner as $key=>$banner){
			if($key==0){ $class ="active"; }else{ $class =""; }
			?>
        <div class="carousel-item  <?php echo $class;?>">
            <img src="<?php echo base_url();?>assets/upload/banner/<?php echo $banner->banner_image;?>" alt="">
        </div><?php 
		}?>
		
        </div>
        <div class="carousel-caption d-none d-md-flex">
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
						<option value="<?php echo $city->id;?>"  ><?php echo $city->name;?></option>
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
                            <span class="minus">-</span>
                            <input type="text"  class="adultstext"  name="adults[]" value="2"/>
                            <span class="plus plusmore">+</span>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i> Add Room</a>
					 </div>
					</div>
                
				</div>
               </div>
				
            </div>  
			<input type="hidden"  id="search-by-filter" name="search-by-filter" value="0"/>			
            <input class="btn main-btn my-2 my-sm-0 search-by-filter" type="submit" value="Search" name="homesearch">
        </div>
    </div>

		</div>
		</form>
		   <!-- <div class="text">
                <h3>Luxurious Rooms</h3>
                <a href="#" class="btn main-btn br-5">Our Rooms</a>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="container-fluid h-wowz-stay">
    <div class="section-title">
        <h1 class="position-relative pb-4 mb-5">WOWz STAYS</h1>
    </div>
    <div class="ws-carousal">
	<?php foreach($category as $result) { 
	  if($result->id==1){ $pathlink = "rooms";}
	  if($result->id==2){$pathlink = "rooms";}
	  if($result->id==3){ $pathlink = "rooms";}
	  if($result->id==4){ $pathlink = "rooms";}
	   ?>
        <div>
            <div class="card-s">
                    <div class="card-image"><img src="<?php echo base_url();?>/assets/upload/category/<?php  echo $result->image; ?>" alt="card one"></div>
                    <ul class="social-icons">
                        <li><a href="<?php echo base_url().$pathlink;?>"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M361.155 91.245l-18 .193.42 38.98c-45.773 13.285-108.533 19.738-166.474 23.573 35.097 96.284 99.357 173.77 157.845 257.13 20.718-19.655 51.11-31.983 83.46-36.01-20.8-18.109-36.634-27.966-58.833-70.438 31.27 37.085 52.579 48.467 77.623 62.006 3.263-13.094 8.938-24.638 18.721-32.674 8.667-7.12 20.026-10.654 33.53-10.344-46.874-59.763-101.67-117.054-127.83-189.435l-.462-42.98zM163.25 102.92l-17.998.244s.25 18.34.56 36.97c.156 9.316.325 18.703.489 25.929.06 2.636.117 4.58.174 6.542-34.378 83.733-69.154 160.993-123.92 233.442 33.635-1.387 66.326-1.203 98.552-.041 22.263-62.617 23.346-134.855 35.627-202.006 11.417 68.562 10.566 139.445 33.483 205.83 42.962 3.082 85.69 7.198 129.35 10.926-55.67-79.151-118.213-155.037-155.118-249.365-.05-1.782-.1-3.396-.152-5.737-.162-7.156-.333-16.523-.488-25.82-.31-18.594-.559-36.914-.559-36.914z"></path></svg></a></li>
                    </ul>
                    <div class="details">
                        <h2><?php if(!empty($result->title)) { echo $result->title; } ?></h2>
                        <p class="job-title"><?php if(!empty($result->description)) { echo $result->description; } ?></p>
                </div>
            </div>
        </div><?php 
	}
		?>
       
   </div>
</section>


<section class="h-about-us">
    <div class="row m-0">
        <div class="col-lg-6 about_text_main no_padding">
            <h2>About WOWz Stays</h2>
            <div class="descc">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <h5>Advantages list:</h5>
                <ul>
                    <li>Camping</li>
                    <li>Outbound Learning</li>
                    <li>Survival Skills</li>
                    <li>Holiday in the wilderness</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 p-0 overflow-hidden">
            <img class="w-100 h-100" src="<?php echo base_url();?>assets/upload/banner/<?php echo $banner->banner_image;?>" alt="">
        </div>
    </div>
</section>

<section class="container-fluid services">
    <div class="section-title">
        <h1 class="position-relative pb-4 mb-5">Our Courses &amp; Programmes</h1>
    </div>
    <div class="row">
	<?php foreach($services as $result) { ?>
        <div class="col-lg-6 col-xl-3 col-12 mx-auto my-3">
            <div class="card-services shadow-lg border-0 p-4">
                <article class="service">
			
				
				<img src="<?php echo base_url();?>assets/upload/service/<?php  echo $result->image; ?>" class=" avatar rounded-circle mr-3">
                    <h6><?php if(!empty($result->title)) { echo $result->title; } ?></h6>
                    <p class="service_p">
                        <?php if(!empty($result->description)) { echo $result->description; } ?>
                    </p>
                </article>
            </div>
        </div><?php 
	}?>
        
		</div>
    </div>
</section>


<section class="h-galary">
    <div class="gal-bg gal-bar">
        <div class="section-title">
            <h1 class="text-center position-relative pb-4 mb-5">Gallery</h1>
        </div>
       <?php /* <div class="gal-btn">
		<button class="clickgal" rel="room">rooms</button>  
            <button class="clickgal" rel="all">all</button>
            <button class="clickgal" rel="tent">tents</button>
                      
        </div>*/?>
        <div id="all_gallery" class="hidecls">
           <div class="h-gallery">
				   <?php if($allimages['count'] >0 ){
				 	foreach($allimages['result'] as $result){
						$id = $result->id;
						?>
						<div class="postcls" id="post_<?php echo $id; ?>"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>"><img class="image-gallery" src="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>" alt=""></a></div>
					<?php }
				   }					?>
            </div>
            <div>
			<input type="hidden" id="row" value="0">
             <input type="hidden" id="all" value="<?php echo $allimages['allcount']; ?>">
			<button class="btn m-btn load-more">Load More</button></div>
        </div>
		
		<div id="all_room_div" >
           <div class="h-gallery">
				   <?php if($roomimages['count'] >0 ){
				 	foreach($roomimages['result'] as $result){
						$id = $result->id;
						?>
						<div class="postroomcls" id="post_<?php echo $id; ?>"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>"><img class="image-gallery" src="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>" alt=""></a></div>
					<?php }
				   }					?>
            </div>
            <div>
			<input type="hidden" id="row_room" value="0">
             <input type="hidden" id="all_room" value="<?php echo $roomimages['allcount']; ?>">
			<button class="btn m-btn load-more-room">Load More</button></div>
        </div>
		
		<div id="all_tent_div" class="hidecls">
           <div class="h-gallery">
				   <?php if($tentimages['count'] >0 ){
				 	foreach($tentimages['result'] as $result){
						$id = $result->id;
						?>
						<div class="posttentcls" id="post_<?php echo $id; ?>"><a class="fresco" data-fresco-group="unique_name" data-fresco-group-options="thumbnails: true" href="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>"><img class="image-gallery" src="<?php echo base_url();?>assets/upload/gallery/<?php echo $result->gallery_image;?>" alt=""></a></div>
					<?php }
				   }					?>
            </div>
            <div>
			<input type="hidden" id="row_tent" value="0">
             <input type="hidden" id="all_tent" value="<?php echo $tentimages['allcount']; ?>">
			<button class="btn m-btn load-more-tent">Load More</button></div>
        </div>
    </div>
</section>


<div class="fix-sm">
    <a href="#" class="fix-sm-item item-fb">
        <span class="item-icon"><i class="fab fa-facebook-f"></i></span><span class="item-text">Facebook</span>
    </a>
    <a href="#" class="fix-sm-item item-g">
        <span class="item-icon"><i class="fab fa-google"></i></span><span class="item-text">Gmail</span>
    </a>
    <a href="#" class="fix-sm-item item-ld">
        <span class="item-icon"><i class="fab fa-linkedin-in"></i></span><span class="item-text">Linkedin</span>
    </a>
</div>