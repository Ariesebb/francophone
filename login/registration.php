<?php
   
   session_start();
   //header('location:indexLog.php');
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
 
    $s = " select * from clientsTable where ID = '$id' and PHONE = '$phone' ";
 
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
 
    if($num == 1){
        echo"votre identifiant exist deja. vous pouver vous connecter. " ;
    }else{
        $reg = "insert into clientsTable(ID,NAME,PHONE,MAIL,DATE) values ('$id','$name','$phone','$mail',now())";
        mysqli_query($con,$reg);
        echo"subscribe successful $phone" ;
    }
   }
   else{
    echo"inscription not successful";
   }

   

?>