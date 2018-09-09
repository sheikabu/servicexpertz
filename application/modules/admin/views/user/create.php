<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="user_form" action="<?php echo base_url() ?>admin/user/insert" method="post" enctype="multipart/form-data" >
			 
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="first_name" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="username">User Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="username" placeholder="Enter First Name" name="username" value="" required>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-12" for="password">Password<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="password"  placeholder="Enter Password" name="password" value="">
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="email" placeholder="Enter email"  name="email" value="">
                </div>
              </div>
			   <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone Number<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="phone" placeholder="Enter email" name="phone"  value="">
                </div>
              </div>
			   <div class="form-group">
                <label class="control-label col-sm-12">Select role <span class="validationerror">*</span></label>
                <div class="col-sm-12">
                     <select class="form-control" name="role"  id="role" required> 
                      
                      <option value="Booking Agent">Booking Agent</option>
                      <option value="Vendor Tracking">Vendor Tracking</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                      
                     </select>
                </div>
              </div>
			  
                  
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