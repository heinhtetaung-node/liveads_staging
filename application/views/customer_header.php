<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="LIVE" name="description">
 
<title>LIVE</title>
 
<link rel="icon" href="">

<!-- Grab Google CDN's jQuery, fall back to local if offline -->
<script src="<?php echo base_url();?>assets/themes/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/themes/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<link href="<?php echo base_url();?>assets/themes/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,400italic,300italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>assets/themes/stylesheet/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/themes/stylesheet/megnor/carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/themes/stylesheet/megnor/custom.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/themes/stylesheet/megnor/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/themes/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url();?>assets/themes/stylesheet/custom.css" rel="stylesheet" type="text/css" />


<script src="<?php echo base_url();?>assets/themes/javascript/common.js" type="text/javascript"></script>
<!-- Megnor www.templatemela.com - Start -->
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/megnor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/jquery.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/scrolltop.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/jquery.formalize.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/jstree.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/megnor/tabs.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>


<body class="home">
<header>
  <div class="container">
    <div class="row">
		<div class="header_inner">
			<div class="header_left">
				<div class="header_left_top">
					<div class="contact_no">Contact To <span class="hidden-xs hidden-sm hidden-md">+91 8866888222</span></div>
				</div>
	<div class="header_left_bottom">
		 <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
      <li class="dropdown myaccount"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs hidden-sm hidden-md">My Account</span><i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
			<?php 
				if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
					echo '<li><a href="'.base_url().'/customer/profile'.'">Profile</a></li>';
					echo '
						<li><a href="'.base_url() . '/customer/logout' . '">Logout</a></li>
						';
				}else{
					echo '
						<li><a href="'.base_url() . 'advertise/register">Register</a></li>
						<li><a href="'.base_url() . 'customer/login">Login</a></li>
						';
				}
			?>
          </ul>
        </li>
        
       <?php /* <li><a href="#" title="Checkout"><span class="hidden-xs hidden-sm hidden-md">Checkout</span></a></li>*/?>
      </ul>
    </div>
	</div>
	</div>
	
	<div class="header_center">
	
        <div id="logo">
          <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/image/mylive.png" title="LIVE" alt="LIVE" class="img-responsive" /></a>
        </div>
    
	</div>
	
	<div class="header_right">
	<?php /*
	 <div class="header_right1">
	  <div class="header-cart">
		<div class="btn-group btn-block" id="cart">
		  <button class="btn btn-inverse btn-block btn-lg dropdown-toggle" data-loading-text="Loading..." data-toggle="dropdown" type="button"><span id="cart-total">0</span></button>
		  <ul class="dropdown-menu pull-right cart-menu" style="display: none;">
				<li>
			  <p class="text-center">Your shopping cart is empty!</p>
			</li>
			  </ul>
		</div>
		</div>
	  </div>
	  */?>
	<div class="header_right2">
	<?php /*
	<div class="header_right_top">
	 <div class="search">
		<div class="input-group" id="search">
			<input type="text" class="form-control input-lg" placeholder="Search here..." value="" name="search">
			<span class="input-group-btn">
				<button class="btn btn-default btn-lg" type="button"></button>
			  </span>
		</div>
	 </div>
	</div>*/ ?>
	<div class="header_right_bottom">
	  <div class="pull-left language">
			  <div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-link dropdown-toggle">
						<?php 
							if($this->session->userdata('site_lang')){
								if($this->session->userdata('site_lang') == 'chinese'){
									echo '<img title="Chinese" alt="Chinese" src="' . base_url() .'assets/themes/image/flags/cn.png">';
								}else{
									echo '<img title="English" alt="English" src="' . base_url() .'assets/themes/image/flags/gb.png">';
								}
							}else{
								echo '<img title="English" alt="English" src="' . base_url() .'assets/themes/image/flags/gb.png">';
							}
						?>
								<span class="hidden-xs hidden-sm hidden-md">Language</span> <i class="fa fa-caret-down"></i></button>
				<ul class="dropdown-menu language-menu">
						<li><a href="<?php echo base_url(); ?>LangSwitch/switchLanguage/english"><img title="English" alt="English" src="<?php echo base_url();?>assets/themes/image/flags/gb.png"> English</a></li>
						<li><a href="<?php echo base_url(); ?>LangSwitch/switchLanguage/chinese"><img title="English" alt="English" src="<?php echo base_url();?>assets/themes/image/flags/cn.png"> Chinese</a></li>
					  </ul>
			  </div>
			  <?php if($this->session->userdata('cart')!=""){ ?>
			  <a href="<?php echo base_url(); ?>advertise/checkout"  style="color:inherit" >
					<i style="font-size:20px" class="fa fa-shopping-cart social_icon shoppingicon"><span style="font-size:7px"class="label label-warning"><?php echo sizeof($this->session->userdata('cart')); ?></span></i>                                                           
				</a>
			  <?php } ?>
			</div>
			<?php /*
				<div class="pull-left currency">
			<form id="currency" enctype="multipart/form-data" method="post" action="http://opencart.templatemela.com/OPC08/OPC080185/OPC1/index.php?route=common/currency/currency">
			  <div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-link dropdown-toggle">
										<strong>$</strong>
						<span class="hidden-xs hidden-sm hidden-md">Currency</span> <i class="fa fa-caret-down"></i></button>
				<ul class="dropdown-menu currency-menu">
							  <li><button name="EUR" type="button" class="currency-select btn btn-link btn-block">€ Euro</button></li>
									<li><button name="GBP" type="button" class="currency-select btn btn-link btn-block">£ Pound Sterling</button></li>
									<li><button name="USD" type="button" class="currency-select btn btn-link btn-block">$ US Dollar</button></li>
							</ul>
			  </div>
			  <input type="hidden" value="" name="code">
			  <input type="hidden" value="http://opencart.templatemela.com/OPC08/OPC080185/OPC1/index.php?route=common/home" name="redirect">
			</form>
			</div>
			*/ ?>
	 </div>
	 </div>
	</div>
      
    
    </div>
  	</div>
  </div>
