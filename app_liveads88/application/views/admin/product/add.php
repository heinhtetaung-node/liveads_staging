<?php  $session_id = $this->session->userdata('admin_id'); ?>
<div class="right_col" role="main"> 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Product
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
							<section>	
						<form name="data_form" class="form-horizontal form-label-left" action="<?php echo base_url();?>product/add" method="POST" enctype="multipart/form-data" >
								
							<div class="form-group">
								  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
								  </label>
								  <div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer">                     
								  <?php echo form_error('customer_id');?> 
								
								</div>
							 
							</div>
							
							<div class="form-group">
							  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Product Name <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="pro_name">                     
							  <?php echo form_error('pro_name');?> 
							</div>
							 
							</div>
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Price <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_price">
								<?php echo form_error('pro_price');?> 
							  </div>
							</div>
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Price Text (To replace price with text)
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_price_text">
								<?php echo form_error('pro_price_text');?> 
							  </div>
							</div>
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Quantity <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_quantity">
								<?php echo form_error('pro_quantity');?> 
							  </div>
							</div>					
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Promotion product<span class="required">*</span>
							  </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<div data-toggle="buttons" class="btn-group" id="gender">
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="1" name="pro_is_promotion" checked> &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="0" name="pro_is_promotion"  > No
								  </label>
								</div>
								<?php echo form_error('pro_is_promotion');?> 
							  </div>
							</div>	
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Flash Deal product<span class="required">*</span>
							  </label>

							  <div class="col-md-6 col-sm-6 col-xs-12">
								<div data-toggle="buttons" class="btn-group" id="gender">
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="1" name="pro_is_deal" checked> &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="0" name="pro_is_deal"  > No
								  </label>
								</div>
								<?php echo form_error('pro_is_deal');?> 
							  </div>
							</div>	
							
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Home Page Top List Product<span class="required">*</span>
							  </label>

							  <div class="col-md-6 col-sm-6 col-xs-12">
								<div data-toggle="buttons" class="btn-group" id="gender">
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="1" name="pro_surprise_marked" checked> &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="0" name="pro_surprise_marked"  > No
								  </label>
								</div>
								<?php echo form_error('pro_surprise_marked');?> 
							  </div>
							</div>	
							
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Product Image <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="pro_image" size="20" accept="image/*"  id="file_select"/>
								<img id="output" height="100" />
								<?php echo form_error('pro_image');?>    </div>
							</div>
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Discount <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_discount_amount">
								<?php echo form_error('pro_discount_amount');?> 
							  </div>
							</div>
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Discount Type<span class="required">*</span>
							  </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<div data-toggle="buttons" class="btn-group" id="gender">
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="%" name="pro_discount_type" checked> &nbsp; % &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="$" name="pro_discount_type"  > $
								  </label>
								</div>
								<?php echo form_error('pro_discount_type');?> 
							  </div>
							</div>
											
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date From<span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_start_date" id="paid_ads_start_date"  value="<?php echo set_value('paid_ads_start_date'); ?>">
								<?php echo form_error('paid_ads_start_date');?> 
							 </div>
							</div>
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date To<span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_end_date" id="paid_ads_end_date"  value="<?php echo set_value('paid_ads_end_date'); ?>">
								<?php echo form_error('paid_ads_end_date');?> 
							 </div>
							</div>
							<input type='hidden' name='customer_id' id='customer_id' />
					
						
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
							<textarea  rows="3" class="form-control col-md-7 col-xs-12" name="pro_description" class="mceEditor"></textarea>
								 <?php echo form_error('pro_description');?> 
							</div></div>
							
							<div class="form-group">
							  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12"> Expired <span class="required">*</span>
							  </label>
							  <div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12"  name="pro_expired" id="datepicker">
								<?php echo form_error('pro_expired');?> 
							 </div>
							</div>
					<?php if($session_id ==''): ?> 
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5(uniqid(rand(), true));?>">
					<?php else:?>
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5($session_id); ?>">
					<?php endif;?>
						</section>	
						</form>						
						<section>
					<div >
							
<br>							
					 <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
     	
					<div >
							   <label class="col-lg-3"></label>
					<!---- file upload ----->
					 <!-- Redirect browsers with JavaScript disabled to the origin page -->
						<noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
						<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
						<div class="row fileupload-buttonbar">
							<div class="col-lg-7">
								<!-- The fileinput-button span is used to style the file input field as button -->
								<span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
									<i class="glyphicon glyphicon-plus"></i>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple ng-disabled="disabled">
								</span>
								<button type="button" class="btn btn-primary start" data-ng-click="submit()">
									<i class="glyphicon glyphicon-upload"></i>
									<span>Start upload</span>
								</button>
								<button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
									<i class="glyphicon glyphicon-ban-circle"></i>
									<span>Cancel upload</span>
								</button>
								<!-- The global file processing state -->
								<span class="fileupload-process"></span>
							</div>
							<!-- The global progress state -->
							<div class="col-lg-5 fade" data-ng-class="{in: active()}">
								<!-- The global progress bar -->
								<div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
								<!-- The extended global progress state -->
								<div class="progress-extended">&nbsp;</div>
							</div>
						</div>
						<!-- The table listing the files available for upload/download -->
						<table class="table table-striped files ng-cloak">
							<tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
								<td data-ng-switch data-on="!!file.thumbnailUrl">
									<div class="preview" data-ng-switch-when="true">
										<a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
									</div>
									<div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
								</td>
								<td>
									<p class="name" data-ng-switch data-on="!!file.url">
										<span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
											<a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
											<a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
										</span>
										<span data-ng-switch-default>{{file.name}}</span>
									</p>
									<strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
								</td>
								<td>
									<p class="size">{{file.size | formatFileSize}}</p>
									<div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
								</td>
								<td>
									<button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
										<i class="glyphicon glyphicon-upload"></i>
										<span>Start</span>
									</button>
									<button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
										<i class="glyphicon glyphicon-ban-circle"></i>
										<span>Cancel</span>
									</button>
									<button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
										<i class="glyphicon glyphicon-trash"></i>
										<span>Delete</span>
									</button>
								</td>
							</tr>
						</table>
						
					 <?php if($session_id ==''): ?> 
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5(uniqid(rand(), true));?>">
					<?php else:?>
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5($session_id); ?>">
					<?php endif;?>
					</div>
					</form>
					 <?php echo form_error('tmpuniquepath');?> 
					</div>
					<!---- end file upload --->
					 <div class="pull-right">
					<a href="<?php echo base_url(); ?>job" class="btn btn-primary">Back to List</a>
					<button class="btn btn-success" id="data_upload" >Submit</button>
					</div>
						</section>

						
					</div>
					
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div id="dialog-1" style="display:none">File size is greater than 5MB</div>

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



<script>
$("#file_select").change(function (e) {
	var file_size = $('#file_select')[0].files[0].size;
	if(file_size>52428880) {
		 $("#dialog-1").dialog();;
		return false;
	}else{
   var output = document.getElementById('output');var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(e.target.files[0]);
    }
 
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
<script src="<?php echo base_url();?>upload/js/app.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.confirm.min.js"></script>


<script>
	$("#data_upload").confirm({
    title:"",
    text:"<p style='text-align:center;color:red;'><b>You added some images and it is need to upload first before submit the form. Are you sure want to submit the form without upload the image files ?</b></p>",
    confirm: function(button) {
		 $('form[name=data_form]').submit();
       
    },
    cancel: function(button) {
         return false;
    },
    confirmButton: "Yes",
    cancelButton: "No"
});



</script>