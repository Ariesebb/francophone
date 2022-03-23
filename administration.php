<?php
   
   session_start();
//    header('location:purchase.php');
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
   
   if(isset($_POST["submit"])){

    
    $id = $_POST["taz"];
    $password = $_POST["password"];
    
 
    $s = " select * from Admin where ID = '$id' and PASSWORD = '$password' ";
    $getName = " select NAME from Admin where ID = '$id' and PASSWORD = '$password' ";
 
    $result = mysqli_query($con,$s);
    $result2 = mysqli_query($con,$getName);
    $row = mysqli_fetch_assoc($result2);
    $num = mysqli_num_rows($result);
 
    if($num > 0){
        $_SESSION['adminName'] = $row['NAME'];
        header('location:CRM-francoPHONE.php');
    }else{
        $reg = "insert into clientsTable(ID,NAME,PHONE,ADRESSE,MAIL,DATE) values ('$id','$name','$phone','$adresse','$mail',now())";
        mysqli_query($con,$reg);
        // echo'<script>alert("vous etes inscrit avec succes !.")</script>' ;
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('mot de passe ou numero id INCORRECT !.');
        window.location.href='admin.php';
        </script>");
        
    }
   }
   else{
    echo"inscription not successful";
   }

   

?>