<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="user_form" action="<?php echo base_url() ?>admin/setting/updated" method="post">
			 
            
           
			  <div class="form-group">
                <label class="control-label col-sm-12" for="email">Email<span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="email"  placeholder="Enter email" name="email" onblur="validateEmail(this);" value="<?php echo $setting->email; ?>"required>
                </div>
              </div>
			  
                 
                  <input type="hidden" class="form-control" name="st_id" value="<?php echo $setting->st_id; ?>"required >
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