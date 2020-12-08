<?php
include '../includes/insert.class.php';

$conn_update_parking_slots = new Insert_class();

if(isset($_POST['btn_update_available_slot'])){


$available_slots =mysqli_real_escape_string($conn_update_parking_slots->connection,$_POST['inp_update_available_slot']);
$update_available_slot = $conn_update_parking_slots->update_available_slots($available_slots);

if($update_available_slot){
header('location:../index.php');
}
}



?>