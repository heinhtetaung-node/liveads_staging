<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#coupon_dataTable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>coupon/coupon_dataTable",
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [1,2,3,4,5,6,7],
					    "searchable": false
					},
					 {
						"targets": [1,2,3,4,5,6,7],
						"orderable": false
					},
					
				]
				
	} );
  } );
</script>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Promotions List
                </h3>
            </div>
			
			<div class="title_right">
            
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Customer</th>
                        <th>Price</th>  
                        <th>Discount</th>  
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						foreach($ads as $a){
						//SELECT `pro_id`, `customer_id`, `pro_title`, `pro_image_name`, `pro_image_base64`, `pro_price`, `pro_price_text`, `pro_discount_type`, `pro_discount_amount`, `pro_quantity`, `pro_description`, `pro_is_deal`, `pro_is_promotion`, `pro_like_count`, `pro_expired_date`, `pro_status`, `pro_created`, `paid_ads_start_date`, `paid_ads_end_date`, `pro_total_viewer`, `pro_surprise_marked`, `ispurchased`, `payment_id`, `purchase_itemid` FROM `product` WHERE 1
						?>
						<tr>
						<td><?php echo $a['pro_title']; ?></td>
						<td><?php echo $a['cu_name']; ?></td>
                        <td><?php echo $a['pro_price']; ?></td>  
                        <td><?php echo $a['pro_discount_amount']." ".$a['pro_discount_type']; ?></td>
                        <td><?php echo $a['pro_quantity']; ?></td>
                        <td><?php echo $a['pro_status']; ?></td>
                        <td><?php echo "<a href='".base_url()."product/update/".$a['pro_id']."' class='btn btn-sm btn-info'>Edit</a>";
						//<a href='".base_url()."coupon/deleteCoupon/".$a['cp_id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>"; ?></td>
						</tr>
						<?php
						}
						?>
					</tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
