<style>
.priceoptionform input{
	padding:5px;
}
.removediv{
	cursor:pointer;
}
</style>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Ads Component
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				 <?php echo $this->session->flashdata('msg'); ?>
                  <br>
                  <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>adscomponent/add" id="event_form" enctype="multipart/form-data">
					
    				<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Ads Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="adsname" name="adsname" value="<?php echo set_value('adsname'); ?>">                     
					  <?php echo form_error('adsname');?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Price 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<div class="priceoptionform">
						<div class="col-xs-12 canclonediv">
							<input type="text" class="form-control" style="width:60px; float:left" name="price[]" placeholder="100" value="<?php echo set_value('price[]'); ?>"> 
							<input type="text" class="form-control" style="width:60px; float:left" name="price_unit[]" value="RM" value="<?php echo set_value('price_unit[]'); ?>"> 
							<div class="form-contrrol" style="width:20px; margin-top: 6px; float:left"> For </div>
							<input type="text" class="form-control" placeholder="7" style="width:50px; float:left" name="days[]" value="<?php echo set_value('days[]'); ?>">
							<div class="form-contrrol" style="width:20px; margin-top: 6px; float:left"> Days </div>
						</div>
						<div class="col-xs-12 canremovediv">
							<input type="text" class="form-control" style="width:60px; float:left" name="price[]" placeholder="200" value="<?php echo set_value('price[]'); ?>"> 
							<input type="text" class="form-control" style="width:60px; float:left" name="price_unit[]" value="RM" value="<?php echo set_value('price_unit[]'); ?>"> 
							<div class="form-contrrol" style="width:20px; margin-top: 6px; float:left"> For </div>
							<input type="text" class="form-control" style="width:50px; float:left" name="days[]" placeholder="30" value="<?php echo set_value('days[]'); ?>">
							<div class="form-contrrol" style="width:60px; margin-top: 6px; float:left"> Days &nbsp; <i style="display:none;" class="fa fa-remove removediv"></i></div>
							<br><br>
						</div>
						</div>
						<br>
						
					  <?php echo form_error('price[]');?> 
					  <?php echo form_error('price_unit[]');?> 
					  <?php echo form_error('days[]');?> 
					  
					  <input style="margin-top:10px" type="button" class="btn btn-xs btn-warning clonediv" value="Add another price option">
					  </div>
                    </div>
									
					<div class="form-group">
						<label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea style="height:150px" class="form-control col-md-7 col-xs-12"  id="description" name="description"><?php echo set_value('description'); ?></textarea>                     
							<?php echo form_error('description');?> 
						</div>
					 
                    </div>
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Preview Photo <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="previewphoto_m" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output" width="100" height="100" 
						<?php if($this->session->flashdata('previewphoto_m')!=""){ echo "src=".base_url()."uploads/adscomponent/".$this->session->flashdata('previewphoto_m'); } ?> >
						<div id="file_error"></div>
						 <?php echo form_error('previewphoto_m');?> 
						 </div>
                    </div>

					<div class="pull-right">
					<a href="<?php echo base_url(); ?>adscomponent" class="btn btn-primary">Back to List</a>
					<?php if($this->session->flashdata('msg')==""){ ?>
					<input class="btn btn-success" type="submit" value="Submit">
					<?php } ?>
					</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
 <div id="dialog-1" style="display:none">File size is greater than 5MB</div>
 <script>
$("#file_select").change(function (e) {
	var file_size = $('#file_select')[0].files[0].size;
	if(file_size>52428880) {
		 $("#dialog-1").dialog();;
		return false;
	}else{
   var output = document.getElementById('output');var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(e.target.files[0]);
    }
 
});

$(document).ready(function(){
	$(".clonediv").click(function(){
		$( ".canclonediv" ).next("div").clone().appendTo( ".priceoptionform" );	
		$(".canremovediv:last").find(".removediv").show();
	});
	
	$(".priceoptionform").delegate("i.removediv","click",deletediv);
	
});
deletediv = function(){
	$(this).closest(".canremovediv").remove();
}
/*
$("#file_select").change(function (e) {
    var fileReader = new FileReader();
    fileReader.onload = function (e) {
        var img = new Image();
        img.onload = function () {
            var MAX_WIDTH = 100;
            var MAX_HEIGHT = 100;
            var width = img.width;
            var height = img.height;

            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width;
                    width = MAX_WIDTH;
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height;
                    height = MAX_HEIGHT;
                }
            }

           var output = document.getElementById('output');
        }
        output.src = e.target.result;
    }
    fileReader.readAsDataURL(e.target.files[0]);
});
*/
</script>