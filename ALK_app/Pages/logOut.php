<?php

session_start();

if(isset($_SESSION['loggedin']) && isset($_SESSION['email']))
{
    unset($_SESSION['loggedin']);
    unset($_SESSION['email']);
}

header("Location: login.php");
die;
?>