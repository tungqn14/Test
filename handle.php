<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
if(empty($_POST['email'])) {
    header('Location: index.php?msg=Email can not empty');
    exit();
}
$name = empty($_POST['fullName']) == true ? "Nothing" : $_POST['fullName'];
$email = $_POST['email'];
$subject = empty($_POST['subject']) == true ? "Nothing" : $_POST['subject'];
$message = empty($_POST['message']) == true ? "Nothing" : $_POST['message'];

$mail = new PHPMailer(true);

try { 
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'toro.freetime@gmail.com';                     //SMTP username
    $mail->Password   = 'idhrhomkgspolwjx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('vipproVN@example.net', 'User Vip Pro');     //Add a recipient
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    header('Location: contact.php');
} catch (\Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}