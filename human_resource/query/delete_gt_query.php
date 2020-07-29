<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblgt` WHERE gtid='$id'");
$delete->execute();
header("Location:../gt.php");
}
?>