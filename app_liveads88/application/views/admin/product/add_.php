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
				<!--- start form widzard-->
				<div data-example-id="togglable-tabs" role="tabpanel" class="">
				 <ul role="tablist" class="nav nav-tabs bar_tabs" id="myTab">
				  <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home-tab" href="#tab_content1">Product</a>
				  </li>
				  <li class="" role="presentation"><a aria-expanded="false" data-toggle="tab" id="image-tab" role="tab" href="#tab_content2">Image</a>
				  </li>
							</ul>
				 <?php echo $this->session->flashdata('msg'); ?>
                  <br>
				  <div class="tab-content" id="myTabContent">
				  <div aria-labelledby="home-tab" id="tab_content1" class="tab-pane fade active in" role="tabpanel">
                  <form class="form-horizontal form-label-left">
				     <input type="hidden" id="images-name"/>
					<div class="form-group">
						  <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer">                     
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
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Product Expired <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="pro_expired" id="datepicker">
						<?php echo form_error('pro_expired');?> 
					 </div>
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
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Product Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="pro_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output" width="100" height="100" />
						<?php echo form_error('pro_image');?>    </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  rows="3" class="form-control col-md-7 col-xs-12" name="pro_description"></textarea>
						 <?php echo form_error('pro_description');?> 
                      </div>
                    </div>
					<input type='hidden' name='customer_id' id='customer_id' />
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>job" class="btn btn-primary">Back to List</a>
					<button id="add-product" class="btn btn-orange">Product Add</button>
					</div>
                  </form>
				  </div>
				  <div aria-labelledby="image-tab" id="tab_content2" class="tab-pane" role="tabpanel">
						<div class="form-group">
					   		<span class="error-msg" id="sp_photo_msg"></span>
							<label>Start your listing with up to 10 great photos:</label>
							<form style="width:100%;height:300px;border:1px solid #eee" action="uploadImages" id="dropzone" class="dropzone"></form>
							<div id="listing-images">
								
							</div>
					   	</div>
				  </div>
				  </div>
				  </div>
				  <!--- end form widzard-->
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
  var loadFile = function(coupon_image) {
    var output = document.getElementById('output');var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(coupon_image.target.files[0]);
  };
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
