<section class="page_body notification">
        <div class="container">
            <div class="row">
             <div class="col-lg-12 col-md-12">
                   <div class="container-fluid">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="py-4">
              <table  id="myTable">
                <thead class="thead-light">
                  <tr>
                   <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
			     <?php foreach($bookmark as $bookmark){?>
				 <tr>
				<?php if($bookmark['role']==1) {?>
				 <td><a href="<?php echo base_url()?>view-investor/<?php echo base64_encode($bookmark['to_id'])?>"><?php if(!empty($bookmark['field_7'])) { echo $bookmark['field_7']; }?> 
				 looking to 							
				 <?php if(!empty($bookmark['interested_in'])) { 							
							if($bookmark['interested_in']==1) { echo "Acquiring / Buying a Business";} 							
							if($bookmark['interested_in']==2) { echo "Investing in a Business";} 							
							if($bookmark['interested_in']==3) { echo "Lending to a Business";}							
							}?> in <?php if(!empty($bookmark['field_2'])) {  
							$businessindustry= unserialize($bookmark['field_2']);							  
							echo implode(',',$businessindustry);							
							}?></a></td>
				<?php } ?>
				<?php if($bookmark['role']==2) {?>
				 <td><a href="<?php echo base_url()?>view-buyer/<?php echo base64_encode($bookmark['to_id'])?>"><?php if(!empty($bookmark['field_7'])) { echo $bookmark['field_7']; }?> 
				 looking to 							
				 <?php if(!empty($bookmark['interested_in'])) { 							
							if($bookmark['interested_in']==1) { echo "Acquiring / Buying a Business";} 							
							if($bookmark['interested_in']==2) { echo "Investing in a Business";} 							
							if($bookmark['interested_in']==3) { echo "Lending to a Business";}							
							}?> in <?php if(!empty($bookmark['field_2'])) {  
							$businessindustry= unserialize($bookmark['field_2']);							  
							echo implode(',',$businessindustry);							
							}?></a></td>
				<?php } ?>					
				<?php if($bookmark['role']==3) {?>		
					<td><a href="<?php echo base_url()?>view-profile/<?php echo base64_encode($bookmark['to_id'])?>"><?php if(!empty($bookmark['field_4'])) {  $businessindustry= unserialize($bookmark['field_4']);
							  echo implode(',',$businessindustry);
							}?> for  <?php 
							if(!empty($bookmark['interested_in'])) { 
							if($bookmark['interested_in']==1) { echo "Full sale of business";} 
							if($bookmark['interested_in']==2) { echo "Partial stake sale of business/investment";} 
							if($bookmark['interested_in']==3) { echo "Loan for business";}
							}?> in <?php if(!empty($bookmark['field_5'])) { echo $bookmark['field_5']; }?></a></td>
					<?php } ?>			
					<?php if($bookmark['role']==4) {?>
				 <td><a href="<?php echo base_url()?>view-advisory/<?php echo base64_encode($bookmark['to_id'])?>"><?php 
						if(!empty($bookmark['field_1'])) { 
							if($bookmark['field_1']==1) { 
								$field_1= "Advisory";
							} 
							if($bookmark['field_1']==2) { 
								$field_1= "Banker";
							} 
							if($bookmark['field_1']==3) { 
								$field_1= "Auditor";
							}
							if($bookmark['field_1']==4) { 
								$field_1= "Lawyer";
							}
							if($bookmark['field_1']==5) { 
								$field_1= "Consultant";
							}
							if($bookmark['field_1']==6) { 
								$field_1= "Broker";
							}
				}else{
					$field_1 = '';
				}
						
				?><?php if(!empty($bookmark['field_7'])) { echo $bookmark['field_7'];}?>,<?php if(!empty($field_1)) { echo $field_1; }?> in <?php if(!empty($bookmark['field_5'])) { echo $bookmark['field_5'];}?> </a>	</td>
				<?php } ?>		
				  <td><?php if(!empty($bookmark['created_date'])) { echo  $bookmark['created_date'];}?></td>
				 <td><button class="user_btn ml-auto mt-3 delete-bookmark" rel="<?php echo  base64_encode($bookmark['id']);?>">Delete</button></td>
				 
				 </tr>
				 <?php } ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>

                </div>
            </div>
        </div>
    </section>
