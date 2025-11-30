<?php 
function dataValidation($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function checkRoll($role){
    if(!isset($_SESSION['role'])|| $_SESSION['role']!==$role){
        header('Location:../login');
        exit;
    }
}

?>