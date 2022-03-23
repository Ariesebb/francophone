<?php
   
session_start();
header('location:CRM-activation.php');
// $changeStatus = $_POST['purchaseNum2'];

$con = mysqli_connect('localhost','root','root','francoPHONEclients');

if(!$con){
    die("connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, 'francoPHONEclients');

$changeStatus = "UPDATE `purchase` SET `STATUS` = 'en activation' WHERE `purchase`.`purchase` = '".$_POST['purchaseNum2']."'; ";
$action = mysqli_query($con,$changeStatus);
// echo "updated succesful" ;
?>