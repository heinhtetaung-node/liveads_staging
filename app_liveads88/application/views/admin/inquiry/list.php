<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#inquiry_datatable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>admin/inquiry_datatable",
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [1],
					    "searchable": false
					},
					 {
						"targets": [1],
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
                    Mail
                </h3>
            </div>
			
			
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="inquiry_datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Message</th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
