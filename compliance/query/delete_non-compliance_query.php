<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblnoncompliance` WHERE id='$id'");
$delete->execute();
header("Location:../all_non-compliance.php");
}
?>