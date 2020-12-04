<?php
  include '../includes/Select.class.php';
  $conn_select_user_login =new Select_class();
if(isset($_POST['btn_login'])){

  
session_start();

$username =mysqli_real_escape_string($conn_select_user_login->connection,$_POST['username']);
$password = mysqli_real_escape_string($conn_select_user_login->connection,$_POST['password']);
$Encrypt_password = $password;

$userLogin= $conn_select_user_login->select_login_user($username,$Encrypt_password);
if($userLogin>0){

    $row=mysqli_fetch_array($userLogin);
    if($row['role']=="admin"){
   // if (isset($_POST['remember'])){
        //set up cookie
    //    setcookie("user", $row['username'], time() + (86400 * 30)); 
   //     setcookie("pass", $row['password'], time() + (86400 * 30)); 
   // }

    $_SESSION['id']=$row['id'];
    header('location:../admin_panel.php');
   }

   else if($row['role']=="staff"){


    
    $_SESSION['id']=$row['id'];

    header('location:../index.php');
   }
}
else{

    header('location:../login.php');
}

}
?>