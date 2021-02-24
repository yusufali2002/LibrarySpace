 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <!-- <img src="dist/img/logo-main-black.png" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Student Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/OIP.PNG" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome</a>
          <a href="" class="d-block"><?php echo $_SESSION['email']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Student Handbook
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewblog.php" class="nav-link">
              <i class="nav-icon fas fa-blog"></i>
              <p>
               Blog
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-header brand-link">MY PROFILE</li>

          <li class="nav-item">
          <!-- <a href='javascript:;' onClick='pickRows(" . json_encode($row) .")' 
                                data-toggle='modal' data-target='#exampleModal' class='btn btn-success btn-sm' id='resolvedbtn' style='width:100%'>
                                
                                <i class='fa fa-eye'></i></a> -->
                                <?php
        $id = $_SESSION['id'];
        $sql = "SELECT `id`, `drname`, `email`,`CreatedAt` FROM `staffprofile` WHERE `id`= $id ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          while ($row = $result-> fetch_assoc()){

            $view ="   <a href='javascript:;' onClick='pickRoll(" . json_encode($row) .")' 
            data-toggle='modal' data-target='#exampleModal' class='nav-link'>
            <i class='nav-icon fas fa-user'></i>
            <p>
             My Profile
              <span class='right badge badge-danger'></span>
            </p>
          </a>";
            echo $view;
          }

        }
        else{
          echo "0 result";
        }
        ?>
          </li>
        
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>