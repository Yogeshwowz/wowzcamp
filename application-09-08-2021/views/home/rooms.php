<?php //echo"<pre>"; print_r($rooms); die();?>
<form role="form" action="<?php echo base_url();?>rooms/loadRecord" method="POST" id="search-form">

<div class="header-search" style="display:none;">
 <?php $this->load->view('home/search-filter');?>
</div>


<div class="main-search-listing">
 <?php $this->load->view('home/sortby-search-filter');?>
    <section class="listing-section">
        <div class="container">
            <div class="row">
			<?php $this->load->view('home/advance-filter');?>
                 <div class="col-lg-9 col-md-8 px-md-5">
	                <div class="" id='postsList'> </div>
	            </div>
	        </div>
	       <div id='pagination_room' class="text-center my-5 v-page"></div>
        </div>
    </section>
</div>
	</form>