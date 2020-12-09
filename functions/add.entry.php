<?php


if(isset($_POST['Submit-btn'])){

    include_once '../includes/Insert.class.php';
    include_once '../includes/Select.class.php';
    include_once '../includes/update.slots.php';
    //--- Start--- select all of parking entries  
   
  
    //--- end---

    // Select all Slots parking available 
    $conn_select_all_slots= new Select_class();
    $num_rows_slots = $conn_select_all_slots->select_all_slots();
    $num_rows_all_slots = mysqli_fetch_array($num_rows_slots);
    $available_slots=$num_rows_all_slots['available_slots'];
    // -- End -- 
    
 
 // -- Start  variable for insert and function --

    $vehicle =$_POST['vehicle'];
    $price = $_POST['price'];


 

   
    // -- check first if price is same with the system or hack if it is hack or change in inspect element then alert error message //
    if($vehicle == "Van" && $price !="30.00" ){

        echo "<script>alert('error price!');</script>";
        echo "<script>window.location.href='../parking.panel.php';</script>";
      
    }
    
    else if($vehicle == "Car" && $price !="25.00" ){
        echo "<script>alert('error price!');</script>";
        echo "<script>window.location.href='../parking.panel.php';</script>";
       
    }
    
    else if($vehicle == "Motor" && $price !="15.00" ){
    
        echo "<script>alert('error price!');</script>";
        echo "<script>window.location.href='../parking.panel.php';</script>";
       
    }
    
 
   
 
      else if($available_slots ==0){
    
            echo "sorry no more available parking area!";
        }

// do below if price is not hack or change it will insert the type of vehicle and price //
else{
   
    $conn_add_entry =  new Insert_class();
    $insert_entry = $conn_add_entry->insert_parking_entry($vehicle,$price);
    // End

   
    // --  Start -- slots available  bawasan ang available slot na row ng 1 kada insert ng bagong entry  
    $slots = $num_rows_all_slots['available_slots'] - 1;
    $conn_update_slots = new Update_class();
    $total_slots = $conn_update_slots->update_slots($slots);
    // --- End ---
    
    header('location:../parking.panel.php');
    }
 

}
?>