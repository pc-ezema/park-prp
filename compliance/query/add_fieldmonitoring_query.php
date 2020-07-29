<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$Date_Visit = $_POST['date_visit'];
	$Name = $_POST['name'];
	$Purpose_Visit = $_POST['purpose_visit'];
	$Location = $_POST['location'];
	$Time_Started = $_POST['time_started'];
	$Time_Ended = $_POST['time_ended'];
	$Remark = $_POST['remark'];
										  
	$add = $con->prepare("INSERT INTO tblfield_monitoring (Date_Visit, Name, Purpose_Visit, Location, Time_Started, Time_Ended, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$add->execute(array($Date_Visit, $Name, $Purpose_Visit, $Location, $Time_Started, $Time_Ended, $Remark));

	header('location:../all_fieldmonitoring.php');
}
?>

