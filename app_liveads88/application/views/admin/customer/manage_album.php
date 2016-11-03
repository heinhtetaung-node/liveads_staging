<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">	

<?php  $session_id = $this->session->userdata('admin_id'); ?>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                     Shop Album Image
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
								echo 'Update with success.';
							  echo '</div>';       
							}else{
							  echo '<div class="alert alert-error">';
								echo '<a class="close" data-dismiss="alert">×</a>';
								echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
							  echo '</div>';          
							}
						  }
						  ?>
						 
						  <div id="wizard">
							
							<form name="data_form" class="form-horizontal form-label-left" action="<?php echo base_url();?>customer/shop_album/<?php echo $this->uri->segment(3);?>" method="POST">
							
							<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $this->uri->segment(3);?>" />
							<input type="hidden" name="cu_shop_image_sort_order" id="cu_shop_image_sort_order" value="" />
								
							<!--////////////////////////////////////////////////////////////-->
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Album Image <span class="required">*</span>
							  </label>
							  <div class="col-md-9 col-sm-9 col-xs-12">
								<input type="file" name="album_image" size="20" accept="image/*"  id="album_image" class="file-upload-image" />
								<div id="display_album_image">
								<?php
								
									//retrieve from previous added images
									if(!empty($album_images) && count($album_images) > 0 ){
										foreach($album_images as $item){
											echo '<div id="album-image-row-' . $item['sa_id'] .'" class="form-group" style="border-bottom:1px solid #ccc;padding:10px;">'.
								'<div class="col-md-6 col-sm-6 col-xs-12">'.
								'<img src="'. base_url() . $item['sa_name'].'" height="80" /></div>'.
								'<div class="col-md-3 col-sm-3 col-xs-12">'.
								'Sort Order<input type="text" name="server_shop_image_sort_order[]" maxlength="3" placeholder="Type Sort Order" value="'.$item['sort_order'].'" class="server_shop_image_sort_order" sort-data-id="'.$item['sa_id'].'"/>'.
								'</div>'.
								'<div class="col-md-3 col-sm-3 col-xs-12">'.
								'<button data-id="' . $item['sa_id'] . '" class="btn btn-danger server_delete_album_image" type="button" style="margin-top:20px;">Delete</button>'.
								'</div>'.
								'<div style="clear:both;"></div></div>';
										}
									}
									
									?>
									</div>
								 </div>
							</div>
							<br>
					
							<!--////////////////////////////////////////////////////////////-->
							<div style="clear:both;"></div>
							<!---- end file upload --->
							 <div class="pull-right">
								<a href="<?php echo base_url(); ?>customer" class="btn btn-primary">Back to List</a>
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
			htmlImageData+= '<input type="hidden" name="data_album_image[]" value="'+imageData+'" />';
			htmlImageData+= '<img src="'+imageData+'" height="80" /></div>';
			htmlImageData+= '<div class="col-md-3 col-sm-3 col-xs-12">';
				htmlImageData+= 'Sort Order<input type="text" name="server_shop_image_sort_order[]" value="" maxlength="3" placeholder="Type Sort Order"/>';
				htmlImageData+= '</div>';
				htmlImageData+= '<div class="col-md-3 col-sm-3 col-xs-12">';
			htmlImageData+= '<button data-id="' + random_number + '-'+ n +'" class="btn btn-danger delete_album_image" type="button" style="margin-top:20px;">Delete</button>';
			htmlImageData+= '</div>';
		htmlImageData+= '<div style="clear:both;"></div></div>';
		$('#display_album_image').append(htmlImageData);
		
		dialog.dialog( "close" );
		
        return false;
    }
	
	
	$('#display_album_image').on( "click", '.delete_album_image', function() {
		var delete_row_id = $(this).attr('data-id');
		$('#'+delete_row_id).remove();
	});
	
	
	
	$('#display_album_image').on( "click", '.server_delete_album_image', function() {
		var delete_row_id = $(this).attr('data-id');
		
		var dialog_message = '<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>';
		$("#dialog-1").html(dialog_message);
			$("#dialog-1").dialog({
								  resizable: false,
								  height: "auto",
								  width: 300,
								  modal: true,
								  buttons: {
									"Delete": function() {
										
										$.ajax({
										  dataType:'json',	
										  type: "POST",
										  url: "<?php echo base_url() . 'customer/removeShopAlbumImage'; ?>",
										  data: { sa_id: delete_row_id, cu_id: <?php echo $this->uri->segment(3); ?> },
										}).done(function(rst) {
											if(rst.status == 'success'){
												$('#album-image-row-'+delete_row_id).remove();
											}else{
												$( this ).dialog( "close" );
												alert('Album Image cannot remove. Please contact web administrator.');
											}
										});
										
										$( this ).dialog( "close" );
									  
									},  
									Close: function() {
									  $( this ).dialog( "close" );
									}
								  }
								});
	});
	
	
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		//$('form[name=data_form]').submit();
				
		var has_error = false;
		var dialog_message = "";
		

		
		$('input[name^="server_shop_image_sort_order"]').each(function() {
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
			
			var tmp_sort_order = "";
			$(".server_shop_image_sort_order").each(function() {
				tmp_sort_order+= $(this).attr('sort-data-id') + '_'+ $(this).val() +',' ;
			});
			$('#cu_shop_image_sort_order').val(tmp_sort_order);
			
			$('form[name=data_form]').submit();}
	
	});
		
	});
	
 
</script>


<?php
//END - Do changes here fo cropping image///
////////////////////////////////////////////
?>
