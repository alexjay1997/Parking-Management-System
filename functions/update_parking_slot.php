<?php
include '../includes/insert.class.php';

$conn_update_parking_slots = new Insert_class();

if(isset($_POST['btn_update_parking_slot'])){


$total_slots = mysqli_real_escape_string($conn_update_parking_slots->connection,$_POST['inp_update_parking_slot']);
$update_total_parking_slot = $conn_update_parking_slots->update_parking_slots($total_slots);

if($update_total_parking_slot){
header('location:../admin_panel.php');
}

else{
    header('location:../admin_panel.php');

}


}



?>