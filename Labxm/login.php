<?php
$valid_username = "admin";  
$valid_password = "password123";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $valid_username && $password == $valid_password) {
        echo "<p><a href 'registration.html'</h1>";
        echo "<p>Welcome, $username!</p>";
        
    } else {
       
        echo "<h1>Invalid username or password!</h1>";
        echo "<p><a href='index.html'>Try Again</a></p>";  
    }
} else {
   
    echo "<h1>Error: Please submit the login form.</h1>";
}
?>