<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}

  include("connect.php");
  include("funcs.php");

  //add query to check if car is already registered
  /* if(car is not registered)
        go to registery page
    else
        go to unlock page*/

    header('Location: unlock.php');

?>
