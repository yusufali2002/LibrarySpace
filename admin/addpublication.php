<?php
 include("inc/header.php");

 include("inc/aside.php")
?>

<?php  
require ('inc/dbconnect.php');
$message = ""; 
$message2 = ""; 



if(isset($_POST['publish'])){

        // Variables for user submit form()
        $headline = $_POST['headline'];
        $news = $_POST['news'];
       


            $query = "INSERT INTO `publications`(`headline`, `News`)VALUES('$headline','$news')";

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
            <h1>Create Publication</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Patients Record</li>
            </ol>
          </div> -->
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add Publication</h3>
                <?php echo $message?>
                <?php echo $message2?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="addpublication.php" enctype="multipart/form-data" method="POST">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Book Title</label>
                        <input type="text" name="headline" class="form-control" placeholder="Enter ..." required>
                      </div>
                    </div>
                  
                  </div>
                  

                  
                 
                  
                 
                 
                <div class="row">
                 
                  <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="news" rows="8" placeholder="Enter ..."></textarea>
                      </div>
                    </div> 
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Upload Book</label><br>
                        <input type="file"  name="file" >
                      </div>
                    </div> 
                </div>                           
                
                      
                        
                   
                    <button type="submit" name="publish" id="butt" class="btn btn-lg btn-success">Publish</button>
                </form>
              </div>
            
            </div>
      
          </div>
       
        
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 include("inc/aside.php");
 ?>

 <?php
 include("inc/footer.php")
 ?>
