<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-sm-12">
              <form class="form-horizontal"  enctype="multipart/form-data">
			  <br>
			  <br>
              <div class="form-group">
                <label class="control-label col-sm-12" for="firs
        tname">Select Vendor<span class="validationerror">*</span>: <?php echo $service_providers->vendor_id; ?></label>
		
			          <div class="col-sm-12">
                    
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category :  <?php echo $service_providers->main_category_id; ?></label>
                <div class="col-sm-12">
                 
                   
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category : <?php echo $service_providers->category_id; ?></label>
                <div class="col-sm-12">
                    
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Service :  <?php echo $service_providers->services_id; ?></label>
                <div class="col-sm-12">
                    
					
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Min Cost : <?php echo $service_providers->min_cost;?></label>
                
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="cost">Image : <img src="<?php echo base_url() ?>upload/sp/<?php echo $service_providers->image;?>" width="50" height="50"></label>
                <div class="col-sm-12">
                
		              
						    
                </div>
              </div>
                </div>
				
                <div class="col-md-6 col-sm-12">
				 <br>
			  <br>
                <div class="form-group">
                <label class="control-label col-sm-12" for="emp_id">Emp ID : <?php echo $service_providers->emp_id;?></label>
                
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name : <?php echo $service_providers->first_name;?></label>
                
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name : <?php echo $service_providers->last_name;?></label>
                
              </div>
			       <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone : <?php echo $service_providers->phone;?></label>
               
              </div>   
              <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email : <?php echo $service_providers->email;?></label>
                
              </div> 
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Select City : <?php echo $service_providers->city_id;?></label>
                
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="pincode">Pincode : <?php echo $service_providers->pincode; ?></label>
                
              </div>  
              <div class="form-group">
                <label class="control-label col-sm-12" for="city">Available Time Slot : <?php echo $service_providers->ts_id;?></label>
               
              </div>            
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="spid" value="<?php echo $service_providers->spid; ?>">
             
			 
            </form>
          </div>
      </div>
    </div>
  </div>
</div>