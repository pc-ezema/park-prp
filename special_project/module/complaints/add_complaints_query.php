<?php

include('connection.php');
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
	
	
	
	$add = $con->prepare("INSERT INTO complaintslog (Units, ComplaintsNames, BasisofComplaints, DateofCompliants, ComplaintsReceivedBy, ActionPlanForComplaints, ActionPlanBy, DateFixed, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$add->execute(array($Units, $ComplaintsNames, $BasisofComplaints, $DateofCompliants, $ComplaintsReceivedBy, $ActionPlanForComplaints, $ActionTaken,
									$DateFixed, $Remarks));

	header('location:index.php');
}
?>

