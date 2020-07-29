<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblleaves` WHERE LEAVEID='$id'");
$delete->execute();
header("Location:../leave.php");
}
?>