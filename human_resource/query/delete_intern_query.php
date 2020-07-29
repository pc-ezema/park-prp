<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblsiwes` WHERE Siwesid='$id'");
$delete->execute();
header("Location:../intern.php");
}
?>