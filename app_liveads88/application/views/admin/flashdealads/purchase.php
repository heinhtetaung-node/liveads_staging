<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Purchase Flash Deal Ads
                </h3>
            </div>
			
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				<?php echo $this->session->flashdata('msg'); ?>
				<br />
                  <table id="flashdealads_purchase" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Duration</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
					
					<tbody>
						<?php
							if($flashdealads){
								foreach($flashdealads as $item){
									echo '<tr id="flashdealads-row-'.$item['fdads_id'].'">';
									echo '<td class="flashdealads_name">'.$item['fdads_name'].'</td>';
									echo '<td class="flashdealads_price">'.number_format($item['fdads_price']).'</td>';
									echo '<td class="flashdealads_duration">'.$item['fdads_duration'].'</td>';
									echo '<td> <a  href="#" id="flashdealads-'.$item['fdads_id'].'" class="btn btn-success flashdealads_addtocart">Add to Cart</a></td>';
									echo '</tr>';
								}
							}
						?>
					</tbody>
                    
                  </table>
                </div>
              </div>
            </div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
					<div class="cart_list">
					<h3>Your shopping cart</h3>
					<div id="cart_content">
						<?php $this->view('admin/flashdealads/cart'); ?>
					</div>
					</div>
                </div>
              </div>
            </div>
			
			
			
          </div>
    </div>
</div>

<script>
$(document).ready(function() { 
		/*place jQuery actions here*/ 
		var link = "<?php echo base_url(); ?>"; // Url to your application (including index.php/)
	
		$(".flashdealads_addtocart").click(function() {
			
			var get_id_element = $(this).attr('id');
			var id = get_id_element.substr(13);
			
			/*
			var ads_row = $('#flashdealads-row-'+id);
			var name = ads_row.find('.flashdealads_name').text()
			var price = ads_row.find('.flashdealads_price').text()
			var duration = ads_row.find('.flashdealads_duration').text()
			*/
			
		 	$.post(link + "flashdealads/addtocart/", { id: id, ajax: '1' },
  				function(data){	
 		 			// Interact with returned data
					if(data == 'true'){
 		 			
    					$.get(link + "flashdealads/show_cart", function(cart){ // Get the contents of the url cart/show_cart
  							$("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
						}); 		 
										
 		 			}else{
 		 				alert("Product does not exist");
 		 			}
 			 });
 			 
			return false; // Stop the browser of loading the page defined in the form "action" parameter.
		});
		
		
		$(".empty").on("click", function(){
			$.get(link + "flashdealads/empty_cart", function(){
				$.get(link + "flashdealads/show_cart", function(cart){
					$("#cart_content").html(cart);
				});
			});
			
			return false;
		});
	
	});
</script>