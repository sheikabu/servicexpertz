<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicesubcategories/insert" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control" id="maincate" name="main_category" class="demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>"><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <span class="validationerror"></span>
              </div>


               <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select name="cate_id" id="category1" class="form-control input-lg demo-default">
                     <option value="">Select Category</option>
                  </select>
                </div>
                 <span class="validationerror"></span>
              </div>

            

              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Sub Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="sub_category" placeholder="Enter Sub Categories" name="sub_category" value="" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="image">Image <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="file" name="userfile" id="imagess" name="imagess" class="form-control" required>
                </div>
              </div>

                 <div class="form-group">
                <label class="control-label col-sm-12" for="description">Description</label>
                <div class="col-sm-12">          
                  <textarea class="form-control rounded-0" id="description"  name="description" rows="4" maxlength="200"></textarea>
                </div>
              </div>

	
              <div class="form-group">   
                     <div class="col-sm-12"> 
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                   </div>
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