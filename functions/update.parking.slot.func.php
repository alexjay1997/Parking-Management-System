<?php
include '../includes/Insert.class.php';

if(isset($_POST['btn_update_parking_slot'])){

$conn_update_total_parking_slots = new Insert_class();

$total_slots =$_POST['inp_update_total_parking_slot'];

$update_total_parking_slot = $conn_update_total_parking_slots->update_parking_slots($total_slots);



if($update_total_parking_slot == true){
    header('location:../admin_panel.php');
}

else{
    header('location:../admin_panel.php');

}


}



?>