<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
      	<div class="container"></div>
      	<div class="container multi-form-container">
  			 	<div class="col-sm-12">
			     <button onclick="goBack()">Go Back</button>
			    </div>
			    <br>			  
			  <form role="form" id="employee_details_form" action="<?php echo base_url() ?>admin/vendors/employee_details_insert" method="post" enctype="multipart/form-data">
			   
			    <div class="row setup-content" id="step-3">
			      <div class="col-sm-12 col-md-offset-3">
			        <div class="col-md-12">
			        	<div class="row">
			      			<div class="col-sm-12">
			          			<h3 class="mb-20">DETAILS OF STAFF MEMBERS HANDLING SERVICES</h3>
			          		</div>
			          	</div>

			         

		          		<div class="row">
		          			<div class="col-sm-6">
		          			<div class="form-group">
							        <label class="control-label">Employee ID<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="emp_id" required="required" class="form-control" name="emp_id" placeholder="Enter ID"required>
						        </div>
					          	<div class="form-group">
							        <label class="control-label">Name of the Employee <span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="staffname" required="required" class="form-control" name="staff_name" placeholder="Enter Name of the Staff"required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address<span class="validationerror">*</span></label>
							        <textarea class="form-control rounded-0" id="staffaddress"  name="staff_address" rows="4" required></textarea>
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Skills<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text"  class="form-control" id="skills" name="skills" placeholder="Enter Skills"required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Experience <span class="validationerror">*</span></label>
							        <input maxlength="100" type="text"  class="form-control" id="experience" name="experience" placeholder="Enter Experience"required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Image <span class="validationerror">*</span></label>
							        <input type="file" name="userfile" id="image" class="form-control" required>
						        </div>
					          
					        </div>
							<div class="col-md-6 col-sm-12">
							
						        <div class="form-group">
							        <label class="control-label">Address proof<span class="validationerror">*</span></label>
							        <input type="file" name="address_image" id="address_image" class="form-control" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">PAN Crad Proof<span class="validationerror">*</span></label>
							        <input type="file" name="pan_image" id="pan_image" class="form-control" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Company Establishment proof <span class="validationerror">*</span></label>
							        <input type="file" name="company_image" id="company_image" class="form-control" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Aadhar card proof<span class="validationerror">*</span></label>
							        <input type="file" name="aadhar_image" id="aadhar_image" class="form-control" required>
						        </div>
						        
							</div>
					    </div>
					    <input type="hidden" name="vid" value="<?php echo $this->uri->segment(4); ?>">
					    <div class="row">
				       		<div class="col-sm-12">
					          	<button class="btn btn-primary btn-lg pull-right mb-10" type="submit" name="submit" value="Submit">Submit</button>
					        </div>
					  	</div>
					</div>
			      </div>
			    </div>
			  </form>
			  
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
</div>
