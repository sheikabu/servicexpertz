<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12 mt-4">  

      <div class="row">
      <div class="col-sm-12">
           <button onclick="goBack()">Go Back</button> <br>
       <br>
       </div>
      
          <div class="col-md-6 col-sm-12">
              <form class="form-horizontal"  enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="firstname">Select Vendor: </label>
        			        <div class="col-sm-6 col-xs-12 result">
                        <?php echo $vendors->company_name; ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="maincate">Select Main Category :  </label> 
                      <div class="col-sm-6 col-xs-12 result">
                          <?php $selected = ''; foreach ($maincate as $key => $value) {
                            $selected .= $value->main_category.',';
                          } echo rtrim($selected,',');
                          ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="cate">Select Category : </label>
                      <div class="col-sm-6 col-xs-12 result">
                         <?php $selected = ''; foreach ($cate as $key => $value) {
                            $selected .= $value->category.',';
                          } echo rtrim($selected,',');
                          ?>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="cate">Select Sub Category : </label>
                      <div class="col-sm-6 col-xs-12 result">
                         <?php $selected = ''; foreach ($subcate as $key => $value) {
                            $selected .= $value->sub_category.',';
                          } echo rtrim($selected,',');
                          ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="cate">Select Service :  </label>
                      <div class="col-sm-6 col-xs-12 result">
                          <?php $selected = ''; foreach ($services as $key => $value) {
                            $selected .= $value->services.',';
                          } echo rtrim($selected,',');
                          ?>
                      </div>
                    </div>
                  </div>
                  <!--<div class="form-group">
                    <div class="row bb">
                      <label class="control-label col-sm-6 col-xs-12" for="cost">Min Cost : </label>
                      <div class="col-sm-6 col-xs-12 result">
                          <?php echo $service_providers->min_cost;?>
                      </div>
                    </div>
                  </div>-->
                  <div class="form-group">
                    <div class="row bb"> 
                      <label class="control-label col-sm-6 col-xs-12" for="cost">Image : </label>
                      <div class="col-sm-6 col-xs-12 result mb-10">
                          <img src="<?php echo base_url() ?>upload/sp/<?php echo $service_providers->image;?>" width="50" height="50">
      		            </div>
                    </div>
                  </div>
                   <div class="form-group">
                  <div class="row bb">
                    <label class="control-label col-sm-6 col-xs-12" for="city">Select City : </label>
                    <div class="col-sm-6 col-xs-12 result">
                         <?php $selected = ''; foreach ($cities as $key => $value) {
                            $selected .= $value->city_name.',';
                          } echo rtrim($selected,',');
                          ?>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="row bb">
                    <label class="control-label col-sm-6 col-xs-12" for="pincode">Pincode : </label>
                    <div class="col-sm-6 col-xs-12 result">
                        <?php echo $service_providers->pincode; ?>
                    </div>
                  </div>
              </div>  
              </form>
				    </div>
            <div class="col-md-6 col-sm-12">
              <form class="form-horizontal"  enctype="multipart/form-data">
                <div class="form-group">
                  <div class="row bb"> 
                    <label class="control-label col-sm-6 col-xs-12" for="emp_id">Emp ID : </label>
                    <div class="col-sm-6 col-xs-12 result">
                        <?php echo $service_providers->emp_id;?>
                    </div>
                  </div>
                </div>

              <div class="form-group">
                <div class="row bb"> 
                    <label class="control-label col-sm-6 col-xs-12" for="firstname">First Name : </label>
                     <div class="col-sm-6 col-xs-12 result">
                        <?php echo $service_providers->first_name;?>
                     </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row bb"> 
                    <label class="control-label col-sm-6 col-xs-12" for="lastname">Last Name : </label>
                    <div class="col-sm-6 col-xs-12 result">
                      <?php echo $service_providers->last_name;?>
                    </div>
                </div>
              </div>
			       <div class="form-group">
                <div class="row bb">
                    <label class="control-label col-sm-6 col-xs-12" for="lastname">Phone : </label>
                    <div class="col-sm-6 col-xs-12 result">
                        <?php echo $service_providers->phone;?>
                    </div>
                </div>
              </div>   
              <div class="form-group">
                <div class="row bb">
                    <label class="control-label col-sm-6 col-xs-12" for="email">Email : </label>
                    <div class="col-sm-6 col-xs-12 result">
                      <?php echo $service_providers->email;?>
                    </div>
                </div>
              </div> 
             
              <div class="form-group">
                  <div class="row bb">
                   <label class="control-label col-sm-6 col-xs-12" for="city">Available Time Slot : </label>
                   <div class="col-sm-6 col-xs-12 result">
                       <?php $selected = ''; foreach ($time as $key => $value) {
                            $selected .= $value->ts_name.',';
                          } echo rtrim($selected,',');
                          ?>
                   </div>
                  </div>
              </div>            
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="spid" value="<?php echo $service_providers->spid; ?>">
             
			 
            </form>
          </div>
      
    </div>
  </div>
</div>