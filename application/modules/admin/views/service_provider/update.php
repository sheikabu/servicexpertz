<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-sm-12">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/serviceprovider/updated" id="serviceprovider_form" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-sm-12" for="firs
        tname">Select Vendor<span class="validationerror">*</span></label>
			          <div class="col-sm-12">
                    <select id='vendor' class="form-control demo-default" name="vendor_id" placeholder="Select Vendor..."> 
                      <option>SELECT VENDOR</option>
                      <?php foreach ($vendors as $key => $value) { ?>
                      <option value="<?php echo $value->vid; ?>" <?php if($value->vid==$service_providers->vendor_id) { ?> selected <?php } ?>"><?php echo $value->company_name; ?></option>
                      <?php } ?>                      
                    </select>
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                   <?php $maincate_id  = json_decode($service_providers->main_category_id); ?>
                    <select id='maincate' name="main_id[]"  multiple class="form-control demo-default" placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>" <?php if (in_array($mcvalue->smc_id, $maincate_id)) { ?> selected <?php } ?>><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                     <?php $category_id  = json_decode($service_providers->category_id); ?>
                    <select id="category" name="cate_id[]" multiple class="form-control demo-default" placeholder="Select Category...">
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>" <?php if(in_array($cvalue->sc_id, $category_id)) { ?> selected <?php } ?>><?php echo $cvalue->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Service<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <?php $service_id  = json_decode($service_providers->services_id); ?>
                    <select id="services" name="service_id[]" multiple class="form-control demo-default" placeholder="Select Services...">
                      <option>SELECT SERVICES</option>
                      <?php foreach ($services as $ckey => $svalue) { ?>
                        <option value="<?php echo $svalue->sid; ?>" <?php if(in_array($svalue->sid, $service_id)) { ?> selected <?php } ?>><?php echo $svalue->services; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Min Cost<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter Min Cost" name="mincost" value="<?php echo $service_providers->min_cost;?>">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Image<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <img src="<?php echo base_url() ?>upload/sp/<?php echo $service_providers->image;?>" width="50" height="50">
                  <input type="file" name="userfile" class="form-control" placeholder="Image Upload" size="20"/>
                  <input type="hidden" name="existingimage" value="<?php echo $service_providers->image;?>" />
                </div>
              </div>
                </div>
                <div class="col-md-6 col-sm-12">
                <div class="form-group">
                <label class="control-label col-sm-12" for="emp_id">Emp ID<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter Service Provider ID" name="emp_id" value="<?php echo $service_providers->emp_id;?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $service_providers->first_name;?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $service_providers->last_name;?>">
                </div>
              </div>
			       <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Phone Number" name="phone" value="<?php echo $service_providers->phone;?>">
                </div>
              </div>   
              <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="e_name" placeholder="Enter Email" name="email" value="<?php echo $service_providers->email;?>">
                </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Select City<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select id="cities" name="city_id" class="form-control demo-default"  required placeholder="Select City...">
                      <option>SELECT CITY</option>
                      <?php foreach ($cities as $citkey => $citvalue) { ?>
                        <option value="<?php echo $citvalue->city_id; ?>" <?php if($citvalue->city_id==$service_providers->city_id) { ?> selected <?php } ?>><?php echo $citvalue->city_name; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="pincode">Pincode<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="e_name" placeholder="Enter Pincode" name="pincode" value="<?php echo $service_providers->pincode; ?>" required>
                </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Available Time Slot<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select id="time" name="ts_id" class="form-control demo-default"  required placeholder="Select City...">
                      <option>SELECT TIME SLOT</option>
                     <?php foreach ($time as $tkey => $tvalue) { ?>
                        <option value="<?php echo $tvalue->ts_id; ?>" <?php if($tvalue->ts_id==$service_providers->ts_id) { ?> selected <?php } ?>><?php echo $tvalue->ts_name; ?></option>
                      <?php } ?>                     
                    </select>
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