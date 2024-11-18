<?php
$optionError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["options"])) {
        $optionError = "At least one option must be selected.";
    }
}
?>