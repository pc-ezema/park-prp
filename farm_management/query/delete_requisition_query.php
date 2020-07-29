<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblrequisition` WHERE i_id='$id'");
$delete->execute();
header("Location:../all_requisition.php");
}
?>