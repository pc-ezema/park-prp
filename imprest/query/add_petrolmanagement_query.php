<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$Unit = $_POST['unit'];
	$Requested = $_POST['requested'];
	$Actual = $_POST['actual'];
	$Remarks = $_POST['remarks'];


	$add_petrolmanagement = $con->prepare("INSERT INTO tblpetrol (Unit, Requested_Liters, Actual_Giving, Remarks) VALUES (?, ?, ?, ?)");
	$add_petrolmanagement->execute(array($Unit, $Requested, $Actual, $Remarks));

	header('location:../all_petrolmanagement.php');
}
?>