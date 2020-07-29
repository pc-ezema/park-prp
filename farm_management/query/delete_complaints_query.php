<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `complaintslog` WHERE id='$id'");
$delete->execute();
header("Location:../all_complaints.php");
}
?>