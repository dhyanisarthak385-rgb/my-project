<?php 
include "../includes/config.php";

$full_name=$_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql ="UPDATE concats SET 'full_name','email=$email','phone=$phone''message' WHERE id=

?>