<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" action="<?php echo base_url() ?>admin/user/updated" method="post">
			 
              <div class="form-group">
                <label class="control-label col-sm-12" for="firs
				tname">First Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $user->first_name;?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $user->last_name;?>">
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Email</label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter email" name="email" value="<?php echo $user->email;?>">
                </div>
              </div>
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="user">
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="userid" value="<?php echo $user->userid; ?>">
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