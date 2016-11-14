<script src = "<?php echo base_url();?>assets/js/jquery.cropit.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropit.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom_hh.css">


<div class="row">
	<div class="col-sm-12">
		<br>
		<center>
		<div class="title">
			You can fill your initial data. This data can be edit after you bought.
		</div>
		</center>
	</div>
	<div class="col-md-8">
		
		 <?php echo $this->session->flashdata('msg'); ?>
		  <br>
		  <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>advertise/job_addcart" id="coupon_form" enctype="multipart/form-data">	
			<br>
			<div class="form-group">
			  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12"> About Ads <span class="required"></span>
			  </label>
			  <div class="col-md-9 col-sm-6 col-xs-12">
				<?php echo $ads->description; ?>
			</div>
			</div>
			
			<div class="form-group">
			  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Price Option <span class="required">*</span>
			  </label>
			  <div class="col-md-9 col-sm-6 col-xs-12">
				<select class="form-control" name="price_option">    
				<?php foreach($adsprice as $p){ ?>
					<option value="<?php echo $p['price_id']; ?>">
						<?php echo $p['price']; ?> <?php echo $p['price_unit']; ?> For <?php echo $p['days']; ?> Days
					</option>
				<?php } ?>
				</select>
			</div>
			</div>
			
			<div class="form-group">
			  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Job Name <span class="required">*</span>
			  </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text"  value="<?php echo set_value('jb_name'); ?>" class="form-control col-md-7 col-xs-12"  id="name" name="jb_name">                     
			  <?php echo form_error('jb_name');?> 
			</div>
			</div>
			
			<div class="form-group">
			  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Job Location <span class="required">*</span>
			  </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" value="<?php echo set_value('jb_location'); ?>" class="form-control col-md-7 col-xs-12"  id="title" name="jb_location">
				<?php echo form_error('jb_location');?> 
			  </div>
			</div>
			
			<div class="form-group">
			  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Salary <span class="required">*</span>
			  </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" value="<?php echo set_value('jb_salary', 'Negotiate'); ?>" class="form-control col-md-7 col-xs-12"  id="title" name="jb_salary">
				<?php echo form_error('jb_salary');?> 
			  </div>
			</div>			
			
			<input type='hidden' name='customer_id' id='customer_id' />
			
		<br class="visible-xs"><br class="visible-xs">
	</div>
	<div class="col-md-4">
		<br>
		<div  style='background-size:cover; background:url("<?php echo base_url(); ?>/app_liveads88/uploads/adscomponent/<?php echo $ads->previewphoto_m; ?>"); width:250px; height:440px; background-size:cover; background-repeat:no-repeat; background-position: center center;' class="previewimg">
			<div id="display_cp_image" style="background-color: ; position:relative; 
			width: 228px; height: 130px; top: 201px; left: 12px;" ></div>
		</div>
	</div>
	<div class="col-md-12">
		<br><br>
		<div class="pull-right">
			<a href="<?php echo base_url(); ?>advertise" class="btn btn-primary">Browse More Ads</a>
			<input type="hidden" value="<?php echo $ads->adscomponent_id; ?>" name="ads_id" />
			<?php if($this->session->flashdata('addedcart')!=true){ ?>
			<input class="btn btn-success" type="submit" name="addcart" value="Add to Cart" id="addcart">
			<input class="btn btn-success" type="submit" name="checkout" value="Checkout">
			<?php }else{ ?>
			<a href="<?php echo base_url(); ?>advertise/buyads/<?php echo $ads->adscomponent_id; ?>" ><input class="btn btn-success" type="button" value="Buy Another Ads like this"></a>
			<a href="<?php echo base_url(); ?>advertise/checkout" ><input class="btn btn-success" type="button" name="checkout" value="Checkout"></a>
			<?php } ?>
		</div>
		  
	</div>
</div>
</form>

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
		
		
			$('#data_cp_image').val(imageData);
			var htmlImageData = '<div id="resize_image_cp_image" ><img src="'+imageData+'" height="100" /></div>';
			$('#display_cp_image').html(htmlImageData);
		
		dialog.dialog( "close" );
		
        return false;
    }
	
	//when user click submit, check image exists or not
	
	
	$("#data_upload").click(function(){
		var has_error = false;
		var dialog_message = "";
		if($("#data_cp_image").val() == ""){
			dialog_message = "Image required.";
			has_error =  true;
		}
		
		//for coupon type validation
		var cp_type = $('input[name=cp_type]:checked', '#coupon_form').val()
		if(cp_type == "date"){
			if($('#valid_date_from').val() == "" || $('#valid_date_to').val() == "" ){
				dialog_message = "Please Fill Valid Period for the coupon.";
				has_error =  true;
			}
		}else if(cp_type == "quantity"){
			if($('#quantity').val() == "" || $('#coupon_code').val() == "" ){
				dialog_message = "Please Fill Valid Coupon Quantity and Code for the coupon.";
				has_error =  true;
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
 $(function() {

	   /*
		$("#cp_code_wrapper").css("display","none");
		$("#quantity").blur(function(){
			var quantity = $("#quantity").val();
			if(quantity != "" && quantity > 0 && (quantity >>> 0 === parseFloat(quantity))){
				$('#cp_code_wrapper').css("display","block");
			}else{
				$("#cp_code_wrapper").css("display","none");
			}
		});
		
		
		var quantity = $("#quantity").val();
		if(quantity != "" && quantity > 0 && (quantity >>> 0 === parseFloat(quantity))){
			$('#cp_code_wrapper').css("display","block");
		}else{
			$("#cp_code_wrapper").css("display","none");
		}
		*/
	 
	 
       $('#valid_date_from').datepicker({
			dateFormat: "yy-mm-dd",
		    onClose: function( selectedDate ) {
				$( "#valid_date_to" ).datepicker( "option", "minDate", selectedDate );
			  }
       });
	   
	   $('#valid_date_to').datepicker({
			dateFormat: "yy-mm-dd",
		    onClose: function( selectedDate ) {
				$( "#valid_date_from" ).datepicker( "option", "maxDate", selectedDate );
			  }
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



<script>
$(function(){

	$('.input_cp_type').change(function(){
		if($(this).val()=='date'){
			$('.limited-quantity-wrapper').css("display","none");
			$('.date-range-wrapper').css("display","block");
		}else{
			$('.date-range-wrapper').css("display","none");
			$('.limited-quantity-wrapper').css("display","block");
		}
	});
	
	//init
	var cp_type = $('input[name=cp_type]:checked', '#coupon_form').val()
	if(cp_type == "date"){
		$('.limited-quantity-wrapper').css("display","none");
		$('.date-range-wrapper').css("display","block");
	}else{
		$('.date-range-wrapper').css("display","none");
		$('.limited-quantity-wrapper').css("display","block");
	}
	
});
</script>