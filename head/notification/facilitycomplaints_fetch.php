<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `complaintslog` set seen_status='1' where seen_status='0'");

	header ('Location: ../all_complaints.php');
?>