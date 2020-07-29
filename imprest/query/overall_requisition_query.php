<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

	include('../connect.php');

if(isset($_POST['save'])) {
	if($_FILES['upload']['name'] != "") {
	$file = $_FILES['upload'];
	$Date = $_POST['date'];
	$Department = $_POST['department'];
	$file_name = $file['name'];
	$file_temp = $file['tmp_name'];
	$name = explode('.', $file_name);
	$path = "files/".$file_name;
	
	//Load composer's autoloader
    require 'vendor/autoload.php';
	$mail = new PHPMailer(true);  
	$mail->SMTPDebug = 0;
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
	$mail->addAddress('michaelanibi@agropark.ng');              
	$mail->addReplyTo('farmsupport@nardustcl.com');

	//Content
	$mail->isHTML(true);                                  
	$mail->Subject = 'Imprest Manager (PARK ADMINISTRATIVE SERVICES)';
	$mail->Body    = 'OverAll Requisition has been sent to you, visit your Dashboard for more details.';

	$mail->send();
			
	$add_report = $con->prepare("INSERT INTO file (department, date, name, file) VALUES (?,?,?,?)");
	$add_report->execute(array($Department, $Date, $name[0], $path));
	
	move_uploaded_file($file_temp, $path);
	header('location:../overall_requisition.php');
	}
}
?>