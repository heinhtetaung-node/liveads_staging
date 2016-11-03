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
                <div class="x_content">
				 <?php if ($this->session->flashdata('msg') != null) {?>
				  <div class="alert alert-success"> <?php echo $this->session->flashdata('msg'); ?></div>
				<?php } ?>
                  <br>
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<h3>Advertise With Us</h3>
						<p>Please register your interest below to advertise with us. We will contact you as soon as possible!</p>
						<p>My Live is one of the Malaysia's largest online marketplace, to become Asia's leading online marketplace. MY Live provides a powerful online marketplace platform that allows its buyer enjoy highly secure and convenient shopping experience. Our vision is to bring together diverse customers and merchants worldwide and improve life everyday, everywhere. We will strive to provide enjoyable and great shopping experience.
						</p>
					</div>
				  
                  <form name="data_form" method="POST" action="<?php echo base_url(); ?>advertise/signup" id="customer_form" enctype="multipart/form-data">
					
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        
                      <input type="text" placeholder="Name" id="cu_name" class="form-control has-feedback-left" name="cu_name" value="<?php echo set_value('cu_name'); ?>">
                    
                      <span aria-hidden="true" class="fa fa-user form-control-feedback left"><font color="red">*</font></span>
					  <?php echo form_error('cu_name');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Email" id="cu_email" class="form-control has-feedback-left" name="cu_email" value="<?php echo set_value('cu_email'); ?>">
                      <span aria-hidden="true" class="fa fa-envelope form-control-feedback left"></span>
					  <?php echo form_error('cu_email');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Phone" id="cu_mobile" class="form-control has-feedback-left" name="cu_mobile" value="<?php echo set_value('cu_mobile'); ?>">
                      <span aria-hidden="true" class="fa fa-phone form-control-feedback left"><font color="red">*</font></span>
					  <?php echo form_error('cu_mobile');?> 
                    </div>
					
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <textarea rows="5" placeholder="Message" id="message" class="form-control has-feedback-left" name="message"></textarea>
                      <span aria-hidden="true" class="fa form-control-feedback left"></span>
					  
                    </div>
					
					
     <!-- js for the add files area /-->
				<div style="clear:both;"></div>
				<div class="pull-right">
					<button class="btn btn-success" id="data_upload" >Submit</button>
					</div>	
                </div>
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