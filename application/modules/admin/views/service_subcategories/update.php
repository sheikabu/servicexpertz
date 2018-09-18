<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicesubcategories/updated" method="post" enctype="multipart/form-data">
			 
                <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">                
                    <select class="form-control" id="maincate"  name="main_category" class="demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>" <?php if($mcvalue->smc_id==$service->main_category_id) { ?> selected <?php } ?>><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <span class="validationerror"></span>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select   name="cate_id" class="demo-default form-control"  placeholder="Select Category..." id="category1" required>
                      <option value="">SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>" <?php if($cvalue->sc_id==$service->category_id) { ?> selected <?php } ?>><?php echo $cvalue->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
                 <span class="validationerror"></span>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Sub Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="subcategories" placeholder="Enter Last Name" name="sub_category" value="<?php echo $service->sub_category; ?>"  required>
                </div>
                </div>

                 <div class="form-group">
                <label class="control-label col-sm-12" for="image">Image <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                   <img src="<?php echo base_url() ?><?php echo $service->sub_category_image; ?>" width="50" height="50">
                      <input type="file" name="userfile"  class="form-control"  value="<?php echo $service->sub_category_image; ?>" >
                   <input type="hidden" value="<?php echo $service->sub_category_image; ?>" name="old_image">
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-12" for="description">Description</label>
                <div class="col-sm-12">          
                  <textarea class="form-control rounded-0" id="description"  name="description" rows="4" maxlength="200"><?php echo $service->category_description; ?></textarea>
                </div>
                </div>				    
							  
			  				
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="service">

                  <input type="hidden" class="form-control" name="ssc_id" value="<?php echo $service->ssc_id; ?>">

              <div class="form-group">   
                    <div class="col-sm-12"> 
                       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </div>
              </div>
			 
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready( function () {  

  var maincate = $('#maincate').val();
  var cate_id = $('#category1').val();

  if(maincate != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/servicesubcategories/fetch_category",
    method:"POST",
    data:{maincate:maincate,cate_id:cate_id},
    success:function(data)
    {
     $('#category1').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }

 $('#maincate').change(function(){
  var maincate = $('#maincate').val();
  if(maincate != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/servicesubcategories/fetch_category",
    method:"POST",
    data:{maincate:maincate},
    success:function(data)
    {
     $('#category1').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }
 });

 

});


</script>