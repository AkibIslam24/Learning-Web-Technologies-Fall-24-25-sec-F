<?php
$mysqli = new mysqli("localhost", "root", "", "shop_management");

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $stmt = $mysqli->prepare("SELECT * FROM employees WHERE name LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['name'] . " - " . $row['contact_no'] . "</p>";
    }
}
?>
