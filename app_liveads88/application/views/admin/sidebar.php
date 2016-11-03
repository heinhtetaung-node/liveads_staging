 <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url();?>" class="site_title"><i class="fa fa-home"></i> <span>BPLife</span></a>
          </div>
          <div class="clearfix"></div>

         
		<?php
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		?>
		<!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">
				 <li><a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-bar-chart"></i>Dashboard</a>
				 <li><a href="<?php echo base_url();?>adscomponent"><i class="fa fa-dollar"></i>Ads Component</a>
				 <li><a href="<?php echo base_url();?>customer"><i class="fa fa-user"></i>Customers</a>
				 <li><a href="<?php echo base_url();?>shopflyer"><i class="fa fa-user"></i>Flyer</a>
				 <li><a href="<?php echo base_url();?>user"><i class="fa fa-users"></i>Users</a>
				 <li><a href="<?php echo base_url();?>referrer"><i class="fa fa-users"></i>Referrer</a>
				  <li><a href="<?php echo base_url();?>event"><i class="fa fa-institution"></i>Events</a>
				  <li><a href="<?php echo base_url();?>job"><i class="fa fa-laptop"></i>Jobs</a>
				  <li><a href="<?php echo base_url();?>product"><i class="fa fa-briefcase"></i>Products</a>
				  <li><a href="<?php echo base_url();?>coupon"><i class="fa fa-fax"></i>Coupons</a>
				  <li><a href="<?php echo base_url();?>coupon/redeem_report"><i class="fa fa-fax"></i>Coupon Usage Report</a>
				  <li><a href="<?php echo base_url();?>splash"><i class="fa fa-fax"></i>Splash</a>
				  <li><a href="<?php echo base_url();?>flashnews"><i class="fa fa-newspaper-o"></i>Flash News</a>
				  <li><a href="<?php echo base_url();?>flashdealads"><i class="fa fa-newspaper-o"></i>Flash Deal Ads</a>
				  <li><a href="<?php echo base_url();?>banner"><i class="fa fa-newspaper-o"></i>Banner</a>
				  <li><a href="<?php echo base_url();?>category"><i class="fa fa-newspaper-o"></i>Category</a>
				  <li><a href="<?php echo base_url();?>pushnotification"><i class="fa fa-newspaper-o"></i>Push Notification</a>
				  
				  <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-newspaper-o"></i>Logout</a>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
		<?php	
		}else if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		?>
		<!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">

				<li><a href="<?php echo base_url();?>customer/profile"><i class="fa fa-user"></i>Customers Profile</a>
				<li><a href="<?php echo base_url();?>flashdealads/purchase"><i class="fa fa-newspaper-o"></i>Purchase Flash Deal Ads</a>
				<li><a href="<?php echo base_url();?>flashdealads/purchaselist"><i class="fa fa-newspaper-o"></i>Flash Deal Ads List</a>
				<li><a href="<?php echo base_url();?>customer/logout"><i class="fa fa-newspaper-o"></i>Logout</a>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
		<?php
		}
		?>	
          
          <!-- /menu footer buttons -->
        </div>
</div>
<div class="top_nav">
        <div class="nav_menu">
          <nav role="navigation" class="">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>           
          </nav>
        </div>
</div>

     