<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
	$CodeNumber = $_POST['codeid'];
	$Names = $_POST['names'];
	$LeaveEntitlement = $_POST['leaveentitlement'];
	$LeaveDaysSpent = $_POST['leavedaysspent'];
	$CommencementDate = $_POST['commencementdate'];
	$ResumptionDate = $_POST['resumptiondate'];
	$NumberofDaysRequired = $_POST['numberofdaysrequired'];
	$DeductLeave = $_POST['deductleave'];
	$LeaveType = $_POST['leavetype'];
	$ContactAddress = $_POST['contactaddress'];
	$PhoneNumber = $_POST['number'];
	$Reasons = $_POST['reasons'];  
	
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
	$mail->Body    = 'Leave has been sent to you, visit your Dashboard for more details.';

	$mail->send();
	$add = $con->prepare("INSERT INTO tblleaves (Code_Number, Names, LeaveEntitlement, LeaveDaysSpent, CommencementDate, ResumptionDate, NumberofDaysRequired, DeductLeave, LeaveType, 
							ContactAddress, PhoneNumber, Reasons) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$add->execute(array($CodeNumber, $Names, $LeaveEntitlement, $LeaveDaysSpent, $CommencementDate, $ResumptionDate, $NumberofDaysRequired, $DeductLeave, $LeaveType, $ContactAddress, 
						$PhoneNumber, $Reasons));

	header('location:../leave.php');
}
?>

