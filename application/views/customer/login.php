<style>
#content {
    margin-bottom: 20px;
    min-height: 400px;
}
</style>
<div class="container">
        <div class="row">
			<div id="content" class="col-sm-12">
			<br /><br />
			<div class="col-sm-3">&nbsp;
			</div>
			
			<div class="col-sm-6" style="margin-top: 30px;">
			
			<div class="well">
		<h3>Returning Customer</h3>
		<p><strong>I am a returning customer</strong></p>
		
	  
        
          <form name="form" id="form" method="POST" action="<?php echo base_url(); ?>customer/login_validate">
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
		  <a href="<?php echo base_url(); ?>advertise/register" >Create Customer Account</a>
          <!-- form -->
      
	</div>
			
			
			</div>
			
			<div class="col-sm-3">&nbsp;
			</div>
   	
  </div>
  </div>
  </div>


