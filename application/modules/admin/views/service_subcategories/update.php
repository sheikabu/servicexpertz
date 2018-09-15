<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicecategories/updated" method="post" enctype="multipart/form-data">
			 
                <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control" id="maincate" multiple name="main_category[]" class="demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>" <?php if (in_array($mcvalue->smc_id, $maincate_id)) { ?> selected <?php } ?>><?php echo $mcvalue->main_category_id; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <span class="validationerror"></span>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select  multiple name="cate_id[]" class="demo-default"  placeholder="Select Category..." id="category" required>
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>" <?php if(in_array($cvalue->sc_id, $category_id)) { ?> selected <?php } ?>><?php echo $cvalue->category; ?></option>
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
                <label class="control-label col-sm-12" for="description">Description <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input class="form-control rounded-0" id="description"  name="description" rows="4"  maxlength="200" value="<?php echo $service->category_description; ?>"></input>
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