<div class="content-top-breadcum">
<div class="container"></div>
</div>  
<div class="container">
		
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
			<li><a href="<?php echo base_url();?>users/register">Registration</a></li>
		</ul>
				
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
				<h3 style="text-align:center;">User Registration</h3>
				<br />
					 <?php 
				  $attributes = array('role'=>'form', 'class' => 'form-horizontal form-label-left', 'id' => 'user-edit-form', 'data-parsley-validate' =>'');
				  echo form_open('', $attributes); ?>

					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_name') ? ' has-error' : ''; ?>" for="user_name">User Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_name', 'value'=>set_value('user_name'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_name', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_email') ? ' has-error' : ''; ?>" for="user_email">User Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_email', 'value'=>set_value('user_email'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_email', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_first_name') ? ' has-error' : ''; ?>" for="user_first_name">First Name 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_first_name', 'value'=>set_value('user_first_name'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_first_name')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_last_name') ? ' has-error' : ''; ?>" for="user_last_name">Last Name 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_last_name', 'value'=>set_value('user_last_name'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_last_name')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_country') ? ' has-error' : ''; ?>" for="user_country">Country <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="user_country" class="form-control col-md-7 col-xs-12">
							<option value="60" <?php echo  set_select('user_country', '60', TRUE); ?> >Malaysia</option>
							<option value="65" <?php echo  set_select('user_country', '65'); ?> >Singapore</option>
						</select>
						
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_phone') ? ' has-error' : ''; ?>" for="user_phone">Phone <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_phone', 'value'=>set_value('user_phone'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_phone', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_gender') ? ' has-error' : ''; ?>" for="">Gender
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="radio">
							<label>
								<?php echo form_radio(array('name'=>'user_gender', 'id'=>'radio-user_gender-male', 'value'=>'male', set_radio('user_gender', 'male', TRUE) )); ?>
								Male
							</label>
						</div>
						
						<div class="radio">
							<label>
								<?php echo form_radio(array('name'=>'user_gender', 'id'=>'radio-user_gender-female', 'value'=>'female', set_radio('user_gender', 'female', TRUE) )); ?>
								Female
							</label>
						</div>
						
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
							
                      </div>
                    </div>
					
					
					
					
					<div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Submit</button>
                      </div>
                    </div>
					
					<?php echo form_close(); ?>
              </div>
            </div>
          </div>
		</div>
    </div>
