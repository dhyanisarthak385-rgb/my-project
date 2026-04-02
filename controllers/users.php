<?php 
include "../includes/config.php";



$username=$_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password =$_POST['password'];
$hash_password = password_hash($password,PASSWORD_DEFAULT);

$query = "SELECT*FROM users WHERE email ='$email'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)> 0){
    echo "email aleardy excist";
}else{
$sql = "INSERT INTO users(name,email,phone,password) 
VALUES('$username','$email','$phone','$hash_password ')";


if(mysqli_query($conn,$sql)){
    echo "registeration successfully!";

    }else{
    echo "registeration error";

    }

}
