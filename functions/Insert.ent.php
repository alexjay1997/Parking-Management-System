<?php
 include_once '../includes/Insert.class.php';
 include_once '../includes/Select.class.php';
 include_once '../includes/update.slots.php';

if(isset($_POST['Submit_btn'])){

    //--- Start--- select Lahat ng  parking entries  

  
    //--- end---

    // Select all Slots parking available 
    $conn_select_all_slots= new Select_class();
    $num_rows_slots = $conn_select_all_slots->select_all_slots();
    $num_rows_all_slots = mysqli_fetch_array($num_rows_slots);

    // -- End -- 
    
 // -- Start  variable sa pag insert  at function --
    $vehicle =$_POST['vehicle'];
    $price = $_POST['price'];
    $conn_add_entry =  new Insert_class ();
    $insert_entry =$conn_add_entry->insert_parking_entry($vehicle,$price);
    // End

   
    // --  Start -- slots available  bawasan ang available slot na row ng 1 kada insert ng bagong entry  
    $slots = $num_rows_all_slots['available_slots'] - 1;
    $conn_update_slots = new Update_class();
    $total_slots = $conn_update_slots->update_slots($slots);
    // --- End ---
    
    header('location:../parking.panel.php');
    }
?>