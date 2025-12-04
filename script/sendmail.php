<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

// Create the Transport
      $mail = new PHPMailer(true);
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                // Enable SMTP authentication
      $mail->Username   = 'ebenezeramanor508@gmail.com';  // SMTP username
      $mail->Password   = '100Ebenezer200';   // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS also accepted
      $mail->Port       = 587;                 // TCP port to connect to
      //Recipients
      $mail->setFrom('ebenezeramanor508@gmail.com', 'Standard Foundation School');
      $mail->addAddress($email, 'Customer');
      //Content
      $mail->isHTML(true);
      $mail->Subject = 'Message Confirmation';
      $mail->Body    = $emailBody;
      
      $mail->send();
      echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
