

<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">  
    <form class="form-horizontal" id="serviceprovider_form" action="<?php echo base_url() ?>admin/serviceprovider/insert" method="post" enctype="multipart/form-data">    
      <div class="row">
       <div class="col-md-6 col-sm-12">
              
 
			       <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Vendor<span class="validationerror">*</span></label>
                <div class="col-sm-12">
               <select  class="form-control"  name="vendor_id" id="vendor" required>
                      <option value="">SELECT VENDOR</option>
                      <?php foreach ($vendors as $key => $value) { ?>
                        <option value="<?php echo $value->vid; ?>"><?php echo $value->company_name; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control" id="maincate" multiple name="main_id[]" class="demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>"><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select  multiple name="cate_id[]" class="demo-default"  placeholder="Select Category..." id="category" required>
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>"><?php echo $cvalue->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Service<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select  multiple name="service_id[]" class="demo-default"  required placeholder="Select Services..." id="services" required>
                      <option>SELECT SERVICES</option>
                      <?php foreach ($services as $skey => $svalue) { ?>
                        <option value="<?php echo $svalue->sid; ?>"><?php echo $svalue->services; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Min Cost<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text"  class="form-control" placeholder="Enter Min Cost" name="mincost" value=""  id="mincost" required>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Image<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="file" name="userfile"  class="form-control" placeholder="Image Upload" size="20" id="image" required/>
                </div>
              </div>
               </div>
                <div class="col-md-6 col-sm-12">
                <div class="form-group">
                <label class="control-label col-sm-12" for="empid">Emp ID<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="empid" placeholder="Enter Service Provider ID" value="" name="emp_id" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="first_name" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control"  placeholder="Enter Last Name" name="last_name" value="" >
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Select City<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select id="cities" name="city_id" class="demo-default" id="city" required placeholder="Select City...">
                      <option>SELECT CITY</option>
                      <?php foreach ($cities as $citkey => $citvalue) { ?>
                        <option value="<?php echo $citvalue->city_id; ?>"><?php echo $citvalue->city_name; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="pincode">Pincode<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control"  placeholder="Enter Pincode" id="pincode" name="pincode" value="" required>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="time">Available Time Slot<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select id="ts_name" name="ts_id" class="form-control demo-default"  id="timeslot" required placeholder="Select time...">
                      
                     <option>SELECT TIME SLOT</option>
                      <?php foreach ($time as $tkey => $tvalue) { ?>
                        <option value="<?php echo $tvalue->ts_id; ?>"><?php echo $tvalue->ts_name; ?></option>
                      <?php } ?>                    
                    </select>
                </div>
              </div>  
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="user">
              <div class="form-group">   
                     <div class="col-sm-12"> 
												<input class="btn btn-primary" type="submit" name="submit" value="Submit">
									 </div>
                </div>
              </div>
            <!--</form> -->
          </div>
          </form>
      </div>
    </div>
  </div>
</div>
</form>