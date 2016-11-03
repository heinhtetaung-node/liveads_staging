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
</style>  
  

<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<br>
					<?php 
					foreach($ads as $a){ ?>
					<div class="col-xs-12">
						<div class="col-md-3">
							<?php echo $a['adsname']; ?>
							<br>
							<img style="width:80%" src="<?php echo base_url(); ?>app_liveads88/uploads/adscomponent/<?php echo $a['previewphoto_m']; ?>" />
						</div>
						<div class="col-md-3">
							<?php echo $a['description']; ?>
						</div>
						<div class="col-md-3">
							<?php echo $a['price_options']; ?>
						</div>
						<div class="col-md-3">
							<button class="btn btn-warning">Buy Ads</button>
						</div>
					</div>
					<?php
					} ?>
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