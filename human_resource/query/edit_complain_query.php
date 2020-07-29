<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Names = $_POST['name'];
	$HostelDepartmentUnit = $_POST['hostel_department_unit'];
	$PhoneNo = $_POST['phone_number'];
	$Complains = $_POST['complains'];
	$ActionPlan = $_POST['action_plan'];
	$OfficerInCharge = $_POST['officer_in_charge'];
	$Remarks = $_POST['remark'];
  
	$edit = $con->prepare("UPDATE hrcomplaintslog SET `Date` = ?, `Names` = ?, `HostelDepartmentUnit` = ?, `PhoneNo` = ?, `Complaints` = ?, `ActionPlan` = ?, `OfficeInCharge` = ?, 
							`Remarks` = ? WHERE i_id = ?");
	$edit->execute(array($Date, $Names, $HostelDepartmentUnit, $PhoneNo, $Complains, $ActionPlan, $OfficerInCharge, $Remarks, $id));

	header('location:../complain.php');
}
?>