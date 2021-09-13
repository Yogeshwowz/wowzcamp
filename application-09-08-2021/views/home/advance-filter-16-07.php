<div class="col-lg-3 col-md-4 collapse" id="aditional_filters">
                    <div class="row adi-filters">
                        <div class="d-flex justify-content-between align-items-center w-100 px-3">
                            <h4>Filters</h4>
                            <p><a href="<?php echo base_url();?>rooms">Clear All</a></p>
                        </div>
                        <div class="sfilter side-filters"  id="search_filter_list">
                            <!--<span class="csf">Upto  ₹2000<span>X</span></span>
                            <span class="csf">Hotel<span>X</span></span>
                            <span class="csf">Upto  ₹2000<span>X</span></span>
                            <span class="csf">Banquet hall<span>X</span></span>-->
                        </div>
                        <div id="sidebar_fbox" class="w-100">
                            <div class="side-filters">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-1" role="button" aria-expanded="false" aria-controls="sfilter-1">Price <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-1" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio"   id="price1" value="1" name="range">
                                                <label class="form-check-label" for="price1">Upto  ₹2000</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio" id="price2" value="2" name="range">
                                                <label class="form-check-label" for="price2">₹2000+</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio"   id="price3" value="3" name="range">
                                                <label class="form-check-label" for="price3">₹4000+ </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio"  id="price4" value="4" name="range">
                                                <label class="form-check-label" for="price4">₹6000+ </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio"   id="price5" value="5" name="range">
                                                <label class="form-check-label" for="price5">More Then ₹8000</label>
                                            </div>
											 <div class="form-check">
                                                <input class="form-check-input search-filter pricecls" type="radio"   id="price6" value="6" name="range">
                                                <label class="form-check-label" for="price6">Any</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-filters hidecls">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-2" role="button" aria-expanded="false" aria-controls="sfilter-2">Property Type <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-2" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group">
                                            <div class="form-check">
                                               
												<input class="form-check-input search-filter-radio ptypecls" type="radio"  name="ptype" id="property-type1" value="all">
                                                <label class="form-check-label" for="property-type1">All</label>
                                            </div>
                                            <div class="form-check">
												<input  <?php if($this->uri->segment(1)=='rooms'){ echo "checked";}?> class="form-check-input search-filter-radio ptypecls" type="radio" name="ptype" id="property-type2" value="room">
                                               <label class="form-check-label" for="property-type2">Rooms</label>
                                            </div>
                                            <div class="form-check">
												<input  <?php if($this->uri->segment(1)=='tents'){ echo "checked";}?> class="form-check-input search-filter-radio ptypecls" type="radio"  name="ptype" id="property-type3" value="tent">
                                                <label class="form-check-label" for="property-type3">Tents</label>
                                            </div>
                                            <div class="form-check">
												 <input <?php if($this->uri->segment(1)=='cottage'){ echo "checked";}?> class="form-check-input search-filter-radio ptypecls" type="radio"  name="ptype" id="property-type4" value="cottage">
                                               <label class="form-check-label" for="property-type4">Cottage</label>
                                            </div>
                                            <div class="form-check">
												<input  <?php if($this->uri->segment(1)=='camping'){ echo "checked";}?> class="form-check-input search-filter-radio ptypecls" type="radio"  name="ptype" id="property-type5" value="camping">
                                                
                                                <label class="form-check-label" for="property-type5">Camping</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-filters">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-3" role="button" aria-expanded="false" aria-controls="sfilter-3">Guest Rating <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-3" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group">
                                         
											<?php
									     for ($x = 1; $x <= 5; $x++) {?>
										  <div class="form-check">
                                                <input name="rating[]" type="checkbox" class="form-check-input search-filter ratingcls" id="rating_<?php echo $x;?>" value="<?php echo $x;?>">
                                                <label class="form-check-label" for="rating_<?php echo $x;?>"><?php echo $x;?>
													<span class="star-icons">
													<?php if($x==1) {?><i class="fas fa-star"></i>	<?php }?>
													<?php if($x==2) {?><i class="fas fa-star"></i>	<i class="fas fa-star"></i><?php }?>
													<?php if($x==3) {?><i class="fas fa-star"></i>	<i class="fas fa-star"></i><i class="fas fa-star"></i>	<?php }?>
													<?php if($x==4) {?><i class="fas fa-star"></i>	<i class="fas fa-star"></i><i class="fas fa-star"></i>	<i class="fas fa-star"></i>	<?php }?>
													<?php if($x==5) {?><i class="fas fa-star"></i>	<i class="fas fa-star"></i><i class="fas fa-star"></i>	<i class="fas fa-star"></i>		<i class="fas fa-star"></i>	<?php }?>
													              
													</span>
											</label>
                                            </div>
										 
										 
										 
										<?php /*<option value="<?php echo $x;?>" <?php if(!empty($rating)) { if($x==$rating) { echo "selected";} }?>><?php echo $x;?></option>*/?>
										
										
									<?php }
									?>
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-filters">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-4" role="button" aria-expanded="false" aria-controls="sfilter-4">Amenities <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-4" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group"  id="allamenity_more">
										<?php 
											foreach($allAmenity as $key=>$allamenity) { 
											if($key <= 5){
											?>
                                          <div class="form-check">
                                                <input rel="<?php echo $allamenity->amenity_name;?>"  name="amenity[]" type="checkbox" class="form-check-input search-filter caseAmenity" id="amenities_less_<?php echo $allamenity->id;?>" value="<?php echo $allamenity->id;?>">
                                                <label class="form-check-label" for="amenities_less_<?php echo $allamenity->id;?>"><?php echo $allamenity->amenity_name;?></label>
                                            </div>
                                           <?php }
									      }?>
                                           <span  class="main-color" id="show_more_allamenity">Show More</span>
                                        </div>
										 <div class="form-group complete-amenities"  id="allamenity_less">
										<?php 
											foreach($allAmenity as $key=>$allamenity) { 
											
											?>
                                            <div class="form-check">
                                                <input  rel="<?php echo $allamenity->amenity_name;?>" name="amenity[]" type="checkbox" class="form-check-input search-filter caseAmenity" id="amenities_full_<?php echo $allamenity->id;?>" value="<?php echo $allamenity->id;?>">
                                                <label class="form-check-label" for="amenities_full_<?php echo $allamenity->id;?>"><?php echo $allamenity->amenity_name;?></label>
                                            </div>
                                           <?php 
									      }?>
                                           <span class="main-color" id="show_less_allamenity">Show Less</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-filters d-block d-md-none">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-6" role="button" aria-expanded="false" aria-controls="sfilter-6">Sort By <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-6" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group">
                                            <div class="form-check">
												<input class="form-check-input search-filter-radio" type="radio"  name="stype" id="sortby-type1" value="0">
                                                <label class="form-check-label" for="sortby-type1">Default Order</label>
                                            </div>
                                            <div class="form-check">
												<input  <?php if($this->uri->segment(1)=='rooms'){ echo "checked";}?> class="form-check-input search-filter-radio" type="radio" name="stype" id="sortby-type2" value="1">
                                               <label class="form-check-label" for="sortby-type2">Price Low to High</label>
                                            </div>
                                            <div class="form-check">
												<input  <?php if($this->uri->segment(1)=='tents'){ echo "checked";}?> class="form-check-input search-filter-radio" type="radio"  name="stype" id="sortby-type3" value="2">
                                                <label class="form-check-label" for="sortby-type3">Price High to Low</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-filters">
                                <a class="sf-btn" data-toggle="collapse" href="#sfilter-5" role="button" aria-expanded="false" aria-controls="sfilter-5">More Filters <i class="fas fa-chevron-circle-down"></i></a>
                                <div class="collapse" id="sfilter-5" data-parent="#sidebar_fbox">
                                    <div class="card card-body">
                                        <div class="form-group">
                                            <select class="form-control main-select">
                                            <option>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               