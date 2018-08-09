<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/services/updated" method="post">
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Main Category</label>
                <div class="col-sm-12">
                    <select name="maincate_id" class="form-control">
                      <option>SELECT MAIN CATETORY</option>
                      <?php foreach ($maincate as $key => $value) { ?>
                        <option value="<?php echo $value->smc_id; ?>" <?php if($value->smc_id==$service->main_category_id) { ?> selected <?php } ?>><?php echo $value->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Main Category</label>
                <div class="col-sm-12">
                    <select name="cate_id" class="form-control">
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $key => $value) { ?>
                        <option value="<?php echo $value->sc_id; ?>" <?php if($value->sc_id==$service->category_id) { ?> selected <?php } ?>><?php echo $value->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Service</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Service" name="service" value="<?php echo $service->services; ?>">
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