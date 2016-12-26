<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Update Job
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
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>job/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Customer <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="customer" name="customer" value="<?php echo $job->cu_name; ?>">                     
					  <?php echo form_error('customer_id');?> 
					
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Job Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_name" value="<?php echo $job->jb_name; ?>">                     
					  <?php echo form_error('jb_name');?> 
					</div>
					 
                    </div>
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_email" value="<?php echo $job->jb_email; ?>">                     
					  <?php echo form_error('jb_email');?> 
					</div>
					 
                    </div>
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12"> Phone <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="jb_phone" value="<?php echo $job->jb_phone; ?>">                     
					  <?php echo form_error('jb_phone');?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Job Location <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="jb_location" value="<?php echo $job->jb_location; ?>">
                        <?php echo form_error('jb_location');?> 
					  </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Job Expired <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="jb_expired" id="datepicker" value="<?php echo $job->jb_expired; ?>">
						<?php echo form_error('jb_expired');?> 
					 </div>
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Salary <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="jb_salary" value="<?php echo $job->jb_salary; ?>">
                        <?php echo form_error('jb_salary');?> 
					  </div>
                    </div>				
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date From<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="paid_ads_start_date" id="paid_ads_start_date"  value="<?php echo $job->paid_ads_start_date; ?>">
						<?php echo form_error('paid_ads_start_date');?> 
					 </div>
					</div>
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Date To<span class="required">*</span>
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12"  name="paid_ads_end_date" id="paid_ads_end_date"  value="<?php echo $job->paid_ads_end_date; ?>">
						<?php echo form_error('paid_ads_end_date');?> 
					 </div>
					</div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="mceEditor" rows="3" class="form-control col-md-7 col-xs-12" name="jb_description"><?php echo $job->jb_description; ?></textarea>
						 <?php echo form_error('jb_description');?> 
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"></span></label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
					  <select required="" class="form-control col-md-7 col-xs-12" id="jb_status" name ="jb_status" data-parsley-id="3999">
       					 <?php if($job->jb_status == 0){ ?>
								<option value="0" selected>Enable</option>
								<option value="1" >Disable</option>
								
							 <?php }else{ ?>
							    <option value="0" >Enable</option>
								<option value="1" selected>Disable</option>
						  <?php } ?>
	                     </select>
						</div>
					</div>
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Live Status<span class="required">*</span>
					  </label>

					  <div class="col-md-6 col-sm-6 col-xs-12">
						<div data-toggle="buttons" class="btn-group" id="livestatus">
							<?php if($job->livestatus==0){ ?>
						   <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success ">
							<input type="radio" value="1" name="livestatus"  > Submit For Approval
						  </label>
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active">
							<input type="radio" checked value="0" name="livestatus" > &nbsp; Pending
						  </label>
						  
						  <?php }else if($job->livestatus==1){ ?>
						  
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success ">
							<input type="radio" value="0" name="livestatus"  > Pending
						  </label>
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active">
							<input type="radio" checked value="1" name="livestatus" > &nbsp;  Submit For Approval
						  </label>
						  
						  <?php }else{
									
									echo "<span class='label label-success'>Approved</span>";
									
								}
						  ?>
						</div>
					  </div>
					</div> 
					<input type='hidden' name='customer_id' id='customer_id' value="<?php echo $job->customer_id; ?>"/>
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>Ads/index/Jobs" class="btn btn-primary">Back to List</a>
					<?php if($job->livestatus!=2){ ?>
						<input class="btn btn-success" type="submit" value="Submit">
						<?php } ?>
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