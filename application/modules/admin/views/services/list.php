<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			<div class="col-sm-12 mt-10 mb-10 text-right">
       		 	<a class="btn btn-primary" style="margin-right: 30px;" href="<?php echo base_url(); ?>admin/services/add">Add Service </a>
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
			           <th>id</th>	
			           <th>#</th>	
			           <th>Main Category</th>
						<th>Category</th>	
						<th>Sub Category</th>						
						<th>Service</th>
						<th>Image</th>
						
						<th>Terms and Conditions</th>
						<th>Cost</th>
						<th>Edit</th>
						<th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
			    $s = 1;
				foreach($services_list as $service) {
				?>
			        <tr>
			        	<td><?php echo $s; ?></td>
			        	<td><?php echo $service->sid; ?></td>
			            <td><?php echo strtoupper($service->main_category); ?></td>
			            <td><?php echo strtoupper($service->category); ?></td>
			            <th><?php echo strtoupper($service->sub_category); ?></th>	
			             <td><?php echo $service->services; ?></td>	
                        <td>
                        	<?php if($service->image!='') { ?>       
		                   <div class="zoom"><img src="<?php echo base_url() ?><?php echo $service->image; ?>" width="20" height="20" /></div>		                   
		                    <?php } ?>		                    
                        	
						<td><?php echo $service->terms_conditions; ?></td>		
						<td><?php echo $service->price; ?></td>						
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/services/update/<?php echo $service->sid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/services/delete/<?php echo $service->sid; ?>"><img  src='<?php echo base_url(); ?>assets/images/delete.png' width="20px" height="20px" title="Delete" onClick="return doconfirm();" ></a></td>
			        </tr>
			    <?php $s++; } ?>
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

      "order": [[ 0, "desc" ]],
      "pageLength": 15,
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

