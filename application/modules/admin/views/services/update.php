<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/services/updated" method="post" enctype="multipart/form-data" id="service_form">
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
                    <select name="cate_id" class="form-control"id="select_category" required>
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $key => $value) { ?>
                        <option value="<?php echo $value->sc_id; ?>" <?php if($value->sc_id==$service->category_id) { ?> selected <?php } ?>><?php echo $value->category; ?></option>
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
                 <img src="<?php echo base_url() ?>upload/services/<?php echo $service->image;?>" width="50" height="50" id="image" required>
                      <input type="file" name="userfile"  class="form-control"  value="<?php echo $service->image;?>" >
                   <input type="hidden" value="<?php echo $service->image;?>" name="old_image">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-12" for="desc">Description <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="descriptions" placeholder="Enter Descriptions" name="descriptions" value="<?php echo $service->description; ?>"  required>
                </
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-12" for="desc">Terms and Conditions<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                 <input class="form-control rounded-0" id="terms_conditions"  name="terms_conditions" rows="4"  value="<?php echo $service->terms_conditions; ?>" required maxlength="200"></input>
                </
                </div>
              </div>

               <input type="hidden" class="form-control" id="l_name" placeholder="role" name="sid" value="<?php echo $service->sid; ?>">
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