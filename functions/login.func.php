<?php
 // include '../includes/Select.class.php';
 // $conn_select_user_login =new Select_class();
 //<?php
 $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
 
 $server = $url["host"];
 $username = $url["user"];
 $password = $url["pass"];
 $db = substr($url["path"], 1);
 
 $conn = new mysqli($server, $username, $password, $db);
 
 
 
 
 $row=mysqli_fetch_array($query);


if(isset($_POST['btn_login'])){

  
session_start();

$username =mysqli_real_escape_string($conn_select_user_login->connection,$_POST['username']);
$password = mysqli_real_escape_string($conn_select_user_login->connection,$_POST['password']);
$Encrypt_password = $password;

 $query=mysqli_query($conn,"select * from tbl_users where username='$username' && password='$Encrypt_password'");
 $row =mysqli_fetch_array($query);
if($row->num_rows>0){

    
    if($row['role']=="admin"){
   // if (isset($_POST['remember'])){
        //set up cookie
    //    setcookie("user", $row['username'], time() + (86400 * 30)); 
   //     setcookie("pass", $row['password'], time() + (86400 * 30)); 
   // }

    $_SESSION['id_admin']=$row['id'] ;
    header('location:../admin_panel.php');
   }

   else if($row['role']=="staff"){


    
    $_SESSION['id_staff']=$row['id'];

    header('location:../index.php');
   }
}
else{

  header('location:../login.php');
}

}
?>