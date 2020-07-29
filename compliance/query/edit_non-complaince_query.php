<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Person_Reporting = $_POST['Person_Reporting'];
	$Position = $_POST['position'];
	$Number = $_POST['phone_no'];
	$Unit = $_POST['unit'];
	$Date = $_POST['date'];
	$Name_Violator = $_POST['name_violator'];
	$Department = $_POST['department'];
	$Date_violation = $_POST['date'];
	$Offence = $_POST['offence'];
	$Cause = $_POST['cause'];
	$Corrective = $_POST['corrective'];
	$Remark = $_POST['remark'];
  
	$edit = $con->prepare("UPDATE tblnoncompliance SET `Person_Reporting` = ?, `Position` = ?, `Phone_No` = ?, `Unit` = ?, `Date` = ?, `Name_Violator` = ?, `Department` = ?,
						`Date_violation` = ?, `Offence` = ?, `Cause_Violation` = ?, `Corrective_Action` = ?, `Remarks` = ?	WHERE id = ?");
	$edit->execute(array($Person_Reporting, $Position, $Number,  $Unit, $Date, $Name_Violator, $Department, $Date_violation, $Offence, $Cause, $Corrective, $Remark, $id));

	header('location:../all_non-compliance.php');
}
?>