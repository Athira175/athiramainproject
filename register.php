<?php
session_start();
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="img.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="foott.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Catering Angels</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
.login_new{
  background:#cda45e;
  height:50%;
  width:35%;
  border-radius:5px;
  margin-left:35%;
}
.pass_new{
height:27px;
width:45%;
border-radius:2px;
padding-top:-10%;
margin-left:25%;
color:black;
border:none;
}
.email_new{
height:27px;
width:45%;
border-radius:2px;
margin-top:-50%;
margin-left:25%;
color:black;
border:none;
}
.button_new{
  height:32px;
width:45%;
border-radius:2px;
margin-top:10%;
margin-left:25%;
color:black;
border:none;
}
</style>
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Catering Angels</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        
      </nav><!-- .navbar -->
      <!--<a href="reg.php" class="book-a-table-btn scrollto d-none d-lg-flex">signout</a>-->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Page</h2>
          
        </div>

      </div>
    </section>

    <section class="inner-page">
      <!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="img.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="foott.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>main page</title>
</head>
<body class="bg">




<?php
    require('db.php');
     
    if (isset($_POST['register-btn'])) {
        $fna    = stripslashes($_REQUEST['fna']);
        $fna   = mysqli_real_escape_string($con, $fna);

        $lna   = stripslashes($_REQUEST['lna']);
        $lna   = mysqli_real_escape_string($con, $lna);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone   = mysqli_real_escape_string($con, $phone);
        
        $u_password = stripslashes($_REQUEST['u_password']);
        $u_password = mysqli_real_escape_string($con, $u_password);
        $cpassword    = stripslashes($_REQUEST['cpassword']);
        $cpassword    = mysqli_real_escape_string($con, $cpassword);
        $usertype="user";
        //$query    = "INSERT into users(fna,lna,email,phone,u_password,cpassword)
       // VALUES ('$fna','$lna','$email','$phone','" . md5($u_password) . "','" . md5($cpassword) ."' )";
       $query    = "INSERT into user(fna,lna,email,phone,u_password,cpassword,u_status)
        VALUES ('$fna','$lna','$email','$phone','$u_password','$cpassword','$usertype')";
        $result   = mysqli_query($con, $query);

        
        if ($result) {
           echo "<div class='newform'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'> Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='newregister.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="regbox">
                
                <h1>Registration</h1>

    <form  method="post" name="login">
        <div class="form_input">
    <p>First Name</p>
    <span style="color:red;" id="out_fname"></span>
        <input type="text"  oninput="fnamecheck();" class="login-input" name="fna" placeholder="First Name" required />
        
    </div>
        <p>Last Name</p>
        <span style="color:red;" id="out_lname"></span>
        <input type="text" oninput="lnamecheck();"  class="login-input" name="lna" placeholder="Last Name" Required>
        
        <p>Email</p>
        <span style="color:red;" id="out_email"></span>
        <input type="text"  oninput="mailcheck();" class="login-input" name="email" placeholder="Email" Required>
       
        <p>Phone</p>
        <span style="color:red;" id="out_mobile"></span>
        <input type="text" oninput="mobilecheck();" class="login-input" name="phone" placeholder="Phone" Required>
        
        <p>Password</p>
        <span style="color:red;" id="out_pass1"></span>
        <input type="password" oninput="pass1check();" class="login-input" name="u_password" placeholder="Password" Required>
        
        <p>Confirm Password</p>
        <span style="color:red;" id="out_pass2"></span>
        <input type="password" oninput="pass2check();" class="login-input" name="cpassword" placeholder="Confirm Password" Required>
        
        <input type="Submit" name="register-btn" value="Register">
        <p>Already Have an Account? <a href="login.php">Login</a></p>
  </form>
    </div>
<?php
    }
?>



</body>
<script src="register_validation.js" type="text/javascript"></script>
</html>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Catering Angels</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">

            <ul>
              <li><i class="bx bx-chevron-right"></i> Catering Services in Kerala </li>
              <li><i class="bx bx-chevron-right"></i>Catering Services in Kottayam </li>
              <li><i class="bx bx-chevron-right"></i> Vegitarian Catering</a></li>
              <li><i class="bx bx-chevron-right"></i> Non-Vegetarian Catering</li>
              <li><i class="bx bx-chevron-right"></i> Kerala Food</li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <img src="assets/img/menu/logo.png" alt class="ft-logo center-block" style="font-size:16px"></span>
          
</div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Catering Angels</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by Catering Angels
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>.
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

<?php
session_start();
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="img.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="foott.css">
  <title>Catering Angels</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
.login_new{
  background:#cda45e;
  height:50%;
  width:35%;
  border-radius:5px;
  margin-left:35%;
}
.pass_new{
height:27px;
width:45%;
border-radius:2px;
padding-top:-10%;
margin-left:25%;
color:black;
border:none;
}
.email_new{
height:27px;
width:45%;
border-radius:2px;
margin-top:-50%;
margin-left:25%;
color:black;
border:none;
}
.button_new{
  height:32px;
width:45%;
border-radius:2px;
margin-top:10%;
margin-left:25%;
color:black;
border:none;
}
</style>
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Catering Angels</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        
      </nav><!-- .navbar -->
      <a href="reg.php" class="book-a-table-btn scrollto d-none d-lg-flex">SIGN UP</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Page</h2>
          
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
     
    

<?php
    require('db.php');
     
    if (isset($_POST['register-btn'])) {
        $fna    = stripslashes($_REQUEST['fna']);
        $fna   = mysqli_real_escape_string($con, $fna);

        $lna   = stripslashes($_REQUEST['lna']);
        $lna   = mysqli_real_escape_string($con, $lna);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone   = mysqli_real_escape_string($con, $phone);
        
        $u_password = stripslashes($_REQUEST['u_password']);
        $u_password = mysqli_real_escape_string($con, $u_password);
        $cpassword    = stripslashes($_REQUEST['cpassword']);
        $cpassword    = mysqli_real_escape_string($con, $cpassword);
        $usertype="user";
        //$query    = "INSERT into users(fna,lna,email,phone,u_password,cpassword)
       // VALUES ('$fna','$lna','$email','$phone','" . md5($u_password) . "','" . md5($cpassword) ."' )";
       $query    = "INSERT into user(fna,lna,email,phone,u_password,cpassword,u_status)
        VALUES ('$fna','$lna','$email','$phone','$u_password','$cpassword','$usertype')";
        $result   = mysqli_query($con, $query);

        
        if ($result) {
           echo "<div class='newform'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'> Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='newregister.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="regbox">
                
                <h1>Registration</h1>

    <form  method="post" name="login">
        <div class="form_input">
    <p>First Name</p>
    <span style="color:red;" id="out_fname"></span>
        <input type="text"  oninput="fnamecheck();" class="login-input" name="fna" placeholder="First Name" required />
        
    </div>
        <p>Last Name</p>
        <span style="color:red;" id="out_lname"></span>
        <input type="text" oninput="lnamecheck();"  class="login-input" name="lna" placeholder="Last Name" Required>
        
        <p>Email</p>
        <span style="color:red;" id="out_email"></span>
        <input type="text"  oninput="mailcheck();" class="login-input" name="email" placeholder="Email" Required>
       
        <p>Phone</p>
        <span style="color:red;" id="out_mobile"></span>
        <input type="text" oninput="mobilecheck();" class="login-input" name="phone" placeholder="Phone" Required>
        
        <p>Password</p>
        <span style="color:red;" id="out_pass1"></span>
        <input type="password" oninput="pass1check();" class="login-input" name="u_password" placeholder="Password" Required>
        
        <p>Confirm Password</p>
        <span style="color:red;" id="out_pass2"></span>
        <input type="password" oninput="pass2check();" class="login-input" name="cpassword" placeholder="Confirm Password" Required>
        
        <input type="Submit" name="register-btn" value="Register">
        <p>Already Have an Account? <a href="login.php">Login</a></p>
  </form>
    </div>
<?php
    }
?>

          </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Catering Angels</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">

            <ul>
              <li><i class="bx bx-chevron-right"></i> Catering Services in Kerala </li>
              <li><i class="bx bx-chevron-right"></i>Catering Services in Kottayam </li>
              <li><i class="bx bx-chevron-right"></i> Vegitarian Catering</a></li>
              <li><i class="bx bx-chevron-right"></i> Non-Vegetarian Catering</li>
              <li><i class="bx bx-chevron-right"></i> Kerala Food</li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <img src="assets/img/menu/logo.png" alt class="ft-logo center-block" style="font-size:16px"></span>
          
</div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Catering Angels</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>.
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>
<script src="register_validation.js" type="text/javascript"></script>
</html>