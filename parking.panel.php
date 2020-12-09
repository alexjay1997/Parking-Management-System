<?php
session_start();
if(isset($_SESSION['id_staff']) && $_SESSION['id_staff']== true){



}
else{

header('location:login.php');
}


?>

<?php 
include 'includes/Select.class.php';
$conn = new Select_class();
$read_all_parking_entry = $conn->select_all_entry();







// ***** ---Start--- select current login user info  ****
$conn_login_current = new Select_class();
$user_id =$_SESSION['id_staff'];
$read_login_current = $conn_login_current->select_login_info($user_id);
$row = mysqli_fetch_assoc($read_login_current);
// ***** ---End--- select current login user info  ****
?>
<?php

if(isset($_POST['Submit_btn'])){
  
  $hostname = 'us-cdbr-east-02.cleardb.com';
  $dbusername = 'b749a6c04fe595';
$dbpassword = '1e7cf907';
$database = 'heroku_f4bacc0811464cd';


$conn = new mysqli($hostname, $dbusername, $dbpassword, $database);


$vehicle =$_POST['vehicle'];
$price = $_POST['price'];

$sql = "Insert into tbl_parking_entry (vehicle, price) values ('$vehicle','$price')";
$result =mysqli_query($conn,$sql);
if($result == true){
echo "success insert"
}
else{

  echo "error insert!";
}
}

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
    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-sm-12" style="background:#1d1d1d;">
                <nav class="navbar navbar-expand-sm  navbar-dark">
                    <!-- Brand -->

                    <a class="navbar-brand" href="#" style="font-family:calibri;">Parking Management System</a>

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

                            <li class="nav-item fa fa-dashboard"> <a href="index" >Dashboard</a></li>
                            <li class=" nav-item fa fa-road"> <a href="parking.panel">Parking Entry</a></li>
                            <li class=" nav-item fa fa-id-card"> <a href="slots_parking.php" >Parking Slot</a></li>
                            <li class=" nav-item fa fa-id-card"> <a href="#" >Settings</a></li>

                        </ul>
                        </div>  
                    </nav>
                </div>

            </div>


            <div class="col-lg-10 dash justify-content-center">
                <div class="container"><br>
                    <h5 style="color:#6f6f6f;">Parking tracker</h5>
                    <hr>
                    <h6 style="color:#6f6f6f; text-indent:30px; ">Parking Entry</h6>
                    <div class="row d-flex justify-content-center">
                   
                        <!--form -->
                        <form method="POST" action="" class="text-center">
                     


                        <select id="cars" class="form-control" name="vehicle" onchange="ChooseType();" >
                        <option selected disabled>Select Vehicle Type </option>
                        <?php
                            include_once 'includes/Select.class.php';
                            $conn_select_vehicle = new Select_class();
                            $read_vehicle = $conn_select_vehicle->select_vehicle();
                           while($row=mysqli_fetch_array($read_vehicle)){
                            echo '<option value="'.$row['vehicle'].'">'.$row['vehicle'].'</option>';
                           }
                          ?>
                        </select>
                      
                        <br>
                        <label>Price</label><br>
                       <input  readonly type="text" class="form-control" id="price" name="price" oninput="ifchange_price()"><br>
                        <button type="submit" class="btn btn-success btn-m " name="Submit_btn" ><!--<i class="fa fa-print"></i>--> Submit</button>
                        </form>
                       

                    </div>

                    <!--table records of Entry-->
                    <br>
              <div class="container">
            <section class="table_data">
  <table class="table table-bordered" id="table_parking_entries">
    <thead>
      <tr>
      <th>ID</th>
        <th>Vehicle</th>
        <th>Price</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($read_all_parking_entry)){
        
        ?>
      <tr>
        <td><?php echo $row['parking_entry_id'];?></td>
        <td><?php echo $row['vehicle'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['date'];?></td>
      </tr>
  
      <?php
        }
      ?>
    </tbody>

  </table><br>         <div class=""  style="width:max-100%;float:right;padding:12px;">
<a href="javascript:void(0);" id="printPage" onclick="Printpage()" class="btn btn-primary "style="width:150px;">Print</a>
      </div>                 <br><br>
 
</section>

</div>
            
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
    <script>
        function ChooseType(vehicle){
        var car = document.getElementById("cars").value;
        if(car =="Van"){
           var val = document.getElementById("price").value ="30.00";
           if(val !=="30.00"){

               window.location.href="index.php";
               alert("error price!");
           }
        }
        
        
        if(car =="Car"){
         document.getElementById("price").value ="25.00";


        }
        if(car =="Bike"){
            document.getElementById("price").value ="10.00";

        }
        if(car =="Motor"){
       document.getElementById("price").value ="15.00";

        }
    
    }
  document.getElementById("price").setAttribute("readonly", true)

      function ifchange_price(){

        alert("error price!!")
        window.location.href="parking.panel";

      }


        </script>

        <script>
          //print report parking enties
function Printpage(){
 
 var content = '<table class="col-md-12  table table-bordered" border="1"style="border:1px solid #eee;margin:0 auto; width:80%; text-align:center;">'+document.getElementsByTagName('table')[0].innerHTML+'</table>'
   
  var mywindow = window.open('', 'Print', 'height=600,width=800');
        
 
  mywindow.document.write('<h3 style="text-align:center; font-family:calibri;">Parking Entries</h3><br>');
  mywindow.document.write(content);


   mywindow.document.close();
   mywindow.focus()
   mywindow.print();
   mywindow.close();
   return true;
        }
     </script>
</script>
</body>

</html>