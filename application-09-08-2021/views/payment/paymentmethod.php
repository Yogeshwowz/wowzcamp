<section class="pricing-table">
   <div class="container">
  
   <div class="row justify-content-md-center">
      <div class="col-md-6 col-lg-4 py-3 py-md-4">
         <div class="item">
            <div class="heading">
               <h3>Debit/Credit Card</h3>
            </div>
         
         </div>
      </div>
      <div class="col-md-6 col-lg-4 py-3 py-md-4 hide">
        
      </div>
   </div>
   <div class="paymethod" style="display:block;" id="stripepaymethod">
     
      <div class="row">
         <div class="col-md-12">
            <div class="offset-md-2 col-md-8 float-left-cls">
               <form role="form" action="<?php echo base_url(); ?>stripePost" method="post" class="require-validation"
                  data-cc-on-file="false"
                  data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                  id="payment-form">
                  <div class='form-row row'>
                    
                     <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Name on Card</label> <input
                           class='form-control' id="userName" name="userName" size='100' type='text'  maxlength="30" required>
                     </div>
                  </div>
                   <div class='form-row row'>
                     <div class='col-xs-12 col-md-6 form-group card1 required'>
                        <label class='control-label'>Email</label> <input
                           autocomplete='off' class='form-control' type='email'  value="<?php if(!empty($this->session->userdata('email'))) { echo $this->session->userdata('email'); }?>"  name="emailId" required>
                     </div>
                  
                     <div class='col-xs-12 col-md-6 form-group card1 required'>
                        <label class='control-label'>Card Number</label> <input
                           autocomplete='off' class='form-control card-number' size='20'
                           type='text'  maxlength="16" required>
                     </div>
                  </div>
                  <div class='form-row row'>
                     <div class='col-xs-12 col-md-4 form-group expiration required'>
                        <label class='control-label'>Expiration Month</label> <input
                           class='form-control card-expiry-month' placeholder='MM' size='2'
                           type='text' maxlength="2" required>
                     </div>
                     <div class='col-xs-12 col-md-4 form-group expiration required'>
                        <label class='control-label'>Expiration Year</label> <input
                           class='form-control card-expiry-year' placeholder='YYYY' size='4'
                           type='text' maxlength="4" required>
                     </div>
                     <div class='col-xs-12 col-md-4 form-group cvc required'>
                        <label class='control-label'>CVC</label> <input autocomplete='off'
                           class='form-control card-cvc' placeholder='ex. 311' size='4'
                           type='text' required>
                     </div>
                  </div>
                  <div class='form-row row'>
                     
                    
                     <div class='col-xs-12 col-md-6 form-group required'>
                        <label class='control-label'>Amount </label>
						<span class="cur-price">₹<?php if(!empty($result['amount'])) { echo $result['amount'];}?> </span>
						
						   
						   <input  required
                           autocomplete='off' id="amount"  name="amount" class='form-control amount1' value='<?php if(!empty($result['amount'])) { echo $result['amount'];}?>' type='hidden' readonly >
						</div>
                  </div>
                   
                  <div class='form-row row'>
                     <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'>Please correct the errors and try
                           again.
                        </div>
                     </div>
                  </div>
                 
                  <div class="row m-0">
                     <div class="col-xs-12">
                        <button class="box2 btn-lg btn-block btn btn-success" type="submit">Pay Now</button>
                     </div>
                  </div>
               </form>
            </div>
            </div>
         </div>
      </div>
   </div>
   
   
   <!----- PayPal------ Div----->
   
   
   <div class="paymethod" style="display:none;" id="paypalpaymethod">
     
      <div class="row">
        <div class="col-md-12">
			<form role="form" action="<?php echo base_url(); ?>paypal/payment" method="post"  id="paypal-payment-form">
            <div class="offset-md-2 col-md-8 float-left-cls">
               <div class='form-row row'>
                     <div class='col-xs-12 col-md-6 form-group required'>
                        <label class='control-label'>Amount </label> 
						   <?php $plan= $this->uri->segment(2);
						  $planid = base64_decode($plan);
						  if($planid==1){$amount = 10;}
						  if($planid==2){$amount = 20;}
						  if($planid==3){$amount = 30;}
						?>
						<input  required
                           autocomplete='off' id="amount"  name="amount" class='form-control amount1' value='<?php echo $amount;?>' type='text' readonly >
						  <input id="buy_plan"  name="buy_plan" class='form-control' value='<?php echo $this->uri->segment(2);?>' type='hidden'>
                     </div>
                 </div>
            </div>
            
            </form>
        </div>
      </div>
   </div>
</section>
