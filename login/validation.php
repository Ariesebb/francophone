<?php
   
   session_start();
   //header('location:indexLog.php');
   $con = mysqli_connect('localhost','root','root','francoPHONEclients');

   if(!$con){
       die("connection failed: " . mysqli_connect_error());
   }

   mysqli_select_db($con, 'francoPHONEclients');
   
   if(isset($_POST["submit"])){

    
    $id = $_POST["numeroID"];
    $phone = $_POST["telephone"];
    
 
    $s = " select * from clientsTable where ID = '$id' and PHONE = '$phone' ";
    // $s = " select * from clientsTable where ID = '$id'";
 
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

 
    if($num == 1){

        
        $reg = "insert into loginTable(DATE,TIME) values (curdate(),curtime())";
        $reg1 = "insert into loginTable(NAME,ADRESSE,PHONE,DATE,TIME) values (SELECT `NAME` FROM `francoPHONEclients.clientsTAble` WHERE ID = '$id' , SELECT `ADRESSE` FROM `francoPHONEclients.clientsTAble` WHERE ID = '$id' , SELECT `PHONE` FROM `francoPHONEclients.clientsTAble` WHERE ID = '$id' , curdate() , curtime())";
        // $reg2 = "insert into loginTable(ADRESSE) values (SELECT `ADRESSE` FROM `francoPHONEclients.clientsTAble` WHERE ID = '$id' and PHONE = '$phone')";
        // $reg3 = "insert into loginTable(PHONE) values (SELECT `PHONE` FROM `francoPHONEclients.clientsTAble` WHERE ID = '$id' and PHONE = '$phone')";
        // $reg4 = "insert into loginTable(DATE,TIME) values (curdate(),curtime())";
        mysqli_query($con,$reg1);
        echo"login successful $phone" ;
    }else{
        echo"  $phone votre identifiant n'exist pas encore. veillez vous inscrire  . $id . " ;
    }
   }
   else{
    echo"connexion not successful";
   }

   

?>