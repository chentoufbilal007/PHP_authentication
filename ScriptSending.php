<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




//Load Composer's autoloader
require 'vendor/autoload.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'your email';                     //SMTP username
    $mail->Password   = ' your password';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $rev=$_POST['emailz'];
    $_SESSION['xml']=$rev;
    //Recipients
    $mail->setFrom(' astralab@satrhous.com', 'Verfication Link');
    $mail->addAddress($rev, 'Dear User');     //Add a recipient
   
    //Attachments
    
//$ran=rand(10000,99999);

    //$localIP = getHostByName(getHostName());
   // $linq="http://localhost/mail/ResetPassword.php?email=$rev";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'The Cable was burn';
    $mail->Body    = 'This is your verfication link  :  http://localhost/mail/ResetPassword.php?email='.$rev;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
   // echo '<script>alert("the message has sent check your inbox<br> if you do not recive the code please try to send agian")</script>';
   header('location:blankpage.php');

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 
  ?>



