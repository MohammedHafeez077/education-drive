<?php
include "db_config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO volunteers (name, email, phone) VALUES ('$name', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
   header("Location: ../volunteer.html?status=success");
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
