<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `hrcomplaintslog` WHERE i_id='$id'");
$delete->execute();
header("Location:../complain.php");
}
?>