<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `tblloans` WHERE Loanid='$id'");
$delete->execute();
header("Location:../loan.php");
}
?>