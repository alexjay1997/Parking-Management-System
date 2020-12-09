<?php
session_start();
if(isset($_SESSION['id_admin']) && $_SESSION['id_admin']== true){



}
else{

header('location:login.php');
}


?>
<?php
// **** ---Start---  select_numrows parking entry ***
include 'includes/Select.class.php';
$conn_select_all_entry = new Select_class();
$read_all_numrows_entry = $conn_select_all_entry->select_number_entry();
$num_rows = mysqli_num_rows($read_all_numrows_entry);
// **** ---End--- select_numrows parking entry ***

// **** ---Start---  select_numrows parking entry ***

$conn_total_slots = new Select_class();
$read_all_numrows_total_slots= $conn_select_all_entry->select_all_slots();
$total_slots = mysqli_fetch_array($read_all_numrows_total_slots);



// **** ---End--- select_numrows parking entry ***
// ***** ---Start--- select current login user info  ****
$conn_login_current = new Select_class();
$user_id =$_SESSION['id_admin'];
$read_login_current = $conn_login_current->select_login_info($user_id);
$row = mysqli_fetch_assoc($read_login_current);
// ***** ---End--- select current login user info  ****
?>
<!Doctype html>
<html>

<head>
    <title>Parking Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.4.1-dist/css/custom.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="container-fluid page-container">
        <div class="row wrapper">
            <div class="col-sm-12" style="background:#1d1d1d;">
                <nav class="navbar navbar-expand-sm  navbar-dark">
                    <!-- Brand -->

                    <a class="navbar-brand" href="#" style="font-family:calibri;">Parking Management System | Admin </a>

                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                         </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#"><?php echo $row['username'];?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="functions/logout.func.php">LogOut</a>
                            </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>
            
            
            <div class="col-lg-2 aside-nav">
                <div class="container">
                <nav class="navbar navbar-expand-md  navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#SideNav">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <br>
                        <div class="collapse navbar-collapse" id="SideNav">
                        <ul class="navbar-nav d-block">

                            <li class="nav-item fa fa-dashboard"> <a href="admin_panel.php" > Dashboard</a></li>
                            
                            <li class=" nav-item fa fa-id-card"> <a href="parking_slot.php" >Parking Slot</a></li>
                            <li class=" nav-item fa fa-id-card"> <a href="employees.php" >Employees</a></li>
                            <li class=" nav-item fa fa-id-card"> <a href="reports.php" >Reports</a></li>
                            <li class=" nav-item fa fa-id-card"> <a href="vehicles.php" >Vehicles</a></li>
                           
                            <li class=" nav-item fa fa-id-card"> <a href="admin_settings.php" >Settings</a></li>

                        </ul>
                        </div>  
                    </nav>
                </div>

             </div>
           


            <div class="col-md-10 dash justify-content-center">
                <div class="container"><br>
                    <h5 style="color:#6f6f6f;">Admin Dashboard</h5>
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 box box1">

                            <h3 class="fas fa-car"></h3>
                            &nbsp;<label><?php echo $num_rows;?></label>
                            <h4>Total Entries</h4>

                        </div>
                        <div class="col-md-3 box box2">
                            <h3 class="fas fa-car"></h3>
                            &nbsp; <label><?php echo $total_slots['available_slots'];?></label>
                            <h4>Total Vacant Slots</h4>

                        </div>
                        <div class="col-md-3 box box3">
                            <h3 class="fas fa-car"></h3>
                            &nbsp;<label><?php echo $total_slots['total_parking_slots'];?></label>
                            <h4>Total Parking Slots</h4>

                        </div>

                    </div>
                    <br><br>
                      <div class="container text-center">
                      <hr>
                      <footer style="color:#c2c2c2;">
                      &copy; 2020 Parking Management System | Developed By: ALJ
                      </footer>
                      </div>
                    
                </div>
                  
            </div>

        </div>
    </div>
</div>
</body>

</html>