<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			<div class="col-sm-12 mt-10 mb-10 text-right">
       		 	<a class="btn btn-primary" style="margin-right: 30px;" href="<?php echo base_url(); ?>admin/servicecategories/add">Add Service Category </a>
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
						<th>Main Categories</th>	
						<th>Categories</th>	
						<th>Image</th>	
						<th>Description</th>						
						<th>Edit</th>
						<th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
			    $sc =1;
				foreach($servicecategories_list as $service) {
				?>
			        <tr>
			        	 <td><?php echo $service->sc_id; ?></td>
			        	<td><?php echo $sc; ?></td>	
			            <td><?php echo strtoupper($service->main_category); ?></td>
			             <td><?php echo $service->category; ?></td>		
                         <td>
                         <?php if($service->category_image!='') { ?>       
		                   <img src="<?php echo base_url() ?>upload/servicecategories/<?php echo $service->category_image; ?>" width="50" height="50"> <?php } else { ?>
		                    <img src="<?php echo base_url() ?>upload/dummy.png" width="50" height="50">	                   
		                   <?php } ?>
                        <td><?php echo $service->category_description; ?></td>	 
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/servicecategories/update/<?php echo $service->sc_id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/servicecategories/delete/<?php echo $service->sc_id; ?>"><img  src='<?php echo base_url(); ?>assets/images/delete.png' width="20px" height="20px" title="Delete" onClick="return doconfirm();" ></a></td>
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
  	  "columnDefs": [
  		{
    		"targets": [ 0 ],
    		"visible": false,
  		}],

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

