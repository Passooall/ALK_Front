<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}
  include("connect.php");
  include("funcs.php");

  // $user_data = check_login($db);

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
            <h1 class="mb-3 font-weight-normal" style="margin-top:100">
                Tap to unlock
            </h1>
            <img src="../Images/lock.jpg" class="img-fluid">
            <a href="unlockWithPassword.php" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:30">
                    Unlock with password
                </a>
        </div>
    </div>
</body>
</html>