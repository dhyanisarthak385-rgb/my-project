<?php 
include "../includes/config.php";

$full_name=$_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO contcats(Name,email,phone,message) 
VALUES('$full_name','$email','$phone','$message')";
 

 if(mysqli_query($conn,$sql)){
    echo"date insert successfully.";

 }else{
    echo "data failed";
 }