<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>shops">Shop List</a></li>
    </ul>

  <div class="row">                
	<div class="col-sm-12" id="content">
									
				<div class="testimonials-container " id="testcms">
				<div class="box-heading"><span class="heading_inner">Shop List</span></div>
					<div class="homepage-testcms-inner products block_content">
					
					<div class="products" id="shops-list">
						<?php
							if($shops){
								foreach($shops as $shop){
						?>
									<div class="col-sm-6 gd-item-wrapper">
									<div class="blog1">
									
									<div class="img">
									<div class="img_inner"><a href="<?php echo base_url();?>shops/detail/<?php echo $shop->cu_id;?>"><img alt="" src="<?php echo base_url();?>app_liveads88/uploads/customer/<?php echo $shop->cu_image_name;?>"></a></div>
									<div class="title"><a href="<?php echo base_url();?>shops/detail/<?php echo $shop->cu_id;?>"><?php echo $shop->cu_name;?></a></div>
									</div>
									</div>
									</div>
						<?php		
								} 
							}
						?>
						
					</div>
					
					</div>
				<div class="testcms_default_width" style="display: none; visibility: hidden;">&nbsp;</div>
				</div>
	
	
	
	
				
	</div>
   </div>
</div>