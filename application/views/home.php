
<!--  ================================ Slider Start   ======================================   --> 
<div class="breadcrumb"></div>
<div class="main-slider" >
<div id="spinner"></div>
<div id="slideshow0" class="owl-carousel" style="opacity: 1;" >
  
  
    
	<?php
		if(isset($topbanners) && count($topbanners)>0){
			foreach($topbanners as $banner){
				
				if($banner['shop_id']!=""){
					$link = "shops/detail/".$banner['shop_id'];
					$target = 'target="_self"';
				}else if($banner['link']!=""){
					$link = $banner['link'];
					$target = 'target="_blank"';
				}else {
					$link = '#';
					$target = 'target=""';
				}
				
				
				echo   '<div class="item" style="margin:auto;max-height: 415px;">
						<a href="'.$link.'" '.$target.'><img src="'.base_url().$banner['image'].'" alt="aa" class="img-responsive" width="100%"/></a>
						</div>';		
			}
		}
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
<!--  ================================ Slider END   ======================================   --> 





<div class="cms_banner container">
	<div class="banner">
		<div class="cms_left_banner">	
			<a href=""><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/sub-banner1.jpg"></a>
		</div>
	</div>
	<div class="banner">
		<div class="cms_right_banner">
			<a href=""><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/sub-banner2.jpg"><span class="image_hover"></span></a>
		</div>
		
	</div>
</div>











<?php /*
<div class="hometab container">
<div id="tabs" class="htabs">
  <ul class='etabs'>
	<li class='tab'>
		
			<a href="#tab-latest">Latest</a>
		
	</li>
	<li class='tab'>
		
		<a href="#tab-bestseller">Bestseller</a>
		
	</li>
	<li class='tab'>
	
			<a href="#tab-special">Special</a>
	
	</li>
	</ul>
 </div>
 
 
 <?php if($latestproducts){ ?>
<div id="tab-latest" class="tab-content">
	<div class="box">
				<div class="box-content">
					<?php 
						$sliderFor = 5;
						$productCount = sizeof($latestproducts); 
					?>
						<?php if ($productCount >= $sliderFor): ?>
						<div class="nav-left"><div class="nav-inner-left"> </div></div>
						<div class="customNavigation">
							<a class="btn prev">&nbsp;</a>
							<a class="btn next">&nbsp;</a>
						</div>
						<div class="nav-right"><div class="nav-inner-right"> </div></div>
					<?php endif; ?>	
					<div class="box-product <?php if ($productCount >= $sliderFor){?>product-carousel<?php }else{?>productbox-grid<?php }?>" id="<?php if ($productCount >= $sliderFor){?>tablatest-carousel<?php }else{?>tablatest-grid<?php }?>">
						
						<?php $temp2=0; ?>

						<?php foreach ($latestproducts as $product) { ?>
							
							<?php if ($productCount >= $sliderFor){?>
								<?php if($productCount > 8 && $temp2 % 2 == 0) { ?>
								<div class="slider-item">
									<div>
								<?php } else if($productCount <= 8) { ?>
								<div class="slider-item">
								<?php } ?>
							<?php } else {?>
							<div class="product-items">
							<?php } ?>

								<div class="product-block product-thumb transition">
									<div class="product-block-inner">
										<div class="product-image-block-inner">
										<div class="image">
										<div class="background-overlay"> </div>
											<a href="<?php echo $product['href']; ?>">
												<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
					
											<?php if (!$product['special']) { ?>       
											<?php } else { ?>
												<span class="saleicon sale">Sale</span>         
											<?php } ?>	
											<div class="product_hover_block">
												<div class="rating">
													<?php for ($i = 1; $i <= 5; $i++) { ?>
														<?php if ($product['rating'] < $i) { ?>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
														<?php } else { ?>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
														<?php } ?>
													<?php } ?>
													</div>
											<div class="action">
											<ul class="button_group">
											<li><button class="wishlist_button" type="button" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_wishlist; ?></span></button></li>
											<li><button class="compare_button" type="button" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_compare; ?></span></button></li>
											</ul>
											</div>
											</div>
											
										</div>
										</div>
										<div class="caption">
										<h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
										<?php if ($product['price']) { ?>
												<p class="price">
												  <?php if (!$product['special']) { ?>
												  <?php echo $product['price']; ?>
												  <?php } else { ?>
												  <span class="price-old"><?php echo $product['price']; ?></span><span class="price-new"><?php echo $product['special']; ?></span> 
												  <?php } ?>
												  <?php if ($product['tax']) { ?>
												  <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
												  <?php } ?>
												</p>
											<?php } ?>
										<button class="cart_button" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
										</div>
										
									</div>
								</div>
							<?php if ($productCount >= $sliderFor){?>
								<?php if($productCount > 8 && $temp2 % 2 != 0) { ?>
								</div>
								</div>
								<?php } else if($productCount <= 8) { ?>
								</div>
								<?php } $temp2++; ?>
							<?php } else {?>
								</div>
							<?php } ?>

						<?php } ?>

						<?php if($productCount > 8 && $temp2 % 2 != 0) {?>
							</div>
							</div>
						<?php }?>
					</div>
				</div>
			 </div>
			  <span class="tablatest_default_width" style="display:none; visibility:hidden"></span>
 </div>
<?php } ?>

 <div id="tab-bestseller" class="tab-content">
 </div>
 <div id="tab-special" class="tab-content">
 </div>
 
 </div>
 <script type="text/javascript">
$('#tabs a').tabs();
</script> 
*/ ?>



