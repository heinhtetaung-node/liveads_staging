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
						<th>Company</th>
                        <th>Salary</th>  
                        <th>Location</th>
                        <th>Description</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						foreach($ads as $a){
						//SELECT `jb_id`, `customer_id`, `jb_name`, `jb_description`, `jb_salary`, `jb_location`, `jb_like_count`, `jb_expired`, `jb_created`, `jb_modified`, `jb_status`, `paid_ads_start_date`, `paid_ads_end_date`, `jb_email`, `jb_phone`, `ispurchased`, `payment_id`, `purchase_itemid` FROM `job` WHERE 1
						?>
						<tr>
						<td><?php echo $a['jb_name']; ?></td>
						<td><?php echo $a['cu_name']; ?></td>
						<td><?php echo $a['jb_salary']; ?></td>  
						<td><?php echo $a['jb_location']; ?></td>
                        <td><?php echo $a['jb_description']; ?></td>
                        
                        <td><?php echo "<a href='".base_url()."job/update/".$a['jb_id']."' class='btn btn-sm btn-info'>Edit</a>";
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
