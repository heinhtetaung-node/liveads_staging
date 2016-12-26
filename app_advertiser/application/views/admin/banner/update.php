<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	

<style>
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
      }

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

     
      #result {
        margin-top: 10px;
        width: 100%;
		border:1px solid;
      }

      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
    
	input.cropit-image-input {
	  visibility: hidden;
	}
	
	/* Translucent background image */
	.cropit-preview-background {
	  opacity: .2;
	}
	
	input.cropit-image-zoom-input {
	  position: relative;
	}

	#image-cropper {
	  overflow: hidden;
	}
	
	#resized-image-wrapper img{
		border:1px solid #eee;
	}
	
	#resized-image-wrapper div{
		text-transform: capitalize;
		padding:10px;
		text-align: center;
	}

    </style>


<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Update Banner
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				 <?php echo $this->session->flashdata('msg'); ?>
                  <br>
				    <?php
					  //flash messages
					  if($this->session->flashdata('flash_message')){
						if($this->session->flashdata('flash_message') == 'updated')
						{
						  echo '<div class="alert alert-success">';
							echo '<a class="close" data-dismiss="alert">×</a>';
							echo 'Updated with success.';
						  echo '</div>';       
						}else{
						  echo '<div class="alert alert-error">';
							echo '<a class="close" data-dismiss="alert">×</a>';
							echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
						  echo '</div>';          
						}
					  }
					  ?>
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>banner/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
										
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="banner_name" value="<?php echo $banner->banner_name; ?>">                     
					  <?php echo form_error('banner_name');?> 
					</div>
					 </div>
					 
					 
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Banner Image Link To <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="banner_linkto" class="form-control col-md-7 col-xs-12" id="banner_linkto">
							<option value="website" <?php echo ($banner->banner_linkto=="website" ? 'selected="selected"' : ''); ?> >Website</option>
							<option value="customer"  <?php echo ($banner->banner_linkto=="customer" ? 'selected="selected"' : ''); ?>>Customer Shop</option>
							<option value="email"  <?php echo ($banner->banner_linkto=="email" ? 'selected="selected"' : ''); ?>>Email</option>
						</select>
					  <?php echo form_error('banner_linkto');?> 
					</div>
					 
                    </div> 
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Website Link
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="banner_link" name="banner_link" value="<?php echo $banner->banner_link; ?>">
					   <?php echo form_error('banner_link');?> 
					  </div>
                    </div>
					
					<div class="form-group">
						  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer 
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer" value="<?php echo $banner->cu_name; ?>">                     
							<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $banner->customer_id; ?>" />
						   <?php echo form_error('customer_id');?> 
						  
						</div>
					 
					</div>
					
					<div class="form-group">
                      <label for="banner_email" class="control-label col-md-3 col-sm-3 col-xs-12">Email
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="banner_email" name="banner_email" value="<?php echo $banner->banner_email; ?>">
					  <?php echo form_error('banner_email');?> 
					  </div>
                    </div>
									
					<?php
					//Old one - backup - before crop-features
					
					/*
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="banner_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output" height="100" src="<?php echo base_url()."uploads/banner/".$banner->banner_image_name; ?>"/>
						<div id="file_error"></div>
						 </div>
                    </div>
					<input type="hidden" name="old_image" value="<?php echo $banner->banner_image_name; ?>">
					<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"></span></label>
						  <div class="col-md-8 col-sm-8 col-xs-12">
					<label class="checkbox-inline"> <input type="checkbox" name="home_top" value="1" <?php echo ($banner->home_top == 1)? "checked":"";  ?> id="inlineCheckbox3"> Home First </label>
					<label class="checkbox-inline"> <input type="checkbox" name="home_bottom"  value="1" id="inlineCheckbox3"  <?php echo ($banner->home_bottom == 1)? "checked":"";  ?> > Home Second </label>
					<label class="checkbox-inline"> <input type="checkbox" name="deal"  value="1" id="inlineCheckbox3"  <?php echo ($banner->deal == 1)? "checked":"";  ?> > Deal </label>
					<label class="checkbox-inline"> <input type="checkbox" name="coupon"  value="1" id="inlineCheckbox3"  <?php echo ($banner->coupon == 1)? "checked":"";  ?> > Coupon </label>
					<label class="checkbox-inline"> <input type="checkbox" name="promotion"  value="1" id="inlineCheckbox3"  <?php echo ($banner->promotion == 1)? "checked":"";  ?> > Promotion </label>
					<label class="checkbox-inline"> <input type="checkbox" name="event"  value="1" id="inlineCheckbox3"  <?php echo  ($banner->event == 1)? "checked":"";  ?> > Event </label>
					<label class="checkbox-inline"> <input type="checkbox" name="job"  value="1" id="inlineCheckbox3"  <?php echo ($banner->job == 1)? "checked":"";  ?> > Job </label>
					</div>
					 </div>	
					 
					 */ ?>
					 
					 
					 
					 <div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="banner_image" size="20" accept="image/*" id="file_select"/>
						<img id="user_input_image_display" height="100" />

						<div id="file_error"></div>
						 <?php echo form_error('banner_image');?> 
						 </div>
                    </div>
					
					<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"></span></label>
						  <div class="col-md-8 col-sm-8 col-xs-12">
					<label class="checkbox-inline"> <input type="checkbox" name="home_top" value="1" id="check_home_first" class="banner_display_status" <?php echo ($banner->home_top == 1)? "checked":"disabled";  ?> > Home First </label>
					<label class="checkbox-inline"> <input type="checkbox" name="home_bottom"  value="1" id="check_home_second" class="banner_display_status" <?php echo ($banner->home_bottom == 1)? "checked":"disabled";  ?> > Home Second </label>
					<label class="checkbox-inline"> <input type="checkbox" name="deal"  value="1" id="check_deal" class="banner_display_status" <?php echo ($banner->deal == 1)? "checked":"disabled";  ?> > Deal </label>
					<label class="checkbox-inline"> <input type="checkbox" name="coupon"  value="1" id="check_coupon" class="banner_display_status" <?php echo ($banner->coupon == 1)? "checked":"disabled";  ?> > Coupon </label>
					<label class="checkbox-inline"> <input type="checkbox" name="promotion"  value="1" id="check_promotion" class="banner_display_status" <?php echo ($banner->promotion == 1)? "checked":"disabled";  ?> > Promotion </label>
					<label class="checkbox-inline"> <input type="checkbox" name="event"  value="1" id="check_event" class="banner_display_status" <?php echo ($banner->event == 1)? "checked":"disabled";  ?> > Event </label>
					<label class="checkbox-inline"> <input type="checkbox" name="job"  value="1" id="check_job" class="banner_display_status" <?php echo ($banner->job == 1)? "checked":"disabled";  ?> > Job </label>
					</div>
					 </div>
					 
					<div class="form-group"> 
					<input type="hidden" id="img-data-check_home_first" name="check_home_first" class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_home_second" name="check_home_second"  class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_deal" name="check_deal"  class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_coupon" name="check_coupon"  class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_promotion" name="check_promotion"  class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_event" name="check_event"  class="hidden-output-image-data" /> 
					<input type="hidden" id="img-data-check_job" name="check_job"  class="hidden-output-image-data" /> 
					
					<input type="hidden" id ="temp_check_box_id" name="temp_check_box_id" /> 
					
					
					<input type="hidden" id ="edit_image_status" name="edit_image_status" value="0"/> 
					</div>

					<div class="form-group">
						<label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div id="resized-image-wrapper">
								<?php
									if($banner->home_top == 1){
										echo '<div id="user_resize_image_check_home_first" ><img src="'.base_url().'uploads/banner/'.$banner->bi_home_first_url.'" height="100" ><br> Home First </div>';
									}
									
									if($banner->home_bottom == 1){
										echo '<div id="user_resize_image_check_home_second" ><img src="'.base_url().'uploads/banner/'.$banner->bi_home_second_url.'" height="100" ><br> Home Second </div>';
									}
									
									if($banner->deal == 1){
										echo '<div id="user_resize_image_check_deal" ><img src="'.base_url().'uploads/banner/'.$banner->bi_deal_url.'" height="100" ><br> Deal </div>';
									}
									
									if($banner->coupon == 1){
										echo '<div id="user_resize_image_check_coupon" ><img src="'.base_url().'uploads/banner/'.$banner->bi_coupon_url.'" height="100" ><br> Coupon </div>';
									}
									
									if($banner->promotion == 1){
										echo '<div id="user_resize_image_check_promotion" ><img src="'.base_url().'uploads/banner/'.$banner->bi_promotion_url.'" height="100" ><br> Promotion </div>';
									}
									
									if($banner->event == 1){
										echo '<div id="user_resize_image_check_event" ><img src="'.base_url().'uploads/banner/'.$banner->bi_event_url.'" height="100" ><br> Event </div>';
									}
									
									if($banner->job == 1){
										echo '<div id="user_resize_image_check_job" ><img src="'.base_url().'uploads/banner/'.$banner->bi_job_url.'" height="100" ><br> Job </div>';
									}
								?>
							</div>
						</div>
					</div>
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>banner" class="btn btn-primary">Back to List</a>
					<input class="btn btn-success" type="submit" value="Submit" id="banner-submit">
					</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


 <div id="dialog-1" style="display:none"></div>
 
 <div id="image-dialog-form" title="Resize Image">
	<form action="#" id="submit-image-form">
	  <div class="image-editor">
		<div class="cropit-preview"> </div>
		
		
		<div class="controls-wrapper">
			<div class="">
				<i class="fa fa-rotate-left rotate-ccw-btn" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
				<i class="fa fa-rotate-right rotate-cw-btn" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
		
			<i class="fa fa-backward" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
			 <input type="range" class="cropit-image-zoom-input" style="display: inline-block; width: 80%;">
			<i class="fa fa-forward" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
			</div>
		</div>		
		<!-- <input type="file" class="cropit-image-input" -->
	  </div>
	</form>
