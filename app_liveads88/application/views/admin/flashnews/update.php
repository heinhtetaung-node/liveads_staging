<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Flashnews Update 
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
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>flashnews/update/<?php echo $this->uri->segment(3);?>" id="event_form" enctype="multipart/form-data">
					
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Text <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="fn_text" value="<?php echo $flashnews->fn_text; ?>">                     
					  <?php echo form_error('fn_text');?> 
					</div>
					 
                    </div>
								
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Expired <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  name="fn_expired" id="datepicker" value="<?php echo $flashnews->fn_expired; ?>">
						<?php echo form_error('fn_expired');?> 
					 </div>
                    </div>
					
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>flashnews" class="btn btn-primary">Back to List</a>
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
 