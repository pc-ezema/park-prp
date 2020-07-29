<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `buildinglog` WHERE id='$id'");
$delete->execute();
header("Location:../building_maintenance.php");

}else {
	echo "Record Fialed to Delete! Try Again.";
	header('location:../home.php');
}
?>
	