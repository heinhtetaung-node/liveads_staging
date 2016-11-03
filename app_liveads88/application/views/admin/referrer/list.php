<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#referrer_dataTable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>referrer/referrer_datatable",
	  "oLanguage": {
    "sSearch": "Search by title: "
  },
	  "columnDefs": [
					{					
						"targets": [1,2,3,4,5],
					    "searchable": false
					},
					 {
						"targets": [1,2,3,4,5],
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
                    Referrer List
                </h3>
            </div>
			
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="referrer_dataTable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Referral</th>
						<th>Referrer</th>
                        <th>Referral Signup Date</th>  
                        <th>Gift Sent</th>
                        <th>Created</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
