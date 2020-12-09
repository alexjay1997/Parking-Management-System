<?php
include 'dbh.inc.php';
class Update_class extends Database{

    public function __construct()
    {

            $this->db_connection();
    }

    public function update_slots($slots){

        $query_update_slots="UPDATE tbl_parking_slots SET available_slots= '$slots' ";
        $result=mysqli_query($this->connection,$query_update_slots);
        return $result;

    }

}