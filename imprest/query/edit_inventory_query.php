<?php
include('../connect.php');
if(isset($_POST['adminupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE adminimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../adminimprest.php');
	
}elseif (isset($_POST['bookuupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE bookuimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../bookuimprest.php');
	
}elseif (isset($_POST['banowupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE banowimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../banowimprest.php');
	
}elseif (isset($_POST['distillerupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE distillerimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../distillerimprest.php');
	
}elseif (isset($_POST['feedmillupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE feedmillimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../feedmillimprest.php');
	
}elseif (isset($_POST['compostupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE compostimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../compostimprest.php');
	
}elseif (isset($_POST['bsfupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE bsfimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../bsfimprest.php');
	
}elseif (isset($_POST['fisheryupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE fisheryimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../fisheryimprest.php');
	
}elseif (isset($_POST['livestockupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE livestockimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../livestockimprest.php');
	
}elseif (isset($_POST['poultryupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE poultryimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../poultryimprest.php');
	
}elseif (isset($_POST['cropupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE cropimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../cropimprest.php');
	
}elseif (isset($_POST['organicupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE organicimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../organicimprest.php');
	
}elseif (isset($_POST['farmventureupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE farmventureimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../farmventureimprest.php');
	
}elseif (isset($_POST['securityupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE securityimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../securityimprest.php');
	
}elseif (isset($_POST['hostelupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE hostelimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../hostelimprest.php');
	
}elseif (isset($_POST['logisticsupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE logisticsimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../logisticsimprest.php');
	
}elseif (isset($_POST['facilityupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE facilityimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../facilityimprest.php');
	
}elseif (isset($_POST['fleetupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE fleetimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../fleetimprest.php');
	
}elseif (isset($_POST['apicupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE apicimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../apicimprest.php');
	
}elseif (isset($_POST['artisanupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE artisanimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../artisanimprest.php');
	
}elseif (isset($_POST['welfareupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE welfareimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../welfareimprest.php');
	
}elseif (isset($_POST['otulogisticsupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE otulogisticsimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../otulogisticsimprest.php');
	
}elseif (isset($_POST['tedeupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE tedeimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../tedeimprest.php');
	
}elseif (isset($_POST['r-dupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE testimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../testimprest.php');
	
}elseif (isset($_POST['snaileryupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE snaileryimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../snaileryimprest.php');
	
}elseif (isset($_POST['spupdate'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$edit = $con->prepare("UPDATE specialprojectimprest SET `date` = ?, `Description` = ?, `Amount` = ? WHERE id = ?");
	$edit->execute(array($Date, $Description, $Amount, $id));

	header('location:../specialprojectimprest.php');
	
}else{
	echo "Record Fialed to Update! Contact the Administrator.";
	header('location:../home.php');
}
?>