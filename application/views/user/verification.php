<div class="content-top-breadcum">
<div class="container"></div>
</div>  
<div class="container">
		
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
			<li><a href="<?php echo base_url();?>users/verification">Verification</a></li>
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
				<h3 style="text-align:center;">User Verification</h3>
				<br />
					 <?php 
				  $attributes = array('role'=>'form', 'class' => 'form-horizontal form-label-left', 'id' => 'user-edit-form', 'data-parsley-validate' =>'');
				  echo form_open('', $attributes); ?>

					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('user_email') ? ' has-error' : ''; ?>" for="user_email">User Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'user_email', 'value'=>set_value('user_email'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'user_email', 'required'=>'required')); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 <?php echo form_error('code') ? ' has-error' : ''; ?>" for="code">Verification Code 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo form_input(array('name'=>'code', 'value'=>set_value('code'), 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'code')); ?>
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
