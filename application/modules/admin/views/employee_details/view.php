<div class="container-fluid col-md-9 col-sm-9" id="PrintDiv">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
	  <div class="container"></div>
	  <div class="container multi-form-container">	 
			 <div class="col-sm-12">
			     <button onclick="goBack()">Go Back</button>

			    </div>		
			    <br>
			    <br>	  	   
			    <div class="row setup-content" id="step-3">
			      <div class="col-sm-12 col-md-offset-3" >
			        <div class="col-md-12">
			        	<div class="row">
			      			<div class="col-sm-12">
			          			<h3 class="mb-20">DETAILS OF STAFF MEMBERS HANDLING SERVICES</h3>
			          		</div>
			          	</div>
		          		<div class="row">
		          			<div class="col-sm-6" >
		          				<div class="form-group">
							        <label class="control-label">Employee ID</label>: <?php echo $employee->employee_id;?>
							        
						        </div>
					          	<div class="form-group">
							        <label class="control-label">Name of the employee</label>: <?php echo $employee->staff_name;?>
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Address</label>: <?php echo $employee->staff_address;?>
							       
						            
						        </div>
						        <div class="form-group">
							        <label class="control-label">Skills</label>: <?php echo $employee->skills;?>
							      
						        </div>
						        <div class="form-group">
							        <label class="control-label">Experience</label>: <?php echo $employee->experience;?>
							      
						        </div>
								 <div class="form-group">
								  
								  <label class="control-label">image</label>: 
								  <a href="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->image;?>" target="_blank"><?php echo $employee->image;?></a>
					        </div>
					        </div>
					         <div class="col-md-6 col-sm-12">
					         	<div class="form-group">
							        <label class="control-label">Address proof<span>*</span></label>:
							         <a href="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->address_image;?>" target="_blank"><?php echo $employee->address_image;?></a>							
						        </div>
						        <div class="form-group">
							        <label class="control-label">PAN Crad Proof<span>*</span></label>:
							          <a href="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->pan_image;?>" target="_blank"><?php echo $employee->pan_image;?></a>	
							        
							       
						        </div>
						        <div class="form-group">
							        <label class="control-label">Company Establishment proof <span>*</span></label>:
							         <a href="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->company_image;?>" target="_blank"><?php echo $employee->company_image;?></a>	
							      
							        
						        </div>
						        <div class="form-group">
							        <label class="control-label">Aadhar card proof<span>*</span></label>: 
							         <a href="<?php echo base_url() ?>upload/vendor/employee/<?php echo $employee->aadhar_image;?>" target="_blank"><?php echo $employee->aadhar_image;?></a>							
						        </div>
						        
					         </div>
					         
					    </div>
						
					   
					</div>
			      </div>
			    </div>				
			  <input type="button" value="print" onclick="PrintDiv();" />
			  
			</div>
         
      </div>
    </div>
  </div>
  

</div>

<div id="divToPrint" style="display:none;">
  <div>		
		<div class="form-group">
		<label class="control-label">Employee ID</label>: <?php echo $employee->employee_id;?>

		</div>
		<div class="form-group">
		<label class="control-label">Name of the employee</label>: <?php echo $employee->staff_name;?>

		</div>
		<div class="form-group">
		<label class="control-label">Address</label>: <?php echo $employee->staff_address;?>


		</div>
		<div class="form-group">
		<label class="control-label">Skills</label>: <?php echo $employee->skills;?>

		</div>
		<div class="form-group">
		<label class="control-label">Experience</label>: <?php echo $employee->experience;?>

		</div>
		
		
  </div>
</div>

<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();

       popupWin.document.write('<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css" type="text/css" />');
       popupWin.document.write('<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" type="text/css" />');

       popupWin.document.write('<html><img width="200" height="45" src="<?php echo base_url(); ?>/assets/images/logo_servicexpertz%20_2.png"><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>