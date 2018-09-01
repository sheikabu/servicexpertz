<div class="container-fluid container-receipt col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
   		<div class="col-md-12 mt-20">
		<?php 
	    $sc =1;			    
		foreach($welcome as $receipt) {
		?>
   			<div class="row bb">
	   			<div class="col-md-6">
   					<h1 class="title">INVOICE</h1>
   				</div>
   				<div class="col-md-6 text-right">
   					<div class="col-md-12"><label class="mr-2">Invoice #:</label><span class="b">12345678</span></div>
   					<div class="col-md-12"><label class="mr-2">Date:</label><span class="b">August 21, 2018</span></div>
   				</div>
   			</div>
   			<div class="row mt-20 bb">
			
   				<div class="col-md-6 mb-20">
   					
   					<div class="card">
					  <div class="">
					    <h3 class="sub-title">Services to</h3>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><label class="mr-2">Invoice #:</label><span class="b"><?php echo $receipt->booking_id; ?></span></li>
					    <li class="list-group-item"><label class="mr-2">Date:</label><span class="b"><?php echo $receipt->selected_date; ?></span></li>
					    <li class="list-group-item"><label class="mr-2">Customer ID:</label><span class="b">ABC1234</span></li>
						 <li class="list-group-item"><label class="mr-2">Selected Time:</label><span class="b"><?php echo $receipt->selected_time; ?></span></li>
					    <li class="list-group-item"><label class="mr-2">Address:</label><span class="b">121-Yamuna, GG Street, India</span></li>
					    <li class="list-group-item"><label class="mr-2">Contact:</label><span class="b">435353</span></li>
					  </ul>
					</div>

   				</div>
   				<div class="col-md-6 mb-20">
   					
   					<div class="card">
					  <div class="">
					    <h3 class="sub-title">Services to</h3>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><label class="mr-2">Invoice #:</label><span class="b">12345678</span></li>
					    <li class="list-group-item"><label class="mr-2">Date:</label><span class="b"><?php echo $receipt->selected_date; ?></span></li>
					    <li class="list-group-item"><label class="mr-2">Customer ID:</label><span class="b">ABC1234</span></li>
						 <li class="list-group-item"><label class="mr-2">Selected Time:</label><span class="b"><?php echo $receipt->selected_time; ?></span></li>
					    <li class="list-group-item"><label class="mr-2">Address:</label><span class="b">121-Yamuna, GG Street, India</span></li>
					    <li class="list-group-item"><label class="mr-2">Contact:</label><span class="b">abcd@gmail.com</span></li>
					  </ul>
					</div>

   				</div>

   			</div>
   			<div class="row mt-20">
   					<div class="col-md-12">
					    <h3 class="sub-title">Services</h3>
					 </div>
			</div>
   			<div class="row">
					<div class="col-md-12 mt-20"> 
						<table id="" class="width-fluid display table-striped table-hover table-bordered">
						    <thead>
						        <tr>
						        	<th>id</th>						        	
						           <th>Services</th>						

									<th>Total</th>
							    </tr>
						    </thead>
						    <tbody>
						    
						        <tr>
						        	<td><?php echo $receipt->booking_id; ?></td>
						        	<td><?php echo $receipt->services; ?></td>
						           
						            <td><?php echo $receipt->price; ?></td>
						        </tr>
						 
						    </tbody>
							</table>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="card text-right">
						 
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item"><label class="mr-2">Sub total:</label><span class="b"><?php echo $receipt->price; ?></span></li>
						   
						    <li class="list-group-item"><label class="mr-2">Total Tax:</label><span class="b">16%</span></li>
						    <li class="list-group-item"><label class="mr-2">Others:</label><span class="b">00.00</span></li>
						    <li class="list-group-item"><label class="mr-2">Total:</label><span class="b"><?php echo $receipt->price; ?></span></li>
						  </ul>
						</div>
					</div>
				</div>
		<?php $sc++; } ?>
		<input type="hidden" class="form-control" name="booking_id" value="<?php echo $receipt->booking_id; ?>">
   		</div>
   		
      </div>
      <div>
   			<center><input type="button" name="print" value="Print"></center>
   		</div>
    </div>
  </div>
</div>