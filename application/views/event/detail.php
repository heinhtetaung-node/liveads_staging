<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>events">Events</a></li>
    </ul>
	
	
  <div class="row">                
	<div class="col-sm-12" id="content">
		<div class="rows event-detail-wrapper">
			<div class="event-detail-title">
				<?php echo $event->ev_title;?>
				<span class="comment"> (<?php echo ($event->ev_like_count > 1  ? $event->ev_like_count. ' likes' : $event->ev_like_count. ' like' );?>)</span>
			</div>
			<?php
				if($event){
					
			?>
						<div class="col-sm-4">
						<div class="img_inner"><img alt="" src="<?php echo base_url();?>app_liveads88/uploads/event/<?php echo $event->ev_img_name;?>"></div>
						</div>
						
						<div class=" col-sm-8">
						
						<div class="desc"><?php echo $event->ev_description;?></div>
						
						</div>
						
			<?php		
				}
			?>
		</div>
	</div>
   </div>
</div>