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
			 
			  <form role="form"  method="post">
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
							        <label class="control-label">Name of Company: <?php echo $vendor->company_name;?></label>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address </label> :<?php echo $vendor->comany_address;?>
							        
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pincode  </label> :<?php echo $vendor->pincode;?>
							      
						        </div>
								<div class="form-group">
							        <label class="control-label">Telephone No </label>: <?php echo $vendor->telephone_no;?>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Fax No </label>: <?php echo $vendor->fax_no;?>
							        
						        </div>
								<div class="form-group">
							        <label class="control-label">Email</label>: <?php echo $vendor->email;?>
							      
						        </div>
								<div class="form-group">
							        <label class="control-label">Web</label>: <?php echo $vendor->web;?>
							     
						        </div>
								
					        </div>
					        <div class="col-md-6 col-sm-12">

						        <div class="form-group">
							        <label class="control-label">Name of  Company Representative</label>: <?php echo $vendor->name_representative;?>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Email of  Company Representative</label>: <?php echo $vendor->email_crepresentative;?>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Pan Card</label>: <?php echo $vendor->pan_card;?>
							      
						        </div>
								<div class="form-group">
							        <label class="control-label">Title/Designation</label>: <?php echo $vendor->title_designation;?>
							     
						        </div>
						        <!-- <div class="form-group">
							        <label class="control-label">Telphone No.</label>
							        <input maxlength="100" type="text"  class="form-control" placeholder="Enter Telphone No.">
						        </div> -->
								<div class="form-group">
							        <label class="control-label">Direct No.</label>: <?php echo $vendor->direct_no;?>
							      
						        </div>
								<div class="form-group">
							        <label class="control-label">Mobile No.</label>: <?php echo $vendor->mobile_no;?>
							       
						        </div>
								<div class="form-group">
							        <label class="control-label">Date Company was Established</label>: <?php echo $vendor->date_cestablished;?>
							       
						        </div>
								<div class="form-group">
							        <label class="control-label">Gross Annual ... for the ..year</label>: <?php echo $vendor->cross_annual;?>
							       
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
						            <label class="control-label">Bank Name</label>: <?php echo $vendor->bank_name;?>
						           
						        </div>
						        <div class="form-group">
						            <label class="control-label">Bank Address</label>: <?php echo $vendor->bank_address;?>
						           
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
							        <label class="control-label">Name of the Staff</label>: <?php echo $vendor->staff_name;?>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address</label>: <?php echo $vendor->staff_address;?>
							       
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Skills</label>: <?php echo $vendor->skills;?>
							      
						        </div>
						        <div class="form-group">
							        <label class="control-label">Experience</label>: <?php echo $vendor->experience;?>
							      
						        </div>
					          
					        </div>
					    </div>
						
					    <div class="row">
				       		<div class="col-sm-12">
				       			<button class="btn btn-primary prevBtn btn-lg pull-left mb-10" type="button">Previous</button>
					          	
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