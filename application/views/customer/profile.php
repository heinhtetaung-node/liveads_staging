  <script src = "https://maps.googleapis.com/maps/api/js?sensor=false"></script>

   <script>
		 function initialize(lat_data, long_data, zoom_data){
			 
            var mapOptions = {
                center: new google.maps.LatLng(lat_data, long_data),
                zoom: zoom_data,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        }

        //google.maps.event.addDomListener(window, 'load', function(){ initialize(1.3455933, 103.822443, 12); });
		
    </script>
	
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		var zipcode = $("#cu_postal").val();
		if(zipcode != "" && zipcode > 0 && (zipcode >>> 0 === parseFloat(zipcode))){
			
			 $.ajax({
			   url : "http://maps.googleapis.com/maps/api/geocode/json?components=postal_code:"+zipcode+"&sensor=false",
			   method: "POST",
			   success:function(data){
				   if(data.status == 'OK'){
				   latitude = data.results[0].geometry.location.lat;
				   longitude= data.results[0].geometry.location.lng;
				   initialize(latitude, longitude, 19);
				   }else{
					   bootbox.alert('incorrect postal code');
				   }
			   }

			});
		}
	});
	</script>
	
<div class="container">
 
    <div class="row">
		<div id="content" class="col-sm-12">
		<br /><br />
        <h3>Customer Profile</h3>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br>
					<?php //print_r($customer); ?>
					<div class="form-group">      
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Category </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> 
							<?php 
								foreach($category as $c){
									if($customer->category_id == $c->id){
										echo $c->name;
									}
								} 
							?>
						</div>
                    </div>
					<input type="hidden" name="old_cu_image" value="<?php echo $customer->cu_image_name ; ?>">
					<input type="hidden" name="old_brand_image" value="<?php echo $customer->cu_logo_name ; ?>">
					<input type="hidden" name="old_brand_image" id="cu_postal" value="<?php echo $customer->cu_postal ; ?>">
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Name </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_name; ?> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Email </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_email; ?> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Mobile </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_mobile; ?> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Adderss </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_address; ?> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Postal Code </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_postal; ?> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Website </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_website; ?> </div>
					</div>
					
	
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="height:300px;">
                      <div id="map-canvas"  style="height:300px;"></div>
                    </div>

					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Brand/Logo Image </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <img id="output_logo" height="100" src="<?php echo base_url()."app_liveads88/uploads/brand/".$customer->cu_logo_name; ?>"/> </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Image </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <img id="output" height="100" src="<?php echo base_url()."app_liveads88/uploads/customer/".$customer->cu_image_name; ?>"/> </div>
					</div>
					
					
					<div class="form-group"><br />
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Service Type </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_service_type; ?> </div>
					</div>
					
					<div class="form-group"><br />
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Tags </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $tag_comma_string; ?> </div>
					</div>
					
					<div class="form-group"><br />
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Description </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> <?php echo $customer->cu_description; ?> </div>
					</div>
					
					<input type="hidden" name="cu_lat" id="cu_lat" value="<?php echo $customer->cu_lat; ?>">
					<input type="hidden" name="cu_long" id="cu_long" value="<?php echo $customer->cu_long; ?>">
					
					<div class="form-group"><br />
						<div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback"> Shop Images </div>
						<div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback"> 
							<?php 
							if($shopimages){
								foreach($shopimages as $image){
									echo '<img id="output" height="100" src="' . base_url() . 'app_liveads88/' . $image['sp_name'].'" /> <br /> <br />';
								}
							} 
							?> 
						</div>
					</div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>