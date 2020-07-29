<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblexitform` WHERE id='$id'");
$delete->execute();
header("Location:../exit.php");
}
?>