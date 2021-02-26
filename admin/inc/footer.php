<footer class="main-footer">
    <strong>Copyright &copy; 2021 | Powered By <a href="http://houseofamaya.com.ng" target="_blank">House of Amaya</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
  
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


  function pickRow(value){
    console.log(value);
      

      $('#patient_id').val(value.patient_id)
      $('#p_fname').val(`${value.p_fname} ${value.p_lname}` )
      $('#ship_address').val(value.ship_address)
      $('#ship_address').html(value.ship_address)
      $('#dob').val(value.dob)
      $('#clinical_conditions').val(value.clinical_conditions)
      $('#treatment_option').val(value.treatment_option)
      $('#treatment_option').html(value.treatment_option)
      $('#status').val(value.status)
      $('#notes').val(value.notes)
      $('#other').val(value.other)
      $('#startdate').val(value.startdate)
      // $('#image1').val(value.image1)
      $('#ustatus').val(value.ustatus)
      // console.log(value.image);

      $("#p_potrait").attr("src", `../${value.p_potrait}`);
      $("#image1").attr("src", `../${value.image1}`);
      $("#image2").attr("src", `../${value.image2}`);
      $("#image3").attr("src", `../${value.image3}`);
      $("#image4").attr("src", `../${value.image4}`);
      $("#image5").attr("src", `../${value.image5}`);
      $("#image6").attr("src", `../${value.image6}`);
      $("#image7").attr("src", `../${value.image7}`);
      $("#image8").attr("src", `../${value.image8}`);
      $("#image9").attr("src", `../${value.image9}`);
      $("#scan1").attr("src", `../${value.scan1}`);
      $("#scan2").attr("src", `../${value.scan2}`);

      
    }

    function pickRows(value){
      
      $('#drname').val(value.drname)
      $('#email').val(value.email)
      $('#phone').val(value.phone)
      $('#qualification').val(value.qualification)
      $('#practice').val(value.practice)
      $('#address').val(value.address)
      $('#CreatedAt').val(value.CreatedAt)   
    }

</script>

<!-- Modal For Doctors -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">About Doctor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="display"></div> 
      <div class="col-md-3 offset-md-3"><img src="dist/img/dentist.png"></div>
          <form role="form" action="social_media_reports.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="dayrep" class="form-control" id="drname" value="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="consumer" class="form-control" id="email" readonly>
                </div>
                <div class="form-group">
                  <label for="">Contact No</label>
                  <input type="text" name="operator" class="form-control" id="phone" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Qualification</label>
                  <input type="text" name="operator" class="form-control" id="qualification" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Practice</label>
                  <input type="text" name="ctype" class="form-control" id="practice" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Location</label>
                  <input type="text" name="ctype" class="form-control" id="address" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Joined</label>
                  <input type="text" name="ctype" class="form-control" id="CreatedAt" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
<!-- 
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Registered</label>
                  <input type="text" name="ctype" class="form-control" id="DateReported" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>           -->
                             
              
            </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" name="resolution_submit" class="btn btn-primary btn-md">Submit</button>
              </div> -->
            </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal For Patients -->



<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">About Patient</h3>
               
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="row">
        <div class="col-md-3">
      <img src="" alt="" id="p_potrait" width="200px" height="200px">
      <p>Patient Portrait</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image1" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image2" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image3" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image4" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image5" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image6" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image7" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image8" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="image9" width="200px" height="200px">
      <p>Patient Photo</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="scan1" width="200px" height="200px">
      <p>Radiograph Scan 1</p> 
      </div>
      <div class="col-md-3">
      <img src="dist/img/dentist.png" alt="" id="scan2" width="200px" height="200px">
      <p>Radiograph Scan 2</p> 
      </div>
     </div>
      <form action="viewpatients.php" method="POST">
      <p>Patient Portrait </p> 
      <div class="form-group">
                  <label for="">Patient ID:</label>
                  <input type="text" name="pid" class="form-control" id="patient_id" value="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Patient Name:</label>
                  <input type="text" name="pname" class="form-control" id="p_fname" readonly>
                </div>
                <div class="form-group">
                  <label for="">Date of Birth</label>
                  <input type="text" name="dob" class="form-control" id="dob" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Clinical Conditions</label>
                  <input type="text" name="cc" class="form-control" id="clinical_conditions" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Others</label>
                  <input type="text" name="others" class="form-control" id="other" readonly>
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Treatment Option</label>
                  <select name='topt' class='form-control'>
                          <option id="treatment_option" ></option>
                          <option value="Lite Package">Lite Package</option>
                          <option value="Comprehensive">Comprehensive</option> 
                        </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Ship to Address</label>
                  <select name='ship_address' class='form-control'>
                          <option id="ship_address" ></option>
                          <?php
                          $ship = "SELECT `id`, `drname`, `practice`, `address` FROM `doctorsprofile`";
                          $ship_result = $conn->query($ship);
                              if ($ship_result->num_rows > 0) {
                                while ($row_status = $ship_result->fetch_assoc()) {
                                  $counter++;
                                  ?>
                                  <option value='<?php echo $row_status['practice']?>
                                   (<?php echo $row_status['address'] ?>) - Dr. <?php echo $row_status['drname']?>'> 
                                  <?php echo $row_status['practice'] ?> 
                                  (<?php echo $row_status['address'] ?>) - 
                                   Dr. <?php echo $row_status['drname'] ?>
                                </option>
                              <?php

                                }
                              } ?>
                        </select>
                      
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">General Notes</label>
                  <input type="text" name="gnotes" class="form-control" id="notes" readonly>
                </div> 
                
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" name="ctype" class="form-control" id="dob">
                </div>    -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Start Date</label>
                  <input type="text" name="st" class="form-control" id="startdate" readonly>
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Current Status</label>
                  <input type="text" name="ctype" class="form-control" id="status" readonly>
                </div>
                             
        <div class="form-group">
                  <label for="">Update Status</label>
                  <select name="ustatus" class="form-control">
                  <option></option>
                  <option value="Awaiting">Awaiting Review</option>
                  <option value="Reviewed">Reviewed</option>
                  <option value="Approved">Approved</option>
                  <option value="Send Additional Info">Send Additional Info</option>
                  <option value="Completed">Completed</option>
                  <option value="Pending">Pending</option>
                  <option value="In Treatment">In Treatment</option>
                  <option value="Archive">Archive</option>
                </select>
          </div>
                <div class="box-footer">
                <button type="submit" name="usubmit" class="btn btn-primary btn-md">Update</button>
              </div>
        </form>
            
      </div>

    </div>
  </div>
</div>

<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>

</body>
</html>
