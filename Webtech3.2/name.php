<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_REQUEST['username']);
    $password = $_REQUEST['password'];

    if (empty($username) || empty($password)) {
        $error = "Username and Password cannot be empty.";
    } else {
        $isValid = true;

        if (!ctype_alpha($username[0])) {
            $error = "Username must start with a letter.";
            $isValid = false;
        }

        if (str_word_count($username) < 2) {
            $error = "Username must contain at least two words.";
            $isValid = false;
        }

        for ($i = 0; $i < strlen($username); $i++) {
            $char = $username[$i];
            if (!(ctype_alpha($char) || $char === '.' || $char === '-' || $char === ' ')) {
                $error = "Username can only contain letters, periods, and dashes.";
                $isValid = false;
                break;
            }
        }

        if ($isValid) {
            if ($username == $password) {
                $_SESSION['flag'] = true;
                header('location: name.html');
                exit;
            } else {
                $error = "Invalid user.";
            }
        }
    }
}
?>
