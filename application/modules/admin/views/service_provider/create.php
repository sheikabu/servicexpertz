<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-sm-12">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/serviceprovider/insert" method="post" enctype="multipart/form-data">
            

			       <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Select Vendor</label>
                <div class="col-sm-12">
                    <select id='vendor' name="vendor_id" class="form-control demo-default"  required placeholder="Select Vendor...">
                      <option value="">SELECT VENDOR</option>
                      <?php foreach ($vendors as $key => $value) { ?>
                        <option value="<?php echo $value->vid; ?>"><?php echo $value->company_name; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category</label>
                <div class="col-sm-12">
                    <select id='maincate' name="main_id" class="form-control demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>"><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category</label>
                <div class="col-sm-12">
                    <select id="category" multiple name="cate_id[]" class="form-control demo-default" required placeholder="Select Category...">
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>"><?php echo $cvalue->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Service</label>
                <div class="col-sm-12">
                    <select id="services" name="service_id" class="form-control demo-default"  required placeholder="Select Services...">
                      <option>SELECT SERVICES</option>
                      <?php foreach ($services as $skey => $svalue) { ?>
                        <option value="<?php echo $svalue->sid; ?>"><?php echo $svalue->services; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Min Cost</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter Min Cost" name="mincost" value="" required>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Image</label>
                <div class="col-sm-12">
                  <input type="file" name="userfile" class="form-control" placeholder="Image Upload" size="20" required/>
                </div>
              </div>
               </div>
                <div class="col-md-6 col-sm-12">
                <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">Emp ID</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter Service Provider ID" name="emp_id" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="last_name" value="" required>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Phone Number" name="phone" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="e_name" placeholder="Enter Email" name="email" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Select City</label>
                <div class="col-sm-12">
                    <select id="cities" name="city_id" class="form-control demo-default"  required placeholder="Select City...">
                      <option>SELECT CITY</option>
                      <?php foreach ($cities as $citkey => $citvalue) { ?>
                        <option value="<?php echo $citvalue->city_id; ?>"><?php echo $citvalue->city_name; ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="pincode">Pincode</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="e_name" placeholder="Enter Pincode" name="pincode" value="" required>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="city">Available Time Slot</label>
                <div class="col-sm-12">
                    <select id="cities" name="city_id" class="form-control demo-default"  required placeholder="Select City...">
                      <option>SELECT TIME SLOT</option>
                      <option>Morning</option>
                      <option>Afternoon</option>
                      <option>Evening</option>                     
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
			 
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
