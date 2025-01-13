
<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "shop_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT * FROM employees WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome " . $username;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}
?>

