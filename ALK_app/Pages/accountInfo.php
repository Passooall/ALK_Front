<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
}else {
  header('Location: loginError.php');
}

  include("connect.php");
  include("funcs.php");

  $email=$_SESSION['email'];
  $query = "SELECT Fname, Lname, Email, Phone, Address, State FROM Users WHERE Email='".$email."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  $Fname = $row["Fname"];
  $Lname = $row["Lname"];
  $Email = $row["Email"];
  $Phone = $row["Phone"];
  $Address = $row["Address"];
  $State = $row["State"];

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

    <?php include 'navBarLogedIn.php';?>
    
    <div class="box">
        <div class="text-center mb-4">
            <h1 class="mb-3 font-weight-normal" style="margin-top:55">
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
                          <img src="../Images/default_profile_pic.jpg" alt="Admin" class="rounded-circle" width="150">
                          <div class="mt-3">
                            <h4> <?php echo $Fname." ".$Lname?> </h4>
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
                            <?php echo $Fname." ".$Lname ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo $Email ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo $Phone ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo $Address ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">State</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo $State ?>
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