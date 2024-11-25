<?php

$valid_username = "user123";  
$valid_password = "password123";  


$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {
    header('Location: dashboard.php');
    exit;
} else {
   
    header('Location: registration.php');
    exit;
}
?>