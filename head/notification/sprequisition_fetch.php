<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `tblrequisition` set seen_status='1' where seen_status='0' AND PreparedBy='Special Project Manager'");

	header ('Location: ../all_sprequisition.php');
?>