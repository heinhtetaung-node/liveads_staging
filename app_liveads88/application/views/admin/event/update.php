<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">


<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Update Event
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
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>event/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer" value="<?php echo $event->cu_name; ?>">                     
					  <?php echo form_error('customer_id');?> 
					  
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span>
                      </label>
					 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="ev_title" value="<?php echo $event->ev_title; ?>">                     
					  <?php echo form_error('ev_title');?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Location <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="ev_location" value="<?php echo $event->ev_location; ?>">
                        <?php echo form_error('ev_location');?> 
					  </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="ev_date" id="datepicker" value="<?php echo $event->ev_date; ?>">
						<?php echo form_error('ev_date');?> 
					 </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Webiste 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="ev_link" id="link" value="<?php echo $event->ev_link; ?>">
                      </div>
                    </div>
			
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						
						<input type="file" size="20" accept="image/*"  id="ev_image" class="file-upload-image" />
						<input type="hidden" id="data_ev_image" name="ev_image" value="<?php echo set_value('ev_image'); ?>" />
						<div id="display_ev_image">
						<?php
						if(!empty($ev_image_return) && $ev_image_return!=""){
							echo '<div id="resize_image_ev_image" ><img src="'. $ev_image_return .'" height="100" /></div>';
						}else{
							echo '<div id="resize_image_ev_image" ><img src="'. base_url()."uploads/event/".$event->ev_img_name .'" height="100" /></div>';
						}
						?>
						</div>
						<?php echo form_error('ev_image');?> 
						
						</div>
                    </div>
					<input type="hidden" name="old_image" value="<?php echo $event->ev_img_name; ?>">
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date From<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_start_date" id="paid_ads_start_date"  value="<?php echo $event->paid_ads_start_date; ?>">
						<?php echo form_error('paid_ads_start_date');?> 
					 </div>
					</div>
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date To<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_end_date" id="paid_ads_end_date"  value="<?php echo $event->paid_ads_end_date; ?>">
						<?php echo form_error('paid_ads_end_date');?> 
					 </div>
					</div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  rows="3" class="mceEditor form-control col-md-7 col-xs-12" name="ev_description"><?php echo $event->ev_description; ?>"</textarea>
						 <?php echo form_error('ev_description');?> 
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"></span></label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
					  <select required="" class="form-control col-md-7 col-xs-12" id="ev_status" name ="ev_status" data-parsley-id="3999">
       					 <?php if($event->ev_status == 0){ ?>
								<option value="0" selected>Enable</option>
								<option value="1" >Disable</option>
								
							 <?php }else{ ?>
							    <option value="0" >Enable</option>
								<option value="1" selected>Disable</option>
						  <?php } ?>
	                     </select>
						</div>
					 </div>
					
					<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $event->customer_id; ?>" />
					<div class="pull-right">
						<a href="<?php echo base_url(); ?>event" class="btn btn-primary">Back to List</a>
						<input class="btn btn-success" type="submit" value="Submit">
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
		
		
			$('#data_ev_image').val(imageData);
			var htmlImageData = '<div id="resize_image_ev_image" ><img src="'+imageData+'" height="100" /></div>';
			$('#display_ev_image').html(htmlImageData);
		
		dialog.dialog( "close" );
		
        return false;
    }
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		
			$('form[name=data_form]').submit();
		
	});
		
	});
	
 
</script>


<?php
//END - Do changes here fo cropping image///
////////////////////////////////////////////
?>

 <script>
 $(function() {
       $('#datepicker').datepicker({
           dateFormat: "yy-mm-dd"
       });
	   
	    $('#paid_ads_start_date').datepicker({
			dateFormat: "yy-mm-dd",
			onClose: function( selectedDate ) {
				$( "#paid_ads_end_date" ).datepicker( "option", "minDate", selectedDate );
			  }
		});

		$('#paid_ads_end_date').datepicker({
			dateFormat: "yy-mm-dd",
			onClose: function( selectedDate ) {
				$( "#paid_ads_start_date" ).datepicker( "option", "maxDate", selectedDate );
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