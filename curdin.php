<?php 
include "../includes/config.php";

$username=$_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO samvad(Name,email,phone,)
VALUES('$username','$email','$phone')";
 

 if(mysqli_query($conn,$sql)){
 echo "successfuly submited";
 }else{
    echo"not verify your data";
 }