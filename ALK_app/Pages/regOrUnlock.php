<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}

  include("connect.php");
  include("funcs.php");
  
  $email = $_SESSION['email'];
  $query = "SELECT Email FROM Users INNER JOIN Cars ON Cars.User_ID=Users.U_ID WHERE Users.Email='".$email."'";
  $result = mysqli_query($db, $query);
  
  //add query to check if car is already registered
  if(mysqli_num_rows($result)==0)
  {
          header('Location: registerVehicle.php');
  } else {
          header('Location: unlock.php');
  }



?>
