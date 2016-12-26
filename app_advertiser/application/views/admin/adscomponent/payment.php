<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#adscomponent_datatable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>adscomponent/adscomponent_datatable",	  		  	 
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [1,2],
					    "searchable": false
					},
					 {
						"targets": [1,2],
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
                    Advertiser Payment For Ads
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
					  <!-- SELECT `payment_id`, `payment_amt`, `customer_id`, `created_at`, `approved` FROM `purchaseads_payment` WHERE 1 -->
                        <th>ID</th>
						<th>Customer Name</th>
						<th>Payment</th>
                        <th>Date</th>
						<th>Option</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						foreach($payment as $p){ ?>
							<tr>
								<td><?php echo $p['payment_id']; ?></td>
								<td><?php echo $p['cu_name']; ?></td>
								<td><?php echo $p['payment_amt']; ?></td>
								<td><?php echo $p['created_at']; ?></td>
								<td>
									<?php //echo $p['approved']; ?>
									<a href="<?php echo base_url(); ?>adscomponent/purchasedetail/<?php echo $p['payment_id']; ?>"><input class="btn btn-xs btn-info" type="button" value="Detail"></a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
