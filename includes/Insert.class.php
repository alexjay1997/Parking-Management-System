<?php
include 'dbh.inc.php';
class Insert_class extends Database{

    public function __construct()
    {

            $this->db_connection();
    }
    public function insert_parking_entry($vehicle, $price){

        $query_insert_parking_entry="INSERT INTO `tbl_parking_entry`(vehicle, price) values ('.$vehicle.','.$price.')";
        $result=mysqli_query($this->connection,$query_insert_parking_entry);
        return $result;

    }

    public function update_parking_slots($total_slots){

        $query_update_parking_slots = "UPDATE `tbl_parking_slots` SET total_parking_slots ='.$total_slots.' WHERE id=1 ";
        $result=mysqli_query($this->connection,$query_update_parking_slots);
        return $result;

    }

    public function update_available_slots($available_slots){

        $query_update_available_slots="UPDATE `tbl_parking_slots` SET available_slots = '.$available_slots.' WHERE id=1 ";
        $result=mysqli_query($this->connection,$query_update_available_slots);
        return $result;

    }
}