<div class="container-fluid">
<div class="row content">
 <div id="mySidenav" class="col-sm-3 sidenav">
          <h4>SITE ADMINISTRATOR</h4>
          <span style="font-size:30px;cursor:pointer" class="openbtn" onclick="openNav()">&#9776;</span>
          <?php if($this->session->userdata('role')=='admin') { ?>
          <ul class="nav nav-pills nav-stacked">    
          <li><a href="<?php echo base_url(); ?>admin/home"><i class="fa fa-tachometer mr-3" aria-hidden="true"></i>Dashboard</a></li>
          	<li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="<?php echo base_url(); ?>admin/user/list_user"><i class="fa fa-users mr-3" aria-hidden="true"></i>Users</a></li>
            <?php } ?>
             <?php if(($this->session->userdata('role')=='Vendor Tracking')||($this->session->userdata('role')=='admin')){ ?>
            <li><a href="<?php echo base_url(); ?>admin/vendors/list_vendor"><i class="fa fa-user-circle-o mr-3" aria-hidden="true"></i>Vendors</a></li>
            <li><a href="<?php echo base_url(); ?>admin/serviceprovider/list_sp"><i class="fa fa-cogs mr-3" aria-hidden="true"></i>Service Providers</a></li>
			     <li><a href="<?php echo base_url(); ?>admin/servicecategories/list_servicecategories"><i class="fa fa-sitemap mr-3" aria-hidden="true"></i>Service Categories</a></li>
            <li><a href="<?php echo base_url(); ?>admin/servicesubcategories/list_servicesubcategories"><i class="fa fa-sitemap mr-3" aria-hidden="true"></i>Service Sub Categories</a></li>
           <?php } ?>
            <?php if($this->session->userdata('role')=='admin') { ?>
           <li><a href="<?php echo base_url(); ?>admin/services/list_services"><i class="fa fa-server mr-3" aria-hidden="true"></i>Services</a></li>
          <li><a href="<?php echo base_url(); ?>admin/setting/update/1"><i class="fa fa-wrench mr-3" aria-hidden="true"></i>Settings</a></li>
          <?php } ?>
           <?php if(($this->session->userdata('role')=='Booking Agent')||(($this->session->userdata('role')=='admin'))){ ?>
          <li><a href="<?php echo base_url(); ?>admin/booking/list_bookings""><i class="fa fa-bell mr-3 text-danger" aria-hidden="true"></i></i>Booking</a></li>
            <?php } ?>
           <!--<li><a href="<?php echo base_url(); ?>admin/booking/receipt"><i class="fa fa-bell mr-3 text-danger" aria-hidden="true"></i></i>Receipt</a></li>-->
            <?php if($this->session->userdata('role')=='admin') { ?>
            <li><a href="<?php echo base_url(); ?>admin/booknow/book_list"><i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i></i>Book Now</a></li>
            <li><a href="<?php echo base_url(); ?>admin/contact/list_contact"><i class="fa fa-phone mr-3" aria-hidden="true"></i></i>Contact us </a></li>
            <?php } ?>
        </ul><br>   

      </div>
<script>
		function openNav() {
		    document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}
</script>

<script>
$(document).ready(function(){
    var current_url = window.location;
    $('.nav li a').filter(function () {
        return this.href == current_url;
    }).last().parents('li').addClass('active');
});

</script>