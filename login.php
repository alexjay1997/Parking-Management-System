<?php
include 'includes/Select.class.php';
$conn_total_slots = new Select_class();
$read_all_numrows_total_slots= $conn_select_all_entry->select_all_slots();
$total_slots = mysqli_fetch_array($read_all_numrows_total_slots);
?>


<?php
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

//$server = $url["host"];
//$username = $url["user"];
///$password = $url["pass"];
//$db = substr($url["path"], 1);

//$conn = new mysqli($server, $username, $password, $db);



//$query=mysqli_query($conn,"select * from tbl_users where id=1");
//$row=mysqli_fetch_array($query);
?>
<!Doctype html>
<html>

<head>
    <title>Parking Management System | Login</title>
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

                    <a class="navbar-brand" href="#" style="font-family:calibri;">Parking Management System</a>

                    <!-- Toggler/collapsibe Button -->
                  

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    
                    </div>
                </nav>
            </div>
     
            <div class="col-md-12 dash justify-content-center">
                <div class="container"><br>
                   
                <?php
                        echo $row['username'];
                      ?>
                    <div class="row d-flex justify-content-center">
                   <!--login form start-->
                    <form method="POST" action="functions/login.func.php" class="login-form">
                    <h4>Login</h5><br>
                        <div class="form-group">
                           <i class="fa fa-user"></i> <label for="Username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                        <i class="fa fa-lock"></i> <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success" name="btn_login">Login</button>
                        </form> 
                     <!--login form end-->
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