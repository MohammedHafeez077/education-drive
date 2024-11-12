<?php
include "db_config.php";

$sql = "SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date ASC";
$result = $conn->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = [
            'title' => $row['title'],
            'description' => $row['description'],
            'event_date' => $row['event_date'],
            'location' => $row['location']
        ];
    }
}

echo json_encode($events);
?>
