<?php $url= explode('/',$_SERVER['REQUEST_URI']);?>
<div class="bg-primary pb-5">
    <div class="container-fluid">
        <footer class="footer pl-4">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2021 <span class="font-weight-bold ml-1" ><?php echo SiteTitle;?></span>
                </div>
        </footer>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
		<?php /*
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
		<!-- Optional JS -->
		<script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
		*/ ?>
  	<?php if(in_array('hotels',$url) || in_array('rooms',$url) || in_array('tents',$url) || in_array('cottages',$url) 
		|| in_array('campings',$url)  || in_array('services',$url) || in_array('category',$url)) { ?>
  <!-- Data Table ---->
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
	  
  <!-- End Data Table ---->
  <?php } ?>
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
 
  <!-- Argon JS -->
	<script src="<?php echo base_url(); ?>assets/js/argon.min5438.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/loading/loading.css">
	<script src="<?php echo base_url(); ?>assets/js/loading/loading.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
	
	<?php if(in_array('hotels',$url) || in_array('rooms',$url) || in_array('tents',$url)  || in_array('cottages',$url)  || in_array('campings',$url) || in_array('room-gallery',$url) || in_array('tent-gallery',$url)  || in_array('cottage-gallery',$url)  || in_array('camping-gallery',$url) || in_array('services',$url) || in_array('category',$url) || in_array('banner',$url)) { ?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php } ?>
	<?php if(in_array('create-room',$url) || in_array('edit-room',$url) ||  in_array('create-tent',$url) || in_array('edit-tent',$url) ||  in_array('create-cottage',$url) || in_array('edit-cottage',$url) ||  in_array('create-camping',$url) || in_array('edit-camping',$url) ||  in_array('create-service',$url) || in_array('edit-service',$url)) { ?>
	<script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
	<script>CKEDITOR.replace('description');</script>
	<?php } ?>
</body>
</html>