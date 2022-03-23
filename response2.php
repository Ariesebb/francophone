<?php
   
   session_start();
   //    header('location:purchase.php');
      $con = mysqli_connect('localhost','root','root','francoPHONEclients');
      
      if(!$con){
          die("connection failed: " . mysqli_connect_error());
      }
   
      mysqli_select_db($con, 'francoPHONEclients');
      
      // if(isset($_POST["submit"])){
   
      //  $numID = $_POST["numeroID"];
      //  $tel = $_POST["telephone"];
      $planid = $_SESSION['plan-id'];
      $_SESSION['plan-id'] = $planid;
      //  $status = "en attente";
       
       
    
      //  $s = " select * from clientsTable where ID = '$numID' and PHONE = '$tel' ";
    
      //  $result = mysqli_query($con,$s);
      //  $num = mysqli_num_rows($result);
   
   
    
 
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

  <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>
    
<style>
     body{
      background-color: #d8d8d8;
     }
     .logocrm{
         color:#fff;
     }
     .inscr{
      color: black;
     }
     .inscr:hover{
      color: #fff;
     }
     .mySpecial {
  align-items: center;
  background-clip: padding-box;
  background-color: #014c77;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.mySpecial:hover,
.mySpecial:focus {
  background-color: #fff;
  color: #014c77;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.mySpecial:hover {
  transform: translateY(-1px);
}

.mySpecial:active {
  background-color: #014c77;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
   </style>
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
    
  <div classs="container">
    <div class="d-flex justify-content-center align-item-center"><br><br><br></div>
    <div class="d-flex justify-content-center align-item-center"><br><br><br></div>

       <div class="d-flex justify-content-center align-item-center">
          <div class="row no-gutter" >
	          	<div class="col-lg-12 col-md-12 ml-auto">
		            	<div class="alert alert-primary shadow my-3" role="alert" style="border-radius: 3px">
				
			            	<div class="text-center">
				          	<svg width="3em" height="3em" viewBox="0 0 16 16" class="m-1 bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
				          	</svg>
			            	</div>
			              	<p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">c'est votre premiere fois avec nous !</b><br>bienvenue chez francoPHONE.  <br>veillez vous inscrire: </p>
                      <div class="text-center">
                         <a type="button" class="mySpecial" href="register.php" >ok</a>
		                	</div>
                  </div>
		          </div>
        	</div>
       </div>
  </div>

 </main>

        <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

</body>

</html>