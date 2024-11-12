<?php
include "db_config.php";

$sql = "SELECT SUM(amount) as total FROM donations";
$result = $conn->query($sql);

$totalDonations = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalDonations = $row['total'];
}

echo json_encode(['total' => number_format($totalDonations, 2)]);
?>
