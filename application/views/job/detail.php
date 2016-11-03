<div class="content-top-breadcum">
<div class="container"> </div>
</div>   

<div class="container">
	<ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo base_url();?>jobs">Jobs</a></li>
    </ul>
	
	
  <div class="row">                
	<div class="col-sm-12" id="content">
		<div class="rows job-detail-wrapper">
			<div class="job-detail-title">
				<?php echo $job->jb_name;?>
				<span class="comment"> (<?php echo ($job->jb_like_count > 1  ? $job->jb_like_count. ' likes' : $job->jb_like_count. ' like' );?>)</span>
			</div>
			<?php
				if($job){
					
			?>
						<div class="col-sm-4">
						<div class="img_inner"><img alt="" src="<?php echo base_url();?>app_liveads88/uploads/brand/<?php echo $job->cu_logo_name;?>" height="100"></div>
						</div>
						
						<div class=" col-sm-8">
						<div class="title">Location: <?php echo $job->jb_location;?> </div>
						<div class="title">Salary: <?php echo $job->jb_salary;?> </div>
						<div class="blog_date">
							Created: <?php echo date("d M", strtotime($job->jb_created)); ?>
						</div>
						<div class="desc">Description: <?php echo $job->jb_description;?></div>
						<div class="desc">Email: <?php echo $job->jb_email;?></div>
						<div class="desc">Phone: <?php echo $job->jb_phone;?></div>
						
						</div>
						
						
			<?php		
				}
			?>
		</div>
	</div>
   </div>
</div>