<?php
   
   session_start();
   
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
   $planid = $_COOKIE['plan-id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Day Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/myStyle.css">
  <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>
  
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:arie.sebb@gmail.com">arie.sebb@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i><a href="tel:+972586262618">0586262618&nbsp;&nbsp;&nbsp;</a>
        <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=972586262618&text=&source=&data=">0586262618&nbsp;&nbsp;&nbsp;</a>
        <i class="bi bi-person-square"></i><a href="CRM-francoPHONE.php">&nbsp; admin</a>
      
      
       </div>
      
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">FrancoPHONE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/francoPHONE/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/francoPHONE/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/francoPHONE/#services">les meilleures forfait actuel</a></li>
          <li class="dropdown"><a href="#"><span>toutes les compagnies</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#celcome">celcome</a></li>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#pelephone">pelephone</a></li>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#partner">partner</a></li>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#hotMobile">hotMobile</a></li>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#012">012</a></li>
                  <li><a class="nav-link scrollto " href="/francoPHONE/#golanTelecom">golanTelecom</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/francoPHONE/#team">Team</a></li>
          <li><a class="nav-link scrollto" href="/francoPHONE/#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>purchase</li>
        </ol>
        <h2>purchase</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">
      <div class="container">
      <div class="row"> 
      <!-- <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in"> -->
      <div class="mt-md-0 col-lg-8 col-md-8 mt-8 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <div class="form-w3-agile">
			        <h2>Credit login form</h2>
			        <form action="validation.php" method="post">
                  <div class="col-md-12 form-group">
                  <input type="text" name="numeroID" class="form-control" placeholder="numero d'identiter" required>
                  </div>
                  <p><br></p>
                  <div class=" col-md-12 form-group">
                  <input type="text" name="telephone" class="form-control" placeholder="numero de telephone joignable" required>
                  </div>
                 
                  <p >c'est votre premiere fois avec nous?<a class="inscr" href="register.php" > inscriver vous ici</a></p>
			          
				
				          <div class="btn-wrap">
                   <!-- <a type="submit" name="submit" class="btn-buy">contacter moi</a> -->
                   <input type="submit" name="submit" class="mySpecial" value="contacter moi">
                 </div>
		          	</form>
	          	</div>


              
            </div>
          </div>

          <div class="col-lg-4 col-md-8 mt-8 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
            <h2>vous avez choisi</h2>
              
              <?php
                  if(!isset($_POST['planid'])){
                  $planid = $_SESSION['plan-id'];
               }
               else{
                $planid = $_POST['planid'];
               }
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                   $_SESSION['plan-id'] = $planid;
                 }
              ?>
              
            </div>
            </div>
          </div>

          </div>
      </div>
    </section>
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

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