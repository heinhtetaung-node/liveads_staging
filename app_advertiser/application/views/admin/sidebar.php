 <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url();?>" class="site_title"><i class="fa fa-home"></i> <span>BPLife</span></a>
          </div>
          <div class="clearfix"></div>

         
		<?php
		if($this->session->userdata('isLogin')){
			// authorize
		?>
		<!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">
				 <li><a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-bar-chart"></i>Dashboard</a>
				 
				<?php 
				foreach($navi as $n){ ?>
					
					<li><a href="<?php echo base_url();?>Ads/index/<?php echo $n['adsname']; ?>"><i class="fa fa-dollar"></i><?php echo $n['adsname']; ?></a>
					
				<?php
				} ?>
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

     