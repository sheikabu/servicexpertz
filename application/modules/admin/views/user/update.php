<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="user_form" action="<?php echo base_url() ?>admin/user/updated" method="post">
			 
              <div class="form-group">
                <label class="control-label col-sm-12" for="firs
				tname">First Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control"  id="firstname" placeholder="Enter First Name" name="first_name" value="<?php echo $user->name;?>"required>
                </div>
              </div>
            <div class="form-group">
                <label class="control-label col-sm-12" for="username">User Name<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="username" placeholder="Enter First Name" name="username" value="<?php echo $user->username;?>" required>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="password">Password<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="password" class="form-control" id="password"  placeholder="Enter Password" name="password" value="<?php echo $user->password;?>"required>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="email"  placeholder="Enter email" name="email" onblur="validateEmail(this);" value="<?php echo $user->email;?>"required>
                </div>
              </div>
			   <div class="form-group">
                <label class="control-label col-sm-12" for="phone">Phone Number<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="phone"  placeholder="Enter phone number" name="phone" value="<?php echo $user->phone;?>"required>
                </div>
              </div>
			        <div class="form-group">
                <label class="control-label col-sm-12">Select role <span class="validationerror">*</span></label>
                <div class="col-sm-12">
                     <select class="form-control" name="role"  id="role" value="<?php echo $user->role;?>" required> 
                      <option value="admin"<?php if($user->role=="admin") { ?> selected <?php } ?>>Admin</option>
                      <option value="user"<?php if($user->role=="user") { ?> selected <?php } ?>>User</option>
                      <option value="Booking Agent"<?php if($user->role=="Booking Agent") { ?> selected <?php } ?>>Booking Agent</option>
                      <option value="Vendor Tracking"<?php if($user->role=="Vendor Tracking") { ?> selected <?php } ?>>Vendor Tracking</option>
                     
                     </select>
                </div>
              </div>		   
                  
                  <input type="hidden" class="form-control" name="userid" value="<?php echo $user->user_id; ?>"required >
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
<script>
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
</script>