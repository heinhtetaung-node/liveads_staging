<style>

.desc_wrapper{
	padding:10px 0;
}
</style>
<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>shops">Shops</a></li>
    </ul>
	
	
  <div class="row">                
	<div class="col-sm-12" id="content">
		<div class="rows shop-detail-wrapper">
			<div class="shop-detail-title">
				<H3 STYLE="text-align:center;"><?php echo $shop->cu_name;?></H3>
				<br />
			</div>
			
			
			<?php
				if($shop){
					
			?>
						<div class="col-sm-6">
							
							
						<!--  ================================ Slider Start   ======================================   --> 

						<?php
						if(isset($banner) && count($banner) > 0){
							$html_banner_string="";
							foreach($banner as $item){
								//shop_id have too
								$html_banner_string.= '<div class="item">
								<img alt="" src="'.base_url().'app_liveads88/'.$item->sp_name.'"  class="img-responsive" width="100%">
								</div>';
							}
							?>
								<div class="main-slider">
									<div id="spinner"></div>
									<div id="slideshow0" class="owl-carousel" style="opacity: 1;">
									  
									  
										
										<?php
											echo $html_banner_string;
										?>
									  
									</div>
								</div>
									<script type="text/javascript">
									$('#slideshow0').owlCarousel({
										items: 6,
										autoPlay: 4000,
										singleItem: true,
										navigation: true,
										navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
										pagination: true	
									});
									</script>
									<script type="text/javascript">
										// Can also be used with $(document).ready()
										$(window).load(function() {		
										  $("#spinner").fadeOut("slow");
										});	
									</script> 
							
							<?php
						}
						?>		
						<!--  ================================ Slider END   ======================================   --> 
							
							
						</div>
						
						<div class=" col-sm-6">
							<div class="desc_wrapper row">
							<div class=" col-sm-12">About The Seller</div>
							<div class=" col-sm-12"><?php echo $shop->cu_description;?></div>
							</div>
						
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Address</div>
								<div class=" col-sm-9"><?php echo $shop->cu_address;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Tel</div>
								<div class=" col-sm-9"><?php echo $shop->cu_mobile;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Email</div>
								<div class=" col-sm-9"><?php echo $shop->cu_email;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Website</div>
								<div class=" col-sm-9"><?php echo $shop->cu_website;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Services</div>
								<div class=" col-sm-9"><?php echo $shop->cu_service_type;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Branch</div>
								<div class=" col-sm-9"><?php echo $shop->cu_branch;?></div>
							</div>
							
							<div class="desc_wrapper row">
								<div class=" col-sm-3">Hours of Operation</div>
								<div class=" col-sm-9"><?php echo $shop->cu_hour;?></div>
							</div>
						
						
						</div>
						
			<?php		
				}
			?>
		</div>
	</div>
   </div>
</div>