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
    $stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
} elseif ($field === 'status') {
    $stmt = $conn->prepare("UPDATE users SET status = ? WHERE id = ?");
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid field']);
    exit;
}

$success = $stmt->execute([$value, $id]);

if ($success) {
    echo json_encode(['success' => true, 'message' => ucfirst($field).' updated successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update '.$field]);
}
