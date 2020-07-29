<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblstore` WHERE id='$id'");
$delete->execute();
header("Location:../all_storemanagement.php");
}
?>