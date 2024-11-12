<?php
include "db_config.php";

$sql = "SELECT * FROM impact_stories ORDER BY date_added DESC LIMIT 5";
$result = $conn->query($sql);

$stories = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $stories[] = [
            'title' => $row['title'],
            'content' => $row['content'],
            'date_added' => $row['date_added']
        ];
    }
}

echo json_encode($stories);
?>
