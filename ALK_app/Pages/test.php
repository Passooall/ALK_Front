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

    $string1 = "abcd1234ABCD";
    $string2 = "abcd!123";

    print("\n");
    print($string1);
    if(alphanum($string1))
    {
            print("Clear");
    }else{
            print("NOT Clear");
    }
    print("\n");
    print($string2);
    if(alphanum($string2))
    {
            print("Clear");
    }else{
            print("NOT Clear");
    }

    print("\n");
    print(strlen($string1));

?>