</header>







<nav class="nav-container" role="navigation">
<div class="nav-inner">
<div class="nav-inner-container">

<div class="container">
	<div id="menu" class="main-menu">

	<div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>

	  <ul class="main-navigation">
		<li> <a href="<?php echo base_url();?>">Home</a></li>
		<?php /*
		<li class="level0">
			<a href="http://opencart.templatemela.com/OPC08/OPC080185/OPC1/index.php?route=product/category&amp;path=20">Clothing</a>
			<span class="active_menu"></span>
			<div class="categorybg">
			<!--	<span class="active_menu"></span>-->
			<div class="categoryinner">

			<ul>
			<li class="categorycolumn"><b><a href="#" class="submenu1">Women</a></b>


			<div class="cate_inner_bg">
			<ul>
			<li style="padding-right:6px;"><a href="#" class="submenu2">Kurtis</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">jeans</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">tunic</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">t-shirt</a></li>
			</ul>
			</div>


			</li>
			</ul>
			<ul>
			<li class="categorycolumn"><b><a href="#" class="submenu1">Men</a></b>


			<div class="cate_inner_bg">
			<ul>
			<li style="padding-right:6px;"><a href="#" class="submenu2">Shirts</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">Jeans</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">t-shirt</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">blazers</a></li>
			</ul>
			</div>


			</li>
			</ul>
			<ul>
			<li class="categorycolumn"><b><a href="#" class="submenu1">Kids</a></b>


			<div class="cate_inner_bg">
			<ul>
			<li style="padding-right:6px;"><a href="#" class="submenu2">t-shirt</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">jeans</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">capris</a></li>
			<li style="padding-right:6px;"><a href="#" class="submenu2">Baby suit</a></li>
			</ul>
			</div>


			</li>
			</ul>



			</div>
			</div>

		</li>
		*/ ?>
		<li class="level0">
			<a href="<?php echo base_url();?>coupons">Coupons</a>
  		</li>
		<li class="level0">
			<a href="<?php echo base_url();?>events">Events</a>
  		</li>
		<li class="level0">
			<a href="<?php echo base_url();?>jobs">Jobs</a>
		</li>
		<li class="level0">
			<a href="<?php echo base_url();?>promotions">Promotions</a>
		</li> 
		<li class="level0">
			<a href="<?php echo base_url();?>shops">Shops</a>
		</li> 
		<li class="level0">
			<a href="<?php echo base_url();?>advertise">Advertise</a>
		</li> 
  </ul>
	  
	</div>
	
<!--  =============================================== Mobile menu start  =============================================  -->	
<div class="nav-container1 main-menu" id="res-menu">
<div class="main-menu1 nav-container2" id="res-menu1">
	<div class="nav-responsive" style="display: none;"><span>Menu</span><div class="expandable"></div></div>
    <ul class="main-navigation">
		<?php /*
          <li class=""><a href="#">Clothing</a>
      
                <ul>
                              										
				<li class="">
									<a class="activSub" href="#">Women</a> 					
				
												<ul>
									<li><a href="#">Kurtis</a></li>
				 					<li><a href="#">jeans</a></li>
				 					<li><a href="#">tunic</a></li>
				 					<li class="last"><a href="#">t-shirt</a></li>
				 				</ul>
							  		  
			</li>		
                              										
				<li class="">
									<a class="activSub" href="#">Men</a> 					
				
												<ul>
									<li><a href="#">Shirts</a></li>
				 					<li><a href="#">Jeans</a></li>
				 					<li><a href="#">t-shirt</a></li>
				 					<li class="last"><a href="#">blazers</a></li>
				 				</ul>
							  		  
			</li>		
                              										
				<li class="lastExpandable">
									<a class="activSub" href="#">Kids</a> 					
				
												<ul>
									<li><a href="#">t-shirt</a></li>
				 					<li><a href="#">jeans</a></li>
				 					<li><a href="#">capris</a></li>
				 					<li class="last"><a href="#">Baby suit</a></li>
				 				</ul>
							  		  
			</li>		
                            </ul>
        
          </li>
		  */ ?>
        <li><a href="<?php echo base_url();?>coupons">Coupons</a>
          </li>
        <li><a href="<?php echo base_url();?>events">Events</a>
          </li>
        <li><a href="<?php echo base_url();?>jobs">Jobs</a>
          </li>
		<li><a href="<?php echo base_url();?>promotions">Promotions</a>
          </li>
        <li class="last"><a href="<?php echo base_url();?>shops">Shops</a>
          </li>
        </ul>
	</div>

</div>	
<!--  ================================ Mobile menu end   ======================================   --> 
<!-- ======= Menu Code END ========= -->
</div>
</div>
</div>
</nav>   
<!--
<div class="content-top-breadcum" style="display: none;">
<div class="container"> </div>
</div>   
--!>