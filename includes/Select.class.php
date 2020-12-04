<?php
include_once 'dbh.inc.php';
class Select_class extends Database{

    public function __construct()
    {

            $this->db_connection();
    }
    //*** --Start-- login select user ****
        public function select_login_user($username,$Encrypt_password){
            $query_select_login = "Select * from tbl_users where username='$username' && password='$Encrypt_password' ";
            $result=mysqli_query($this->connection,$query_select_login);
            return $result;
        }

        public function select_login_info($user_id){
            $query_select_login = "Select * from tbl_users where id='$user_id'";
            $result=mysqli_query($this->connection,$query_select_login);
            return $result;
        }

    //****--End-- login select user ****/

    public function select_all_entry(){

        $query_all_entry="Select * from tbl_parking_entry";
        $result=mysqli_query($this->connection,$query_all_entry);
        return $result;

    }
// ******* --Start-- select vehicle from tbl_vehicle_type *******
        public function select_vehicle(){

        $query_select_vehicle = "Select * from tbl_vehicle_type";
        $result =mysqli_query($this->connection,$query_select_vehicle);
        return $result;   
    }
// ******* --End-- select vehicle from tbl_vehicle_type *******


//******* select number of entry *********
public function select_number_entry(){

    $query_all_entry="Select * from tbl_parking_entry";
    $result=mysqli_query($this->connection,$query_all_entry);
    return $result;

}
// ******* end ***********



//******* select number of entry *********
public function select_all_slots(){

    $query_all_total_slots="Select available_slots from tbl_parking_slots";
    $result=mysqli_query($this->connection,$query_all_total_slots);
    return $result;

}
// ******* end ***********
}

?>