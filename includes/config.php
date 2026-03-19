<?php
$host="localhost";
$username="root";
$password="";
$db="sitindia";

$conn = mysqli_connect($host, $username,$password,$db);

if(!$conn){
    die("connectoin failed: ". mysqli_connect_error());
}
?>