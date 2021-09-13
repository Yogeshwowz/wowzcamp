<?php //echo"<pre>"; print_r($rooms); die();?>
<form role="form" action="<?php echo base_url();?>rooms/loadRecord" method="POST" id="search-form">
<div class="header-search">
 <?php $this->load->view('home/search-filter');?>
</div>
  <?php /*  
<section class="filter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 collapse <?php  if(!empty($range) || !empty($rating) || !empty($location)) { echo"show";}?>" id="collapseExample">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Price / Night</h4>
							<div class="range-slider-p">
							<input name="range" class="range-slider__range search-filter" type="range" value="10000" min="0" max="45000">
							<span class="range-slider__value">0</span>
							<input id= "prange" name="prange" class="search-filter" type="hidden" value="10000" >
							</div>
                        </div>
                        <div class="col-md-3">
                            <span class="right-line"></span>
                            <h4>Property Type</h4>
                            <div class="pro-type-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter-radio" type="radio"  name="ptype" id="inlineCheckbox1" value="all">
                                    <label id="labelall" class="form-check-label" for="inlineCheckbox1">All</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  checked class="form-check-input search-filter-radio " type="radio" name="ptype" id="inlineCheckbox2" value="room">
                                    <label  id="labelroom" class="form-check-label ptyeactive" for="inlineCheckbox2">Rooms</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter-radio" type="radio"  name="ptype" id="inlineCheckbox3" value="tent">
                                    <label id="labeltent" class="form-check-label" for="inlineCheckbox3">Tents</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter-radio" type="radio"  name="ptype" id="inlineCheckbox4" value="cottage">
                                    <label  id="labelcottage" class="form-check-label" for="inlineCheckbox4">Cottage</label>
                                </div>
								 <div class="form-check form-check-inline">
                                    <input class="form-check-input search-filter-radio" type="radio"  name="ptype" id="inlineCheckbox5" value="camping">
                                    <label  id="labelcamping" class="form-check-label" for="inlineCheckbox5">Camping</label>
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
                                <select id="locationid" class="form-control main-select search-filter" name="location">
                               <option value="">Location</option>
						<?php foreach($city as $city){?>
						<option value="<?php echo $city->id;?>"  ><?php echo $city->name;?></option>
						<?php } ?>
                                </select>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    */?>
    
 <?php $this->load->view('home/sortby-search-filter');?>
    <section class="listing-section">
        <div class="container">
            <div class="row">
			<?php $this->load->view('home/advance-filter');?>
                 <div class="col-md-9 px-5">
	                <div class="row" id='postsList'> </div>
	            </div>
	        </div>
	       <div id='pagination_room' class="text-center my-5 v-page"></div>
        </div>
    </section>
	</form>