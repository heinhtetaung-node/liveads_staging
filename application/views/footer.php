<footer>
	<div class="footer-top">
	
	
	
	<div class="simple-marquee-container">
		
		<div class="marquee">
			<ul class="marquee-content-items">
				
			</ul>
		</div>
	</div>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/marquee.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/example.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/marquee.js"></script>
	<script>
		$(function (){
			$.ajax({
					url: "<?php echo base_url();?>home/getNews",
					dataType: "json",
					type: "GET",
					success: function(data) {
						$.each(data, function(k, v) {
						  $('.marquee-content-items').append('<li>'+v+'</li>');
						});
						/*
						response($.map(data, function(item) {
							return {
								label: item.label,
								value: item.value,
								id: item.id
							};
						}));
						*/
						callmarque();
					},
					error: function(xhr) {
						
					}
				});
				
			var callmarque = function(){$('.simple-marquee-container').SimpleMarquee()}; 	
			
		});
	</script>
	
	
	
	
	<?php /*
	<div class="home-about-me container">
	<div class="tm-about-text">
	<div class="footer_title1">You like this ?<span class="footer_title2">Purchase Glorious Fashion </span> <span class="Footer_title3">Responsive Opencart Theme</span></div>
	</div>
	<div class="aboutme-read-more"><a href="#" title="Purchase">Purchase Now!</a></div>
	</div>
	*/ ?>
	</div>
	
	<div id="footer" class="container">
		<div class="row">
					<div class="col-sm-3 column" id="footer_aboutus_block"><h5>About US</h5>
					
					<ul class="tm-about-description">
					<li>My Live is one of the Malaysia's largest online marketplace, to become Asia's leading online marketplace. MY Live provides a powerful online marketplace platform that allows its buyer enjoy highly secure and convenient shopping experience.</li>
					</ul>
					</div>
					
					<div class="col-sm-3 column">
					<h5 class="">Category</h5>
					<ul class="list-unstyled">
					
						<li class="">
							<a href="<?php echo base_url();?>coupons">Coupons</a>
						</li>
						<li class="">
							<a href="<?php echo base_url();?>events">Events</a>
						</li>
						<li class="">
							<a href="<?php echo base_url();?>jobs">Jobs</a>
						</li>
						<li class="">
							<a href="<?php echo base_url();?>promotions">Promotions</a>
						</li> 
						<li class="">
							<a href="<?php echo base_url();?>shops">Shops</a>
						</li> 
					</ul>
				  </div>
				  
				  
				  <div class="col-sm-3 column">
					<h5 class="">Information</h5>
					<ul class="list-unstyled">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				  </div>
					
					
					<div class="col-sm-3 column last"><h5>Contact Us</h5>
					<ul>
					<li class="address">Megnor Computer Private Limited, 507-Union Trade Center, Beside Apple Hospital Udhana ,Ring Road, Surat, India.</li>
					<li class="phoneno">(91)-8866888222</li>
					<li class="email"><a href="#">support@templatemela.com</a></li>
					</ul>
					</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			<div class="footer_bottom"><div class="footer_bottom_inner container"><div class="footer_left"><h5>Payment Block</h5>
			<ul class="payment_block">
			<li class="visa"><a href="#"> </a></li>
			<li class="mastro"><a href="#"> </a></li>
			<li class="paypal"><a href="#"> </a></li>
			<li class="amex"><a href="#"> </a></li>
			</ul>
			</div>

			<div class="footer_center"></div>
			<div class="footer_right"><h5>Follow Us</h5>
			<ul class="social_block">
					<li class="facebook">		<a href="#"><i class="fa fa-facebook"></i></a>		</li>
					<li class="twitter">		<a href="#"><i class="fa fa-twitter"></i></a>		</li>
					<li class="rss">		<a href="#"><i class="fa fa-google-plus"></i></a>		</li>
					<li class="linkin">		<a href="#"><i class="fa fa-linkedin"></i></a>		</li>
					</ul>
					</div>
			</div>
			</div>
	
			<p>Powered By <a href="#">SGDATAHUB</a> LIVE &copy; 2016</p>
</footer>
<a class="top_button" href="" title="Back To Top" style="display: inline;">TOP</a>
</body>
</html>