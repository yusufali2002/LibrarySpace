<?php  
require ('inc/dbconnect.php');


if(isset($_POST['usubmit'])){

// Variables for user submit form()

$ustatus = $_POST['ustatus'];  
$pid = $_POST['pid'];
$topt = $_POST['topt'];
$ship_address = $_POST['ship_address'];


// Sql statements start

// Insert data into database

$query = "UPDATE `patients` SET `status`='$ustatus', `treatment_option`='$topt', `ship_address`='$ship_address' WHERE patient_id='$pid'";

if($query_run = mysqli_query($conn, $query)){

  echo("
  <script>
  document.addEventListener('DOMContentLoaded', function(){
    alert('Patient details updated successfully');
  });
  </script>
  ");

}else{
  echo("
  <script>
  document.addEventListener('DOMContentLoaded', function(){
    alert('An error occured');
  });
  </script>
  ");
    }

  
} 
 
?>
 <?php
 include("inc/header.php");
 ?>

 <?php
 include("inc/aside.php");

$message4 = ""; 
$message5 = ""; 
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Patients Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Patients</h3>
                <?php echo $message4 ?>
                <?php echo $message5 ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table  class="table table-bordered table-striped" id="example2">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Patient</th>
                    <th>Ship to Office</th>
                    <th>DOB</th>
                    <th>Clinical Conditions</th>
                    <th>Treatment Options</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                           
                           
                            $sql = "SELECT `patient_id`, `p_fname`, `p_lname`, `p_mname`, `gender`, `ship_address`, `dob`, `clinical_conditions`, 
                            `other`, `notes`, `treatment_option`, `status`, `p_potrait`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, 
                            `image8`, `image9`, `scan1`, `scan2`, `startdate` 
                            FROM `patients` ORDER BY `startdate` DESC";
                            $result = $conn->query($sql);
                            $counter = 0 ;


                            
                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                                $ustatus ="<a href='javascript:;' onClick='pickRow(" . json_encode($row) .")' 
                                data-toggle='modal' data-target='#exampleModal2' id='btns' class='btn btn-success btn-sm' id='resolvedbtn' style='width:100%'>
                                <span class='spinner-grow spinner-grow-sm'></span>
                                <i class='fa fa-eye'></i></a>";
                                ?>

                                <td><?php echo $counter ?></td>
                                <td><?php echo $row["p_fname"] ?></td>
                                <td><?php echo $row['ship_address'] ?></td>                               
                                <td><?php echo $row['dob'] ?></td>
                                <td><?php echo $row['clinical_conditions'] ?></td>                                
                                <td><?php echo $row['treatment_option'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td><?php echo $row['startdate'] ?></td>
                                <td><?php echo $ustatus ?></td>

                          
                               </tr>
                            

                             <?php }

                            }
                            else{
                              echo "0 result";
                            }
                            ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SN</th>
                    <th>Patient</th>
                    <th>Ship to Office</th>
                    <th>DOB</th>
                    <th>Clinical Conditions</th>
                    <th>Treatment Options</th>
                    <th>Status</th>
                    <th>Start Date</th>
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
  
</div>
<!-- ./wrapper -->







 
 <?php
 include("inc/footer.php");
 ?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>