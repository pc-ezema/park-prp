<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
	
	$Units = $_POST['unit'];
	$ComplaintsNames = $_POST['complaints_name'];
	$BasisofComplaints = $_POST['basis_complaints'];
	$DateofCompliants = $_POST['date_complaints'];
	$ComplaintsReceivedBy = $_POST['compliants_received'];
	$ActionPlanForComplaints = $_POST['action_plan'];
	$ActionTaken = $_POST['action_taken'];
	$DateFixed = $_POST['date_fixed'];
	$Remarks = $_POST['remarks'];
	
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
	$mail->addAddress('adigunelijah@agropark.ng'); 
	$mail->addAddress('michaelanibi@agropark.ng');              
	$mail->addReplyTo('farmsupport@nardustcl.com');

	//Content
	$mail->isHTML(true);                                  
	$mail->Subject = 'Facility Manager (PARK ADMINISTRATIVE SERVICES)';
	$mail->Body    = 'Requisition has been sent to you, visit your Dashboard for more details.';

	$mail->send();
	
	$add_requisition = $con->prepare("INSERT INTO complaintslog (Units, ComplaintsNames, BasisofComplaints, DateofCompliants, ComplaintsReceivedBy, ActionPlanForComplaints, ActionPlanBy, DateFixed, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$add_requisition->execute(array($Units, $ComplaintsNames, $BasisofComplaints, $DateofCompliants, $ComplaintsReceivedBy, $ActionPlanForComplaints, $ActionTaken,
									$DateFixed, $Remarks));

	header('location:../all_complaints.php');
}
?>

