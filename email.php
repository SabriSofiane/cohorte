<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';
require_once('./fonction_formulaire.inc.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

	$mail->Host = 'smtp.gmail.com';   // Set the SMTP server to send through
	$mail->isSMTP();                  // Send using SMTP
	$mail->SMTPAuth   = true; 	  // Enable SMTP authentication
	$mail->Port = 587; // Par défaut 587 ou 465

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;       // Enable verbose debug output

    $mail->Username   = SMTPUSER;   // SMTP username
    $mail->Password   = SMTPPWD;    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted


    //Recipients
    $mail->setFrom('apprenti.touchard-washinton@ac-nantes.fr', 'atouchard-washington1');
    $mail->addAddress('ssabri@pommier4.depinfo.touchard.edu', 'ssabri');


    // Attachments
    //$mail->addAttachment('README.md');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test phpMailer';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>