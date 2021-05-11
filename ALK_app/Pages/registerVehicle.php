<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}
  include("connect.php");
  include("funcs.php");

  $email = $_SESSION['email'];
  $slot = $_SESSION['slot'];
  $query = "SELECT U_ID FROM Users WHERE Email='".$email."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  $uid = $row["U_ID"];

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
        $carMake = $_POST['carMake'];
        $carModel = $_POST['carModel'];
        $carYear = $_POST['carYear'];
        $licence = $_POST['licence'];
        $device = $_POST['device'];

        $query = mysqli_query($db, "SELECT Device_ID FROM Device WHERE Device_ID='".$device."'");
        $query1 = mysqli_query($db, "SELECT LicencePlate FROM Cars WHERE LicencePlate='".$licence."'");
        if(mysqli_num_rows($query)!=0)
        {
                echo '<span style="color:red;text-align:center;">Device already registered</span>';
        } elseif(mysqli_num_rows($query1)) {
                echo '<span style="color:red;text-align:center;">Car is already registered</span>';
        }else {
                $query = "INSERT INTO Cars (User_ID, Slot, CarMake, CarModel, CarYear, LicencePlate) VALUES ('$uid', '$slot', '$carMake', '$carModel', '$carYear', '$licence')";
                if(mysqli_query($db, $query))
                {
                        $result = mysqli_query($db, "SELECT Car_ID FROM Cars WHERE User_ID='".$uid."' AND Slot='".$slot."'");
                        $row = mysqli_fetch_assoc($result);
                        $carID = $row["Car_ID"];
                        $model = "Raspberry Pi";
                        $active = 0;
                        $query = "INSERT INTO Device (Device_ID, User_ID, Car_ID, Model, Active) VALUES ('$device', '$uid', '$carID', '$model', '$active')";
                        if(mysqli_query($db,$query))
                        {
                                header('Location: unlock.php');
                        } else {
                                echo '<span style="color:red;text-align:center;">ERROR: Could not register1</span>';
                        }
                } else {
                        echo '<span style="color:red;text-align:center;">ERROR: Could not register2</span>';
                }
        }
  }

?>

<html lang="en">
<head>
  <title>A-LK Register Vehicle</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="description" content="The home page of the Anti-Lockout Kit web app">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>

<body>
  <?php include 'navBarLogedIn.php';?>

  <div class="box">
      <div class="text-center mb-4">
          <h1 class="mb-3 font-weight-normal" style="margin-top:55">
              Register Vehicle
          </h1>
      </div>
      <form method="post" class="form-signin">
          <label for="carMake" class="sr-only">
              Car Make
          </label>
          <input type="text" name="carMake" class="form-control" style="margin-bottom:20" placeholder="Car Make" required="">
          <label for="carModel" class="sr-only">
              Car Model
          </label>
          <input type="text" name="carModel" class="form-control" style="margin-bottom:20" placeholder="Car Model" required="">
          <label for="carYear" class="sr-only">
              Car Year
          </label>
          <input type="text" name="carYear" class="form-control" style="margin-bottom:20" placeholder="Car Year" required="" autofocus="">
          <label for="licence" class="sr-only">
              Licence Plate
          </label>
          <input name="licence" type="text" class="form-control" style="margin-bottom:20" placeholder="Licence Plate Number" required="">
          <label for="device" class="sr-only">
              Device ID
          </label>
          <input name="device" type="text" class="form-control" style="margin-bottom:20" placeholder="Device ID Number" required="">      
          <button formaction="" class="btn btn-lg btn-primary btn-block" type="submit">
            Register Vehicle
          </button>
    </form>
  </div>
</body>
</html>