<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


try {

if (isset($_POST['cfn'])) {
    $names = $_POST['names'];
    $email = $_POST['email'];
    // Create an instance
    $mail = new PHPMailer(true);
        // Server settings 
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'akimanaj41@gmail.com';
        $mail->Password = 'epjg qkcm xqvh rosa';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;


        //Recipients
        $mail->setFrom('akimanaj41@gmail.com', 'InOnO Tech Group ');


        $mail->addAddress($email);     //Add a recipient


        //Content
        $mail->isHTML(true);
        $mail->Subject = "Thanks for Subscribing";
        $mail->Body = "Hello ";

        $mail->send();
        echo "Email Subscription Succed.";
        ob_end_flush();
        exit();
    }
    
}
    catch (Exception $e) {
        echo"Subscription Failed, We are trying to handle the error.";
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>