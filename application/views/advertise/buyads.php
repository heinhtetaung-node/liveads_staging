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
				<div class="x_panel">
					<?php $string = str_replace(' ', '_', $ads->adsname); ?>
					<?php $para=array(
								'ads'=>$ads,
								'adsprice'=>$adsprice
							);
					?>
					<?php $this->load->view('advertise/adsforms/'.$string, $para); ?>
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