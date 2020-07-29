<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblpss` WHERE pssid='$id'");
$delete->execute();
header("Location:../pss.php");
}
?>