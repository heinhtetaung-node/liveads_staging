<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#user_datatable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>user/user_datatable",
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [0,1,2,3,4,5],
					    "searchable": false
					},
					 {
						"targets": [0,1,2,3,4,5],
						"orderable": true
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
                    Users List
                </h3>
            </div>
			
	
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="user_datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Country</th>
                       <th>Referrer Code</th>
                        <th>Registered Date</th>
                         <th>Active</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
