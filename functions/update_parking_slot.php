<?php
require '../includes/Insert.class.php';

if(isset($_POST['btn_update_parking_slot'])){

    $conn_update_parking_slots = new Insert_class();

$total_slots =$_POST['inp_update_parking_slot'];
$update_total_parking_slot = $conn_update_parking_slots->update_parking_slots($total_slots);

//echo "<script>window.location.href='../admin_panel.php';</script>";

if($update_total_parking_slot) == true{
    header('location:../parking_slot.php');
}

else{
    header('location:../admin_panel.php');

}


}



?>