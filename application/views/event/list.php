<div class="content-top-breadcum">
<div class="container"> </div>
</div>   
<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>events">Events</a></li>
    </ul>
	
	
<!--  ================================ Slider Start   ======================================   --> 

<?php
if(isset($banner) && count($banner) > 0){
	$html_banner_string="";
	foreach($banner as $item){
		//shop_id have too
		$html_banner_string.= '<div class="item">
		<a href="'.$item['link'].'"><img alt="" src="'.base_url().'app_liveads88/uploads/banner/'.$item['image'].'"  class="img-responsive" width="100%"></a>
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
	
	

  <div class="row">                
	<div class="col-sm-12" id="content">
									
				<div class="testimonials-container " id="testcms">
				<div class="box-heading"><span class="heading_inner">Events</span></div>
					<div class="homepage-testcms-inner products block_content">
					
					<div class="products" id="events-list">
						<?php
							if($events){
								foreach($events as $event){
						?>
									<div class="col-sm-6 ev-item-wrapper">
									<div class="blog1">
									
									<div class="img">
									<div class="img_inner"><a href="<?php echo base_url();?>events/detail/<?php echo $event->ev_id;?>"><img alt="" src="<?php echo base_url();?>app_liveads88/uploads/event/<?php echo $event->ev_img_name;?>"></a></div>
									
									</div>
									
									<div class="content-wrapper">
									<div class="blog_date">
									<span class="day_date"><?php echo date("d", strtotime($event->ev_date)); ?></span>
									<span class="day_month"><?php echo date("M", strtotime($event->ev_date)); ?></span>
									</div>
									<div class="title"><a href="<?php echo base_url();?>events/detail/<?php echo $event->ev_id;?>"><?php echo $event->ev_title;?></a>
									<span class="comment"> (<?php echo ($event->ev_like_count > 1  ? $event->ev_like_count. ' likes' : $event->ev_like_count. ' like' );?>)</span>
									</div>
									<div class="desc"><?php echo $event->ev_description;?></div>
									
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