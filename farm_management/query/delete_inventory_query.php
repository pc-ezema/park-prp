<?php
include('../connect.php');
if(isset($_GET['adminid'])) {
		$id = $_GET['adminid'];

$delete = $con->prepare("DELETE FROM `adminitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../admin_unit.php");

}elseif(isset($_GET['bookuid'])) {
		$id = $_GET['bookuid'];

$delete = $con->prepare("DELETE FROM `bookuitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../booku_unit.php");

}elseif(isset($_GET['banowid'])) {
		$id = $_GET['banowid'];

$delete = $con->prepare("DELETE FROM `banowitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../banow_unit.php");

}elseif(isset($_GET['distillerid'])) {
		$id = $_GET['distillerid'];

$delete = $con->prepare("DELETE FROM `distilleritems` WHERE i_id='$id'");
$delete->execute();
header("Location:../distiller_unit.php");

}elseif(isset($_GET['feedmillid'])) {
		$id = $_GET['feedmillid'];

$delete = $con->prepare("DELETE FROM `feedmillitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../feedmill_unit.php");

}elseif(isset($_GET['compostid'])) {
		$id = $_GET['compostid'];

$delete = $con->prepare("DELETE FROM `compostitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../compost_unit.php");

}elseif(isset($_GET['bsfid'])) {
		$id = $_GET['bsfid'];

$delete = $con->prepare("DELETE FROM `bsfitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../bsf_unit.php");

}elseif(isset($_GET['fisheryid'])) {
		$id = $_GET['fisheryid'];

$delete = $con->prepare("DELETE FROM `fisheryitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../fishery_unit.php");

}elseif(isset($_GET['livestockid'])) {
		$id = $_GET['livestockid'];

$delete = $con->prepare("DELETE FROM `livestockitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../livestock_unit.php");

}elseif(isset($_GET['poultryid'])) {
		$id = $_GET['poultryid'];

$delete = $con->prepare("DELETE FROM `poultryitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../poultry_unit.php");

}elseif(isset($_GET['cropid'])) {
		$id = $_GET['cropid'];

$delete = $con->prepare("DELETE FROM `cropitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../crop_unit.php");

}elseif(isset($_GET['organicid'])) {
		$id = $_GET['organicid'];

$delete = $con->prepare("DELETE FROM `organicitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../organic_unit.php");

}elseif(isset($_GET['farmventureid'])) {
		$id = $_GET['farmventureid'];

$delete = $con->prepare("DELETE FROM `farmventureitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../farmventure_unit.php");

}elseif(isset($_GET['securityid'])) {
		$id = $_GET['securityid'];

$delete = $con->prepare("DELETE FROM `securityitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../security_unit.php");

}elseif(isset($_GET['hostelid'])) {
		$id = $_GET['hostelid'];

$delete = $con->prepare("DELETE FROM `hostelitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../hostel_unit.php");

}elseif(isset($_GET['apicid'])) {
		$id = $_GET['apicid'];

$delete = $con->prepare("DELETE FROM `apicitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../apic.php");

}elseif(isset($_GET['clinicid'])) {
		$id = $_GET['clinicid'];

$delete = $con->prepare("DELETE FROM `clinicitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../clinic.php");

}elseif(isset($_GET['postharvestid'])) {
		$id = $_GET['postharvestid'];

$delete = $con->prepare("DELETE FROM `postharvestitems` WHERE i_id='$id'");
$delete->execute();
header("Location:../post_harvest.php");

}else {
	echo "Record Fialed to Delete! Try Again.";
	header('location:../home.php');
}
?>
	