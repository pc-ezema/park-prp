<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `hrcomplaintslog` set seen_status='1' where seen_status='0'");

	header ('Location: ../hrcomplaints.php');

?>