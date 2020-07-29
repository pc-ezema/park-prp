<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Items = $_POST['Items'];
	$Unit = $_POST['Unit'];
	$Name = $_POST['Name'];
	$Date = $_POST['Date'];
	$Remarks = $_POST['Remarks'];
	$Date_Returned = $_POST['Date_Returned'];
	
	$edit = $con->prepare("UPDATE tblstore SET `Items` = ?, `Unit` = ?, `Name` = ?, `Date` = ?, `Remarks` = ?, `Date_Returned` = ? WHERE id = ?");
	$edit->execute(array($Items, $Unit, $Name, $Date, $Remarks, $Date_Returned, $id));

	header('location:../all_storemanagement.php');
}
?>