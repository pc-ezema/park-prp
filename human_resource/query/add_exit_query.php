<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
	$CodeNumber = $_POST['codeid'];
	$Names = $_POST['names'];
	$Unit = $_POST['unit'];
	$Date = $_POST['date'];
	$Designation = $_POST['designation'];
	$NumberDays = $_POST['number_days'];
	$ExpectedDate = $_POST['expected_date'];
	$AddressExit = $_POST['address_exit'];
	$NextKin = $_POST['next_kin'];
	$PhoneNumber = $_POST['phone_number'];
	$Officer = $_POST['officer'];
	
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
	$mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
	$mail->Body    = 'Exit Form has been sent to you, visit your Dashboard for more details.';

	$mail->send();
	
	if ($_POST['exit_reasons'] == 'others') {
	   $ExitReasons = $_POST['new_exit_reasons'];
	   
	   $add = $con->prepare("INSERT INTO tblexitform (code_number, name, unit, date, designation, exit_reasons, number_days, 
							expected_dor, address_exit, next_kin, phone_number, relieving_officers) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$add->execute(array($CodeNumber, $Names, $Unit, $Date, $Designation, $ExitReasons, $NumberDays, $ExpectedDate, $AddressExit,
						$NextKin, $PhoneNumber, $Officer));
						
	} else {
	   $ExitReasons = $_POST['exit_reasons'];
	   $add = $con->prepare("INSERT INTO tblexitform (code_number, name, unit, date, designation, exit_reasons, number_days, 
							expected_dor, address_exit, next_kin, phone_number, relieving_officers) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$add->execute(array($CodeNumber, $Names, $Unit, $Date, $Designation, $ExitReasons, $NumberDays, $ExpectedDate, $AddressExit,
						$NextKin, $PhoneNumber, $Officer));
	}

	header('location:../exit.php');
}
?>

