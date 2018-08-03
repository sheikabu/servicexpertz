<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">
      <h2 class="title">USERS LIST</h2>

        <div class="width-fluid">
          <div class="col-md-12 col-sm-12">
              <table id="userTable" class="table table-striped table-hover table-bordered" style="width: 100%;">
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
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Nixon</td>
                        <td>Edinburgh@gmail.com</td>
                        <td>61</td>
                        <td><a href="<?php echo base_url(); ?>admin/edit_user">link</a></td>
                        <td>link</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Winters</td>
                        <td>Tokyo@gmail.com</td>
                        <td>63</td>
                       <td><a href="<?php echo base_url(); ?>admin/edit_user">link</a></td>
                        <td>link</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td><a href="<?php echo base_url(); ?>admin/edit_user">link</a></td>
                        <td>link</td>
                    </tr>
                   
                </tbody>
                
            </table>
          </div>
        </div>
  <!-- <table class="table mt-10 table-striped table-hover">
    <thead>
        <tr>
              <th scope="col" class="bb">#</th>
              <th scope="col" class="bb">First</th>
              <th scope="col" class="bb">Last</th>
              <th scope="col" class="bb">Handle</th>
              <th scope="col" class="bb">Action</th>
        </tr>
    </thead>
        <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>
                <a href="<?php echo base_url(); ?>admin/edit_user" class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="#" class="icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="#"><i class="fa fa-rmove"></i></a></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td><a href="#"><i class="fa fa-rmove"></i></a></td>
          </tr>
        </tbody>
    </table> -->
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


