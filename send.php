<?php

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
*/

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dimayaroshevskiy1925@gmail.com';                     // SMTP username
    $mail->Password   = '!dimayaroshevskiy25';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('dimayaroshevskiy1925@gmail.com');
    $mail->addAddress('john1925brown@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Новая заявка с сайта';
    $mail->Body    = "Имя пользователя: ${userName}, его телефон: ${userPhone}. Его почта: ${userEmail}";

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }


/*
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
//require 'PHPMailerAutoload.php';
//require 'class.phpmailer.php';
require 'phpmailer/SMTP.php';

// PHPMailer Object``
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions`

//From email address and name
$mail->From = "dimayaroshevskiy1925@gmail.com";
$mail->FromName = "Dima";

//To address and name
$mail->addAddress("dimayaroshevskiy1925@gmail.com", "Dima");
$mail->addAddress("dimayaroshevskiy1925@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("dimayaroshevskiy1925@gmail.com", "Reply");

//CC and BCC
$mail->addCC("john1925brown@gmail.com");
$mail->addBCC("john1925brown@gmail.com");

//Send HTML or Plain Text email
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Новая заявка с сайта';
$mail->Body    =  "Имя пользователя: ${userName}, его телефон: ${userPhone}, почта :${userEmail}";
$mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Отправлено";
// } catch (Exception $e) {
//     echo "Ошибка: " . $mail->ErrorInfo;
// }

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
*/

