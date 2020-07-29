<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
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
  
	$edit = $con->prepare("UPDATE tblleaves SET `Code_Number` = ?, `Names` = ?, `LeaveEntitlement` = ?, `LeaveDaysSpent` = ?, `CommencementDate` = ?, `ResumptionDate` = ?, `NumberofDaysRequired` = ?,
						`DeductLeave` = ?, `LeaveType` = ?, `ContactAddress` = ?, `PhoneNumber` = ?, `Reasons` = ?	WHERE LEAVEID = ?");
	$edit->execute(array($CodeNumber, $Names, $LeaveEntitlement,  $LeaveDaysSpent, $CommencementDate, $ResumptionDate, $NumberofDaysRequired, $DeductLeave, $LeaveType, 
						$ContactAddress, $PhoneNumber, $Reasons, $id));

	header('location:../leave.php');
}
?>