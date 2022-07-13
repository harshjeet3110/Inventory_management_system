<?php
$insert=false;
if(isset($_POST['Type'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());

    }
    // echo "Success connecting to the db";
    $Type=$_POST['Type'];
    $Make=$_POST['Make'];
    $ManufacturingYear=$_POST['ManufacturingYear'];
    $SerialNumber=$_POST['SerialNumber'];
    $Capacity=$_POST['Capacity'];
    $EnergizationDate=$_POST['EnergizationDate'];
    $Warranty=$_POST['Warranty'];

    $sql="INSERT INTO `transformer`.`transformer` (`Type`, `Make`, `ManufacturingYear`, `SerialNumber`, `Capacity`, `EnergizationDate`, `Warranty`) VALUES ('$Type', '$Make', current_timestamp(), '$SerialNumber', '$Capacity', current_timestamp(), current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Management System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="">Menu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Meaters.html">Meters</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Transformers.html">Transformer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HTBreakers.html">HT Breaker</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="LTBreakers.html">LT Breaker</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Towers.html">Towers/Poles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dropDown.php">Logout</a>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </section>
  <div>
    <div class="table">

      <table cellspacing="10px">
        <tr>
          <div>

            <td><img class="small-logo" src="images/bsptcl-logo.png" alt="heading-logo"></td>
          </div>
          <div>

            <td>
              <h1 class="big-heading">INVENTORY MANAGEMENT SYSTEM</h1>
            </td>
          </div>

        </tr>
      </table>
    </div>
  </div>

  <div class="container-input">
    <?php
    if($insert==true){

      echo "<p class='submitMsg'>Thanks for submitting</p>"; 
  
    }
  ?>
    <h3 class="">Meters</h3>
    <form action="meaters.php" method="post">
      <div class="block">
        <label for="">Type : </label>
        <input type="text" name="Type" id="type" placeholder="Enter Type">
      </div>
      <div class="block">


        <label for="">Make : </label>
        <input type="text" name="Make" id="make" placeholder="Enter Make">
      </div>
      <div class="block">
        <label for="">Manufacturing Year : </label>
        <input type="date" name="ManufacturingYear" id="Test_DatetimeLocal">

      </div>
      <div class="block">

        <label for="">Serial Number : </label>
        <input type="text" name="SerialNumber" id="serial number" placeholder="Enter Serial number">
      </div>
      <div class="block">

        <label for="">Capacity : </label>
        <input type="text" name="Capacity" id="capacity" placeholder="Enter Capacity">
      </div>
      <div class="block">

        <label for="">Energization date : </label>
        <input type="date" name="EnergizationDate" id="energization Date" placeholder="Enter Energization Date">
      </div>
      <div class="block">

        <label for="">Warranty : </label>
        <input type="date" name="Warranty" id="warranty" placeholder="Enter Warranty">
      </div class="block">
      <button class="btn">Save</button>
      <button class="btn" type="reset"value="Reset">Reset</button>
    </form>
  </div>

</body>

</html>
