<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#redeem_report_dataTable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>coupon/coupon_redeem_report_datatable",
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [1,2,3,4,5,6],
					    "searchable": false
					},
					 {
						"targets": [1,2,3,4,5,6],
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
                    Coupon Usage Report
                </h3>
            </div>
			
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="redeem_report_dataTable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Customer</th>
                        <th>Quantity</th>  
                        <th>Description</th>
                        <th>Usage</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
