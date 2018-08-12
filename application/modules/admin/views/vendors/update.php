<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
	  <div class="container"></div>
	  <div class="container multi-form-container">
	  <div class="stepwizard col-xs-12 width-fluid ">
			    <div class="stepwizard-row setup-panel">
			      <div class="stepwizard-step">
			        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
			        <p>Step 1</p>
			      </div>
			      <div class="stepwizard-step">
			        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
			        <p>Step 2</p>
			      </div>
			      <div class="stepwizard-step">
			        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
			        <p>Step 3</p>
			      </div>
			    </div>
			  </div>
			  
			  <form role="form" action="<?php echo base_url() ?>admin/vendors/updated" method="post" enctype="multipart/form-data">
			    <div class="row setup-content" id="step-1">
			      	<div class="col-sm-12 col-md-offset-3">
			      		<div class="row">
			      			<div class="col-sm-12">
			      				<h3 class="mb-20">Company Details and General Information</h3>
			      			</div>
			      		</div>
			      		<div class="row">
					        <div class="col-md-6 col-sm-12">
						        
						        <div class="form-group">
							        <label class="control-label">Name of Company</label>
							        <input maxlength="100" type="text" required="required" name="company_name"  value="<?php echo $vendor->company_name;?>" class="form-control" placeholder="Enter Company Name">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address</label>
							        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name="comany_address" value="<?php echo $vendor->comany_address;?>" rows="4"></textarea>
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pincode</label>
							        <input maxlength="100" type="text"  class="form-control" name="pincode" value="<?php echo $vendor->pincode;?>" placeholder="Enter Pincode">
						        </div>
								<div class="form-group">
							        <label class="control-label">Telephone No.</label>
							        <input maxlength="100" type="text"  class="form-control"  name="telephone_no" value="<?php echo $vendor->telephone_no;?>" placeholder="Enter Telephone No.">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Fax No.</label>
							        <input maxlength="100" type="text"  class="form-control"  name="fax_no" value="<?php echo $vendor->fax_no;?>"  placeholder="Enter Fax No.">
						        </div>
								<div class="form-group">
							        <label class="control-label">Email</label>
							        <input maxlength="100" type="text"  class="form-control" name="email" value="<?php echo $vendor->email;?>" placeholder="Enter Email">
						        </div>
								<div class="form-group">
							        <label class="control-label">Web</label>
							        <input maxlength="100" type="text"  class="form-control"  name="web" value="<?php echo $vendor->web;?>" placeholder="Enter Web">
						        </div>
								
					        </div>
					        <div class="col-md-6 col-sm-12">

						        <div class="form-group">
							        <label class="control-label">Name of  Company Representative</label>
							        <input maxlength="100" type="text"  class="form-control" name="name_representative" value="<?php echo $vendor->name_representative;?>" placeholder="Enter Name of  Company Representative">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Email of  Company Representative</label>
							        <input maxlength="100" type="text"  class="form-control" name="email_crepresentative" value="<?php echo $vendor->email_crepresentative;?>" placeholder="Enter Email of  Company Representative">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pan Card</label>
							        <input maxlength="100" type="text"  class="form-control" name="pan_card" value="<?php echo $vendor->pan_card;?>" placeholder="Enter Pan Card">
						        </div>
								<div class="form-group">
							        <label class="control-label">Title/Designation</label>
							        <input maxlength="100" type="text"  class="form-control" name="title_designation" value="<?php echo $vendor->title_designation;?>" placeholder="Enter Title/Designation">
						        </div>
						        <!-- <div class="form-group">
							        <label class="control-label">Telphone No.</label>
							        <input maxlength="100" type="text"  class="form-control" placeholder="Enter Telphone No.">
						        </div> -->
								<div class="form-group">
							        <label class="control-label">Direct No.</label>
							        <input maxlength="100" type="text"  class="form-control" name="direct_no" value="<?php echo $vendor->direct_no;?>" placeholder="Enter Direct No.">
						        </div>
								<div class="form-group">
							        <label class="control-label">Mobile No.</label>
							        <input maxlength="100" type="text"  class="form-control" name="mobile_no" value="<?php echo $vendor->mobile_no;?>" placeholder="Enter Mobile No.">
						        </div>
								<div class="form-group">
							        <label class="control-label">Date Company was Established</label>
							        <input maxlength="100" type="text"  class="form-control" name="date_cestablished" value="<?php echo $vendor->date_cestablished;?>" placeholder="Enter Date Company was Established">
						        </div>
								<div class="form-group">
							        <label class="control-label">Gross Annual ... for the ..year</label>
							        <input maxlength="100" type="text"  class="form-control" name="cross_annual" value="<?php echo $vendor->cross_annual;?>" placeholder="Enter Gross Annual ... for the ..year">
						        </div>
					        </div>
					    </div>
				       	<div class="row">
				       		<div class="col-sm-12">
				       			<button class="btn btn-primary nextBtn btn-lg pull-right mb-10" type="button">Next</button>
				       		</div>
				       	</div>
					</div>
				    
				</div>
			    <div class="row setup-content" id="step-2">
			      <div class="col-sm-12 col-md-offset-3">
			        <div class="col-md-12">
			        	<div class="row">
			      			<div class="col-sm-12">
			          			<h3 class="mb-20">Bank Information</h3>
							</div>
			          	</div>
			          	<div class="row">
			          		<div class="col-sm-6">
						        <div class="form-group">
						            <label class="control-label">Bank Name</label>
						            <input maxlength="200" type="text"  required="required" class="form-control" name="bank_name" value="<?php echo $vendor->bank_name;?>"  placeholder="Enter Bank Name">
						        </div>
						        <div class="form-group">
						            <label class="control-label">Bank Address</label>
						            <input maxlength="200" type="text" class="form-control" name="bank_address" value="<?php echo $vendor->bank_address;?>" placeholder="Enter Bank Address">
						        </div>
						        
					        </div>
					    </div>
					    <div class="row">
				       		<div class="col-sm-12">
				       			<button class="btn btn-primary prevBtn btn-lg pull-left mb-10" type="button">Previous</button>
						        <button class="btn btn-primary nextBtn btn-lg pull-right mb-10" type="button">Next</button>
				       		</div>
				       	</div>
			        </div>
			      </div>
			    </div>
			    <div class="row setup-content" id="step-3">
			      <div class="col-sm-12 col-md-offset-3">
			        <div class="col-md-12">
			        	<div class="row">
			      			<div class="col-sm-12">
			          			<h3 class="mb-20">Details of Staff Memebers Handling Services</h3>
			          		</div>
			          	</div>
		          		<div class="row">
		          			<div class="col-sm-6">
					          	<div class="form-group">
							        <label class="control-label">Name of the Staff</label>
							        <input maxlength="100" type="text" required="required" class="form-control" name="staff_name" value="<?php echo $vendor->staff_name;?>"  placeholder="Enter Name of the Staff">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address</label>
							        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name="staff_address" value="<?php echo $vendor->staff_address;?>" rows="4"></textarea>
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Skills</label>
							        <input maxlength="100" type="text"  class="form-control" name="skills" value="<?php echo $vendor->skills;?>" placeholder="Enter Skills">
						        </div>
						        <div class="form-group">
							        <label class="control-label">Experience</label>
							        <input maxlength="100" type="text"  class="form-control" name="experience" value="<?php echo $vendor->experience;?>" placeholder="Enter Experience">
						        </div>
					          <div class="form-group">
							        <label class="control-label">Image</label>
									<img src="<?php echo base_url() ?>upload/vendor/<?php echo $vendor->image;?>" width="50" height="50">
							        <input type="file" name="userfile"  class="form-control"  value="<?php echo $vendor->image;?>" >
									 <input type="hidden" value="<?php echo $vendor->image;?>" name="old_image">
						        </div>
					        </div>
					    </div>
						
					    <div class="row">
				       		<div class="col-sm-12">
				       			<button class="btn btn-primary prevBtn btn-lg pull-left mb-10" type="button">Previous</button>
					          	<button class="btn btn-success btn-lg pull-right mb-10" type="submit" name="submit" value="Submit">Submit</button>
					        </div>
					  	</div>
					</div>
			      </div>
			    </div>
				 <input type="hidden" class="form-control" id="l_name" placeholder="role" name="role" value="vendor">
                  <input type="hidden" class="form-control" id="l_name" placeholder="role" name="vid" value="<?php echo $vendor->vid; ?>">
			  </form>
			  
			</div>
         
      </div>
    </div>
  </div>
  <script type="text/javascript">
	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});


</script>

</div>