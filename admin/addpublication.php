<?php
 include("inc/header.php");

 include("inc/aside.php")
?>


<?php  
$conn=new PDO('mysql:host=d6rii63wp64rsfb5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=hwamyb1u07m6hoyd', 'uaivyvws5hftpuio', 'vj3n0zzivts1ovd8') or die(mysql_error());
$message = ""; 
$message2 = ""; 



if(isset($_POST['publish'])){

        // Variables for user submit form()
        $headline = $_POST['headline'];
        $news = $_POST['news']; 
       
        $name=$_FILES['file']['name'];
        $size=$_FILES['file']['size'];
        $type=$_FILES['file']['type'];
        $temp=$_FILES['file']['tmp_name'];
        // $caption1=$_POST['caption'];
        // $link=$_POST['link'];
        $fname = date("YmdHis").'_'.$name;
        $chk = $conn->query("SELECT * FROM publications where filename = '$name' ")->rowCount();
        if($chk){
          $i = 1;
          $c = 0;
        while($c == 0){
            $i++;
            $reversedParts = explode('.', strrev($name), 2);
            $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
          // var_dump($tname);exit;
            $chk2 = $conn->query("SELECT * FROM  publications where filename = '$tname' ")->rowCount();
            if($chk2 == 0){
              $c = 1;
              $name = $tname;
            }
          }
      }
       $move =  move_uploaded_file($temp,"upload/".$fname);
       if($move){
         $query=$conn->query("insert into publications(`headline`, `News`, `filename`, `category`)values('$headline','$news','$fname','book')");
        if($query){
        // header("location:index.php");
        $message =  "<div class=\"alert alert-success\">
              <a href=\"index.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"check\">&times;</a>
               Published Successfully. <a href=\"index.php\">Click to view dashboard </a></div>";
        }
        else{
        die(mysql_error());
        }
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
      <?php echo $message?>
                <?php echo $message2?>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add Publication</h3>
              
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
