<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
	<div class="width-fluid"> 
		<div class="row">
			<div class="col-sm-12 mt-10 mb-10 text-right">
       		 	<a class="btn btn-primary" style="margin-right: 30px;" href="<?php echo base_url(); ?>admin/vendors/add">Add vendor </a>
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
						<th>Email</th>
						<th>Phone</th>
						<th>Edit</th>
						<th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
			    <?php 
				foreach($vendor_list as $vendor) {
				?>
			        <tr>
			            <td><?php echo $vendor->first_name; ?></td>
			            <td><?php echo $vendor->last_name; ?></td>
			             <td><?php echo $vendor->email; ?></td>
			            <td>phone number</td>
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/vendors/update/<?php echo $vendor->vid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
			            <td class="text-center"><a href="<?php echo base_url(); ?>admin/vendors/delete/<?php echo $vendor->vid; ?>"><img  src='<?php echo base_url(); ?>assets/images/delete.png' width="20px" height="20px" title="Delete" onClick="return doconfirm();" ></a></td>

			          <!--  <td><a href="<?php echo base_url(); ?>admin/user/update/<?php echo $user->userid; ?>">Edit</a></td>
			            <td><a href="javascript:void(0);" onclick="delete(<?php echo $user->userid;?>);">Delete</a>
			            <a href="<?php echo base_url();?>admin/user/delete/<?php print($user->userid);?>">
	   <img  src='images/delete.gif' title="Delete" onClick="return doconfirm();" >
	</a>
			            </td> -->
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

