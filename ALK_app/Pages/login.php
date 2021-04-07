<?php

    include("connect.php");
    include("funcs.php");
    if(mysqli_connect_errno())
    {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      // something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      $salt = salt($password);
      $pass = hash("$sha256", $salt.$password);

      $sql = mysqli_query("SELECT FROM Users (email, password) WHERE email = $email");

      if(mysqli_num_rows($sql) > 0)
      {
               if(strcmp($pass,$sql) == 0)
               {
                       header('Location: home.php');
               }
      }else
      {
               echo "incorrect username or password";
      }
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

        <?php include 'navBarLogedOut.php';?>



        <div class="box" >
            <form method="post" class="form-signin">
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
                <button formaction="" class="btn btn-lg btn-primary btn-block" type="submit">
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