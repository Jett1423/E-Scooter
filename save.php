<?php
include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parent_id = $_POST['commentid'];
    $name = $_POST['name'];
    $message = $_POST['msg'];

    $sql = "INSERT INTO comments (parent_id, name, message) VALUES (:parent_id, :name, :message)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(['parent_id' => $parent_id, 'name' => $name, 'message' => $message]);
    echo json_encode(['status' => 'success']);
}
?>
