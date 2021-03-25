<?php

    include("connect.php");
    include("funcs.php");

    if(isset($_Post['submit']))
    {
        //something was posted
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        if($password != $repassword)
        {
            echo "Passwords do not match";
            header("Location signUp.php");
        }else
        {
            //verify email
            email_verify($email);
            
            //generate random user ID number and check to see if
            // it doesn't already exist
            $new = FALSE;
            while($new == False)
            { 
              $user_id = random_num(20);
              $result = mysql_query('SELECT * FROM Users WHERE User_ID == '$user_id'');
              if($result == 0){
                  $new == TRUE;
              }
            } 
            //Salt password
            $salt = salt($password);
            //hash password with salt
            //224 is max length of password
            $pass = hash("$sha256", $salt.$password);
            //store into database
            //$query = "insert into users (User_id, fName, lName, email, password, salt) values ('$user_id', '$firstName', '$lastName', '$email', '$pass','$salt')";
            //mysqli_query($query);

            header("Location: login.php");
        }
    }
?>

<script type="text/javascript">
    var check = function() {
      if (document.getElementById('inputPassword').value ==
        document.getElementById('repassword').value) {
        document.getElementById('message').innerHTML = '';
        return true;
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password and re-password are not matching';
        return false;
      }
    }
</script>


<html lang="en">
    <head>
        <title>A-LK Sign Up</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="keyword" content="alk, anti-lockout, kit, anti, lockout, car, vehicle, lock, key, facial, recognition">
        <meta name="description" content="The home page of the Anti-Lockout Kit web app">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    </head>
  
    <body class="text-center" style="background-color: white;">
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
          </nav>
         <div class="box" >
            <form class="form-signin">
                <img class="mb-4 logo" src="../Images/ALK_Logo.png" alt="" width="200" height="200">
                <h1 style="margin-bottom:30">Anti-Lockout Kit</h1>
                <label for="firstName" class="sr-only">
                    First Name
                </label>
                <input type="text" id="firstName" name="firstName" class="form-control" style="margin-bottom:20" placeholder="First Name" required="">
                <label for="lastName" class="sr-only">
                    Last Name
                </label>
                <input type="text" id="lastName" name="lastName" class="form-control" style="margin-bottom:20" placeholder="Last Name" required="">
                <label for="inputEmail" class="sr-only">
                    Email address
                </label>
                <input type="email" id="inputEmail" name="email" class="form-control" style="margin-bottom:20" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">
                    Password
                </label>
                <input name="password" id="inputPassword" type="password" onkeyup='check();' class="form-control" style="margin-bottom:20" placeholder="Password" required="">
                <div style="margin-top:10px;">
                  <text>
                    Password can only contain 0-9, a-z, A-Z.
                  </text>
                </div>
                <label for="rePassword" class="sr-only">
                    Re Password
                </label>
                <input type="password" name="repassword" id="repassword"  onkeyup='check();' class="form-control" style="margin-bottom:20" placeholder="Re-Password" required="">
                <div  style="margin-bottom:20">
                    <span id='message'></span>
                </div>
                
                <button formaction="login.php" class="btn btn-lg btn-primary btn-block" type="submit" onclick="return check();">
                    Sign Up
                </button>
                <div style="margin-top:10px;">
                    <text>
                        Already have an account?
                    </text>
                    <a href="login.php"  type="submit">
                        Login
                    </a>
                </div>
            </form>
            <div id="shimai-world" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 2147483647; pointer-events: none; background: transparent;"></div>
        </div>
    </body>

  </html>