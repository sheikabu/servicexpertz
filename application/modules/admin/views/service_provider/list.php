<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			<div class="col-sm-12 mt-10 mb-10 text-right">
       		 	<a class="btn btn-primary" style="margin-right: 30px;" href="<?php echo base_url(); ?>admin/serviceprovider/add">Add Service Provider </a>
       		 </div>
       	</div>
       	<div class="row">
	        <div class="col-sm-6 text-center">

	        	<?php if($this->session->flashdata('msg')): ?>
	    			<p class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></p>
				<?php endif; ?>

	        </div>
        </div>
		<div class="row">
          <div class="col-sm-12">

	          <table id="userTable" class="display table-striped table-hover table-bordered" style="width: 100%;"">
			    <thead>
			        <tr>
			           <th>First Name</th>
						<th>Last Name</th>						
						<th>Phone</th>
						<th>Edit</th>
						<th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
				foreach($sp_list as $user) {
				?>
			        <tr>
			            <td><?php echo $user->first_name; ?></td>
			            <td><?php echo $user->last_name; ?></td>
			             <td><?php echo $user->phone; ?></td>			            
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/serviceprovider/update/<?php echo $user->spid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/serviceprovider/delete/<?php echo $user->spid; ?>"><img  src='<?php echo base_url(); ?>assets/images/delete.png' width="20px" height="20px" title="Delete" onClick="return doconfirm();" ></a></td>
			        </tr>
			    <?php } ?>
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
        { "width": "40%", "targets": 0 }
      ]
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

