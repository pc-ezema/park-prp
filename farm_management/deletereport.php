<?php
include('connect.php');
if(isset($_GET['file_id'])) {
		$file_id = $_GET['file_id'];

$add_report = $con->prepare("DELETE FROM `file` WHERE file_id='$file_id'");
$add_report->execute();
header("Location:all_report.php");

}

?>
	