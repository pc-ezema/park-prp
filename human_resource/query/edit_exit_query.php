<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$CodeNumber = $_POST['codeid'];
	$Names = $_POST['names'];
	$Unit = $_POST['unit'];
	$Date = $_POST['date'];
	$Designation = $_POST['designation'];
	$NumberDays = $_POST['number_days'];
	$ExpectedDate = $_POST['expected_date'];
	$AddressExit = $_POST['address_exit'];
	$NextKin = $_POST['next_kin'];
	$PhoneNumber = $_POST['phone_number'];
	$Officer = $_POST['officer'];
	$ReturedOn = $_POST['returned_on'];
	
	if ($_POST['exit_reasons'] == 'others') {
	   $ExitReasons = $_POST['new_exit_reasons'];
	$edit = $con->prepare("UPDATE tblexitform SET `code_number` = ?, `name` = ?, `unit` = ?, `date` = ?, `designation` = ?, `exit_reasons` = ?, `number_days` = ?, 
							`expected_dor` = ?, `address_exit` = ?, `next_kin` = ?, `phone_number` = ?,  `relieving_officers` = ?,	`returned_on` = ? WHERE id = ?");
	$edit->execute(array($CodeNumber, $Names, $Unit, $Date, $Designation, $ExitReasons, $NumberDays, $ExpectedDate, $AddressExit,
						$NextKin, $PhoneNumber, $Officer, $ReturedOn, $id));
	} else {
		$ExitReasons = $_POST['exit_reasons'];
	$edit = $con->prepare("UPDATE tblexitform SET `code_number` = ?, `name` = ?, `unit` = ?, `date` = ?, `designation` = ?, `exit_reasons` = ?, `number_days` = ?, 
							`expected_dor` = ?, `address_exit` = ?, `next_kin` = ?, `phone_number` = ?,  `relieving_officers` = ?, `returned_on` = ? WHERE id = ?");
	$edit->execute(array($CodeNumber, $Names, $Unit, $Date, $Designation, $ExitReasons, $NumberDays, $ExpectedDate, $AddressExit,
						$NextKin, $PhoneNumber, $Officer, $ReturedOn, $id));
	}
	header('location:../exit.php');
}
?>