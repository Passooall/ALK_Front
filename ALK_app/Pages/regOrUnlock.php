<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}

  include("connect.php");
  include("funcs.php");
  
  $email = $_SESSION['email'];
  $result = mysqli_query($db, "SELECT U_ID FROM Users WHERE Email='".$email."'");

  $row = mysqli_fetch_assoc($result);
  $uid = $row["U_ID"];
  $slot = $_SESSION['slot'];

  $result = mysqli_query($db, "SELECT Car_ID FROM Cars WHERE Cars.Slot = '".$slot."' AND Cars.User_ID='".$uid."'");

  if(mysqli_num_rows($result) == 0)
  {
          header('Location: registerVehicle.php');
  } else {
          $row = mysqli_fetch_assoc($result);
          $carID = $row['Car_ID'];

          $result = mysqli_query($db, "SELECT Device_ID FROM Device WHERE Device.Car_ID='".$carID."' AND Device.User_ID='".$uid."'");
          $row = mysqli_fetch_assoc($result);
          $device = $row['Device_ID'];

          $_SESSION['carID'] = $carID;
          $_SESSION['device'] = $device;
          header('Location: unlock.php');
  }

?>
