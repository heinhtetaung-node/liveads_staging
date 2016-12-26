<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
	$('#banner_datatable').dataTable( {
	  "processing": true,
	  "serverSide": true,	
	  "ajax": "<?php echo base_url()?>banner/banner_datatable",
	  "oLanguage": {
    "sSearch": "Search by name: "
  },
	  "columnDefs": [
					{					
						"targets": [1,2,3,4],
					    "searchable": false
					},
					 {
						"targets": [1,2,4],
						"orderable": false
					},
					
				]
				
	} );
	
	$(document).on("change", '.sequence', function(event) {
		var id = this.id;
		var split = id.split('-');
		var bid = split[1];
		var sequence = $(this).val();
		$.ajax({
			url: '<?php echo base_url();?>'+'banner/updateSequence',
			type: "POST",
			data: 'bid='+bid+'&s='+sequence,
			context: this,
			error: function () {},
			dataType: 'json',
			success : function (response) {
				
			}
		});
	});
  } );
</script>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Banner List
                </h3>
            </div>
			
			<div class="title_right">
               <a  href="<?php echo base_url()?>banner/add" class="btn btn-success">Add a new</a>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="banner_datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
						<th>Image</th>
                        <th>Link</th>  
                        <th>Sequence</th>
                        <th>Edit/Delete</th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
