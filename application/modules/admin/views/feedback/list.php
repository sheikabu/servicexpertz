<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			
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


	          <table id="userTable" class="display table-striped table-hover table-bordered" style="width: 100%;"">

			    <thead>
			        <tr>
			           <th>#</th>
			           <th>Name</th>						
					   <th>Email</th>
					   <th>Comments</th>
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
			    $u=1;
				foreach($feedback_list as $feedback) {
				?>
			        <tr>
			        	<td><?php echo $feedback->id; ?></td>
			            <td><?php echo $feedback->name; ?></td>			            
			            <td><?php echo $feedback->email; ?></td>
			            <td><?php echo $feedback->comments; ?></td>
			        </tr>
			    <?php $u++; } ?>
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
  	  "columnDefs": [
  		{
    		"targets": [ 0 ],
    		"visible": false,
  		}],

      "order": [[ 0, "desc" ]]
    } );

  } );
</script>


