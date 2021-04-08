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
  <title>A-LK Unlock</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="description" content="The page to unlock vehicle with password instead of facial recognition">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>

<body>
    <?php include 'navBarLogedIn.php';?>
    <div class = "box">
      <label for="inputPassword" class="sr-only">
        Password
      </label>
      <input name="password" id="inputPassword" type="password" onkeyup='check();' class="form-control" style="margin-bottom:100" placeholder="Password" required="">
    </div>
</body>