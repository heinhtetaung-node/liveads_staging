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
	
	
	

<?php  $session_id = $this->session->userdata('admin_id'); ?>	
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Customer
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
                  <form name="data_form" method="POST" action="<?php echo base_url(); ?>customer/add" id="customer_form" enctype="multipart/form-data">
					<div class="form-group">
           
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
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div id="map-canvas"  style="height:300px;"></div> 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Brand/Logo Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="cu_logo" size="20" accept="image/*"  id="file_select_logo"/>
						<img id="output_logo"  height="100" />
						 <?php echo form_error('cu_logo');?> 
					  </div>
                    </div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group" >
					<label>Service Type</label><span class="required">*</span>
						<input type="text" placeholder="Service Type" id="cu_service_type" class="form-control" name="cu_service_type" value="<?php echo set_value('cu_service_type'); ?>">
						
						<?php echo form_error('cu_service_type');?> 
                    </div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" >
					<label>Tags</label><span class="required">*</span>
                      <textarea id="demo2" class="tag-editor-hidden-src"></textarea>
						<input type="hidden" name="cu_tag" id="cu_tag" value="<?php echo set_value('cu_tag'); ?>">
						<img id="logo"  height="100" />
						<?php echo form_error('cu_tag');?>
                    </div>
					
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Company Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="cu_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output"  height="100" />
						 <?php echo form_error('cu_image');?> 
					  </div>
                    </div>
					<br>
					
				
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" >
					<label>Description</label>
                      <textarea name="cu_description" class="mceEditor"><?php echo set_value('cu_description'); ?></textarea>
					
					  <?php echo form_error('cu_description');?> 
                    </div>
					
					<input type="hidden" name="cu_lat" id="cu_lat" value="<?php echo set_value('cu_lat'); ?>">
					<input type="hidden" name="cu_long" id="cu_long" value="<?php echo set_value('cu_long'); ?>">
						<?php if($session_id ==''): ?> 
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5(uniqid(rand(), true));?>">
					<?php else:?>
						<input type="hidden" id="tmpuniquepath" name="tmpuniquepath" value="<?php echo md5($session_id); ?>">
					<?php endif;?>
                  </form>
				  
				  
				  <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
     	
					<div >
							   <label class="col-lg-3">Shop Images</label>
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
					<!-- HTML heavily inspired by http://blueimp.github.io/jQuery-File-Upload/ -->


     <!-- js for the add files area /-->
				<div class="pull-right">
					<a href="<?php echo base_url(); ?>customer" class="btn btn-primary">Back to List</a>
					<button class="btn btn-success" id="data_upload" >Submit</button>
					</div>	
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div id="dialog-1" style="display:none">File size is greater than 2MB</div>

    <script src="<?php echo base_url();?>assets/js/jquery.caret.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.tag-editor.js"></script>
	
	
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
	<script src="<?php echo base_url();?>upload/js/shop.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.confirm.min.js"></script>

 <script>
$("#file_select").change(function (e) {
	var file_size = $('#file_select')[0].files[0].size;
	if(file_size>2097152) {
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


$("#file_select_logo").change(function (e) {
	var file_size = $('#file_select_logo')[0].files[0].size;
	if(file_size>2097152) {
		 $("#dialog-1").dialog();;
		return false;
	}else{
   var output = document.getElementById('output_logo');var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output_logo');
      output.src = reader.result;
    };
    reader.readAsDataURL(e.target.files[0]);
    }
 
});
</script>
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
						   bootbox.alert('incorrect postal code');
					   }
				   }

				});
			}else{
				   bootbox.alert('incorrect postal code');
			}
		});
	</script>
	
