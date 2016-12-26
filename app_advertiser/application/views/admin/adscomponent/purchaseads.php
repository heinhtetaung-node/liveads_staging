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
                    Purchase Ads by advertiser
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
				  <!--
				  payment_id adscomponent_id selectedpriceid qty customer_id item_id cu_name adsname price price_unit days
					-->
                    <thead>
                      <tr>
                        <th>Customer</th>
						<th>Ads Component</th>
						<th>Days</th>
						<th>Price</th>
						<th>qty</th>
						<th>Option</th>
                      </tr>
                    </thead>
					<tbody>
					<?php foreach($ads as $a){ ?>
						<tr>	
							<td><?php echo $a['cu_name']; ?></td>
							<td><?php echo $a['adsname']; ?></td>
							<td><?php echo $a['days']; ?></td>
							<td><?php echo $a['price']; ?></td>
							<td><?php echo $a['qty']; ?></td>
							<td><a href="<?php echo base_url(); ?>adscomponent/purchasedetail/<?php echo $a['payment_id']; ?>"><input class="btn btn-xs btn-info" type="button" value="Detail"></a></td>
						</tr>
					<?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
