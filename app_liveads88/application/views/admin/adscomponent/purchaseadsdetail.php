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
                  <table class="table">
				  <!--
				  payment_id adscomponent_id selectedpriceid qty customer_id item_id cu_name adsname price price_unit days
					-->
					<thead>
					<?php
						foreach($payment as $p){ ?>
							<tr>
								<td>Advertiser : <?php echo $p['cu_name']; ?></td>
								<td>Amount : <?php echo $p['payment_amt']; ?></td>
								<td>Date : <?php echo $p['created_at']; ?></td>
							</tr>
						<?php
						} ?>
					</thead>
                  </table>
				  
				  <h4>Products</h4>
				  <table class="table">
				  <!--
				  payment_id adscomponent_id selectedpriceid qty customer_id item_id cu_name adsname price price_unit days
					-->
                    <thead>
                      <tr>
                        <th>Ads Component</th>
						<th>Days</th>
						<th>Price</th>
						<th>qty</th>
						
                      </tr>
                    </thead>
					<tbody>
					<?php foreach($ads as $a){ ?>
						<tr>	
							<td><?php echo $a['adsname']; ?></td>
							<td><?php echo $a['days']; ?></td>
							<td><?php echo $a['price']; ?></td>
							<td><?php echo $a['qty']; ?></td>
						</tr>
						<tr>
							<td colspan="4">
								<b>Purchase Ads</b><br>
								<table style="width:100%">
									<?php 
									if($a['adsname']=="Coupons"){
										$sql='select * from coupon where purchase_itemid='.$a['item_id'];
										$titlecol="cp_name";
										$idcol="cp_id";
										$link=base_url()."coupon/update/";
									}
									
									if($a['adsname']=="Promotions"){
										$sql='select * from product where purchase_itemid='.$a['item_id'];
										$titlecol="pro_title";
										$idcol="pro_id";
										$link=base_url()."product/update/";
									}
									
									if($a['adsname']=="Events"){
										$sql='select * from event where purchase_itemid='.$a['item_id'];
										$titlecol="ev_title";
										$idcol="ev_id";
										$link=base_url()."event/update/";
									}
									
									if($a['adsname']=="Jobs"){
										$sql='select * from job where purchase_itemid='.$a['item_id'];
										$titlecol="jb_name";
										$idcol="jb_id";
										$link=base_url()."job/update/";
									}
										
								
									$query = $this->db->query($sql);
									$datas=$query->result_array();
									
									foreach($datas as $data){
										$title=$data[$titlecol];
										$id=$data[$idcol];
										?>
										<tr>
											<td><?php echo $title; ?></td>
											<td><a href="<?php echo $link.$id; ?>"><input type="button" value="See Ads" class="btn btn-xs btn-warning" /></td>
										</tr>
									<?php
									} ?>
								</table>
							</td>
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
