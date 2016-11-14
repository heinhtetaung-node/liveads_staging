<link href="<?php echo base_url();?>assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/jquery.tag-editor.css" rel="stylesheet">


<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    mode : "specific_textareas",
    editor_selector : "mceEditor",
    });
</script>



<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">	

<style>
.has-feedback .form-control-feedback{
	top: 8px;
    width: 63px;
}
.title{
	font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    color: #434571;
}
.price{
	font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
}
hr{
	margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #ddd;
}
</style>  
  

<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<br>
				
				<div class="x_panel">
				<?php echo $this->session->flashdata('paymentmsg'); ?>
				<br>
				<table class="table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Unit Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$cart=$this->session->userdata('cart');
					if($this->session->flashdata('success')==true){
						$this->session->unset_userdata('cart');
					}
					$total=0;
					for($i=0;$i<sizeof($cart);$i++){
						?>
						<tr>
							<td><?php echo $cart[$i]['ads']->adsname; ?></td>
							<td>
							<?php 
							$price=0;
							foreach($cart[$i]['adsprice'] as $p){
								if($p['price_id']==$cart[$i]['selectedpriceid']){
									$price=$p['price'];
									echo $price. " RM For ". $p['days']. " Days";
								}
							}
							?>
							</td>
							<td><?php echo $cart[$i]['qty']; ?></td>
							<td><?php echo $cart[$i]['qty']*$price; ?></td>
							<td><a href="<?php echo base_url(); ?>advertise/remove/<?php echo $i; ?>"><i class="fa fa-remove"></i><a/></a></td>
						</tr>
					<?php
					$total=$total+($cart[$i]['qty']*$price);
					} 
					$this->session->set_userdata('total', $total);
					?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="3">Total</th>
							<th><?php echo $total; ?></th>
							<td></td>
						</tr>
					</tfoot>
				</table>
				
				<br>
				<br>
				<?php if($this->session->flashdata('success')!=true){ ?>
				<a href="<?php echo base_url(); ?>advertise/paywithpaypal" ><input class="btn
				btn-success" type="button" name="checkout" value="Pay with Paypal"></a>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	$("#data_upload").click(function(e) {
		if ($("#cu_mobile").val() == '' || $("#cu_name").val() == '') {
			alert('Please fill in your name and mobile number');
			e.preventDefault();
		}
	});
});
</script>