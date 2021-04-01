<?php
session_start();

  include("connect.php");
  include("funcs.php");

  // $user_data = check_login($db);

?>

<html lang="en">
  <head>
    <title>A-LK Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="description" content="The home page of the Anti-Lockout Kit web app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  </head>

  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <div class="fixed-top">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 ">
          <ul class="nav justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accountInfo.php">Account Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registerVehicle.php">Register Vehicle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logOut.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <a href="home.php"> 
          <img class="mb-2 mr-2 nav-logo" src="../Images/ALK_Logo.png" href="../../../index.html">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>

    <div>
        <div class="text-center mb-4">
            <h1 class="mb-3 font-weight-normal" style="margin-top:100">
                Hello, <?php echo $user_data['firstName']; ?>
            </h1>
            <img src="../Images/lock.jpg" class="img-fluid">
        </div>
    </div>
  </body>
</html>