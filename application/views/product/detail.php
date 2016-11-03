<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>promotions">Product</a></li>
    </ul>
	
	
  <div class="row">                
	<div class="col-sm-12" id="content">
		<div class="rows product-detail-wrapper">
			<div class="product-detail-title">
				<?php echo $product->pro_title;?>
				<span class="comment"> (<?php echo ($product->pro_like_count > 1  ? $product->pro_like_count. ' likes' : $product->pro_like_count. ' like' );?>)</span>
			</div>
			<?php
				if($product){
					
			?>
						<div class="col-sm-4">
						<div class="img_inner"><img alt="" src="<?php echo base_url();?>app_liveads88/<?php echo $image[0]->pro_img_name;?>"></div>
						</div>
						
						<div class=" col-sm-8">
						
						<div class="desc"><?php echo $product->pro_description;?></div>
						
						</div>
						
			<?php		
				}
			?>
		</div>
	</div>
   </div>
</div>