<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `tblleaves` set seen_status='1' where seen_status='0'");

	header ('Location: ../leave.php');

?>