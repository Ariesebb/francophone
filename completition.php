<?php
   
session_start();


header('location:CRM-accomplie.php');
$con = mysqli_connect('localhost','root','root','francoPHONEclients');

if(!$con){
    die("connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, 'francoPHONEclients');

$changeStatus = "UPDATE `purchase` SET `STATUS` = 'accomplie' WHERE `purchase`.`purchase` = '".$_POST['purchaseNum2']."'; ";
$action = mysqli_query($con,$changeStatus);
// echo "updated succesful" ;
?>