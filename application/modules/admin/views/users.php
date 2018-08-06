<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">
      <h2 class="title">USERS LIST</h2>

	
        <div class="width-fluid">
		<form action="<?php echo base_url(); ?>/admin/insert_user" method="post">
	
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											
												<tbody><tr>
													<td>
														Frist Name
													</td>
													<td>
														last Name
													</td>
													<td>
														email
													</td>
													<!-- <td>
														phone no
													</td> -->
													</tr>
													<tr>
													<td>
															<input type="text" name="first_name" value="" style="width:200px;">
													</td>
																										<td>
															<input type="text" name="last_name" value="" style="width:200px;">
													</td>
																										<td>
															<input type="text" name="email" value="" style="width:200px;">
													</td>
																									<!--	<td>
															<input type="text" name="phone" value="" style="width:200px;">
													</td>-->
													</tr>
													<tr>
													<td>
													
												<input type="hidden" name="userid" value=""/>
															<input type="submit" name="submit" value="Add Records">
													</td>
</tr>
												</tbody>

											</table>
										
										</form>
          <div class="col-md-12 col-sm-12">
              <table id="userTable" class="table table-striped table-hover table-bordered" style="width: 100%;">
              
              										
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
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
													//print_r($location);
													foreach($user as $user) {
													?>
													<thead>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $user->first_name; ?></a>
														</td>
														
														<td>
															<a href="#"><?php echo $user->last_name; ?></a>
														</td>
														
														<td>
															<a href="#"><?php echo $user->email; ?></a>
														</td>
														<td>
															<a href="#">9994563904</a>
														</td>
														
														<td><a href="<?php echo base_url(); ?>/admin/edit_users/?id=<?php echo $user->userid;?>" class='btnedit' title='edit'>edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
														<a href="<?php echo base_url(); ?>/admin/delete/?id=<?php echo $user->userid;?>" class='btndelete' title='delete'>Delete</a></td>    

														
														
													</tr>
													</thead>
													<?php } ?>
													
												</tbody>
											
											</table>
											
			

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


