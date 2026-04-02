<?php
include "../includes/config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT *FROM users WHERE email ='$email'";
$result =mysqli_query($conn, $query);

if(mysqli_num_rows($result)==1){
    $row =mysqli_fetch_accoc($result);

}
    if(password_verify ($password,$row['password'])){
        $session['user_id']=$row['id'];
        $session['email']=$row['email'];
    }else{
        echo"wrong password";
    }el{
          echo"user not found";
    };