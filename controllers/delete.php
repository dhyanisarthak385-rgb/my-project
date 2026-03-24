<?php
include "../includes/config.php";

$id= $_GET['id'];

 $sql = "DELETE FROM contcats  WHERE id = '$id'";

 if(mysqli_query($conn,$sql)){
    // echo "DATA DELETED SUCCESSFULLY";
    header("location: ../my-account.php");
 }else{
    echo "somthing want wrong!";
 }

?>