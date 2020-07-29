<?php
include('../connect.php');
if(isset($_GET['adminid'])) {
		$id = $_GET['adminid'];

$delete = $con->prepare("DELETE FROM `adminimprest` WHERE id='$id'");
$delete->execute();
header("Location:../adminimprest.php");

}elseif(isset($_GET['bookuid'])) {
		$id = $_GET['bookuid'];

$delete = $con->prepare("DELETE FROM `bookuimprest` WHERE id='$id'");
$delete->execute();
header("Location:../bookuimprest.php");

}elseif(isset($_GET['banowid'])) {
		$id = $_GET['banowid'];

$delete = $con->prepare("DELETE FROM `banowimprest` WHERE id='$id'");
$delete->execute();
header("Location:../banowimprest.php");

}elseif(isset($_GET['distillerid'])) {
		$id = $_GET['distillerid'];

$delete = $con->prepare("DELETE FROM `distillerimprest` WHERE id='$id'");
$delete->execute();
header("Location:../distillerimprest.php");

}elseif(isset($_GET['feedmillid'])) {
		$id = $_GET['feedmillid'];

$delete = $con->prepare("DELETE FROM `feedmillimprest` WHERE id='$id'");
$delete->execute();
header("Location:../feedmillimprest.php");

}elseif(isset($_GET['compostid'])) {
		$id = $_GET['compostid'];

$delete = $con->prepare("DELETE FROM `compostimprest` WHERE id='$id'");
$delete->execute();
header("Location:../compostimprest.php");

}elseif(isset($_GET['bsfid'])) {
		$id = $_GET['bsfid'];

$delete = $con->prepare("DELETE FROM `bsfimprest` WHERE id='$id'");
$delete->execute();
header("Location:../bsfimprest.php");

}elseif(isset($_GET['fisheryid'])) {
		$id = $_GET['fisheryid'];

$delete = $con->prepare("DELETE FROM `fisheryimprest` WHERE id='$id'");
$delete->execute();
header("Location:../fisheryimprest.php");

}elseif(isset($_GET['livestockid'])) {
		$id = $_GET['livestockid'];

$delete = $con->prepare("DELETE FROM `livestockimprest` WHERE id='$id'");
$delete->execute();
header("Location:../livestockimprest.php");

}elseif(isset($_GET['poultryid'])) {
		$id = $_GET['poultryid'];

$delete = $con->prepare("DELETE FROM `poultryimprest` WHERE id='$id'");
$delete->execute();
header("Location:../poultryimprest.php");

}elseif(isset($_GET['cropid'])) {
		$id = $_GET['cropid'];

$delete = $con->prepare("DELETE FROM `cropimprest` WHERE id='$id'");
$delete->execute();
header("Location:../cropimprest.php");

}elseif(isset($_GET['organicid'])) {
		$id = $_GET['organicid'];

$delete = $con->prepare("DELETE FROM `organicimprest` WHERE id='$id'");
$delete->execute();
header("Location:../organicimprest.php");

}elseif(isset($_GET['farmventureid'])) {
		$id = $_GET['farmventureid'];

$delete = $con->prepare("DELETE FROM `farmventureimprest` WHERE id='$id'");
$delete->execute();
header("Location:../farmventureimprest.php");

}elseif(isset($_GET['securityid'])) {
		$id = $_GET['securityid'];

$delete = $con->prepare("DELETE FROM `securityimprest` WHERE id='$id'");
$delete->execute();
header("Location:../securityimprest.php");

}elseif(isset($_GET['hostelid'])) {
		$id = $_GET['hostelid'];

$delete = $con->prepare("DELETE FROM `hostelimprest` WHERE id='$id'");
$delete->execute();
header("Location:../hostelimprest.php");

}elseif(isset($_GET['logisticsid'])) {
		$id = $_GET['logisticsid'];

$delete = $con->prepare("DELETE FROM `logisticsimprest` WHERE id='$id'");
$delete->execute();
header("Location:../logisticsimprest.php");

}elseif(isset($_GET['facilityid'])) {
		$id = $_GET['facilityid'];

$delete = $con->prepare("DELETE FROM `facilityimprest` WHERE id='$id'");
$delete->execute();
header("Location:../facilityimprest.php");

}elseif(isset($_GET['fleetid'])) {
		$id = $_GET['fleetid'];

$delete = $con->prepare("DELETE FROM `fleetimprest` WHERE id='$id'");
$delete->execute();
header("Location:../fleetimprest.php");

}elseif(isset($_GET['apicid'])) {
		$id = $_GET['apicid'];

$delete = $con->prepare("DELETE FROM `apicimprest` WHERE id='$id'");
$delete->execute();
header("Location:../apicimprest.php");

}elseif(isset($_GET['artisanid'])) {
		$id = $_GET['artisanid'];

$delete = $con->prepare("DELETE FROM `artisanimprest` WHERE id='$id'");
$delete->execute();
header("Location:../artisanimprest.php");

}elseif(isset($_GET['welfareid'])) {
		$id = $_GET['welfareid'];

$delete = $con->prepare("DELETE FROM `welfareimprest` WHERE id='$id'");
$delete->execute();
header("Location:../welfareimprest.php");

}elseif(isset($_GET['otulogisticsid'])) {
		$id = $_GET['otulogisticsid'];

$delete = $con->prepare("DELETE FROM `otulogisticsimprest` WHERE id='$id'");
$delete->execute();
header("Location:../otulogisticsimprest.php");

}elseif(isset($_GET['tedeid'])) {
		$id = $_GET['tedeid'];

$delete = $con->prepare("DELETE FROM `tedeimprest` WHERE id='$id'");
$delete->execute();
header("Location:../tedeimprest.php");

}elseif(isset($_GET['r-did'])) {
		$id = $_GET['r-did'];

$delete = $con->prepare("DELETE FROM `testimprest` WHERE id='$id'");
$delete->execute();
header("Location:../testimprest.php");

}elseif(isset($_GET['snaileryid'])) {
		$id = $_GET['snaileryid'];

$delete = $con->prepare("DELETE FROM `snaileryimprest` WHERE id='$id'");
$delete->execute();
header("Location:../snaileryimprest.php");

}elseif(isset($_GET['spid'])) {
		$id = $_GET['spid'];

$delete = $con->prepare("DELETE FROM `specialprojectimprest` WHERE id='$id'");
$delete->execute();
header("Location:../specialprojectimprest.php");

}else {
	echo "Record Fialed to Delete! Contact the Administrator.";
	header('location:../home.php');
}
?>
	