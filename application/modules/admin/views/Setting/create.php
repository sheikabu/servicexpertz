<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="user_form" action="<?php echo base_url() ?>admin/setting/insert" method="post" >
			 
             
              <!--<div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="last_name" value="" >
                </div>
              </div>-->
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="email" placeholder="Enter email"  name="email" value="">
                </div>
              </div>
			  
                  <input type="hidden" class="form-control" name="role" value="user">
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