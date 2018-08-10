<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/serviceprovider/updated" method="post">
              <div class="form-group">
                <label class="control-label col-sm-12" for="firs
        tname">Select Vendor</label>
			          <div class="col-sm-12">
                    <select class="form-control" name="vendor_id"> 
                      <option>SELECT VENDOR</option>
                      <?php foreach ($vendors as $key => $value) { ?>
                      <option value="<?php echo $value->vid; ?>" <?php if($value->vid==$service_providers->vendor_id) { ?> selected <?php } ?>"><?php echo $value->company_name; ?></option>
                      <?php } ?>                      
                    </select>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-12" for="emp_id">Emp ID</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter Service Provider ID" name="emp_id" value="<?php echo $service_providers->emp_id;?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $service_providers->first_name;?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $service_providers->last_name;?>">
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Phone Number" name="phone" value="<?php echo $service_providers->phone;?>">
                </div>
              </div>                  
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="spid" value="<?php echo $service_providers->spid; ?>">
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