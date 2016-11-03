<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>coupons">Coupons</a></li>
    </ul>
	
		
  <div class="row">                
	<div class="col-sm-12" id="content">
		<div class="rows coupon-detail-wrapper">
			<div class="coupon-detail-title">
				<?php echo $coupon->cp_name;?>
				<span class="comment"> (<?php echo ($coupon->cp_like_count > 1  ? $coupon->cp_like_count. ' likes' : $coupon->cp_like_count. ' like' );?>)</span>
			</div>
			<?php
				if($coupon){
					
			?>
						<div class="col-sm-4">
						<div class="img_inner"><img alt="" src="<?php echo base_url();?>app_liveads88/uploads/coupon/<?php echo $coupon->cp_img_name;?>"></div>
						</div>
						
						<div class=" col-sm-8">
						
						<div class="desc"><?php echo $coupon->cp_description;?></div>
						
						</div>
						
			<?php		
				}
			?>
		</div>
	</div>
   </div>
</div>