<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicecategories/updated" method="post">
			 
               <div class="form-group">
                <label class="control-label col-sm-12" for="firs
        tname">Select Main Service Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">

                    <select class="form-control" name="main_category_id" id="mainservice"> 
                      <option>Select Main Service Categories </option>
                      <?php foreach ($servicecategories as $key => $value) { ?>
                      <option value="<?php echo $value->smc_id; ?>" <?php if($value->smc_id==$service->main_category_id) { ?> selected <?php } ?>"><?php echo $value->main_category; ?></option>

                      <?php } ?>                      
                    </select>
                </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Sub Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="subcategories" placeholder="Enter Last Name" name="category" value="<?php echo $service->category; ?>"  required>
                </div>
              </div>
			  
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="service">

                  <input type="hidden" class="form-control" name="sc_id" value="<?php echo $service->sc_id; ?>">

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