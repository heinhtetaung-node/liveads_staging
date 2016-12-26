<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BPLife | Login</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url();?>assets/css/admin_custom.css" rel="stylesheet">



  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form name="form" id="form" method="POST" action="<?php echo base_url(); ?>Admin/login_validate">
            <h1>Login </h1>
			 <?php echo $this->session->flashdata('msg'); ?>
            <div id="login_input">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>" required="" />
			<?php echo form_error('email');?>
		   </div>
			
            <div id="login_input">
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>" required="" />
			<?php echo form_error('password');?>
		   </div>

            <div>
  
			<button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>      
            </div>
           
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      
    </div>
  </div>

</body>

</html>
