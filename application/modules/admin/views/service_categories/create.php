<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/servicecategories/insert" method="post">
			 
             <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Main Service Categories</label>
			        
                    <select class="form-control" name="vendor_id"> 
                      <option>Select Main Service Categories</option>
                      <?php foreach ($servicecategories as $key => $value) { ?>
                      <option value="<?php echo $value->sc_id; ?>" <?php if($value->sc_id==$service_prosc_iders->vendor_id) { ?> selected <?php } ?>"><?php echo $value->main_category_id; ?></option>
                      <?php } ?>                      
                    </select>
                </div>
                </div>
				
              <div class="form-group">
                <label class="control-label col-sm-2" for="lastname">Sub Categories</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="category" value="">
                </div>
              </div>
			
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="service">
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