<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
 
if(isset($_POST['send'])){	 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	$filename = $_FILES['attachment']['name'];
    $location = 'attachment/' . $filename;
    move_uploaded_file($_FILES['attachment']['tmp_name'], $location);
	
    //Load composer's autoloader
    require 'vendor/autoload.php';
	
    $mail = new PHPMailer(true);  
	$mail->SMTPDebug = 0;                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'mail.nardustcl.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'farmsupport@nardustcl.com';     
        $mail->Password = '@_farmsupport456'; 
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
        $mail->setFrom('farmsupport@nardustcl.com');
 
        //Recipients
        $mail->addAddress($email);              
        $mail->addReplyTo('farmsupport@nardustcl.com');
		
		//Attachment
        if(!empty($filename)){
            $mail->addAttachment($location, $filename); 
        }
		
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
 
	header("location: mail.php");
 
}