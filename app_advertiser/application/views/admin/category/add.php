
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Add Category
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
                  <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>category/add" id="event_form" enctype="multipart/form-data">
					
    				<div class="form-group">
                      <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="name" name="name">                     
					  <?php echo form_error('name');?> 
					</div>
					 
                    </div>
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Order 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12"  id="title" name="order">
					  <?php echo form_error('order');?> 
					  </div>
                    </div>
									
					
					<div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Icon Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" name="icon_image" size="20" accept="image/*" onchange="loadFile(event)" id="file_select"/>
						<img id="output"  height="100" />
						<div id="file_error"></div>
						 <?php echo form_error('icon_image');?> 
						 </div>
                    </div>

					<div class="pull-right">
					<a href="<?php echo base_url(); ?>category" class="btn btn-primary">Back to List</a>
					<input class="btn btn-success" type="submit" value="Submit">
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