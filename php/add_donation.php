<?php
include "db_config.php";

$donor_name = $_POST['donor_name'];
$amount = $_POST['amount'];

$sql = "INSERT INTO donations (donor_name, amount) VALUES ('$donor_name', $amount)";
if ($conn->query($sql) === TRUE) {
   header("Location: ../donate.html");
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
