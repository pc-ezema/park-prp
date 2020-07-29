<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$Items = $_POST['Items'];
	$Unit = $_POST['Unit'];
	$Name = $_POST['Name'];
	$Date = $_POST['Date'];
	$Remarks = $_POST['Remarks'];
	$Date_Returned = $_POST['Date_Returned'];


	$add_storemanagement = $con->prepare("INSERT INTO tblstore (Items, Unit, Name, Date, Remarks, Date_Returned) VALUES (?,?, ?, ?, ?, ?)");
	$add_storemanagement->execute(array($Items, $Unit, $Name, $Date, $Remarks, $Date_Returned));

	header('location:../all_storemanagement.php');
}
?>