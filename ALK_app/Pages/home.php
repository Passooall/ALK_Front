<?php
session_start();

  include("connect.php");
  include("functions.php");

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
    
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="home.php"> 
          <img class="mb-2 mr-2 nav-logo" src="../Images/ALK_Logo.png" href="../../../index.html">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav mr-auto">
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
      </nav>

    <div>
        <div class="text-center mb-4">
            <h1 class="mb-3 font-weight-normal" style="margin-top:100">
                Hello, <?php echo $user_data['firstName']; ?>
            </h1>
        </div>
    </div>
</body>
</html>