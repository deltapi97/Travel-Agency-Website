<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$name = $subject = $message = $email = "";

function test_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

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
        $mail->AddAddress("testerveek@gmail.com",$name);
        $mail->SetFrom("testerveek@gmail.com",$name);
        $mail->Subject = $subject;
        $mail->MsgHTML("Hi, I am " . $name . "<br>From " . $email . "<br>Message:<br>" .$message);

        if(!$mail->Send()){
            echo "<script>alert('Error while sending message');window.location.href = 'contact.php';</script>";
        } else {
            echo "<script>alert('Message sent successfully');window.location.href = 'contact.php';</script>";
        }

    }
}

?>