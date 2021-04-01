<?php

    include("connect.php");
    include("funcs.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];

        $salt = salt($password);
        $pass = hash("$sha256", $salt.$password);

        $sql = "SELECT * FROM Users WHERE email = ?";
        $result = $pdo->prepare($sql);
        $result->bindParam(1, $email);
        $result->execute();

        $user = $result->fetch();

        if(password_verify($pass, $user["pass"])
          {
            echo "Logged In"
          }else {
            echo "incorrect username or password";
          }
       )
    }
?>

<html lang="en">
    <head>
        <title>A-LK Login</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="keyword" content="alk, anti-lockout, kit, anti, lockout, car, vehicle, lock, key, facial, recognition">
        <meta name="description" content="The home page of the Anti-Lockout Kit web app">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    </head>
  
    <body class="text-center" style="background-color: white;">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <div class="fixed-top">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4 ">
              <ul class="nav justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="../../Website/Pages/aboutUs.html">About Us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Website/Pages/productInfo.html">Product Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Website/Pages/features.html">Features</a>
                </li>
                <li>
                  <a class="nav-link" href="../../ALK_app/Pages/signUp.php">Sign Up<a/>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../ALK_app/Pages/login.php">Login</a>
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



        <div class="box" >
            <form class="form-signin">
                <img class="mb-4 logo" src="../Images/ALK_Logo.png" alt="" >
                
                <h1 style="margin-bottom:40px; font-family:sans-serif;">Anti-Lockout Kit</h1>
                <h1 class="h3 mb-3 font-weight-normal">
                    Please Login
                </h1>
                <label for="inputEmail" class="sr-only">
                    Email address
                </label>
                <input type="email" id="inputEmail" class="form-control" style="margin-bottom:20" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">
                    Password
                </label>
                <input type="password" id="inputPassword" class="form-control" style="margin-bottom:20" placeholder="Password" required="">
                <button formaction="home.php" class="btn btn-lg btn-primary btn-block" type="submit">
                    Login
                </button>
                <a href="forgotPassword.php"  type="submit" style="margin-top: 10px;">
                    Forgot Password
                </a>
                <a href="signUp.php" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:30">
                    Sign up
                </a>
            </form>
            <div id="shimai-world" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 2147483647; pointer-events: none; background: transparent;"></div>
        </div>
    </body>

  </html>