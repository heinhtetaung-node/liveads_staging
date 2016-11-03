<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#notification_datatable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>pushnotification/pushnotification_datatable",
	  "oLanguage": {
    "sSearch": "Search by text: "
  },
  "order": [[ 1, "desc" ]],
  
	  "columnDefs": [
					{					
// 						"targets": [1,2],
					    "searchable": false
					},
					 {
// 						"targets": [1,2],
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
                    Notification List
                </h3>
            </div>
			
			<div class="title_right">
               <a  href="<?php echo base_url()?>pushnotification/add" class="btn btn-success">Add a new</a>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="notification_datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Notification</th>
						<th>Sent Date</th>
<!--                         <th>Edit/Delete</th> -->
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
