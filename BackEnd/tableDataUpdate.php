<?php
header('Content-Type: application/json');
include '../database/db_connect.php'; 

// $id = $_POST['id'] ?? null;
// $field = $_POST['field'] ?? null;
// $value = $_POST['value'] ?? null;

// if (!$id || !$field || $value === null) {
//     echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
//     exit;
// }

// $stmt = null;

// if ($field === 'role') {
//     $stmt = $conn->prepare("UPDATE users SET role=? WHERE id=?");
// } elseif ($field === 'status') {
//     $stmt = $conn->prepare("UPDATE users SET status=? WHERE id=?");
// } else {
//     echo json_encode(['success' => false, 'message' => 'Invalid field']);
//     exit;
// }

// if ($stmt->execute([$value, $id])) {
//     echo json_encode(['success' => true]);
// } else {
//     echo json_encode(['success' => false, 'message' => 'Database error']);
// }
// $id = $_POST['id'] ?? null;
// $field = $_POST['field'] ?? null;
// $value = $_POST['value'] ?? null;
// if(!$id || !$field || $value === null){
//     echo '{"success": false, "message": "Missing required parameters"}';
// }else{
//     echo $id . ' ' . $field . ' ' . $value;
// }
//         let id = $(this).data('id');
//         let status = $(this).is(':checked') ? 'active' : 'suspended';

//         // update UI instantly
//         $(this).siblings('.status-text').text(status);

//         console.log('Sending status update:', {id, status});

//         $.ajax({
//             url: '../BackEnd/tableDataUpdate.php', // adjust path as needed
//             type: 'POST',
//             dataType: 'json',
//             data: { id: id, field: 'status', value: status },
//             success: function(data) {
//                 if(data.success){
//                     Swal.fire({icon:'success', title:'Success', text:'User status updated', timer:1500, showConfirmButton:false});
//                 }else{
//                     Swal.fire({icon:'error', title:'Error', text:data.message, timer:1500, showConfirmButton:false});
//                 }
//             }
//         });
//     });

// });