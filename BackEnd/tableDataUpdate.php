<?php
header('Content-Type: application/json');
include '../database/db_connect.php'; 
$id = $_POST['id'] ?? null;
$field = $_POST['field'] ?? null;   
$value = $_POST['value'] ?? null;
if (!$id || !$field || $value === null) {
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit;
}   
$stmt = null;
if ($field === 'role') {
    $stmt = $conn->prepare("UPDATE users SET role=? WHERE id=?");
} elseif ($field === 'status') {
} else {
    exit;
}   