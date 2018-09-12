<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			<div class="col-sm-12 mt-10 mb-10 text-right">
				<a class="btn btn-primary" style="margin-right: 30px;" href="<?php echo base_url(); ?>admin/booknow/book_now">Book Now</a>
			</div>

       	</div>
       	<div class="row">
	        <div class="col-sm-12 text-center">
	        	<?php if($this->session->flashdata('msg')): ?>
	    			<p class="alert alert-success mr-30"><?php echo $this->session->flashdata('msg'); ?></p>
				<?php endif; ?>

	        </div>
        </div>
		<div class="row">
          <div class="col-sm-12">

	          <table id="userTable" class="display table-striped table-hover table-bordered" style="width: 100%;" enctype="multipart/form-data">
			    <thead>
			        <tr>			        	
			          	<th>Booking ID</th>			          							
			          	<th>User Name</th>	
			          	<th>Service</th>	
			          	<th>Selected Date</th>
			          	<th>Selected Time</th>	
						<th>comments</th>	
						<th>Cost</th>	
						<th>Additional Cost</th>
						<th>Total Cost</th>
			          	<th>Status</th>				          	
						
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
			    $sc =1;			    
				foreach($booking_list as $booking) {
				?>
			        <tr>
			        	
			        	 <td><?php echo $booking->booking_id; ?></td>
			        	<td><?php echo $booking->name; ?></td>
			        	<td><?php echo $booking->services; ?></td>
			        	<td><?php echo $booking->selected_date; ?></td>
			        	<td><?php echo $booking->ts_name; ?></td>
						<td><?php echo $booking->comments; ?></td>
						<td><?php echo $booking->price; ?></td>
						<td><?php echo $booking->additonal_cost; ?></td>
						<td><?php echo $booking->total_cost; ?></td>
			        	<td><?php echo $booking->status; ?></td>			        	
			            
			             
			             
			             	                        
			        </tr>
			    <?php $sc++; } ?>
			    </tbody>
				</table>
			</div>
		</div>
       </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {       
  $('#userTable').dataTable( {  	 

      "order": [[ 0, "desc" ]]
    } );

  } );
</script>
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>

