<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">    
     <form class="form-horizontal" action="<?php echo base_url() ?>admin/services/updated" method="post" enctype="multipart/form-data" id="service_form">  
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
             
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Main Category <span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select name="maincate_id" class="form-control" id="select_main_category" required>
                      <option>SELECT MAIN CATETORY</option>
                      <?php foreach ($maincate as $key => $value) { ?>
                        <option value="<?php echo $value->smc_id; ?>" <?php if($value->smc_id==$service->main_category_id) { ?> selected <?php } ?>><?php echo $value->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Category <span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select name="cate_id" class="form-control" id="select_category" required>
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $key => $value) { ?>
                        <option value="<?php echo $value->sc_id; ?>" <?php if($value->sc_id==$service->category_id) { ?> selected <?php } ?>><?php echo $value->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
                  
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Sub Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select name="sub_cate_id" class="form-control" id="select_sub_category" required>
                      <option value="">SELECT SUB CATEGORY</option>
                      <?php foreach ($sub_cate as $key => $value) { ?>
                        <option value="<?php echo $value->ssc_id; ?>" <?php if($value->ssc_id==$service->sub_category_id) { ?> selected <?php } ?>> <?php echo $value->sub_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Service <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="service" placeholder="Enter Service" name="service" value="<?php echo $service->services; ?>" required>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-12" for="image">Image <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                 <img src="<?php echo base_url() ?><?php echo $service->image;?>" width="50" height="50" id="image" required>
                      <input type="file" name="userfile"  class="form-control"  value="<?php echo $service->image;?>" >
                   <input type="hidden" value="<?php echo $service->image;?>" name="old_image">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-12" for="desc">Description <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <textarea class="form-control rounded-0" id="descriptions"  name="descriptions" rows="4" required maxlength="200"><?php echo $service->description; ?></textarea>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-12" for="desc">Terms and Conditions<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                   <textarea class="form-control rounded-0" id="terms_conditions"  name="terms_conditions" rows="4" required maxlength="200"><?php echo $service->terms_conditions; ?></textarea>
                </div>
                
              </div>
              </div>
          <div class="col-md-6 col-md-offset-3 mt-20">
                <div class="form-group">
                <label class="control-label col-sm-12">Minimum Cost <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="cost" placeholder="Enter Cost"  name="cost" value=<?php echo $service->price; ?> required>
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-12">Additonal Cost<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="additional_cost" placeholder="Enter Additonal Cost"  name="additional_cost" value=<?php echo $service->additonal_cost; ?> required>
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-12">Parameter<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <select name="parameter" class="form-control" id="parameter">
                    <option value="">--SELECT--</option>
                    <option value="Per Hour" <?php if($service->parameter=="Per Hour") { ?> selected <?php } ?>>Per Hour</option>
                    <option value="Per Day" <?php if($service->parameter=="Per Day") { ?> selected <?php } ?>>Per Day</option>
                    <option value="Per Number" <?php if($service->parameter=="Per Number") { ?> selected <?php } ?>>Per Number</option>
                  </select>  
                </div>
              </div>
               
                <input type="hidden" class="form-control" id="l_name" placeholder="role" name="sid" value="<?php echo $service->sid; ?>">
              <div class="form-group">   
                     <div class="col-sm-12"> 
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                   </div>
                </div>
               </div>
       
     
          </div>
      </div>
             </form>
    </div>
  </div>
</div>

<script>
$(document).ready( function () { 

  var maincate = $('#select_main_category').val();
  var cate_id = $('#select_category').val();
  var sub_cate_id = $('#select_sub_category').val();

  if(maincate != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/services/fetch_category",
    method:"POST",
    data:{maincate:maincate,cate_id:cate_id},
    success:function(data)
    {
     $('#select_category').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }
  
  if(sub_cate_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/services/fetch_sub_category",
    method:"POST",
    data:{cate_id:cate_id,sub_cate_id:sub_cate_id},
    success:function(data)
    {
     $('#select_sub_category').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }


 $('#select_main_category').change(function(){
  var maincate = $('#select_main_category').val();
  if(maincate != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/services/fetch_category",
    method:"POST",
    data:{maincate:maincate},
    success:function(data)
    {
     $('#select_category').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }
 });
  $('#select_category').change(function(){ 
  var cate_id = $('#select_category').val();
  if(cate_id != '')
  { 
   $.ajax({
    url:"<?php echo base_url(); ?>admin/services/fetch_sub_category",
    method:"POST",
    data:{cate_id:cate_id},
    success:function(data)
    {
     $('#select_sub_category').html(data);
     //$('#city').html('<option value="">Select City</option>');
    }
   });
  }
 });
 
});
</script>