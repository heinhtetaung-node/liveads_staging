<style>
#content {
    margin-bottom: 20px;
    min-height: 400px;
}
</style>

<div class="content-top-breadcum">
<div class="container"></div>
</div>   

<div class="container">
		
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
			<li><a href="<?php echo base_url();?>users/login">Login</a></li>
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
			<div id="content" class="col-sm-12">
			<br /><br />
			<div class="col-sm-3">&nbsp;
			</div>
			
			<div class="col-sm-6" style="margin-top: 30px;">
			
			<div class="well">
		<h3>Returning User</h3>
		<p><strong>I am a returning User</strong></p>
		
	  
        
          <form name="form" id="form" method="POST" action="<?php echo base_url(); ?>users/login_validate">
            <br />
			 <?php echo $this->session->flashdata('msg'); ?>
            <div id="login_input" class="form-group">
			  <label class="control-label" >E-Mail Address</label>	
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>" required="" />
			<?php echo form_error('email');?>
		   </div>
            <div id="login_input" class="form-group">
			  <label class="control-label" >Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>" required="" />
			<?php echo form_error('password');?>
		   </div>

            <div class="form-group">
  
			<button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>      
            </div>
           
          </form>
		  <a href="<?php echo base_url(); ?>users/register" >Create User Account</a>
          <!-- form -->
      
	</div>
			
			
			</div>
			
			<div class="col-sm-3">&nbsp;
			</div>
   	
  </div>
  </div>
  </div>


