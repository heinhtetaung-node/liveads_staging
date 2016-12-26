<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                     Product
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				 
				 <div data-example-id="togglable-tabs" role="tabpanel" class="">
				 <ul role="tablist" class="nav nav-tabs bar_tabs" id="myTab">
					  <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home-tab" href="#tab_content1">Product</a>
					  </li>
					  <li class="" role="presentation"><a aria-expanded="false" data-toggle="tab" id="image-tab" role="tab" href="#tab_content2">Image</a>
					  </li>
				</ul>
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
                  <br>
				  <div class="tab-content" id="myTabContent">
				  <div aria-labelledby="home-tab" id="tab_content1" class="tab-pane fade active in" role="tabpanel">
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>product/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer" value="<?php echo $product->cu_name; ?>">                     
					  <?php echo form_error('customer');?> 
					  <?php 
					  if(form_error('customer_id')){
						  echo "Invalid customer";
					  }
					  ?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Product Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="pro_name" value="<?php echo $product->pro_title; ?>">                     
					  <?php echo form_error('pro_name');?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_price" value="<?php echo $product->pro_price; ?>">
                        <?php echo form_error('pro_price');?> 
					  </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Quantity <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_quantity" value="<?php echo $product->pro_quantity; ?>">
                        <?php echo form_error('pro_quantity');?> 
					  </div>
                    </div>					
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Promotion product<span class="required">*</span>
                      </label>
             		    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div data-toggle="buttons" class="btn-group" id="pro_is_promotion">
                           <?php
						  // echo $product->pro_is_promotion;
						   if($product->pro_is_promotion == 1){ ?>
								<label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="1" name="pro_is_promotion" checked> &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="0" name="pro_is_promotion"  > No
								  </label>
								
							 <?php }else{ ?>
							    <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success">
									<input type="radio" value="1" name="pro_is_promotion" > &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active" >
									<input type="radio" value="0" name="pro_is_promotion" checked > No
								  </label>
						  <?php } ?>
                        </div>
						<?php echo form_error('pro_is_promotion');?> 
                      </div>
                    </div>	
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Flash Deal product<span class="required">*</span>
                      </label>

					  <div class="col-md-6 col-sm-6 col-xs-12">
                        <div data-toggle="buttons" class="btn-group" id="pro_is_deal">
						 <?php if($product->pro_is_deal == 1){ ?>
								<label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="1" name="pro_is_deal" checked> &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="0" name="pro_is_deal"  > No
								  </label>
								
							 <?php }else{ ?>
							    <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success ">
									<input type="radio" value="1" name="pro_is_deal" > &nbsp; Yes &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active">
									<input type="radio" value="0" name="pro_is_deal" checked > No
								  </label>
						  <?php } ?>
                          
                        </div>
						<?php echo form_error('pro_is_deal');?> 
                      </div>
                    </div>	
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Product Expired <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="pro_expired" id="datepicker" value="<?php echo $product->pro_expired_date; ?>">
						<?php echo form_error('pro_expired');?> 
					 </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Discount <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="pro_discount_amount" value="<?php echo $product->pro_discount_amount; ?>">
                        <?php echo form_error('pro_discount_amount');?> 
					  </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Discount Type<span class="required">*</span>
                      </label>
                     	<div class="col-md-6 col-sm-6 col-xs-12">
                        <div data-toggle="buttons" class="btn-group" id="gender">
						 <?php if($product->pro_discount_type == "%"){ ?>
								 <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
									<input type="radio" value="%" name="pro_discount_type" checked> &nbsp; % &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
									<input type="radio" value="$" name="pro_discount_type"  > $
								  </label>
								
							 <?php }else{ ?>
							     <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success ">
									<input type="radio" value="%" name="pro_discount_type" > &nbsp; % &nbsp;
								  </label>
								  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active">
									<input type="radio" value="$" name="pro_discount_type"  checked> $
								  </label>
						  <?php } ?>
                         
                        </div>
						<?php echo form_error('pro_discount_type');?> 
                      </div>
                    </div>
					<?php
			
					$ext = substr(strrchr($product->pro_image_name,'.'),1);
					$src = 'data: image/'.$ext.';base64,'.$product->pro_image_base64; ?>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Product Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="pro_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output" width="100" height="100" src="<?php echo $src; ?>"/>
						<?php echo form_error('pro_image');?>    </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  rows="3" class="form-control col-md-7 col-xs-12" name="pro_description"><?php echo $product->pro_description; ?></textarea>
						 <?php echo form_error('pro_description');?> 
                      </div>
                    </div>
					<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $product->customer_id; ?>"/>
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>product" class="btn btn-primary">Back to List</a>
					<input class="btn btn-success" type="submit" value="Submit">
					</div>
                  </form>
				  </div>
				  <div aria-labelledby="image-tab" id="tab_content2" class="tab-pane" role="tabpanel">						
						 <div class="dropzone" id="myDropzone" style="margin-bottom:10px">
						 <div class="dropzone-previews"></div>
							<button id="add" class="btn btn-primary pull-right">Upload Product Images</button>							
						</div> 
				  </div>
				  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
 <script>
 $(function() {
       $('#datepicker').datepicker({
           dateFormat: "yy-mm-dd"
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
      Dropzone.options.myDropzone = {
				 url: '<?php echo base_url(); ?>product/imageupload/<?php echo $this->uri->segment(3);?>',
                autoProcessQueue: false,
                uploadMultiple: false,
                parallelUploads: 100,
				acceptedFiles: 'image/jpeg, image/png',
                maxFiles: 3,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                  document.getElementById("add").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on("sendingmultiple", function() {
                    });
                    this.on("successmultiple", function(files, response) {
						   alert(response);
                    });
                    this.on("errormultiple", function(files, response) {
						alert(response);
                    });
					this.on('complete', function () {
						if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
							//window.setTimeout(function() { window.location.href = "index.php"; }, 1000);
						}
					});
					// Delete files
					 this.on('removedfile', function(file) {
					console.log(file);
					///var conf = confirm("Press OK to confirm deletion of this photo");
					//if(conf != true){
					//	return false;
					//}
                    var file_name = file.name;
                  
           
		
		//END DELETE FILES
					//Added Code
		

        });
		//End added code
		
                }

            }
    </script>