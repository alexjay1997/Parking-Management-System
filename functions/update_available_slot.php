<?php
include '../includes/Insert.class.php';



if(isset($_POST['btn_update_available_slot'])){

$conn_update_parking_slots = new Insert_class();

$available_slots =mysqli_real_escape_string($conn_update_parking_slots->connection,$_POST['inp_update_available_slot']);
$update_available_slot = $conn_update_parking_slots->update_available_slots($available_slots);

if($update_available_slot){
header('location:../index.php');
}
}



?>