
<?php

require('./admin/connection.inc.php');
//session_start();
if(!isset($_SESSION["email"])) {
  header("Location: login1.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
.container
{
  position: relative;
  z-index: 1;
 display: flex;
 justify-content: center;
 align-items: center;
 flex-wrap: wrap;
 margin: 40px 0; 
}
.container .card
{
  position: relative;
  width: 300px;
  height: 500px;
  background: rgba(255,255,255,0.05);
  margin: 20px;
  box-shadow: 0.15px,35px,rgba(0, 0, 0, 0.2);
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  backdrop-filter: blur(10px);
}
.container .card .content
  {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0.5;
    transition: 0.5s;
  }
  .container .card:hover .content 
    {
      opacity: 1;
      transform: translateY(-20px);
    }
  .container .card .content .imgBx
    {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 50px;
      overflow: hidden;
      border: 10px, solid rgba(0, 0, 0, 0.25);
    }    

  .container .card .content .imgBx img
    {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover; 
    }
  .container .card .content h5
  {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 500;
    font-size: 18px;
    text-align: center;
    margin: 20px 0 10px;
    line-height: 1.1em;
  }
   .container .card .content h5 span 
    {
      font-size: 12px;
      font-weight: 300;
      text-transform: initial;
    }
     .container .card .sci 
      {
       position: absolute;
       bottom: 50px;
       display: flex; 
      }
      .container .card:hover .sci li
        {
          transform: translateY(0px);
          opacity: 1;
        }
      .container .card .sci li 
        {
          list-style: none;
          margin: 0 10px;
          transform: translateY(40px);
          transition: 0.5s;
          opacity: 0;
          transition-delay: calc(0.1s * var(--i));
        }
       .container .card .sci li input 
          {
            color: white;
            font-size: 16px;
            color:#1e8ee9;
            width:150px;
            border-radius: 10px;
          }

</style>


<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li><a href="logout.php">SIGN OUT</a></li>
         
        </ul>
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
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          
          <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     <!-- <a href="reser.php" class="book-a-table-btn scrollto d-none d-lg-flex">Reservation</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Catering Angels</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="menu.php" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
           <!-- <a href="reser.php" class="btn-book animated fadeInUp scrollto">Reservation</a>-->
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="assets/img/vedio.mp4" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    

      <!-- ======= About Section ======= -->
      <section>
      <div class="container">
      <?php
        
                      $row=mysqli_query($con,"select * from product");
                      while ($result=mysqli_fetch_array($row))
      {?>
     <div class="card">
        <div class="content">
        <div class="imgBx"><?php echo '<img src="./media/product/'.$result['image'].'" width="133" height="180" />'?></div>
        <div class="contentBx">
          <h5><?=$result['name'];?><span><br>Rs:<?=$result['price'];?>per head</span></h5>
        
        <h5><span><?=$result['meta_title'];?></span></h5>
        <h5><span><?=$result['meta_desc'];?></span></h5>
        <h5> <span><?=$result['meta_keyword'];?></span></h5>
        </div>  
        </div>  
          <ul class="sci">
            <li style="--i:1">
            <a href="reservation_form.php?productid=<?php echo $result['id'];?>"><input type="submit" value="Order" name="order-btn"></a>
            </li> 
          </ul>
      </div>
      <?php
      }
      ?>
  
 
</div>
</section>


      <!-- End About Section -->
    </main><!-- End #main -->
    

    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Catering Angels</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, Kerala<br><br>
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
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Catering Angels</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
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

</html>