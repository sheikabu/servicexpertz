<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
      	<div class="container"></div>
      	<div class="container multi-form-container">
  			<div class="stepwizard col-xs-12 width-fluid ">
			    <div class="stepwizard-row setup-panel">
			      <div class="stepwizard-step">
			        <a href="#step-1" type="button" class="isDisabled btn btn-primary btn-circle">1</a>
			        <p>Step 1</p>
			      </div>
			      <div class="stepwizard-step">
			        <a href="#step-2" class="isDisabled btn btn-default btn-circle" type="button" disabled="disabled">2</a>
			        <p>Step 2</p>
			      </div>			     
			    </div>
			  </div>
			  
			  <form role="form" id="vendor_form" action="<?php echo base_url() ?>admin/vendors/insert" method="post" enctype="multipart/form-data">
			    <div class="row setup-content" id="step-1">
			      	<div class="col-sm-12 col-md-offset-3">
			      		<div class="row">
			      			<div class="col-sm-12">
			      				<h3 class="mb-20">COMPANY DETAILS AND GENERAL INFORMATION</h3>
			      			</div>
			      		</div>
			      		<div class="row">
					        <div class="col-md-6 col-sm-12">
						        
						        <div class="form-group">
							        <label class="control-label">Name of Company<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="companyname" required name="company_name" class="form-control" placeholder="Enter Company Name" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address<span class="validationerror">*</span></label>
							        <textarea class="form-control rounded-0" id="comanyaddress" name="comany_address" rows="4" required></textarea>
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pincode<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="pincode" class="form-control" name="pincode" placeholder="Enter Pincode" required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Telephone No.<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="telephone" class="form-control"  name="telephone_no" placeholder="Enter Telephone No." required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Fax No.<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="faxno" class="form-control"  name="fax_no" placeholder="Enter Fax No." required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Email<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="email" class="form-control" name="email" onblur="validateEmail(this);"   placeholder="Enter Email" required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Web<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="web" class="form-control"  name="web" placeholder="Enter Web" required>
						        </div>
								
					        </div>
					        <div class="col-md-6 col-sm-12">

						        <div class="form-group">
							        <label class="control-label">Name of  Company Representative<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="namecrepresentative" class="form-control" name="name_representative" placeholder="Enter Name of  Company Representative" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Email of  Company Representative<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="emailcrepresentative" class="form-control" name="email_crepresentative" onblur="validateEmail(this);"  placeholder="Enter Email of  Company Representative" required>
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pan Card<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="pancard" class="form-control" name="pan_card" placeholder="Enter Pan Card" required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Title/Designation<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="titledesignation" class="form-control" name="title_designation" placeholder="Enter Title/Designation" required>
						        </div>
						        <!-- <div class="form-group">
							        <label class="control-label">Telphone No.</label>
							        <input maxlength="100" type="text"  class="form-control" placeholder="Enter Telphone No.">
						        </div> -->
								<div class="form-group">
							        <label class="control-label">Direct No.<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="directno" class="form-control" name="direct_no" placeholder="Enter Direct No." required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Mobile No.<span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="mobileno" class="form-control" name="mobile_no" placeholder="Enter Mobile No." required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Date Company was Established <span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="datecestablished" class="form-control" name="date_cestablished" placeholder="Enter Date Company was Established" required>
						        </div>
								<div class="form-group">
							        <label class="control-label">Gross Annual ... for the ..year <span class="validationerror">*</span></label>
							        <input maxlength="100" type="text" id="grossannual" class="form-control" name="cross_annual" placeholder="Enter Gross Annual ... for the ..year" required>
						        </div>
					        </div>
					    </div>
				       	<div class="row">
				       		<div class="col-sm-12">
				       			<button class="btn btn-primary nextBtn btn-lg pull-right mb-10" id="next" type="button">Next</button>
				       		</div>
				       	</div>
					</div>
				    
				</div>
			    <div class="row setup-content" id="step-2">
			      <div class="col-sm-12 col-md-offset-3">
			        <div class="col-md-12">
			        	<div class="row">
			      			<div class="col-sm-12">
			          			<h3 class="mb-20">BANK INFORMATION</h3>
							</div>
			          	</div>
			          	<div class="row">
			          		<div class="col-sm-6">
						        <div class="form-group">
						            <label class="control-label">Bank Name<span class="validationerror">*</span></label>
						            <input maxlength="200" type="text" id="bankname" required="required" class="form-control" name="bank_name" placeholder="Enter Bank Name"required>
						        </div>
						        <div class="form-group">
						            <label class="control-label">Bank Account No<span class="validationerror">*</span></label>
						            <input maxlength="200" type="text" id="accountno" required="required" class="form-control" name="bank_account_no" placeholder="Enter Bank Name"required>
						        </div>
						        <div class="form-group">
						            <label class="control-label">IFSC Code<span class="validationerror">*</span></label>
						            <input maxlength="200" type="text" id="ifsccode" required="required" class="form-control" name="ifsc_code" placeholder="Enter Bank Name"required>
						        </div>
						        <div class="form-group">
						            <label class="control-label">Bank Account Type<span class="validationerror">*</span></label>
						            <input maxlength="200" type="text" id="banktype" required="required" class="form-control" name="bank_account_type" placeholder="Enter Bank Name"required>
						        </div>
						        <div class="form-group">
						            <label class="control-label">Bank Address<span class="validationerror">*</span></label>
						            <input maxlength="200" type="text" id="bankaddress" class="form-control" name="bank_address" placeholder="Enter Bank Address" required>
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
