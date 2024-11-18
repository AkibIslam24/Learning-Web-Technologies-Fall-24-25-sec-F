<?php
$emailError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $emailError = "Email cannot be empty.";
    } else {
        $parts = explode('@', $email);

        if (count($parts) !== 2 || empty($parts[0]) || strpos($parts[1], '.') === false) {
            $emailError = "Invalid email address.";
        }
    }
}