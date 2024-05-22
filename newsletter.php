<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$email = "";

function test_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = test_input($_POST["email"]);

    if(isset($_POST["submit"])){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "testerveek@gmail.com";
        $mail->Password = "hbqswcfadqwneupf";

        $mail->IsHTML(true);
        $mail->AddAddress($email,"New User");
        $mail->SetFrom($email,"Travel Newsletter");
        $mail->Subject = "Travel Newsletter!";
        $mail->MsgHTML("You have successfully entered the newsletter! Good job my friend!");

        if(!$mail->Send()){
            echo "<script>alert('Error while sending message');window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Message sent successfully');window.location.href = 'index.php';</script>";
        }

    }
}

?>