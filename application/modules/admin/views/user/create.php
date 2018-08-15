<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="user_form" action="<?php echo base_url() ?>admin/user/insert" method="post" >
			 
              <div class="form-group">
                <label class="control-label col-sm-12" for="firstname">First Name<span>*</span></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Last Name<span>*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="last_name" value="" >
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Email<span>*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="myemail" placeholder="Enter email"  name="email" onblur="validateEmail(this);" value="" required="" >
                </div>
              </div>
			   <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Phone Number<span>*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="l_name" placeholder="Enter email" name="phone"  value="">
                </div>
              </div>
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="user">
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

<script type="text/javascript">
      $( "#user_form" ).validate( {
        rules: {
			
          first_name: "required",
           last_name: "required",
           phone: "required",
          email: {
            validate_email: true
          },
          
         },
        messages: {
         
         first_name: "Please enter your firstname",
		 last_name: "Please enter your lastname",
          phone: "Please enter your Phone Number",

          email: "Please enter a valid email address", 
         
                 
        },
 errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
       
        }
      
       );
    

jQuery.validator.addMethod("validate_email", function(value, element) {

if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
return true;
} else {
return false;
}
}, "Please enter a valid Email.");

      </script>