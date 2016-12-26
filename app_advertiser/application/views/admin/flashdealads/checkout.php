<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Checkout Flash Deal Ads
                </h3>
            </div>
			
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
			
				
                  <?php if(!$this->cart->contents()):
							echo 'You don\'t have any items yet.';
						else:
						?>
						<?php echo form_open('flashdealads/checkout', 'class="form-data "'); ?>
						<h2>Customer Information</h2>
						<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Name
								</label>
								<label class="control-label col-md-9 col-sm-9 col-xs-12" for="title">
								<?php echo $customer->cu_name; ?> &nbsp;
								</label>
						</div>
						
						<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Email
								</label>
								<label class="control-label col-md-9 col-sm-9 col-xs-12" for="title">
								<?php echo $customer->cu_email; ?> &nbsp;
								</label>
						</div>
						
						<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Mobile
								</label>
								<label class="control-label col-md-9 col-sm-9 col-xs-12" for="title">
								<?php echo $customer->cu_mobile; ?> &nbsp;
								</label>
						</div>
						
						<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Address
								</label>
								<label class="control-label col-md-9 col-sm-9 col-xs-12" for="title">
								<?php echo $customer->cu_address; ?> &nbsp;
								</label>
						</div>
						
						<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Postal Code
								</label>
								<label class="control-label col-md-9 col-sm-9 col-xs-12" for="title">
								<?php echo $customer->cu_postal; ?> &nbsp;
								</label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-12 col-sm-12 col-xs-12" for="title">&nbsp;	</label>
						</div>
						
						
						<h2>Item Information</h2>
						  
							<table width="100%" cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
								<thead>
									<tr>
										<td>Name</td>
										<td>Description</td>
										<td>Price</td>
										<td>Qty</td>
										<td>Sub-Total</td>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach($this->cart->contents() as $items): ?>
									 
									<?php echo form_hidden('rowid[]', $items['rowid']); ?>
									<tr <?php if($i&1){ echo 'class="alt"'; }?>>
										<td><?php echo $items['name']; ?></td>
										<td><?php echo $items['duration']; ?></td>
										<td>$ <?php echo $this->cart->format_number($items['price']); ?></td>
										<td>
											<?php echo $items['qty']; ?>
										</td>
										 
										<td>$ <?php echo $this->cart->format_number($items['subtotal']); ?></td>
									</tr>
									 
									<?php $i++; ?>
									<?php endforeach; ?>
									 
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td><strong>Total</strong></td>
										<td>$ <?php echo $this->cart->format_number($this->cart->total()); ?></td>
									</tr>
								</tbody>
							</table>
							
							
							<h2>Payment Information</h2>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Pay with <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div class="radio">
										<label>
											<?php echo form_radio(array('name'=>'payment_method', 'id'=>'radio-payment_method-1', 'value'=>'paypal', 'checked'=>'checked')); ?>
											Paypal
										</label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label>
											<?php echo form_radio(array('name'=>'payment_method', 'id'=>'radio-payment_method-2', 'value'=>'offline_payment')); ?>
											Offline Payment
										</label>
									</div>
								</div>

							</div>
							
							<div class="pull-right">
							<a href="<?php echo base_url(); ?>flashdealads/purchase" class="btn btn-primary">Back</a>
							<input type="submit" class="btn btn-success" id="" value="Submit" />
							</div>	
												
							<?php 
							echo form_close(); 
							endif;
							?>
                </div>
              </div>
            </div>
			
          </div>
    </div>
</div>