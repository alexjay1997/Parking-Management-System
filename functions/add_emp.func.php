<?php
include_once '../includes/Insert.class.php';

$conn_add_emp = new Insert_class();


if(isset($_POST['btn_add_emp'])){
    $conn_add_emp = new Insert_class();

$fname=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_fname']);
$lname=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_lname']);
$username=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_uname']);
$password=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_password']);
$email=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_email']);
$contact=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_contact']);
$role=mysqli_real_escape_string($conn_add_emp->connection,$_POST['inp_role']);

$insert_new_employee=$conn_add_emp->add_employee($fname,$lname,$username,$password,$email,$contact,$role);
if($insert_new_employee){

   header('location:../login.php'); 
}
else{
    echo "Error add new Employee failed!!";
}
}

?>