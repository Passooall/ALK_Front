<?php

include("connect.php");
include("funcs.php");
if(mysqli_connect_errno())
{
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
}

    $user_id = random_num(20);
    $result = mysqli_query($db, "SELECT * FROM Users WHERE User_ID = $user_id");
    $rows = mysqli_num_rows($result);
    print($rows);
?>