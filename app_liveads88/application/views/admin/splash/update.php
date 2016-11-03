<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">


<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Update Splash
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
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>splash/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="sp_name" value="<?php echo $splash->spimg_name; ?>">                     
					  <?php echo form_error('sp_name');?> 
					</div>
					 
                    </div>
					
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Splash Image Link To <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="spimg_linkto" class="form-control col-md-7 col-xs-12" id="spimg_linkto">
							<option value="website" <?php echo ($splash->spimg_linkto=="website" ? 'selected="selected"' : ''); ?> >Website</option>
							<option value="customer"  <?php echo ($splash->spimg_linkto=="customer" ? 'selected="selected"' : ''); ?>>Customer Shop</option>
							<option value="email"  <?php echo ($splash->spimg_linkto=="email" ? 'selected="selected"' : ''); ?>>Email</option>
						</select>
					  <?php echo form_error('spimg_linkto');?> 
					</div>
					 
                    </div>
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Website 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="sp_website" name="sp_website" value="<?php echo $splash->spimg_website; ?>">
					   <?php echo form_error('sp_website');?> 
					  </div>
                    </div>
					
					
					
					<div class="form-group">
						  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer 
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer" value="<?php echo $splash->cu_name; ?>">                     
						  <?php echo form_error('customer_id');?> 
						</div>
					</div>
					<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $splash->spimg_customer_id; ?>"/>
					
					<div class="form-group">
                      <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="email" name="sp_email" value="<?php echo $splash->spimg_email; ?>">
					  <?php echo form_error('sp_email');?> 
					  </div>
                    </div>
					
									
					<?php
			
					$ext = substr(strrchr($splash->spimg_image_name,'.'),1);
					$src = 'data: image/'.$ext.';base64,'.$splash->spimg_image_base64; ?>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						
						
						
						
						
						<input type="file" size="20" accept="image/*"  id="sp_image" class="file-upload-image" />
						<input type="hidden" id="data_sp_image" name="sp_image" value="<?php echo set_value('sp_image'); ?>" />
						<input type="hidden" name="old_image" value="<?php echo $splash->spimg_image_name; ?>">
						<div id="display_sp_image">
						<?php
						if(!empty($sp_image_return) && $sp_image_return!=""){
							echo '<div id="resize_image_sp_image" ><img src="'. $sp_image_return .'" height="100" /></div>';
						}else{
							echo '<div id="resize_image_sp_image" ><img src="'. base_url()."uploads/splash/".$splash->spimg_image_name .'" height="100" /></div>';
						}
						?>
						</div>
						<?php echo form_error('sp_image');?> 
						
						
						
						
						 </div>
                    </div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"></span></label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						  <select required="" class="form-control col-md-7 col-xs-12" id="sp_status" name ="sp_status" data-parsley-id="3999">
							 <?php if($splash->spimg_status == 1){ ?>
									<option value="1" selected>Enable</option>
									<option value="0" >Disable</option>
									
								 <?php }else{ ?>
									<option value="1" >Enable</option>
									<option value="0" selected>Disable</option>
							  <?php } ?>
							 </select>
							</div>
						 </div>
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>splash" class="btn btn-primary">Back to List</a>
					<input class="btn btn-success" type="submit" value="Submit" id="data_upload">
					</div>
                  </form>
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
		height:800,
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
		width:620,
		height:1103,
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
		
		
			$('#data_sp_image').val(imageData);
			var htmlImageData = '<div id="resize_image_sp_image" ><img src="'+imageData+'" height="100" /></div>';
			$('#display_sp_image').html(htmlImageData);
		
		dialog.dialog( "close" );
		
        return false;
    }
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		
		var has_error= false;
		var dialog_message = "";
			
			if($("#customer").val()==""){
				$("#customer_id").val('');
			}
			
			if($('#spimg_linkto').val() == "website"){
				if($('#sp_website').val() == ""){
					has_error = true;
					dialog_message = 'Please fill Website address for link';
				}
			}else if($('#spimg_linkto').val() == "email"){
				if($('#email').val() == ""){
					has_error = true;
					dialog_message = 'Please fill email address for link';
				}
			}else{
				if($("#customer_id").val() == ""){
					has_error = true;
					dialog_message = 'Please fill Customer for link';
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