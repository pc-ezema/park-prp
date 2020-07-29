<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Unit = $_POST['unit'];
	$Requested = $_POST['requested'];
	$Actual = $_POST['actual'];
	$Remarks = $_POST['remarks'];
	
	$edit = $con->prepare("UPDATE tblpetrol SET `Unit` = ?, `Requested_Liters` = ?, `Actual_Giving` = ?, `Remarks` = ? WHERE id = ?");
	$edit->execute(array($Unit, $Requested, $Actual, $Remarks, $id));

	header('location:../all_petrolmanagement.php');
}
?>