<div class="video_outer"  style="background-position: 50% 680.4px;">
<div class="video_inner container">
<div class="video_content_inner">
<div class="videotext">New Designer<span class="text_inner">Men's</span></div>
<div class="video_text2">Clothing</div>
<div class="video_text3">The men's clothing store is updated regularly with seasonal trends and features.</div>
</div>
</div>
</div>



<div class="container">
  <div class="row">                
	<div class="col-sm-12" id="content">
	
				<div class="testimonials-category " id="testimonial">
				<div class="static_left">
				<div class="category-title"><h5>Promotion Products</h5>
				</div>
				</div>
				<div class="static_right">
				<div class="homepage-testimonials-inner products block_content">
				<div class="products product-carousel" id="testimonial-carousel">
				
				<?php
				
					if(isset($promotion_items) && count($promotion_items) > 0){
						foreach($promotion_items as $item){
							echo '
								<div class="slider-item">
								<div class="cate-block category2">
								<a href="'. base_url().'promotions/detail/'.$item->pro_id.'"><span class="cate-banner"><img style="min-height: 235px;" alt="" src="'. base_url().'app_liveads88/uploads/product/'.$item->pro_image_name.'"></span>
								<span class="banner-hover"><span>'. (strlen($item->pro_title) > 18 ? substr($item->pro_title, 0 ,15).'...' : $item->pro_title).'</span>
								<span class="price"></span>
								<span class="description">'.(strlen(strip_tags($item->pro_description)) > 50 ? substr(strip_tags($item->pro_description), 0 , 45) . '...' : strip_tags($item->pro_description)).'</span></span></a></div>
								</div>
								
							 ';
						}
					}
				?>
				
				
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat2.jpg"></span>
				<span class="banner-hover"><span>shoes</span>
				<span class="price">25% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat3.jpg"></span>
				<span class="banner-hover"><span>watch</span>
				<span class="price">35% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat4.jpg"></span>
				<span class="banner-hover"><span>scarf</span>
				<span class="price">10% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat5.jpg"></span>
				<span class="banner-hover"><span>cap</span>
				<span class="price">25% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat6.jpg"></span>
				<span class="banner-hover"><span>purse</span>
				<span class="price">45% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				<div class="slider-item">
				<div class="cate-block category2">
				<a href="#"><span class="cate-banner"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/cat7.jpg"></span>
				<span class="banner-hover"><span>shoes</span>
				<span class="price">25% off</span>
				<span class="description">Lorem ipsum dolor sit amet quam odio tempus ac varius tellus varius ac </span></span></a></div>
				</div>
				</div>
				<div class="customNavigation"><a class="btn prev">&nbsp;</a> <a class="btn next">&nbsp;</a></div>
				</div>
				</div>
				<div class="testimonial_default_width" style="display: none; visibility: hidden;">&nbsp;</div>
				</div>
				
				
				
				
				
				<div class="testimonials-container " id="testcms">
				<div class="box-heading"><span class="heading_inner">Advertisement</span></div>
				<div class="homepage-testcms-inner products block_content">
				<div class="products product-carousel" id="testcms-carousel">
				
				<?php
				if(isset($bottombanners) && count($bottombanners) > 0){
					foreach($bottombanners as $banner){
						
						echo '
								<div class="slider-item" style="text-align:center;">
									<a href="#"><img alt="" src="'.base_url().$banner['image'].'" width="98%"/></a>
								</div>
						
							 ';
					}
				}
				?>
				<?php /*
				<div class="slider-item">
				<div class="blog1">
				<div class="img">
				<div class="img_inner"><a href="#"><img alt="" src="<?php echo base_url();?>assets/themes/image/catalog/blog1.jpg"></a></div>
				</div>
				<div class="content-wrapper">
				<div class="blog_date"><span class="day_date">18</span><span class="day_month">Mar</span></div>
				<div class="title"><a href="#">There are many variations of passages of Lorem</a></div>
				<div class="desc">Specimen book. It has survived not only five centuries, but also the leap into electronic.</div>
				<div class="comment">5 Comments - post by admin</div>
				</div>
				</div>
				</div>
				*/ ?>
				
				</div>
				<div class="customNavigation"><a class="btn prev">&nbsp;</a> <a class="btn next">&nbsp;</a></div>
				</div>
				<div class="testcms_default_width" style="display: none; visibility: hidden;">&nbsp;</div>
				</div>
	
	
	
				<?php
				if(isset($brands) && count($brands) > 0){
				?>	
				
				<div id="carousel-0" class="banners-slider-carousel">
				<div class="box-heading"><span class="heading_inner">Our Partners</span></div>
					<div class="customNavigation">
						<a class="btn prev">&nbsp;</a>
						<a class="btn next">&nbsp;</a>
					</div>
				  <div class="product-carousel" id="module-0-carousel">
					
				  <?php
					foreach($brands as $brand){
						
						if($brand['shop_id']!=""){
							$link = "shops/detail/".$brand['shop_id'];
							$target = 'target="_self"';
						}else if($brand['shop_website']!=""){
							$link = $brand['shop_website'];
							$target = 'target="_blank"';
						}else {
							$link = '#';
							$target = 'target=""';
						}
						
						echo '
							<div class="slider-item" style="width: 232px;">
							<div class="product-block" style="height: 60px;">
							<div class="product-block-inner">
							<a href="'.$link.'" '.$target.'><img alt="RedLeaf" src="'.base_url().$brand['image'].'" height="60"></a>
							</div></div></div>
							 ';
						
					}
				  ?>
					
				  
				  </div>
				</div>
				<?php
				}
				?>
				<span class="module_default_width" style="display: none; visibility: hidden;"></span>
	</div>
   </div>
</div>