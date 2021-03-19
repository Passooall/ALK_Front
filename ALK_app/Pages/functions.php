<?php

function check_login($db)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        $result = mysqli_query($db, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for($i=0; $i < $len; $i++)
    {
        $text .= rand(0,9);
    }

    return $text;
}


function random_mail_number($email)
{

    $number = rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);


    $to = $email;
    $subject = "Anti lock out kit verification number!";
    $txt = "Here is your verification number $number";
    $headers = "From: test@gmail.com";

    if(mail($to,$subject,$txt,$headers)){
        return $number;
    }

}

function email_verify($email)
{
    require './PHPMailer/class.phpmailer.php';
    $mail = new PHPMailer;

    //$mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port= 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='anti.lockout.kit@gmail.com';
    $mail->Password='ALK4321!';

    $mail->setFrom('anti.lockout.kit@gmail.com','Anti-Lockout Kit');
    $mail->addAddress('$email');
    $mail->addReplyTo('anti.lockout.kit@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='Email Verification for Anti-Lockout Kit';
    $mail->Body='<h1 align=center>Verify Email</h1><p align=center>Click the link below to verrify your E-mail</p>';
    if(!$mail->send())
    {
        echo "Verification E-mail could not be sent";
    }else{
        echo "Verification E-mail sent";
    }
}
?>
