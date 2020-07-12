<?php
include "init.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
 
class Mailer
{

        public function verificationMail($firstname,$lastname,$email,$code){
        try {
         global  $mail;
          $namefrom = "Fixit Managemment";
          $mail->CharSet = 'UTF-8';
          $mail->isSMTP();   
          $mail->SMTPAuth   = true;   
          $mail->Host       = "fixit.com";
          $mail->Port       = '465';
          $mail->Username   = 'fixit@gmail.com';
          $mail->Password   = 'fixitpassword';
          //$mail->addAttachment($filepath);         // Add attachments
          $mail->SMTPSecure = "ssl";     
          $mail->setFrom('fixit@gmail.com','Fixit Admin');   
         // $mail->addCC($from,$namefrom);      
          $mail->Subject  = 'title here';
         // $mail->AltBody  = $altmess;
          $mail->isHTML(true);
          //$mail->Timeout = 2000;
          $mail->Body = 'message here';
          $mail->addAddress($email, $firstname .''.$lastname);
            
         } catch (Exception $e) {
            $mail->ErrorInfo;
         } //var_dump($mail);
          return $mail->send();
 }
     
}

$mailer = new Mailer;

