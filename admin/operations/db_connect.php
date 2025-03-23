<?php
$host = "localhost";
$username = "root";  // Change if needed
$password = "";  // Change if you have a MySQL password
$database = "rto";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
