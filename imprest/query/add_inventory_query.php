<?php
include('../connect.php');
if(isset($_POST['admin'])) {
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO adminimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../adminimprest.php');
	
}elseif(isset($_POST['booku'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO bookuimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../bookuimprest.php');
	
}elseif(isset($_POST['banow'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO banowimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../banowimprest.php');
	
}elseif(isset($_POST['distiller'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO distillerimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../distillerimprest.php');
	
}elseif(isset($_POST['feedmill'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO feedmillimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../feedmillimprest.php');
	
}elseif(isset($_POST['compost'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO compostimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../compostimprest.php');
	
}elseif(isset($_POST['bsf'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO bsfimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../bsfimprest.php');
	
}elseif(isset($_POST['fishery'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO fisheryimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../fisheryimprest.php');
	
}elseif(isset($_POST['livestock'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO livestockimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../livestockimprest.php');
	
}elseif(isset($_POST['poultry'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO poultryimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../poultryimprest.php');
	
}elseif(isset($_POST['crop'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO cropimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../cropimprest.php');
	
}elseif(isset($_POST['organic'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO organicimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../organicimprest.php');
	
}elseif(isset($_POST['farmventure'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO farmventureimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../farmventureimprest.php');
	
}elseif(isset($_POST['security'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO securityimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../securityimprest.php');
	
}elseif(isset($_POST['hostel'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO hostelimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../hostelimprest.php');
	
}elseif(isset($_POST['logistics'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO logisticsimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../logisticsimprest.php');
	
}elseif(isset($_POST['facility'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO facilityimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../facilityimprest.php');
	
}elseif(isset($_POST['fleet'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO fleetimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../fleetimprest.php');
	
}elseif(isset($_POST['apic'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO apicimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../apicimprest.php');
	
}elseif(isset($_POST['artisan'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO artisanimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../artisanimprest.php');
	
}elseif(isset($_POST['welfare'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO welfareimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../welfareimprest.php');
	
}elseif(isset($_POST['otulogistics'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO otulogisticsimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../otulogisticsimprest.php');
	
}elseif(isset($_POST['tede'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO tedeimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../tedeimprest.php');
	
}elseif(isset($_POST['r-d'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO testimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../r-dimprest.php');
	
}elseif(isset($_POST['snailery'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO snaileryimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../snaileryimprest.php');
	
}elseif(isset($_POST['specialproject'])){
	$Date = $_POST['date'];
	$Description = $_POST['description'];
	$Amount = $_POST['amount'];

	$add = $con->prepare("INSERT INTO specialprojectimprest (date, Description, Amount) VALUES (?,?,?)");
	$add->execute(array($Date, $Description, $Amount));

	header('location:../specialprojectimprest.php');
}else {
	echo "Record Not Saved! Contact the Administrator.";
	header('location:../home.php');
}
?>