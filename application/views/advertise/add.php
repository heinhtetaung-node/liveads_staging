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
  
  <?php /*
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr8TLj5RzabmwquQCtuH3CxvDz1dB0Kas&callback=initMap"></script>
  */?>
  

  <script src = "https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  

   <script>

		 function initialize(lat_data, long_data, zoom_data){
			 
            var mapOptions = {
                center: new google.maps.LatLng(lat_data, long_data),
                zoom: zoom_data,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        }

       google.maps.event.addDomListener(window, 'load', function(){ initialize(1.3455933, 103.822443, 12); });

    </script>


	<div class="container">
        <div class="row">
			<div id="content" class="col-sm-12">
			    
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				 <?php echo $this->session->flashdata('msg'); ?>
                  <br>
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<h3>Register Advertiser Account</h3>
						<p>If you already have an advertiser account with us, please login at the <a href="<?php echo base_url();?>customer/login">login page</a>.</p>
					</div>
				  
                  <form name="data_form" method="POST" action="<?php echo base_url(); ?>advertise/register" id="customer_form" enctype="multipart/form-data">
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
           
							<select name="category" class="form-control">
							<option value="">Select Category</option>
								<?php foreach($category as $c){ ?>
									<option value="<?php echo $c->id; ?>"  <?php echo  set_select('category', $c->id); ?> ><?php echo $c->name; ?></option>
								<?php } ?>
							</select>
						 <?php echo form_error('category');?> 

                    </div>
					<br>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Name" id="cu_name" class="form-control has-feedback-left" name="cu_name" value="<?php echo set_value('cu_name'); ?>">
                      <span aria-hidden="true" class="fa fa-user form-control-feedback left"></span>
					  <?php echo form_error('cu_name');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Email" id="cu_email" class="form-control has-feedback-left" name="cu_email" value="<?php echo set_value('cu_email'); ?>">
                      <span aria-hidden="true" class="fa fa-envelope form-control-feedback left"></span>
					  <?php echo form_error('cu_email');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Phone" id="cu_mobile" class="form-control has-feedback-left" name="cu_mobile" value="<?php echo set_value('cu_mobile'); ?>">
                      <span aria-hidden="true" class="fa fa-phone form-control-feedback left"></span>
					  <?php echo form_error('cu_mobile');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder='Street name,City state,Country' id="cu_address" class="form-control has-feedback-left" name="cu_address" value="<?php echo set_value('cu_address'); ?>">
                      <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
					   <?php echo form_error('cu_address');?> 
                    </div>				
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Postal" id="cu_postal" class="form-control has-feedback-left" name="cu_postal" value="<?php echo set_value('cu_postal'); ?>">
                      <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
					  <?php echo form_error('cu_postal');?> 
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Latitude" id="cu_lat" class="form-control has-feedback-left" name="cu_lat" value="<?php echo set_value('cu_lat'); ?>">
                      <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
					  <?php echo form_error('cu_lat');?> 
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Longitude" id="cu_long" class="form-control has-feedback-left" name="cu_long" value="<?php echo set_value('cu_long'); ?>">
                      <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
					  <?php echo form_error('cu_long');?> 
                    </div>
                    
                <!-- 
    <input type="hidden" name="cu_lat" id="cu_lat" value="<?php echo set_value('cu_lat'); ?>">
					<input type="hidden" name="cu_long" id="cu_long" value="<?php echo set_value('cu_long'); ?>">
					
 -->
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Website" id="cu_website" class="form-control has-feedback-left" name="cu_website" value="<?php echo set_value('cu_website'); ?>">
                      <span aria-hidden="true" class="fa fa-file-word-o form-control-feedback left"></span>
					  <?php echo form_error('cu_website');?> 
                    </div>
					
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="password" placeholder="Password" id="cu_password" class="form-control has-feedback-left" name="cu_password" value="">
                      <span aria-hidden="true" class="fa fa-lock form-control-feedback left"></span>
					  <?php echo form_error('cu_password');?> 
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="password" placeholder="Confirm Password" id="cu_password_confirm" class="form-control has-feedback-left" name="cu_password_confirm" value="">
                      <span aria-hidden="true" class="fa fa-lock form-control-feedback left"></span>
					  <?php echo form_error('cu_password_confirm');?> 
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Branch" id="cu_branch" class="form-control has-feedback-left" name="cu_branch" value="<?php echo set_value('cu_branch'); ?>">
                      <span aria-hidden="true" class="fa fa-file-word-o form-control-feedback left"></span>
					  <?php echo form_error('cu_branch');?> 
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" placeholder="Operating Hours" id="cu_hour" class="form-control has-feedback-left" name="cu_hour" value="<?php echo set_value('cu_hour'); ?>">
                      <span aria-hidden="true" class="fa fa-file-word-o form-control-feedback left"></span>
					  <?php echo form_error('cu_hour');?> 
                    </div>
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div id="map-canvas"  style="height:300px;"></div> 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Brand/Logo Image 
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					  <?php /*
						<input type="file" name="cu_logo" size="20" accept="image/*"  id="file_select_logo"/>
						<img id="output_logo"  height="100" />
						*/ ?>
						
						<input type="file" size="20" accept="image/*"  id="logo_image" class="file-upload-image" />
						<input type="hidden" id="data_logo_image" name="cu_logo" value="<?php echo set_value('cu_logo'); ?>" />
						<div id="display_logo_image">
						<?php
						if(!empty($logo_return) && $logo_return!=""){
							echo '<div id="resize_image_logo_image" ><img src="'. $logo_return .'" height="100" /></div>';
						}
						?>
						</div>
						
						
						
						 <?php echo form_error('cu_logo');?> 
					  </div>
                    </div>
					<div class="form-group"><div class="col-md-12 col-sm-12 col-xs-12"> &nbsp;</div> </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Company Image <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
						<?php /*
						<input type="file" name="cu_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output"  height="100" />
						*/ ?>
						
						<input type="file" size="20" accept="image/*"  id="company_image" class="file-upload-image " />
						<input type="hidden" id="data_company_image" name="cu_image" value="<?php echo set_value('cu_image'); ?>" />
						<div id="display_company_image">
						<?php
						if(!empty($company_return) && $company_return != ""){
							echo '<div id="resize_image_logo_image" ><img src="'.$company_return.'" height="100" /></div>';
						}
						?>
						</div>
						
						 <?php echo form_error('cu_image');?> 
					  </div>
                    </div>
					<br>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group" >
					<label>Service Type</label><span class="required">*</span>
						<input type="text" placeholder="Service Type" id="cu_service_type" class="form-control" name="cu_service_type" value="<?php echo set_value('cu_service_type'); ?>">
						
						<?php echo form_error('cu_service_type');?> 
                    </div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" >
					<label>Tags</label><span class="required">*</span>
                      <textarea id="demo2" class="tag-editor-hidden-src"></textarea>
						<input type="hidden" name="cu_tag" id="cu_tag" value="<?php echo set_value('cu_tag'); ?>">
				
						<?php echo form_error('cu_tag');?>
                    </div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" >
					<label>Description</label>
                      <textarea name="cu_description" class="mceEditor"><?php echo set_value('cu_description'); ?></textarea>
					
					  <?php echo form_error('cu_description');?> 
                    </div>
					
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Image <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
						<input type="file" name="cu_shop_image" size="20" accept="image/*"  id="shop_image" class="file-upload-image" />
						<div id="display_shop_image">
						<?php
						if(!empty($shop_image_return) && count($shop_image_return) > 0 ){
							for($i=0; $i < count($shop_image_return); $i++){
								$random_number = ((float)rand()/(float)getrandmax()) * (999999 - 111111) + 111111;
								$random_number = str_replace('.','-',$random_number);
								$n		   	   = time();
					
								echo '<div id="' . $random_number . '-' . $n .'" class="form-group" style="border-bottom:1px solid #ccc;padding:10px;">'.
								'<div class="col-md-6 col-sm-6 col-xs-12">'.
								'<input type="hidden" name="data_shop_image[]" value="'.$shop_image_return[$i].'" />'.
								'<img src="'.$shop_image_return[$i].'" height="80" /></div>'.
								'<div class="col-md-3 col-sm-3 col-xs-12">'.
								'Sort Order<input type="text" name="image_sort_order[]" maxlength="3" placeholder="Type Sort Order" value="'.$image_sort_order_return[$i].'"/>'.
								'</div>'.
								'<div class="col-md-3 col-sm-3 col-xs-12">'.
								'<button data-id="' . $random_number . '-' . $n . '" class="btn btn-danger delete_shop_image" type="button" style="margin-top:20px;">Delete</button>'.
								'</div>'.
								'<div style="clear:both;"></div></div>';	
							}
						}
						?>
						</div>
					  </div>
                    </div>
					<br>
					
     <!-- js for the add files area /-->
				<div style="clear:both;"></div>
				<div class="pull-right">
					<a href="<?php echo base_url(); ?>customer/login" class="btn btn-primary">Login</a>
					<button class="btn btn-success" id="data_upload" >Submit</button>
					</div>	
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
<div id="dialog-1" style="display:none">File size is greater than 2MB</div>





<?php
//////////////////////////////////////////////
//START - Do changes here fo cropping image///
?>
<div id="image-dialog-form" title="Resize Image">
	<form action="#" id="submit-image-form">
	  <div class="image-editor">
		<div class="cropit-preview"> </div>
		
		<div class="controls-wrapper">
			<div class="" style="margin-top:20px;">
				<i class="fa fa-rotate-left rotate-ccw-btn" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
				<i class="fa fa-rotate-right rotate-cw-btn" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
		
			<i class="fa fa-backward" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
			 <input type="range" class="cropit-image-zoom-input" style="display: inline-block; width: 83%;">
			<i class="fa fa-forward" style="cursor:pointer;padding:5px;margin-top:5px;"></i>
			</div>
		</div>		
	  </div>
	</form>
</div>
<input type="hidden" id="temp_current_image_upload" value="" />



<script>
  $( function() {
	var dialog;
	
	$(".file-upload-image").change(function (e) {
		
		var ext = $(this).val().split('.').pop().toLowerCase();
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
				
				var reader = new FileReader();
				reader.onload = function(){
				  $('.image-editor').cropit('imageSrc', reader.result);
				};
				
				$('#temp_current_image_upload').val($(this).attr('id'));
				dialog.dialog( "open" );
				
				reader.readAsDataURL(e.target.files[0]);
				
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
			
			if($('#data_' + $('#temp_current_image_upload').val()).val() ==""){
				$('#'+$('#temp_current_image_upload').val()).val('');
			}
			
		  $('#temp_current_image_upload').val('');
		}
	});

	$('.image-editor').cropit(
	{ 
		//imageState: { src: ''},
		width:640,
		height:400,
		smallImage: 'allow',
		imageBackground: true,
		imageBackgroundBorderWidth: 15,
		minZoom: 'fit',
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
		
		if($('#temp_current_image_upload').val() == 'shop_image'){
			var d = new Date();
			var n = d.getTime();
			var random_number = Math.random() * (999999 - 111111) + 111111;
				random_number = String(random_number).replace('.','-');
			//$('#data_' + $('#temp_current_image_upload').val()).val(imageData);
			var htmlImageData = '<div id="' + random_number + '-'+ n +'" class="form-group" style="border-bottom:1px solid #ccc;padding:10px;">';
				htmlImageData+= '<div class="col-md-6 col-sm-6 col-xs-12">';
				htmlImageData+= '<input type="hidden" name="data_shop_image[]" value="'+imageData+'" />';
				htmlImageData+= '<img src="'+imageData+'" height="80" /></div>';
				htmlImageData+= '<div class="col-md-3 col-sm-3 col-xs-12">';
				htmlImageData+= 'Sort Order<input type="text" name="image_sort_order[]" value="" maxlength="3" placeholder="Type Sort Order"/>';
				htmlImageData+= '</div>';
				htmlImageData+= '<div class="col-md-3 col-sm-3 col-xs-12">';
				htmlImageData+= '<button data-id="' + random_number + '-'+ n +'" class="btn btn-danger delete_shop_image" type="button" style="margin-top:20px;">Delete</button>';
				htmlImageData+= '</div>';
				htmlImageData+= '<div style="clear:both;"></div></div>';
			$('#display_' + $('#temp_current_image_upload').val()).append(htmlImageData);
		}else if($('#temp_current_image_upload').val() == 'logo_image'){
			$('#data_' + $('#temp_current_image_upload').val()).val(imageData);
			var htmlImageData = '<div id="resize_image_'+$('#temp_current_image_upload').val()+'" ><img src="'+imageData+'" height="100" />';
				htmlImageData+= '<button id="remove-logo-image" class="btn btn-danger" type="button" style="margin-top:20px;">Delete</button>';
				htmlImageData+= '</div>';
			$('#display_' + $('#temp_current_image_upload').val()).html(htmlImageData);
		}else{
			$('#data_' + $('#temp_current_image_upload').val()).val(imageData);
			var htmlImageData = '<div id="resize_image_'+$('#temp_current_image_upload').val()+'" ><img src="'+imageData+'" height="100" /></div>';
			$('#display_' + $('#temp_current_image_upload').val()).html(htmlImageData);
		}
		  
		$('#temp_current_image_upload').val('');
		dialog.dialog( "close" );
		
        return false;
    }
	
	$('#display_logo_image').on( "click", '#remove-logo-image', function() {
		
		$('#data_logo_image').val('');
		$('#logo_image').val('');
		$('#display_logo_image').html('');
	});
	
	
	$('#display_shop_image').on( "click", '.delete_shop_image', function() {
		var delete_row_id = $(this).attr('data-id');
		
		$('#'+delete_row_id).remove();
	});
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		var has_error = false;
		var dialog_message = "";
		if($("#data_company_image").val() == ""){
			dialog_message = "Company Image required.";
			has_error =  true;
		}
		
		//check all sort order value exists or not
		$('input[name^="image_sort_order"]').each(function() {
			if ($(this).val() == ""){
				dialog_message = "Please add all sort order for Shop image.";
				has_error =  true;
			
			}else if (!/^\d+$/.test($(this).val())) {
				dialog_message = "Please fill positive number value for sort order.";
				has_error =  true;
			
			}
		});
		
		
		
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
			$('form[name=data_form]').submit();
			/*
			$("#dialog-1").html("<p style='text-align:center;color:red;'><b>You added some images and it is need to upload first before submit the form. Are you sure want to submit the form without upload the image files ?</b></p>");
			$("#dialog-1").dialog({
								  resizable: false,
								  height: "auto",
								  width: 300,
								  modal: true,
								  buttons: {
									OK: function() {
									  $('form[name=data_form]').submit();
									  $( this ).dialog( "close" );
									},  
									Close: function() {
									  $( this ).dialog( "close" );
									  return false;
									}
								  }
								});
			
			
		}
		return false;
		*/
		}
	});
		
	});
	
 
