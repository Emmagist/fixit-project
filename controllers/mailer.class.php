<?php
include "init.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
 
class Mailer
{
   
        public function sendMail($name, $email, $subject, $message,$sender_email, $password,$filepath){
        try {
          $mail = new PHPMailer(); 
          $namefrom = "Fixit Managemment";
          $mail->CharSet = 'UTF-8';
          $mail->isSMTP();   
          $mail->SMTPAuth   = true;   
          $mail->Host       = "fixit.com";
          $mail->Port       = '465';
          $mail->Username   = $sender_email;
          $mail->Password   = $password;
          $mail->addAttachment($filepath);         // Add attachments
          $mail->SMTPSecure = "ssl";     
          $mail->setFrom($sender_email,$namefrom);   
         // $mail->addCC($from,$namefrom);      
          $mail->Subject  = $subject;
         // $mail->AltBody  = $altmess;
          $mail->isHTML(true);
          //$mail->Timeout = 2000;
          $mail->Body = $message;
          $mail->addAddress($email, $name);
            
         } catch (Exception $e) {
            $mail->ErrorInfo;
         } //var_dump($mail);
          return $mail->send();
 }
     
};

$mailer = new Mailer;