</div>
 
 
 
 <script>
  $( function() {
	var dialog;
	
	$("#file_select").change(function (e) {
		
		var ext = $('#file_select').val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			$("#dialog-1").html("Invalid File Type. <br /> Allow JPG, JPGE, PNG and GIF format only.");
			$("#dialog-1").dialog({
								  resizable: false,
								  height: "auto",
								  width: 300,
								  modal: true,
								  buttons: {
									Close: function() {
									  $( this ).dialog( "close" );
									}
								  }
								});
		}else{
			if (window.File && window.FileReader && window.FileList && window.Blob) {
				var output = document.getElementById('user_input_image_display');
				var reader = new FileReader();
				reader.onload = function(){
				  var output = document.getElementById('user_input_image_display');
				  output.src = reader.result;
				};
				reader.readAsDataURL(e.target.files[0]);
				
				
				//if images is change, clear all checkbox and remove all image data if exists
				
				$('.banner_display_status').attr('checked', false);
				$('.banner_display_status').attr('disabled', false);
				$('.hidden-output-image-data').val('');
				$('#edit_image_status').val('1');
				$('#resized-image-wrapper').html('');
				
				
			}else{
				$("#dialog-1").html("The File APIs are not fully supported in this browser.");
				$("#dialog-1").dialog({
									  resizable: false,
									  height: "auto",
									  width: 300,
									  modal: true,
									  buttons: {
										Close: function() {
										  $( this ).dialog( "close" );
										}
									  }
									});
				return false;
			}
		}
		
	});

	$(".banner_display_status").change(function(e){
		
			if($('#user_input_image_display').attr('src') != null){
				if($(this).is(':checked')){
				
					var get_current_checkbox_id = $(this).attr('id');
					
					$('#temp_check_box_id').val(get_current_checkbox_id);
					$('.image-editor').cropit('imageSrc', $('#user_input_image_display').attr('src'));
					
					//set crop size for each category
					if(get_current_checkbox_id == 'check_home_first'){
						$('.image-editor').cropit('previewSize', { width: 640, height: 270 });
					}else if(get_current_checkbox_id == 'check_home_second'){
						$('.image-editor').cropit('previewSize', { width: 640, height: 150 });
					}else{
						$('.image-editor').cropit('previewSize', { width: 1200, height: 375 });
					}
					
					
					dialog.dialog( "open" );
					
				}else{
					var get_current_checkbox_id = $(this).attr('id');
					
					$( "#user_resize_image_"+get_current_checkbox_id ).remove();
				
					$('#img-data-'+get_current_checkbox_id).val('');
				}
			}else{
				//ignore resizing image	
			}
	});
	
	dialog = $( "#image-dialog-form" ).dialog({
		autoOpen: false,
		resizable: false,
		width: 680,
		height:600,
		modal: true,
		buttons: {
			"Resize Image": resizeImage,
			Cancel: function() {
			dialog.dialog( "close" );
			}
		},
		close: function() {
		  
			var get_current_checkbox_id = $('#temp_check_box_id').val();
			if ( $('#img-data-'+get_current_checkbox_id).val() == ""){
				$('#'+get_current_checkbox_id).attr('checked', false);
			} 
		  
			$('#temp_check_box_id').val('');
		}
	});

	$('.image-editor').cropit(
	{ 
		//imageState: { src: ''},
		width:640,
		height:480,
		smallImage: 'allow',
		imageBackground: true,
		imageBackgroundBorderWidth: 15,
		minZoom: 'fill',
		maxZoom:5,
		freeMove :false
		}
	);

	// Handle rotation
	$('.rotate-cw-btn').click(function() {
		$('.image-editor').cropit('rotateCW');
	});

	$('.rotate-ccw-btn').click(function() {
		$('.image-editor').cropit('rotateCW');
	});
		
	function resizeImage() {
    
        var imageData = $('.image-editor').cropit('export',{
															  type: 'image/jpeg',
															  quality: .9,
															  originalSize: false,
															  fillBg:'#fff'
															  }
													);
		
		var get_current_checkbox_id = $('#temp_check_box_id').val();
		
        $('#img-data-'+get_current_checkbox_id).val(imageData);
		
		var htmlImageData = '<div id="user_resize_image_'+get_current_checkbox_id+'" ><img src="'+imageData+'" height="100" ><br>'+ (get_current_checkbox_id.substr(6)).replace("_", " ") +'</div>';
		$('#resized-image-wrapper').append(htmlImageData);
          
		$('#temp_check_box_id').val('');
		  
		dialog.dialog( "close" );
        return false;
    }
	
	
	$('#banner-submit').click(function(){
		
		var has_error = false;
		var dialog_message = "";
		
		
		if($("#customer").val()==""){
			$("#customer_id").val('');
		}
		
		if($('#name').val()==""){
			dialog_message = "Name required.";
			has_error =  true;
		}else if($("#data_sp_image").val() == ""){
			dialog_message = "Image required.";
			has_error =  true;
		}else if($('#banner_linkto').val() == "website"){
			if($('#banner_link').val() == ""){
				has_error = true;
				dialog_message = 'Please fill Website address for link';
			}
		}else if($('#banner_linkto').val() == "email"){
			if($('#banner_email').val() == ""){
				has_error = true;
				dialog_message = 'Please fill email address for link';
			}
		}else if($('#banner_linkto').val() == "customer"){
			if($("#customer_id").val() == ""){
				has_error = true;
				dialog_message = 'Please Select Customer for link';
			}
		}
		
		
		if(has_error){
			$("#dialog-1").html(dialog_message);
			$("#dialog-1").dialog({
								  resizable: false,
								  height: "auto",
								  width: 300,
								  modal: true,
								  buttons: {
									Close: function() {
									  $( this ).dialog( "close" );
									}
								  }
								});
		   
		   return false;
		}else{
			if($(".banner_display_status:checkbox:checked").length > 0){
			   return true;
			}else {
			   
			   $("#dialog-1").html("Check one of the Status checkbox for Banner image.");
				$("#dialog-1").dialog({
									  resizable: false,
									  height: "auto",
									  width: 300,
									  modal: true,
									  buttons: {
										Close: function() {
										  $( this ).dialog( "close" );
										}
									  }
									});
			   
			   return false;
			}
		}
		
	});
		
	});
	
 
</script>

<script>

  $(function(){
	   $("#customer").autocomplete({
	 source: function (request, response) {
		$.ajax({
			url: "<?php echo base_url();?>customer/getCustomer",
			dataType: "json",
			type: "GET",
			data: {
				term: request.term
			},
			success: function(data) {
				response($.map(data, function(item) {
					return {
						label: item.label,
						value: item.value,
						id: item.id
					};
				}));
			},
			error: function(xhr) {
				alert("please select customer");
			}
		});
	},
	focus: function( product, ui ) {
	   $( "#customer" ).val( ui.item.label );
		return false;
	  },
	select: function(product, ui) {
	  $( "#customer_id" ).val( ui.item.id );
	  return false;
	}
});
});
</script>