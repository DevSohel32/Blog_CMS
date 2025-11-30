<?php
include '../database/db_connect.php';
if(isset($_POST['role'])){
    $role = $_POST['role'];
    $stmt = $conn->prepare("UPDATE users SET role = :role WHERE id = :id");
    $stmt->bindParam(':role', $role);
}

if(isset($_POST['status'])){
    $status = $_POST['status'];
    $stmt = $conn->prepare("UPDATE users SET status = :status WHERE id = :id");
    $stmt->bindParam(':status', $status);
}

$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

?>
