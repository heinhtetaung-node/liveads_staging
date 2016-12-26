<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Update Referrer
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
				    
                 <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>referrer/update/<?php echo $this->uri->segment(3);?>" id="referrer_form">
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Referral
                      </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                      <label style="padding-top: 8px;"><?php echo $referrer->referral_user_name . ' ( '.$referrer->referral_user_email.' ) '; ?> 
                      </label>
					</div>
					</div>
					 
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Referrer
                      </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                      <label style="padding-top: 8px;"><?php echo $referrer->referrer_user_name . ' ( '.$referrer->referrer_user_email.' ) '; ?> 
                      </label>
					</div>
					</div>
					 
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Referral Signup Date
                      </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                      <label style="padding-top: 8px;"><?php echo $referrer->signup_date; ?> 
                      </label>
					</div>
					</div>
					 
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Gift Send Status<span class="required">*</span>
					  </label>

					  <div class="col-md-6 col-sm-6 col-xs-12">
						<div data-toggle="buttons" class="btn-group" id="gender">
						<?php if($referrer->gift_sent_status == '1' ){ ?> 
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success active">
							<input type="radio" value="1" name="gift_sent_status" checked="checked"> &nbsp; Yes &nbsp;
						  </label>
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default">
							<input type="radio" value="0" name="gift_sent_status"  > No
						  </label>
						  <?php }else{ ?>
						   <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default parsley-success ">
							<input type="radio" value="1" name="gift_sent_status" > &nbsp; Yes &nbsp;
						  </label>
						  <label data-toggle-passive-class="btn-default" data-toggle-class="btn-primary" class="btn btn-default active">
							<input type="radio" value="0" name="gift_sent_status"  checked="checked" > No
						  </label>
						  <?php } ?>
						</div>
						<?php echo form_error('gift_sent_status');?> 
					  </div>
					</div>	
					
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12"> Gift Sent Date
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" class="form-control col-md-7 col-xs-12"  name="gift_sent_date" id="datepicker" value="<?php echo ($referrer->gift_sent_date!='0000-00-00 00:00:00' ? date('Y-m-d', strtotime($referrer->gift_sent_date)) : ''); ?>">
						<?php echo form_error('gift_sent_date');?> 
					 </div>
					</div>
					 
					
					<div class="form-group">
					  <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12"> Remarks
					  </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<textarea class="form-control"  name="remark" ><?php echo $referrer->remark; ?> </textarea>
						<?php echo form_error('remark');?> 
					 </div>
					</div>
					 
					 
					<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Created
                      </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                      <label style="padding-top: 8px;"><?php echo $referrer->refer_created; ?> 
                      </label>
					</div>
					</div>
					
					<div class="pull-right">
						<a href="<?php echo base_url(); ?>referrer" class="btn btn-primary">Back to List</a>
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