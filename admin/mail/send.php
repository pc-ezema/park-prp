<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
 
if(isset($_POST['send'])){
 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
 
    //Load composer's autoloader
    require 'vendor/autoload.php';
	
    $mail = new PHPMailer(true);  
	$mail->SMTPDebug = 3;                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'pagropark@gmail.com';     
        $mail->Password = '1234567890qwer@';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   
 
        //Send Email
        $mail->setFrom('pagropark@gmail.com');
 
        //Recipients
        $mail->addAddress($email);              
        $mail->addReplyTo('pagropark@gmail.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;
 
        $mail->send();
 
       $_SESSION['result'] = 'Message has been sent';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
 
	header("location: ../index.php");
 
}