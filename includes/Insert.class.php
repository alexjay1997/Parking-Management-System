<?php
include_once 'dbh.inc.php';
class Insert_class extends Database{

    public function __construct()
    {

            $this->db_connection();
    }

    public function add_employee($fname,$lname,$username,$password,$email,$contact,$role){

        $query = "Insert into tbl_users(firstname,lastname,username,password,email,contact,role) values ('$fname','$lname','$username','$password','$email','$contact','$role')";
        $result=mysqli_query($this->connection,$query);
        return $result;

    }


    public function update_available_slots($available_slots){

        $query_update_available_slots = "Update tbl_parking_slots set available_slots = '$available_slots' where id=1";
        $result=mysqli_query($this->connection,$query_update_available_slots);
        return $result;

    }


    
    public function update_parking_slots($total_slots){

        $query_update_parking_slots = "Update tbl_parking_slots set total_parking_slots = '$total_slots' where id=1";
        $result=mysqli_query($this->connection,$query_update_parking_slots);
        return $result;

    }

    public function addEntryParking($vehicle,$price){

        $insert_parking_entry = "Insert into tbl_parking_entry(vehicle,price) values ('$vehicle','$price')";
        $result=mysqli_query($this->connection,$insert_parking_entry);
        return $result;

    }
}