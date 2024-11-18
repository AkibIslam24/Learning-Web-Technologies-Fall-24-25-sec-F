<?php
$dobError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = trim($_POST["day"]);
    $month = trim($_POST["month"]);
    $year = trim($_POST["year"]);

    if (empty($day) || empty($month) || empty($year)) {
        $dobError = "Date of birth cannot be empty.";
    } elseif (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        $dobError = "Date of birth must be numbers.";
    } elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
        $dobError = "Invalid date. (dd: 1-31, mm: 1-12, yyyy: 1953-1998)";
    }
}
?>