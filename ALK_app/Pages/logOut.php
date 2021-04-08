<?php

session_start();

if(isset($_SESSION['loggedin']) && isset($_SESSION['user']))
{
    unset($_SESSION['loggedin']);
    unset($_SESSION['user']);
}

header("Location: login.php");
die;
?>