<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#redeem_detail_dataTable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>coupon/coupon_redeem_detail_datatable/<?php echo $this->uri->segment(3); ?>",
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
                    Coupon Usage Detail Report
                </h3>
            </div>
			
        </div>
        <div class="clearfix"></div>
		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_content">
						
						<div class="col-md-3 col-sm-3 col-xs-12">
						Customer
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php echo $coupon->cu_name; ?>
						</div>
						
						<div class="col-md-3 col-sm-3 col-xs-12">
						Coupon Name
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php echo $coupon->cp_name; ?>
						</div>
						
						<div class="col-md-3 col-sm-3 col-xs-12">
						Coupon Description
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php echo $coupon->cp_description; ?>
						</div>
						
						<div class="col-md-3 col-sm-3 col-xs-12">
						Available Quantity
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php echo $coupon->cp_quantity; ?>
						</div>
						
						<div class="col-md-3 col-sm-3 col-xs-12">
						Coupon Used
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php echo $coupon->cp_usage; ?>
						</div>
						
					</div>
				</div>
			</div>
		</div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="redeem_detail_dataTable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>User Name</th>
						<th>User Email</th>
                        <th>Date</th>  
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
        </div>
		
		<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>coupon/redeem_report" class="btn btn-primary">Back to List</a>
					</div>
				 </div>
              </div>
            </div>
        </div>
				
		
		
    </div>
</div>
