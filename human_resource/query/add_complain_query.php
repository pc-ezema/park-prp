<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
	$Date = $_POST['date'];
	$Names = $_POST['name'];
	$HostelDepartmentUnit = $_POST['hostel_department_unit'];
	$PhoneNo = $_POST['phone_number'];
	$Complains = $_POST['complains'];
	$ActionPlan = $_POST['action_plan'];
	$OfficerInCharge = $_POST['officer_in_charge'];
	$Remarks = $_POST['remark'];
	
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
	$mail->Body    = 'Complain has been sent to you, visit your Dashboard for more details.';

	$mail->send();
	$add = $con->prepare("INSERT INTO hrcomplaintslog (Date, Names, HostelDepartmentUnit, PhoneNo, Complaints, ActionPlan, OfficeInCharge, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$add->execute(array($Date, $Names, $HostelDepartmentUnit, $PhoneNo, $Complains, $ActionPlan, $OfficerInCharge, $Remarks));

	header('location:../complain.php');
}
?>

