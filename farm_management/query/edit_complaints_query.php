<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Units = $_POST['unit'];
	$ComplaintsNames = $_POST['complaints_name'];
	$BasisofComplaints = $_POST['basis_complaints'];
	$DateofCompliants = $_POST['date_complaints'];
	$ComplaintsReceivedBy = $_POST['compliants_received'];
	$ActionPlanForComplaints = $_POST['action_plan'];
	$ActionTaken = $_POST['action_taken'];
	$DateFixed = $_POST['date_fixed'];
	$Remarks = $_POST['remarks'];
									  
	$edit = $con->prepare("UPDATE complaintslog SET `Units` = ?, `ComplaintsNames` = ?, `BasisofComplaints` = ?, `DateofCompliants` = ?, `ComplaintsReceivedBy` = ?,
						`ActionPlanForComplaints` = ?, `ActionPlanBy` = ?, `DateFixed` = ?, `Remarks` = ? WHERE id = ?");
	$edit->execute(array($Units, $ComplaintsNames, $BasisofComplaints, $DateofCompliants, $ComplaintsReceivedBy, $ActionPlanForComplaints, $ActionTaken, $DateFixed, $Remarks, $id));

	header('location:../all_complaints.php');
}
?>