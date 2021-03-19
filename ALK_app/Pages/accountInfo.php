<?php
session_start();

  include("connect.php");
  include("funcs.php");

  // $user_data = check_login($db);

?>

<html lang="en">
<head>
  <title>A-LK Account Info</title>
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
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account Info<span class="sr-only">(current)</span></a>
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
            <h1 class="mb-3 font-weight-normal" style="margin-top:50">
                Account Info
            </h1>
        </div>

        <div class="container">
          <div class="main-body">
          
                <div class="row gutters-sm">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                          <img src="../Images/default_profile_picture.jpg" alt="Admin" class="rounded-circle" width="150">
                          <div class="mt-3">
                            <h4>Sahar Shoar</h4>
                            <button class="btn btn-primary">Edit Profile</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            Sahar Shoar
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            test@alk.com
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            (555) 555-5555
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Vehicle Info</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            Bugatti Chiron
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            Bay Area, San Francisco, CA
                          </div>
                        </div>
                      </div>
                    </div>

                    </div>
                  </div>
                </div>
          </div>
        </div>
    </div>
</body>
</html>