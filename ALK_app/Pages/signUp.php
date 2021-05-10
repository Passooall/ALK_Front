<?php

    include("connect.php");
    include("funcs.php");
    if(mysqli_connect_errno())
    {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //something was posted
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        $query = mysqli_query($db, "SELECT Email FROM Users WHERE Email='".$email."'");
        if(mysqli_num_rows($query) != 0)
        {
            echo '<span style="color:red;text-align:center;">E-mail is already registered</span>';     
        } elseif(strlen($password)<8 || !alphanum($password))
        {
                echo '<span style="color:red;text-align:center;">Password must contain at least 8 characters of only A-Z, a-z, or 0-9</span>';
        } else {  
          //verify email
          email_verify($email);
            
          //generate random user ID number and check to see if
          // it doesn't already exist
          //$new = FALSE;
          //while($new == False)
          //{  
            $user_id = random_num(20);
            /*$result = mysqli_query($db, "SELECT U_ID FROM Users WHERE U_ID='".$user_id."'");
            if(mysqli_num_rows($result) == 0){
               $new == TRUE;
            }
          }*/

          //Salt password
          $salt = salt($password);
          //hash password with salt
          //224 is max length of password
          $pass = hash('sha256', $password.$salt);
          $phone = "n/a";
          $address = "n/a";
          $state = "n/a";
          //store into database
          $query = "INSERT INTO Users (U_ID, Fname, Lname, Email, Phone, Address, State, Pass, Zest) VALUES ($user_id, $firstName, $lastName, $phone, $address, $state, $email, $pass, $salt)";
          if(mysqli_query($db, $query))
          {
              header("Location: verifyEmail.php");
          } else {
              echo '<span style="color:red;text-align:center;">ERROR: Could not execute sql</span>';
          }
        }
    }
?>

<script type="text/javascript">
    var check = function() {
      if (document.getElementById('inputPassword').value ==
        document.getElementById('repassword').value) {
        document.getElementById('message1').innerHTML = '';
        return true;
      } else {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Password and re-password are not matching';
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

        <?php include 'navBarLogedOut.php';?>
  
        <div class="box" >
            <form method="post" class="form-signin">
                <img class="mb-4 logo" src="../Images/ALK_Logo.png" alt="" width="200" height="200">
                <h1 style="margin-bottom:30">Anti-Lockout Kit</h1>
                <label for="firstName" class="sr-only">
                    First Name
                </label>
                <input type="text" name="firstName" class="form-control" style="margin-bottom:20" placeholder="First Name" required="">
                <label for="lastName" class="sr-only">
                    Last Name
                </label>
                <input type="text" name="lastName" class="form-control" style="margin-bottom:20" placeholder="Last Name" required="">
                <label for="inputEmail" class="sr-only">
                    Email address
                </label>
                <input type="email" name="email" class="form-control" style="margin-bottom:20" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">
                    Password
                </label>
                <input name="password" name="password" type="password" onkeyup='check();' class="form-control" style="margin-bottom:20" placeholder="Password" required="">
                <label for="rePassword" class="sr-only">
                    Re Password
                </label>
                <input type="password" name="repassword" onkeyup='check();' class="form-control" style="margin-bottom:20" placeholder="Re-Password" required="">
                <div  style="margin-bottom:20">
                    <span id='message1'></span>
                </div>
                
                <button formaction="" class="btn btn-lg btn-primary btn-block" type="submit" onclick="return check();">
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