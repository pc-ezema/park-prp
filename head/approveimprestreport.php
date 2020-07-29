<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	
	//Load composer's autoloader
    require 'vendor/autoload.php';
		
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	$mail = new PHPMailer(true);  
	$mail->SMTPDebug = 3; 
	
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
        $mail->addAddress('babatundeolaleye@agropark.ng');              
        $mail->addReplyTo('farmsupport@nardustcl.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Head (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'A report has been evaluated, Visit your Dashboard for more details.';
 
        $mail->send();
		
	$approve_hrreport = $con->prepare("UPDATE file SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve_hrreport->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:facilityreport.php');

}

?>