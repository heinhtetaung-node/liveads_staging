
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Job
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
                  <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>job/add" id="event_form" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer">                     
					  <?php echo form_error('customer_id');?> 
					 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Job Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_name">                     
					  <?php echo form_error('jb_name');?> 
					</div>
					</div>
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Job Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_email">                     
					  <?php echo form_error('jb_email');?> 
					</div>
					</div>
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Job Phone <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_phone">                     
					  <?php echo form_error('jb_phone');?> 
					</div>
					 
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Job Location <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="jb_location">
                        <?php echo form_error('jb_location');?> 
					  </div>
                    </div>
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Job Expired <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="jb_expired" id="datepicker">
						<?php echo form_error('jb_expired');?> 
					 </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Salary <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="jb_salary">
                        <?php echo form_error('jb_salary');?> 
					  </div>
                    </div>				
					
									
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date From<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_start_date" id="paid_ads_start_date" >
						<?php echo form_error('paid_ads_start_date');?> 
					 </div>
					</div>
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date To<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_end_date" id="paid_ads_end_date" >
						<?php echo form_error('paid_ads_end_date');?> 
					 </div>
					</div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  rows="3" class="form-control col-md-7 col-xs-12" name="jb_description" class="mceEditor"></textarea>
						 <?php echo form_error('jb_description');?> 
                      </div>
                    </div>
					<input type='hidden' name='customer_id' id='customer_id' />
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>job" class="btn btn-primary">Back to List</a>
					<input class="btn btn-success" type="submit" value="Submit">
					</div>
                  </form>
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
