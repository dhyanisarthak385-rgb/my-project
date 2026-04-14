<?php
session_start();
include "../includes/config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    echo $row['email'];
    echo $password;
    echo $row['password'];
    echo strlen($row['password']);
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        header("Location: ../my-account.php"); // fixed typo
        exit(); // important
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}
?>