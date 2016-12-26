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
                    Event List
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
                        <th>Title</th>
						<th>Customer</th>
                        <th>Location</th>  
                        <th>Date</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						foreach($ads as $a){
						//SELECT `ev_id`, `customer_id`, `ev_title`, `ev_location`, `ev_img_name`, `ev_img_base64`, `ev_description`, `ev_link`, `ev_date`, `ev_like_count`, `ev_created`, `ev_status`, `paid_ads_start_date`, `paid_ads_end_date`, `ispurchased`, `payment_id`, `purchase_itemid` FROM `event` WHERE 1
						?>
						<tr>
						<td><?php echo $a['ev_title']; ?></td>
						<td><?php echo $a['cu_name']; ?></td>
                        <td><?php echo $a['ev_location']; ?></td>  
                        <td><?php echo $a['ev_date']; ?></td>
                        
                        <td><?php echo "<a href='".base_url()."event/update/".$a['ev_id']."' class='btn btn-sm btn-info'>Edit</a>";
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
