<?php
 include("inc/header.php");

 include("inc/aside.php")
?>

<?php  
require ('inc/dbconnect.php');

$message = ""; 
$message2 = ""; 


$result3 = mysqli_query($conn,"SELECT * FROM `blog`");
            $report3 = mysqli_num_rows($result3);   

if(isset($_POST['publish'])){

        // Variables for user submit form()
        $title = $_POST['title'];
        $description = $_POST['description'];
       


            $query = "INSERT INTO `blog`(`blogtitle`, `blogdescription`)VALUES('$title','$description')";

            if($query_run = mysqli_query($conn, $query)){

              $message =  "<div class=\"alert alert-info\">
              <a href=\"addpatient.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"check\">&times;</a>
               Published Successfully. <a href=\"addpatient.php\">Click to Add Patient </a></div>";

            }else{
             $message2 =  "<div class=\"alert alert-danger\">
                <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                 Kindly fill this form again</div>";
                }

 

 }

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Latest Blog</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  
    <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
          <div class="card card-pink">
              <div class="card-header">
                <h3 class="card-title">Latest Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Sn</th>
                    <th>Blog Title</th>
                    <th>Blog</th>                      
                    <th>Date Published</th>
                                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                            require('inc/dbconnect.php');
                           
                            $sql = "SELECT `blogtitle`, `blogdescription`, `createdon` FROM `blog`  ORDER BY createdon DESC";
                            $result = $conn->query($sql);
                            $counter = 0;



                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                            

                                echo "<tr>
                                <td>".++$counter."</td>
                                <td>".$row["blogtitle"]."</td>
                                <td>".$row['blogdescription']."</td>                               
                                <td>".$row['createdon']."</td>                               
                               
                                

                                </tr>";
                                // $counter++;

                              }

                            }
                            else{
                              echo "0 result";
                            }
                            ?>
                  </tbody>
                  <tfoot>
               
                  <tr>
                    <th>Sn</th>
                    <th>Blog Title</th>
                    <th>Blog</th>
                    <th>Date Published</th>    
                                 
                  </tr>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->


  <?php
 include("inc/aside.php");
 ?>

 <?php
 include("inc/footer.php")
 ?>