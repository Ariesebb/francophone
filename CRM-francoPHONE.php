<?php
   
   session_start();
   if(!isset($_SESSION["adminName"])){
      header('location:admin.php');
      exit;
   }

//    echo $_SESSION['adminName'];
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
   
   
    
 
    // $s = " select * from purchase";
 
    // $result = mysqli_query($con,$s);
    // $num = mysqli_num_rows($result);
 
//     if($num > 0){
        
//         header('location:CRM-francoPHONE.php');
//     }else{
//         $reg = "insert into clientsTable(ID,NAME,PHONE,ADRESSE,MAIL,DATE) values ('$id','$name','$phone','$adresse','$mail',now())";
//         mysqli_query($con,$reg);
//         // echo'<script>alert("vous etes inscrit avec succes !.")</script>' ;
//         echo ("<script LANGUAGE='JavaScript'>
//         window.alert('mot de passe ou numero id INCORRECT !.');
//         window.location.href='admin.php';
//         </script>");
        
//     }
//    }
   // $sql = "SELECT * from purchase ;  ";
$sql = "SELECT * from purchase WHERE STATUS = 'en attente' ;  ";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
$sumToDo = mysqli_num_rows($result);
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
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
        <i class="bi bi-person-square"></i><a href="adminLogout.php">&nbsp; log out</a>
      
      
       </div>
      
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logocrm"> CRM FrancoPHONE</h1>
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
      <li>en attente</li>
      <li><a href="CRM-activation.php">en activation</a></li>
      <li><a href="CRM-accomplie.php">accomplie</a></li>
    </ol>
    <?php 
    echo '<h2>en attente: ',$sumToDo,'</h2>' ;
    ?>
   

  </div>
</section><!-- End Breadcrumbs -->
<div classe="col-10 px-20">
<section id="loginAdmin" >
<!-- ---------------------------------------------------------- start  -->
<?php


if($sumToDo > 0){
  ?>
 <div class="container mt-5">
    <h3 class="text-center mb-3">En Attente</h3>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="bg-dark text-white">
            <th scope="col">PurchaseID</th>
            <th scope="col">Nom</th>
            <th scope="col">Compagnie souhaitable</th>
            <th scope="col">Address</th>
            <th scope="col">Heure</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
  <?php
  
  while($row = mysqli_fetch_assoc($result)){
            
            $clients = "SELECT * from clientsTable WHERE ID = '".$row['ClientID']."';" ; 
            $clientResult = mysqli_query($con,$clients);
            $clientRow = mysqli_fetch_assoc($clientResult);
            $plans = "SELECT * from PLAN WHERE PlanID = '".$row['PlanID']."';" ; 
            $planResult = mysqli_query($con,$plans);
            $planRow = mysqli_fetch_assoc($planResult);
            
            
?>
     <!-- <form  method="get" action="detail2.php" > -->
     <?php
     echo '<form  method="post" action="detail2.php?purchaseNum=',$row['purchase'],'">';
    echo '<input type="hidden" name="purchaseNum" value=',$row['purchase'],'>';
     ?>
     <!-- <input type="hidden" name="purchaseNum" value=31> -->
          <tr>
            <th scope="row"><?php echo $row['purchase'];
            echo '<p></p><p></p><button class="mySpecial" role="button">voir les detailes</button>';
            ?>
            
            
            <!-- <input type="submit" name="submit" class="mySpecial" value="voir les detailes"> -->
            </th>
            <td><?php echo  $clientRow['NAME']  ?> </td>
            <td><?php echo $planRow['Compagnie'] ?></td>
            <td><?php echo $clientRow['ADRESSE'] ?></td>
            <td><?php echo $row['TIME'] ?></td>
            <td><?php echo $row['DATE'] ?></td>
          </tr>
     </form>
<?php
  }
}




?>

<!-- ---------------------------------------------------------- finish -->
</section>
</div>

        </tbody>
      </table>
    </div>
  </div>

  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <!-- bootstrap 4 popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap 4 js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <!-- custom js -->
  <script src="js/main.js"></script>
 
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
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
      <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> -->
 <!-- </footer> End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->

</body>

</html>