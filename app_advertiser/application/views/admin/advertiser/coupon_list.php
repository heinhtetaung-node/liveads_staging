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
                    Coupon List
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
                        <th>Quantity</th>  
                        <th>Description</th>
                        <th>Code</th>
                        <th>Valid from</th>
                        <th>Valid to</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						foreach($ads as $a){
						//SELECT `cp_id`, `customer_id`, `cp_name`, `cp_description`, `cp_quantity`, `cp_usage`, `cp_code`, `cp_like_count`, `cp_img_name`, `cp_img_base64`, `cp_valid_from`, `cp_valid_to`, `cp_created`, `cp_status`, `paid_ads_start_date`, `paid_ads_end_date`, `cp_total_viewer`, `cp_surprise_marked`, `cp_type`, `ispurchased`, `payment_id`, `purchase_itemid` FROM `coupon` WHERE 1
						?>
						<tr>
						<td><?php echo $a['cp_name']; ?></td>
						<td><?php echo $a['cu_name']; ?></td>
                        <td><?php echo $a['cp_quantity']; ?></td>  
                        <td><?php echo $a['cp_description']; ?></td>
                        <td><?php echo $a['cp_code']; ?></td>
                        <td><?php echo $a['cp_valid_from']; ?></td>
                        <td><?php echo $a['cp_valid_to']; ?></td>
                        <td><?php echo "<a href='".base_url()."coupon/update/".$a['cp_id']."' class='btn btn-sm btn-info'>Edit</a>";
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
