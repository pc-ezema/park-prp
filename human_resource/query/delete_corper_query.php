<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblcorper` WHERE corperid='$id'");
$delete->execute();
header("Location:../corper.php");
}
?>