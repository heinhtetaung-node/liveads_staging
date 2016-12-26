<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   User
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
		
		 <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('error'); ?>
            </div> 
			<?php elseif (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
					 <?php 
				  $attributes = array('role'=>'form', 'class' => 'form-horizontal form-label-left', 'id' => 'user-edit-form', 'data-parsley-validate' =>'');
				  echo form_open('', $attributes); ?>

					<?php // hidden id ?>
					<?php if (isset($user->user_id)) : ?>
						<?php echo form_hidden('id', $user->user_id); ?>
					<?php endif; ?>
					
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_name') ? ' has-error' : ''; ?>" for="user_name">User Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_name', 'value'=>set_value('user_name', (isset($user->user_name) ? $user->user_name : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_name', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_email') ? ' has-error' : ''; ?>" for="user_email">User Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_email', 'value'=>set_value('user_email', (isset($user->user_email) ? $user->user_email : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_email', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_first_name') ? ' has-error' : ''; ?>" for="user_first_name">First Name 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_first_name', 'value'=>set_value('user_first_name', (isset($user->user_first_name) ? $user->user_first_name : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_first_name')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_last_name') ? ' has-error' : ''; ?>" for="user_last_name">Last Name 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_last_name', 'value'=>set_value('user_last_name', (isset($user->user_last_name) ? $user->user_last_name : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_last_name')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_country') ? ' has-error' : ''; ?>" for="user_country">Country <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="user_country" class="form-control col-md-7 col-xs-12">
							<option value="60" <?php echo ($user->user_country == '60' ? 'selected="selected"' : ''); ?> >Malaysia</option>
							<option value="65" <?php echo ($user->user_country == '65' ? 'selected="selected"' : ''); ?>>Singapore</option>
						</select>
						
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_phone') ? ' has-error' : ''; ?>" for="user_phone">Phone <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_phone', 'value'=>set_value('user_phone', (isset($user->user_phone) ? $user->user_phone : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_phone', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_gender') ? ' has-error' : ''; ?>" for="">Gender
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="radio">
							<label>
								<?php echo form_radio(array('name'=>'user_gender', 'id'=>'radio-user_gender-male', 'value'=>'male', 'checked'=>(( (isset($user->user_gender) && strtolower($user->user_gender) == 'male')) ? 'checked' : FALSE))); ?>
								Male
							</label>
						</div>
						
						<div class="radio">
							<label>
								<?php echo form_radio(array('name'=>'user_gender', 'id'=>'radio-user_gender-female', 'value'=>'female', 'checked'=>((isset($user->user_gender) && strtolower($user->user_gender) == 'female') ? 'checked' : FALSE))); ?>
								Female
							</label>
						</div>
						
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_active') ? ' has-error' : ''; ?>" for="">Status <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="radio">
							<label>
								<?php echo form_radio(array('name'=>'user_active', 'id'=>'radio-user_active-1', 'value'=>'1', 'checked'=>(( ! isset($user->user_active) OR (isset($user->user_active) && (int)$user->user_active == 1)) ? 'checked' : FALSE))); ?>
								Active
							</label>
						</div>
							<div class="radio">
								<label>
									<?php echo form_radio(array('name'=>'user_active', 'id'=>'radio-user_active-2', 'value'=>'0', 'checked'=>((isset($user->user_active) && (int)$user->user_active == 0) ? 'checked' : FALSE))); ?>
									Inactive
								</label>
							</div>
						
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="">Created Date 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_created_date', 'value'=>set_value('user_created_date', (isset($user->user_created_date) ? $user->user_created_date : '')), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_created_date', 'readonly'=>'true', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('password') ? ' has-error' : ''; ?>" for="password">Password
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php 
							echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'password', 'autocomplete'=>'off')); 
						?>
						
                      </div>
                    </div>
					
					<?php // password repeat ?>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('password_repeat') ? ' has-error' : ''; ?>" for="password">Confirm Password 
					  
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php 
							echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'password_repeat',  'autocomplete'=>'off')); 
							?>
							<span class="help-block"><br />Provide only if you want to change user password</span>
                      </div>
                    </div>
					 <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" id="reset_user_password"><span class="glyphicon glyphicon-refresh"></span> Reset User Password</button>
                      </div>
                    </div>
					
					
					
					<div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Update</button>
                      </div>
                    </div>
					
					<?php echo form_close(); ?>
              </div>
            </div>
          </div>
		</div>
    </div>
</div>
 <div id="dialog-1" style="display:none"></div>
<script>
$('#user-edit-form').on( "click", '#reset_user_password', function() {
	
	var dialog_message = '<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>This action will replace user password with random password and send new password to user\'s email. These Action will be update user password directly and cannot be recovered. Are you sure?</p>';
	$("#dialog-1").html(dialog_message);
		$("#dialog-1").dialog({
							  resizable: false,
							  height: "auto",
							  width: 300,
							  modal: true,
							  buttons: {
								"Reset User Password": function() {
									
									$.ajax({
									  dataType:'json',	
									  type: "POST",
									  url: "<?php echo base_url() . 'user/reset_user_password'; ?>",
									  data: { id: <?php echo $this->uri->segment(3); ?> },
									}).done(function(rst) {
										if(rst.status == 'success'){
											
											alert('User Password Reset Success.');
										}else{
											
											alert('User Password Reset Fail. Please contact web administrator.');
										}
									});
									
									$( this ).dialog( "close" );
								  
								},  
								Close: function() {
								  $( this ).dialog( "close" );
								}
							  }
							});
});
</script>