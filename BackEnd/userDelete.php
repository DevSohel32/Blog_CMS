<?php
session_start();
include '../database/db_connect.php';

if (!isset($_POST['id'])) {
    header("Location: users.php");
    exit;
}

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$_SESSION['success'] = "User deleted successfully!";

header("Location: users.php");
exit;
