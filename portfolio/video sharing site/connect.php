<?php
// connect.php - Database connection
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "videodb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>