
 <?php
 include("inc/header.php");
 
if(!loggedin()){
  header('Location: index.php');
}else{
         
           
 
      include("inc/aside.php");

      if (isset($_POST['disubmit'])) {
      $dr_id = $_SESSION['id'];
      $drname = $_POST['drname'];
      $email = $_POST['email'];


      
        // Insert data into database
      $stmt = $conn->prepare('UPDATE `staffprofile` SET drname = ?, email = ? WHERE id = ?');
      $stmt->bind_param('sssssss', $drname, $email, $dr_id);
      $stmt->execute();
      $stmt->close();
      if($stmt){
        echo("<script>swal('Success', 'Profile updated successfully', 'success')</script>");
      }
      }

      $dr_id = $_SESSION['id'];
     

  

            

   
}    
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Latest Publications</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Publications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Published</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="card-body">
              <table  class="table table-bordered table-striped" id="example2">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Headline</th>
                    <th>Description</th>
                    <th>Date Published</th>  
                    <th>Action</th>                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                           
                            $sql = "SELECT `headline`, `News`, `datecreated` FROM `publications` 
                            ORDER BY `datecreated` DESC";
                            $result = $conn->query($sql);
                            $counter = 0;



                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                                $ustatus ="<a href='javascript:;' onClick='pickRow(" . json_encode($row) .")' 
                                data-toggle='modal' data-target='#exampleModal2' class='btn btn-success btn-sm' id='resolvedbtn' style='width:100%'>
                                <span class='spinner-grow spinner-grow-sm'></span>
                                See More</a>";

                                    
                                echo "<tr>
                                <td>".++$counter."</td>
                                <td>".$row["headline"]."</td>
                                <td>".$row['News']."</td>                               
                                <td>".$row['datecreated']."</td>
                                <td>".$ustatus."</td>
                               
                                

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
                  <th>SN</th>
                    <th>Headline</th>
                    <th>Description</th>
                    <th>Date Published</th>  
                    <th>Action</th>              
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
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
                        

  <?php
 include("inc/aside.php");
 ?>

 <?php
 include("inc/footer.php");
 ?>
