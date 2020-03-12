<?php
include_once 'dbh.inc.php';;
class Insert_class extends Database{

    public function __construct()
    {

            $this->db_connection();
    }
    public function insert_parking_entry($vehicle,$price){

        $query_insert_parking_entry="Insert into tbl_parking_entry(vehicle,price) values('$vehicle','$price')";
        $result=mysqli_query($this->connection,$query_insert_parking_entry);
        return $result;

    }
}