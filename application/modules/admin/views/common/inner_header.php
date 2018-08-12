<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicexpertz</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script> 
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script> 
     <script src="<?php echo base_url(); ?>assets/js/selectize.js"></script> 
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/selectize.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" />
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo_servicexpertz _2.png" width="200" />
      <span></span>
      </a>
    </div>
    <div class="top-nav">
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">          
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-o "></i>

            <span class="ml-2"><?php echo ucfirst($this->session->userdata('fname')); ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
        <li>
              <ul class="ml-20 nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
              </ul>
          </li>
      </ul>

    </div>
    
  </div>
 </nav>