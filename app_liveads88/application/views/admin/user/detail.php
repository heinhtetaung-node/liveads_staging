
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   User
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
					<div>
						<label>User Name :</label>
						 <?php echo $user->user_name; ?>
					</div>
					<div>
						<label>User Email :</label>
						 <?php echo $user->user_email; ?>
					</div>
					<div>
						<label>First Name :</label>
						 <?php echo $user->user_first_name; ?>
					</div>
					<div>
						<label>Last Name :</label>
						 <?php echo $user->user_last_name; ?>
					</div>
					<div>
						<label>Phone :   </label>
						 <?php echo $user->user_phone; ?>
					</div>
					
					<div>
						<label>Gender :</label>
						 <?php echo $user->user_gender; ?>
					</div>
					<div>
						<label>Country :</label>
						 <?php echo $user->user_country; ?>
					</div>
					
					<div>
						<label>Status :</label>
						 <?php echo ($user->user_active==1)? "active":"inactive"; ?>
					</div>
					
					<div>
						<label>Created Date :</label>
						 <?php echo $user->user_created_date; ?>
					</div>
				 
              </div>
            </div>
          </div>
    </div>
</div>
  <script>
 $(function() {
       $('#datepicker').datepicker({
           dateFormat: "yy-mm-dd"
       });
    });

  </script>
  <script>
  
  $(function(){
	   $("#customer").autocomplete({
	 source: function (request, response) {
		$.ajax({
			url: "<?php echo base_url();?>customer/getCustomer",
			dataType: "json",
			type: "GET",
			data: {
				term: request.term
			},
			success: function(data) {
				response($.map(data, function(item) {
					return {
						label: item.label,
						value: item.value,
						id: item.id
					};
				}));
			},
			error: function(xhr) {
				alert("please select customer");
			}
		});
	},
	focus: function( event, ui ) {
	   $( "#customer" ).val( ui.item.label );
		return false;
	  },
	select: function(event, ui) {
	  $( "#customer_id" ).val( ui.item.id );
	  return false;
	}
});
});
</script>
