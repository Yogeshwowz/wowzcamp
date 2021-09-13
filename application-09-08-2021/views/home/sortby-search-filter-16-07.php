<div class="room-lisitng-header">
        <div class="container">
            <div class="row py-sm-4 py-3">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <span class="main-color">WOWz STAYS</span> > <span class="protype"><?php echo ucfirst($this->uri->segment(1));?></span>
                    <h4 class="main-color"><span class="protype"><?php echo ucfirst($this->uri->segment(1));?></span> Total <span class="locspan"></span> <span class="count-V">0</span> <span class="protype"><?php echo ucfirst($this->uri->segment(1));?></span></h4>
                    <div class="wrapper d-block d-md-none">
                        <a class="switch-button" data-toggle="collapse" href="#aditional_filters" role="button" data-label="Filters" aria-expanded="false" aria-controls="aditional_filters">
                            <i class="fas fa-filter"></i> <span>Filters</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 d-none d-md-block">
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Sort By</h6>
                        <select class="form-control sort-by search-filter" name="sortproperties">
							<option value="default">Default Order</option>
                                <option value="price-asc">Price Low to High</option>
                                <option value="price-desc">Price High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>