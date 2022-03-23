<?php
   
   session_start();
//    header('location:purchase.php');
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
   
   if(isset($_POST["submit"])){

    $name = $_POST["clientName"];
    $id = $_POST["idNum"];
    $phone = $_POST["phoneNum"];
    $mail = $_POST["emailAdress"];
    $adresse = $_POST["Adresse"];
 
    $s = " select * from clientsTable where ID = '$id' and PHONE = '$phone' ";
 
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
 
    if($num == 1){
        // echo'<script>alert("votre identifiant exist deja. vous pouver vous connecter.")</script>' ;
        // header('location:purchase.php');
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('votre identifiant exist deja. vous pouver vous connecter.');
        window.location.href='purchase.php';
        </script>");
    }else{
        $reg = "insert into clientsTable(ID,NAME,PHONE,ADRESSE,MAIL,DATE) values ('$id','$name','$phone','$adresse','$mail',now())";
        mysqli_query($con,$reg);
        // echo'<script>alert("vous etes inscrit avec succes !.")</script>' ;
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('vous etes inscrit avec succes !.');
        window.location.href='purchase.php';
        </script>");
        
    }
   }
   else{
    echo"inscription not successful";
   }

   

?>