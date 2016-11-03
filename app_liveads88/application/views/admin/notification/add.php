<div class="right_col" role="main"> 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Push Notification
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
                  <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>pushnotification/add" id="event_form" enctype="multipart/form-data">
				
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Message <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="pn_msg">                     
					  <?php echo form_error('pn_msg');?> 
					</div>
					</div>		
					
					
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>pushnotification" class="btn btn-primary">Back to List</a>
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
    });

 </script>
  
