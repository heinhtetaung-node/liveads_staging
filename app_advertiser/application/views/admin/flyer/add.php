<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">	



<?php  $session_id = $this->session->userdata('admin_id'); ?>
<div class="right_col" role="main"> 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Flyer
                </h3>
            </div> 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				  <?php echo $this->session->flashdata('msg'); ?>
					 <div id="wizard">
							
						<form name="data_form" class="form-horizontal form-label-left" action="<?php echo base_url();?>shopflyer/add" method="POST" enctype="multipart/form-data" >
								
							<div class="form-group">
								  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
								  </label>
								  <div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer">                     
								  <?php echo form_error('customer_id');?> 
								</div>
							</div>
							
							<input type='hidden' name='customer_id' id='customer_id' />		
					
											
					
					
						<div class="form-group">
						  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Flyer Image <span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" name="flyer_image" size="20" accept="image/*"  id="flyer_image" class="file-upload-image" />
							<div id="display_flyer_image">
							<?php
							if(!empty($flyer_image_return) && count($flyer_image_return) > 0 ){
								foreach($flyer_image_return as $item){
									$random_number = ((float)rand()/(float)getrandmax()) * (999999 - 111111) + 111111;
									$random_number = str_replace('.','-',$random_number);
									$n		   	   = time();
						
									echo '<div id="' . $random_number . '-' . $n .'" class="form-group" style="border-bottom:1px solid #ccc;padding:10px;">'.
									'<div class="col-md-6 col-sm-6 col-xs-12">'.
									'<input type="hidden" name="data_flyer_image[]" value="'.$item.'" />'.
									'<img src="'.$item.'" height="80" /></div>'.
									'<button data-id="' . $random_number . '-' . $n . '" class="btn btn-danger delete_flyer_image" type="button" style="margin-top:20px;">Delete</button><div style="clear:both;"></div></div>';	
								}
							}
							?>
							</div>
						  </div>
						</div>
						<br>
					
					<div style="clear:both;"></div>
					<!---- end file upload --->
					 <div class="pull-right">
					<a href="<?php echo base_url(); ?>shopflyer" class="btn btn-primary">Back to List</a>
					<button class="btn btn-success" id="data_upload" >Submit</button>
					</div>
						</form>	
						
					</div>
					
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div id="dialog-1" style="display:none">File size is greater than 5MB</div>


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
		
		
		var d = new Date();
		var n = d.getTime();
		var random_number = Math.random() * (999999 - 111111) + 111111;
			random_number = String(random_number).replace('.','-');
		var htmlImageData = '<div id="' + random_number + '-'+ n +'" class="form-group" style="border-bottom:1px solid #ccc;padding:10px;">';
			htmlImageData+= '<div class="col-md-6 col-sm-6 col-xs-12">';
			htmlImageData+= '<input type="hidden" name="data_flyer_image[]" value="'+imageData+'" />';
			htmlImageData+= '<img src="'+imageData+'" height="80" /></div>';
			htmlImageData+= '<button data-id="' + random_number + '-'+ n +'" class="btn btn-danger delete_flyer_image" type="button" style="margin-top:20px;">Delete</button><div style="clear:both;"></div></div>';
		$('#display_flyer_image').append(htmlImageData);
		
		dialog.dialog( "close" );
		
        return false;
    }
	
	
	$('#display_flyer_image').on( "click", '.delete_flyer_image', function() {
		var delete_row_id = $(this).attr('data-id');
		
		$('#'+delete_row_id).remove();
	});
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		var has_error = false;
		var dialog_message = "";
		if($("#customer").val() == ""){
			dialog_message = "Please Select Customer.";
			has_error =  true;
		}
		if( $( "input[name='data_flyer_image[]']" ).length < 1 ){
			dialog_message = "Please add flyer image.";
			has_error =  true;
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
			$('form[name=data_form]').submit();
		}
	});
});
 
</script>


<?php
//END - Do changes here fo cropping image///
////////////////////////////////////////////
?>





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
				bootbox.alert("please select customer");
			}
		});
	},
	focus: function( event, ui ) {
	   $( "#customer" ).val( ui.item.label );
		return false;
	  },
	select: function(event, ui) {
	  $( "#customer_id" ).val( ui.item.id );
	  return false;
	}
});
});
</script>


<!-- The File Upload processing plugin -->
<script src="<?php echo base_url();?>upload/js/angular.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url();?>upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo base_url();?>upload/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo base_url();?>upload/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="<?php echo base_url();?>upload/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="<?php echo base_url();?>upload/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url();?>upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url();?>upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url();?>upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url();?>upload/js/jquery.fileupload-image.js"></script>

<!-- The File Upload validation plugin -->
<script src="<?php echo base_url();?>upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload Angular JS module -->
<script src="<?php echo base_url();?>upload/js/jquery.fileupload-angular.js"></script>
<!-- The main application script -->
<script src="<?php echo base_url();?>upload/js/customer.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.confirm.min.js"></script>
