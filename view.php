<?php
include('includes/config.php');

$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($comments);
?>
