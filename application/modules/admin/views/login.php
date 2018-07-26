 
 
 <div class="container container-login">
    <div class="row">
	   <div class="col-md-6 bg-login"></div>
        <div class="login-form col-md-6">
		
            <form method="post" action="<?php echo base_url(); ?>admin/dashboard">
                <!-- <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/images/logo-yanbytes.png" width="100%" /></div> -->
                <h2 class="text-center mt-20">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="width-135 pull-right btn btn-sm btn-primary">
                              <i class="ace-icon fa fa-key"></i>
                              <span class="bigger-110">Login</span>
                            </button>
                </div>
                <div class="clearfix">
                    <!--<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="inner_page.html" class="pull-right">Forgot Password?</a>-->
                </div>        
            </form>           
        </div>
    </div>
</div>  