</script>


<?php
//END - Do changes here fo cropping image///
////////////////////////////////////////////
?>


    <script src="<?php echo base_url();?>assets/js/jquery.caret.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.tag-editor.js"></script>

<script>
var tag_data = $('#cu_tag').val();
var tag_array = [];
	if(tag_data !=""){
		tag_array = tag_data.split(',');
	}
$('#demo2').tagEditor({
	initialTags: tag_array,
    autocomplete: {
        delay: 0, // show suggestions immediately
        position: { collision: 'flip' }, // automatic menu position up/down
        source: function (request, response) {
				$.ajax({
					url: "<?php echo base_url();?>customer/getTag",
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
						
					}
				});
			}
    },
    forceLowercase: false,	
    placeholder: 'Add tag..',
	onChange: function(field, editor, tags) {
		 $('#cu_tag').val(tags.length ? tags.join(',') : '');
		 /*
        $('#response').prepend(
            'Tags changed to: ' + (tags.length ? tags.join(', ') : '----') + '<hr>'
        );*/
    },
	
});


</script>

<script type="text/javascript">
	$("#cu_postal").blur(function(){

			var zipcode = $("#cu_postal").val();
			if(zipcode != "" && zipcode > 0 && (zipcode >>> 0 === parseFloat(zipcode))){				
				 $.ajax({
				   url : "http://maps.googleapis.com/maps/api/geocode/json?components=postal_code:"+zipcode+"&sensor=false",
				   method: "POST",
				   success:function(data){
					   if(data.status == 'OK'){
					   latitude = data.results[0].geometry.location.lat;
					   longitude= data.results[0].geometry.location.lng;
					   $("#cu_lat").val(latitude);
					   $("#cu_long").val(longitude);
					   initialize(latitude, longitude, 19);
					   }else{
						   bootbox.alert('not able to geocode postal code, please enter longitude and latitude manually');
					   }
				   }

				});
			}else{
				   bootbox.alert('not able to geocode postal code, please enter longitude and latitude manually');
			}
		});
	</script>
	
