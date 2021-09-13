<?php //echo"<pre>"; print_r($rooms); die();?>
<div class="header-search">
        <div class="container">
            <div class="d-flex justify-content-center">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class=" menu-select">
                            Mon , 5 Apr - Mon , 5 Apr
                        </div>
                        <div class=" menu-select">
                            1 Rooms, 2 Guest
                        </div>
                        <button class="btn main-btn my-2 my-sm-0" type="submit">Search by City</button>
                    </form>               
            <!-- <ul class="navbar-nav my-2 my-lg-0">
                <li>
                <a class="" href="#"> <img class="mr-3" src="assets/img/login-icon.png" alt="">Partner Login</a>
                </li>
            </ul>               -->
            </div>
        </div>
    </div>
<form role="form" action="<?php echo base_url();?>rooms/loadRecord" method="POST" id="search-form">
    <section class="filter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-4">
                    <button class="btn main-btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                       Additional Filters <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="col-md-12 collapse <?php  if(!empty($range) || !empty($rating) || !empty($location)) { echo"show";}?>" id="collapseExample">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Price / Night</h4>
                            <input type="range" min="800" max="45000" value="20000" class="range-slider" id="myRange">
                            <div class="d-flex justify-content-between">
                                <span>800</span>
                                <span>45000</span>
                            </div>
							
							
							<div class="range-slider-p">
							<input name="range" class="range-slider__range search-filter" type="range" value="<?php if(!empty($range)) { echo $range; }else{ echo "10000";} ?>" min="0" max="45000">
							<span class="range-slider__value">0</span>
							<input id= "prange" name="prange" class="search-filter" type="text" value="<?php if(!empty($range)) { echo $range; }else{ echo "10000";} ?>" >
							</div>
                        </div>
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Property Type</h4>
                            <div class="pro-type-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter" type="radio"  name="ptype" id="inlineCheckbox1" value="all" <?php if(!empty($ptype)) { if($ptype=='all') { echo "checked";}}?>>
                                    <label class="form-check-label <?php if(!empty($ptype)) { if($ptype=='all') { echo "ptyeactive";}}?>" for="inlineCheckbox1">All</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  class="form-check-input search-filter" type="radio" name="ptype" id="inlineCheckbox2" value="room" <?php if(!empty($ptype)) { if($ptype=='room') { echo "checked";}}?>>
                                    <label  class="form-check-label <?php if(!empty($ptype)) { if($ptype=='room') { echo "ptyeactive";}}?>" for="inlineCheckbox2">Rooms</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter" type="radio"  name="ptype" id="inlineCheckbox3" value="tent" <?php if(!empty($ptype)) { if($ptype=='tent') { echo "checked";}}?>>
                                    <label class="form-check-label  <?php if(!empty($ptype)) { if($ptype=='tent') { echo " ptyeactive ";}}?>" for="inlineCheckbox3">Tents</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="ptype" id="inlineCheckbox4" value="cottage">
                                    <label class="form-check-label" for="inlineCheckbox4">Cottage</label>
                                </div>
								 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="ptype" id="inlineCheckbox5" value="camping">
                                    <label class="form-check-label" for="inlineCheckbox5">Camping</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Guest Rating</h4>
                            <div class="form-group">
                                <select class="form-control main-select search-filter" name="rating">
                                <option value="">All</option>
									<?php
									for ($x = 1; $x <= 5; $x++) {?>
										<option value="<?php echo $x;?>" <?php if(!empty($rating)) { if($x==$rating) { echo "selected";} }?>><?php echo $x;?></option>
									<?php }
									?>
									
                                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Locations</h4>
                            <div class="form-group">
                                <select class="form-control main-select search-filter" name="location">
                               <option value="">Location</option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>"  <?php if(!empty($location)) { if($city->id==$location) { echo "selected";} }?>><?php echo $city->name;?></option>
						<?php } ?>
                                </select>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="listing-section">
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-8">
                    <span class="main-color">India</span> > <span><?php if(!empty($ptype)) { echo ucfirst($ptype);  }?></span>
                    <h4 class="main-color"><?php if(!empty($ptype)) { echo ucfirst($ptype);  }?> in Kasauli Wilderness Camp (<?php if(isset($allcount)) { echo $allcount;}?> <?php if(!empty($ptype)) { echo ucfirst($ptype);  }?>)</h4>
                </div>
                <div class="col-md-4">
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <h6>Sort By</h6>
                        <select class="form-control sort-by search-filter" name="sortproperties">
							<option value="default" <?php if(!empty($sortproperties)) { if('default'==$sortproperties) { echo "selected";}}?>>Default Order</option>
                                <option value="price-asc" <?php if(!empty($sortproperties)) { if('price-asc'==$sortproperties) { echo "selected";}}?>>Price Low to High</option>
                                <option value="price-desc" <?php if(!empty($sortproperties)) { if('price-desc'==$sortproperties) { echo "selected";}}?>>Price High to Low</option>
                        </select>
                    </div>
                </div>
            </div>

        
		<?php foreach($result as $key=>$value) { ?>
            <div class="row pb-4">
                <span class="bottom-line"></span>
                <div class="offset-lg-1 col-lg-6 pt-4">
                       <div class="row">
                        <div class="col-md-12">
                            <div id="room-listing-c" class="room-listing-c slider">
							<?php foreach($value['gallery'] as $gallery) {?>
                                <div>
                                    <img src="<?php echo base_url();?>assets/upload/gallery/<?php echo $gallery->gallery_image;?>" alt="" class="img-fluid">
                                </div>
							<?php } ?>
                              
                            </div>
                            <div id="room-listing-c-thumb" class="room-listing-c-thumb slider">
							<?php foreach($value['gallery'] as $gallery) {?>
                                <div>
                                    <img src="<?php echo base_url();?>assets/upload/gallery/<?php echo $gallery->gallery_image;?>" alt="" class="img-fluid">
                                </div>
								<?php } ?>
                               
                            </div>
                        </div>
                    </div> 
			   </div>
                <div class="col-lg-4 pt-4 d-flex flex-column">
                    <h4 class="main-color mb-0"><?php if(!empty($value['hotel_name'])){ echo $value['hotel_name'];}?></h4>
                    <p class="pb-3">Address:<?php if(!empty($value['address'])){ echo $value['address'];}?></p>
                    <div class="rating">
                        <span class="main-btn py-1 px-2"><?php if(!empty($value['rating'])){ echo $value['rating'];}?><i class="fas fa-star pl-2"></i></span>
                        
                    </div>
                    <div class="features py-3">
					<?php foreach($value['amenities'] as $key=>$amenities){ ?>
                        <span class="main-color2"><i class="fas fa-tv pr-2"></i> <?php echo $amenities->amenity_name;?></span>
					<?php } ?>
                        
                    </div>
                    <div class="list-des">
                        <p><?php if(!empty($value['description'])){ echo $value['description'];}?></p>
                    </div>
                    <div class="listing-footer mt-auto">
                        <span class="listing-price">
                            <span class="cur-price main-color"><i class="fas fa-rupee-sign"></i><?php if(!empty($value['after_discount_price'])){ echo $value['after_discount_price'];}?></span>
                            <span class="main-price px-3"><i class="fas fa-rupee-sign"></i> <?php if(!empty($value['price'])){ echo $value['price'];}?></span>
                            <span class="off-price"><?php if(!empty($value['discount'])){ echo $value['discount'];}?>% off</span>
                        </span>
                        <p><?php if(!empty($value['rating_status'])){ echo $value['rating_status'];}?></p>
                        <span class="d-flex justify-content-between">
                            <a href="<?php echo base_url();?>view-details/<?php echo base64_encode($value['id']);?>" class="btn main-btn2 my-2 my-sm-0">View Details</a>
                            <a href="payment.html" class="btn main-btn my-2 my-sm-0">BOOK NOW</a>
                        </span>
                        
                    </div>
                </div>
            </div>
	<?php } ?>
	<?php echo $pagination; ?>
            <?php /*<div class="d-flex justify-content-center py-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
*/?>
        </div>
    </section>
	</form>