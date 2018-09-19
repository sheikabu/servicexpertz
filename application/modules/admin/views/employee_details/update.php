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
			 
			  <form role="form" id="employee_details_form" action="<?php echo base_url() ?>admin/vendors/employee_updated" method="post" enctype="multipart/form-data">			    
			    
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
							        <input maxlength="100" type="text" id="emp_id" value="<?php echo $employee->employee_id;?>"  class="form-control" name="emp_id" placeholder="Enter ID" required>
						        </div>

					          	<div class="form-group">
							        <label class="control-label">Name of the Employee</label>
							        <input maxlength="100" type="text"  class="form-control" name="staff_name" value="<?php echo $employee->staff_name;?>"  placeholder="Enter Name of the Staff" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address</label>
							        <input class="form-control rounded-0" id="exampleFormControlTextarea1" name="staff_address" value="<?php echo $employee->staff_address;?>" rows="4" required>
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Skills</label>
							        <input maxlength="100" type="text"  class="form-control" name="skills" value="<?php echo $employee->skills;?>" placeholder="Enter Skills" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Experience</label>
							        <input maxlength="100" type="text"  class="form-control" name="experience" value="<?php echo $employee->experience;?>" placeholder="Enter Experience" required> 
						        </div>
					          <div class="form-group">
							        <label class="control-label">Image</label>
									<img src="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->image;?>" width="50" height="50">
							        <input type="file" name="userfile"  class="form-control"  value="<?php echo $employee->image;?>" >
									 <input type="hidden" value="<?php echo $employee->image;?>" name="old_image">
						        </div>
					        </div>
					        	<div class="col-md-6 col-sm-12">
							
						        <div class="form-group">
							        <label class="control-label">Address proof<span>*</span></label>
							        <img src="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->address_image;?>" width="50" height="50">
							        <input type="file" name="address_image"  class="form-control"  value="<?php echo $employee->address_image;?>" >
									 <input type="hidden" value="<?php echo $employee->address_image;?>" name="old_address_image">
							       
						        </div>
						        <div class="form-group">
							        <label class="control-label">PAN Crad Proof<span>*</span></label>
							         <img src="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->pan_image;?>" width="50" height="50">
							        <input type="file" name="pan_image"  class="form-control"  value="<?php echo $employee->pan_image;?>" >
									 <input type="hidden" value="<?php echo $employee->pan_image;?>" name="old_pan_image">
							       
						        </div>
						        <div class="form-group">
							        <label class="control-label">Company Establishment proof <span>*</span></label>
							         <img src="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->company_image;?>" width="50" height="50">
							        <input type="file" name="company_image"  class="form-control"  value="<?php echo $employee->company_image;?>" >
									 <input type="hidden" value="<?php echo $employee->company_image;?>" name="old_company_image">
							       
						        </div>
						        <div class="form-group">
							        <label class="control-label">Aadhar card proof (Front)<span>*</span></label>
							         <img src="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->aadhar_image;?>" width="50" height="50">
							        <input type="file" name="aadhar_image"  class="form-control"  value="<?php echo $employee->aadhar_image;?>" >
									 <input type="hidden" value="<?php echo $employee->aadhar_image;?>" name="old_aadhar_image">
							       
						        </div>
						        
							</div>
					    </div>
						
					    <div class="row">
				       		<div class="col-sm-12">				       			
					          	<button class="btn btn-primary btn-lg pull-right mb-10" type="submit" name="submit" value="Submit">Submit</button>
					        </div>
					  	</div>
					</div>
			      </div>
			    </div>                

                 <input type="hidden" name="vid" value="<?php echo $this->uri->segment(4); ?>">
                 <input type="hidden" name="eid" value="<?php echo $this->uri->segment(5); ?>">
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