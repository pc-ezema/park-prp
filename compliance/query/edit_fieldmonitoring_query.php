<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Date_Visit = $_POST['date_visit'];
	$Name = $_POST['name'];
	$Purpose_Visit = $_POST['purpose_visit'];
	$Location = $_POST['location'];
	$Time_Started = $_POST['time_started'];
	$Time_Ended = $_POST['time_ended'];
	$Remark = $_POST['remark'];
  
	$edit = $con->prepare("UPDATE tblfield_monitoring SET `Date_Visit` = ?, `Name` = ?, `Purpose_Visit` = ?, `Location` = ?, `Time_Started` = ?, `Time_Ended` = ?,
						`Remarks` = ?	WHERE id = ?");
	$edit->execute(array($Date_Visit, $Name, $Purpose_Visit, $Location, $Time_Started, $Time_Ended, $Remark, $id));

	header('location:../all_fieldmonitoring.php');
}
?>