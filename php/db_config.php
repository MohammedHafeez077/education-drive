<?php
$host = "localhost";
$user = "root";        // Default username for local MySQL
$password = "";        // Leave blank for XAMPP, default for MAMP
$dbname = "education_drive";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
