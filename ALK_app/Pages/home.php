<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}

  include("connect.php");
  include("funcs.php");

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
    <?php include 'navBarLogedIn.php';?>

    <div class="container py-3">
        <div class="text-center mb-4">
            <h1 class="mb-3 font-weight-normal" style="margin-top:100">
                Select a car to unlock
            </h1>
        </div>
        <div class="row row-cols-1 row-cols-xs-3 mb-3 text-center">
          <a href = "regOrUnlock.php" style="color:black">  
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Car 1</h4>
                </div>
                <div class="card-body">
                  <img src="../Images/carIcon.png" alt="Car Icon" width="200px" height="200px">
                </div>
              </div>
            </div>
          </a>
          <a href="regOrUnlock.php" style="color:black">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Car 2</h4>
                </div>
                <div class="card-body">
                  <img src="../Images/carIcon.png" alt="Car Icon" width="200px" height="200px">
                </div>
              </div>
            </div>
          </a>
          <a href="regOrUnlock.php" style="color:black">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Car 3</h4>
                </div>
                <div class="card-body">
                  <img src="../Images/carIcon.png" alt="Car Icon" width="200px" height="200px">
                </div>
              </div>
            </div>
          </a>
          <a href="regOrUnlock.php" style="color:black">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Car 4</h4>
                </div>
                <div class="card-body">
                  <img src="../Images/carIcon.png" alt="Car Icon" width="200px" height="200px">
                </div>
              </div>
            </div>
          </a>
        </div>
    </div>
  </body>
</html> 