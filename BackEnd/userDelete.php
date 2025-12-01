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
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user){
 if(!empty($user[['avatar']])){
    $avatarPath = "../assets/img_res/" . $user['avatar'];
    if (file_exists($avatarPath)) {
        unlink($avatarPath);
    }       
}}

$_SESSION['success'] = "User deleted successfully!";

header("Location: users.php");
exit;
