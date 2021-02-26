<footer class="main-footer">
    <strong>Copyright &copy; 2021 | Powered By <a href="houseofamaya.com.ng" target="_blank">House of Amaya</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
  
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
      

      // $('#patient_id').val(value.patient_id)
      // $('#p_fname').val(`${value.p_fname} ${value.p_lname}` )
      // $('#ship_address').val(value.ship_address)
      // $('#dob').val(value.dob)
      // $('#clinical_conditions').val(value.clinical_conditions)
      // $('#treatment_option').val(value.treatment_option)
      // $('#status').val(value.status)
      // $('#notes').val(value.notes)
      // $('#other').val(value.other)
      // $('#startdate').val(value.startdate)
      // $('#image1').val(value.image1)
      $('#ustatus').val(value.ustatus)
      // console.log(value.image);
      $('#headline').val(value.headline)
      $('#News').val(value.News)
      $('#datecreated').val(value.datecreated)

    
      
    }

    function pickRoll(value){
      

      $('#drname').val(value.drname)
      $('#email').val(value.email)
      $('#CreatedAt').val(value.CreatedAt)
      
     
      
    }

</script>

<!-- Modal For Doctors -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">My Profile</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="display"></div>
      <!-- <div class="col-md-3 offset-md-3"><img src="dist/img/dentist.png"></div> -->
          <form role="form" action="index.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="drname" class="form-control" id="drname" value="" >
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control" id="email" >
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Joined</label>
                  <input type="text" name="ctype" class="form-control" id="CreatedAt" disabled>
               </div>
<!-- 
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Registered</label>
                  <input type="text" name="ctype" class="form-control" id="DateReported" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>           -->
                             
              
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>"><button type="submit" name="disubmit" class="btn btn-primary btn-md">download</button></a>
              </div>
            </form>
      </div>

    </div>
  </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Staff Handbook</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
                    <div class="modal-body">

                        <embed src="dist/img/handbook.pdf" frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
</div>
<!-- Modal For Patients -->



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">More About Publication</h3>
               
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="row">
        <div class="col-md-3">
      <!-- <p alt="" id="headline"></p>       -->
      </div>
      
     </div>
      <form action="viewpatients.php" method="POST">
     
      <div class="form-group">
                  <label for="">Title:</label>
                  <input type="text" name="pid" class="form-control" id="headline"  disabled>
                </div>
                <div class="form-group">
                  <label for="">Description:</label>
                  <textarea  class="form-control" id="News" disabled>
                </div>
                <div class="form-group">
                  <label for="">Date Published</label>
                  <input type="date" name="dob" class="form-control" id="datecreated" disabled>
                </div>

                <div class="form-group">
                  <label for="">Attachment</label>
                  <input type="file" name="dob" value="book.pdf">
                </div>
                
                <div class="box-footer">
                <button type="submit" name="usubmit" class="btn btn-primary btn-md">Update</button>
              </div>
        </form>
            
      </div>

    </div>
  </div>
</div>



</body>
</html>
