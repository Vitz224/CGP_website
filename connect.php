<?php
// Establish database connection
$conn = new mysqli("localhost", "root", "", "cgp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>