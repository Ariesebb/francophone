<?php
   
   session_start();
   
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FrancoPHONE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/flogo.PNG" rel="icon">
  <link href="assets/img/flogo.PNG" rel="apple-touch-icon">

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
        <div class="tbinfo"><i class="bi bi-envelope-fill"></i><a href="mailto:arie.sebb@gmail.com">arie.sebb@gmail.com</a></div>
        <div><br>&nbsp;&nbsp;&nbsp;</div>
        <div class="tbinfo"><i class="bi bi-phone-fill phone-icon"></i><a href="tel:+972586262618">0586262618&nbsp;&nbsp;&nbsp;</a></div>
        <div><br></div>
        <div class="tbinfo"><i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=972586262618&text=&source=&data=">0586262618&nbsp;&nbsp;&nbsp;</a></div>
        <div><br></div>
        <div class="tbinfo"><i class="bi bi-person-square"></i><a href="CRM-francoPHONE.php">&nbsp; admin</a></div>
     </div>
      
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="assets/img/flogo.PNG" alt="francologo" >&nbsp;<a href="index.php">FrancoPHONE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About us</a></li>
          <li><a class="nav-link scrollto" href="#reparation">Reparations</a></li>
          <li><a class="nav-link scrollto" href="#services">les meilleures forfait actuel</a></li>
          <li class="dropdown"><a href="#"><span>toutes les compagnies</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a class="nav-link scrollto " href="#celcome">celcome</a></li>
                  <li><a class="nav-link scrollto " href="#pelephone">pelephone</a></li>
                  <li><a class="nav-link scrollto " href="#partner">partner</a></li>
                  <li><a class="nav-link scrollto " href="#hotMobile">hotMobile</a></li>
                  <li><a class="nav-link scrollto " href="#012">012</a></li>
                  <li><a class="nav-link scrollto " href="#golanTelecom">golanTelecom</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <div class="heroLogo">
      <img src="assets/img/flogo.PNG" class="rounded mx-auto d-block" alt="francologo" >
      </div>
      <div><br><br><br><br><br></div>
      <h1>Bienvenue au service francoPHONE</h1>
      <h2>Création de ligne telephonique ou Changez de fournisseur et conservez votre numéro de telephone.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

        <a href="#pelephone" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/pelephone.png" class="img-fluid" alt="">
            </a>

          <a href="#celcome" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/celcom.png" class="img-fluid"  alt="">
          </a>

          <a href="#partner" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/Partner.png" class="img-fluid" alt="">
            </a>

          <a href="#012" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/012.png" class="img-fluid" alt="">
            </a>

          <a href="#golanTelecom" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/golanTelecom.png" class="img-fluid" alt="">
            </a>

          <a href="#hotMobile" class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/cellular_logo/png/hot-mobile.png" class="img-fluid" alt="">
            </a>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section all plan ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>les meilleures forfait actuel</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=11>
              <?php
                 $planid = 11;             
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                  // echo '<ul><li>', $row["Compagnie"] ,'</li>';
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=21>
              <?php
                 $planid = 21;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=31>
              <?php
                 $planid = 31;              
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=41>
              <?php
                 $planid = 41;          
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=51>
              <?php
                 $planid = 51;          
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <form action="purchase.php" method="post">
              <input type="hidden" name="planid" value=61>
              <?php
                 $planid = 61;           
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
              ?>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= reparation Section ======= -->
    <!-- <section id="cta" class="cta"> -->
    <section id="reparation" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Service</span>
          <h2> Reparation</h2>
          <p>Votre telephone est casseé... vous n'avez pas le temp d'aller le faire reparer... pas de soucis, francoPHONE s'en chargera pour vous .</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <!-- <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <img src="https://speakerphone.web.app/assets/sfLogo.png" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Service reparation</h3>
              <p>FrancoPHONE vous offre un service de reparation de telephone (toute sortes).</p>
              <p>recuperation et livraison a domicile inclue dans le prix de la reparation.</p>
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a href="https://speakerphone.web.app/#/home" class="btn-buy">Consulter le prix de la reparation</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <!-- <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <img src="https://speakerphone.web.app/assets/sfLogo.png" alt="">
            </div>
          </div>

        </div>

      </div>
    
    </section>
      <section id="cta" class="cta">
          <p><br></p>
          <h3 class="text-center">Touts les Forfait par compagnie</h3>
          <p><br></p>
      </section>
        <!-- ======= Services Section celcome ======= -->
        <section id="celcome" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>celcome</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                 <form action="purchase.php" method="post">
                 <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;              
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;              
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
           </div>
         </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-slideshow"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-arch"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=11>
                 <?php
                 $planid = 11;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section celcome -->

         <!-- ======= Services Section pelephone ======= -->
         <section id="pelephone" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>pelephone</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;          
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=21>
                 <?php
                 $planid = 21;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section pelephone-->

         <!-- ======= Services Section partner ======= -->
         <section id="partner" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>partner</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=31>
                 <?php
                 $planid = 31;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section partner -->

         <!-- ======= Services Section hotMobile ======= -->
         <section id="hotMobile" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>hotMobile</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;              
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=41>
                 <?php
                 $planid = 41;            
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section hotMobile -->

         <!-- ======= Services Section 012 ======= -->
         <section id="012" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>012</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;
               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=51>
                 <?php
                 $planid = 51;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section 012 -->

         <!-- ======= Services Section golanTelecom ======= -->
         <section id="golanTelecom" class="services">
          <div class="container">
    
            <div class="section-title">
              <span>Services</span>
              <h2>golanTelecom</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;               
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;                
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <form action="purchase.php" method="post">
                  <input type="hidden" name="planid" value=61>
                 <?php
                 $planid = 61;                 
                 $sql = "SELECT * FROM PLAN WHERE PlanID = $planid;";
                 $result = mysqli_query($con, $sql);
                 $row = mysqli_fetch_assoc($result);
                 $resultCheck = mysqli_num_rows($result);
                 if($resultCheck > 0){
                   echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";
                   $price = $row["PrixMois"];
                   echo '<button class="mySpecial" role="button">',$row["PrixMois"],'&nbsp;₪/mois seulement!!</button>';
                  
                 }
                ?>
              </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Services Section golanTelecom-->

         

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Service</span>
          <h2> Reparation</h2>
          <p>Votre telephone est casseé... vous n'avez pas le temp d'aller le faire reparer... pas de soucis, francoPHONE s'en chargera pour vous .</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <!-- <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <img src="https://speakerphone.web.app/assets/sfLogo.png" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Service reparation</h3>
              <p>FrancoPHONE vous offre un service de reparation de telephone (toute sortes).</p>
              <p>recuperation et livraison a domicile inclue dans le prix de la reparation.</p>
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a href="https://speakerphone.web.app/#/home" class="btn-buy">Consulter le prix de la reparation</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <!-- <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <img src="https://speakerphone.web.app/assets/sfLogo.png" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contacter nous</h2>
          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
        </div>

        <div class="row" data-aos="fade-up">
          <!-- <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div> -->
          
          <a class="col-lg-4 col-md-6" href="https://api.whatsapp.com/send?phone=972586262618&text=&source=&data=">
            <div class="info-box  mb-4">
            <i class="bi bi-whatsapp" ></i>
              <h3>whatsapp</h3>
              <p>0586262618</p>
            </div>
            </a>
            <!-- <a href="tel:+972586262618" title="058-6262618"></a> -->
          <a class="col-lg-4 col-md-6" href="tel:+972586262618" >
            <div class="info-box  mb-4">
            <i class="bi bi-phone"></i>
              <h3>Call Us</h3>
              <p>0586262618</p>
            </div>
            </a>

          <a class="col-lg-4 col-md-6" href="mailto:arie.sebb@gmail.com">
            <div class="info-box  mb-4">
            <i class="bi bi-envelope-open"></i>
              <h3>Email Us</h3>
              <p>arie.sebb@gmail.com</p>
            </div>
          </a>

          

        </div>

        <!-- <div class="row" data-aos="fade-up"> -->

          <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> -->

          <!-- <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Email</button></div>
            </form>
          </div> -->

        <!-- </div> -->

      </div>
    </section><!-- End Contact Section -->

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
                <strong>Phone:</strong> 0586262618<br>
                <strong>Email:</strong> arie.sebb@gmail.com<br>
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