<?php
$message = ""; 
?>


    <?php
     require_once('inc/dbconnect.php');
 
     require_once('inc/core.php');

    if(loggedin()){
      header('Location: dashboard.php');
    }else{

    // check for submit
    if(isset($_POST['submit'])){
    //  Get form data
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT `id`, `email`, `password` FROM `staffprofile` WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);

       
        if(!$row = $result->fetch_assoc()){
          $message =  "<div class=\"alert alert-danger\">
    <a href=\"login.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Invalid Login Credentials. Sign in with correct credentials</div>";
        }else{
          
          $query = "SELECT `id` FROM `staffprofile` WHERE email='$email'";
          $stmt = $conn->query($query);
          while ($data = $stmt-> fetch_assoc()){
          $_SESSION['email'] = $email;
          $_SESSION['id'] = $row['id'];                   
          $_SESSION['start'] = time();        
        }

        $_SESSION['expire'] = $_SESSION['start'] + (10);

        header('Location: index.php');

        }
    }
  }

?>



<!-- For Sign Ups Only -->

<?php
$message1 = ""; 
$message3 = ""; 
?>
<?php  
require ('inc/dbconnect.php');


if(isset($_POST['register'])){

// Variables for user submit form()
$fname = $_POST['fname'];  
$email = $_POST['email'];
$dob = $_POST['dob'];
$pass = $_POST['pass']; 

// Sql statements start
if(!empty($fname) && !empty($email) && !empty($pass)){
// Insert data into database

$query = "INSERT INTO `staffprofile`(`drname`, `email`,`dob`, `password`)VALUES('$fname','$email','$dob','$pass')";

if($query_run = mysqli_query($conn, $query)){

  $message1 =  "<div class=\"alert alert-success\">
    <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Account Created Successfully. Kindly sign in with your email and password</div>";


}else{
 $message3 =  "<div class=\"alert alert-danger\">
    <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Kindly fill the form again</div>";
    }
  }
  else{
    $message3 =  "<div class=\"alert alert-danger\">
       <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Kindly fill the form again</div>";
       }
} 
 
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from uxtheme.net/demos/jobcamp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 15:03:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jigawa State Library Space  </title>
  <!-- <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon"> -->
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="fonts/typography-font/typo.css">
  <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="plugins/aos/aos.min.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.min.css">
  <link rel="stylesheet" href="plugins/ui-range-slider/jquery-ui.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Custom stylesheet -->
</head>

<body>
  <div class="site-wrapper overflow-hidden ">
    <!-- Header start  -->
    <!-- Header Area -->
    <header class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="index.html">
              <!-- light version logo (logo must be black)-->
              <img src="image/logos.png" alt="" class="light-version-logo default-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/logos.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="mobile-menu">
            <div class="navbar-nav-wrapper">
              <ul class="navbar-nav main-menu">
                <li class="nav-item dropdown active">
                  <a class="nav-link" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <li class="drop-menu-item">
                      <a href="index.html">
                        Home
                      </a>
                    </li> -->
                    
                  </ul>
                </li>
              </ul>
            </div>
            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
          </div>
          <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
              Log in
            </a>
            <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
              Sign up
            </a>
            
          </div>
        
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Login Modal -->
    <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Welcome to Jigawa State Library Space
                   
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Log in to continue your account
                  </p>
                </div>
                <div class="border-top border-default-color-2 mt-auto">
                  <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                    <!-- <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        295
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                        posted today</p>
                    </div> -->
                    <!-- <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        14
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                        registered</p>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                <!-- <div class="row">
                  <div class="col-4 col-xs-12">
                    <a href="#" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with LinkedIn</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="#" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Google</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="#" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Facebook</span></a>
                  </div>
                </div> -->
                <!-- <div class="or-devider">
                  <span class="font-size-3 line-height-reset ">Or</span>
                </div> -->
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="myemail@smile360ng.com" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                    </div>
                  </div>
                  <div class="form-group d-flex flex-wrap justify-content-between">
                    <label for="terms-check" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check">
                      <span class="checkbox mr-5"></span>
                      <!-- <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember password</span> -->
                    </label>
                    <!-- <a href="#" class="font-size-3 text-dodger line-height-reset">Forget Password</a> -->
                  </div>
                  <div class="form-group mb-8">
                    <button name="submit" type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                  </div>
                  <!-- <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="#" class="text-primary">Create a free account</a></p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up Modal -->
    <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Welcome to Jigawa State LS
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Sign Up Here.</p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
               
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="text" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="e.g Jonas Godfrey" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="myemail@smile360ng.com" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Birthdate</label>
                    <input type="date" name="dob" class="form-control" placeholder="dob" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" name="pass" class="form-control" id="password2" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                    </div>
                  </div>
                 
                  <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                    <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check2">
                      <span class="checkbox mr-5"></span>
                      <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="#" class="text-primary">Terms & Conditions</a></span>
                    </label>
                  </div>
                  <div class="form-group mb-8">
                    <button name="register" type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header start end -->
    <!-- Hero Area -->
    <div class="bg-gradient-1 pt-26 pt-md-32 pt-lg-33 pt-xl-35 position-relative z-index-1 overflow-hidden">
      <!-- .Hero pattern -->
      <div class="pos-abs-tr w-50 z-index-n2">
        <img src="image/patterns/hero-pattern.png" alt="" class="gr-opacity-1">
      </div>
      <!-- ./Hero pattern -->
      <div class="container">
        <div class="row position-relative align-items-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12 pt-lg-13 pb-lg-33 pb-xl-34 pb-md-33 pb-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <h1 class="font-size-11 mb-12 pr-md-30 pr-lg-0">Welcome to 
              Jigawa State Library Space.</h1>
              <?php echo $message?>
              <?php echo $message1?>
            <div class="">
              
                <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#login">
                  Sign in
                </a>
               
                <a class="btn btn-success text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
                  Sign Up
                </a><br><br>
                <a class="btn btn-success text-uppercase font-size-3" href="admin/login.php">
                  Sign In As Staff
                </a>
            </div>
          </div>
          <!-- Hero Right Image -->
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 col-8 pos-abs-br z-index-n1 position-static position-md-absolute mx-auto ml-md-auto" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class=" ml-xxl-23 ml-xl-12 ml-md-7">
              <img src="image/withcomp.png" alt="" class="w-100">
            </div>
          </div>
          <!-- ./Hero Right Image -->
        </div>
      </div>
    </div>

    <!-- ContentTwo Area -->
    <!-- footer area function start -->
    <!-- cta section -->
   
    <!-- footer area function end -->
  </div>
  <!-- Vendor Scripts -->
  <script src="js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="plugins/aos/aos.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/counter-up/jquery.waypoints.min.js"></script>
  <script src="plugins/ui-range-slider/jquery-ui.js"></script>
  <!-- Activation Script -->
  <!-- <script src="js/drag-n-drop.js"></script> -->
  <script src="js/custom.js"></script>
</body>


<!-- Mirrored from uxtheme.net/demos/jobcamp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 15:04:14 GMT -->
</html>