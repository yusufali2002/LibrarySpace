<?php

include("inc/dbconnect.php");


include("inc/core.php");
 


 if(!loggedin()){


  header('Location: /front');

  
}else{
  
        
}   

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Portal | Jigawa State LS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
          .img-upload-btn { 
    position: relative; 
    overflow: hidden; 
    padding-top: 95%;
} 

.img-upload-btn input[type=file] { 
    position: absolute; 
    top: 0; 
    right: 0; 
    min-width: 100%; 
    min-height: 100%; 
    font-size: 100px; 
    text-align: right; 
    filter: alpha(opacity=0); 
    opacity: 0; 
    outline: none; 
    background: white; 
    cursor: inherit; 
    display: block; 
} 

.img-upload-btn i { 
    position: absolute;
    height: 16px;
    width: 16px;
    top: 50%;
    left: 50%;
    margin-top: -8px;
    margin-left: -8px;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light elevation-4">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->
      <li class="nav-item">
            <a href="dashboard.php" class="nav-link">              
              <p>
                Home
              </p>
            </a>
          </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="http://alignitng.com" target="_blank" class="nav-link">Home Page</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://alignitng.com/get-alignit" class="nav-link">Contact</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
      <?php
        $id = $_SESSION['id'];
        $sql = "SELECT `id`, `drname`, `email`,`CreatedAt` FROM `staffprofile` WHERE `id`= $id ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          while ($row = $result-> fetch_assoc()){

            $view ="<a href='javascript:;' onClick='pickRoll(".json_encode($row).")' 
            data-toggle='modal' data-target='#exampleModal' class='nav-link'>Profile</a>";
            echo $view;
          }

        }
        else{
          echo "0 result";
        }
        ?>
       
      </li>
     
      <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">
              <p>
               Handbook
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
      <li class="nav-item">
            <a href="viewblog.php" class="nav-link">              
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">              
              <p>
                Logout
              </p>
            </a>
          </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->
