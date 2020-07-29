<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `tblrequisition` set seen_status='1' where seen_status='0' AND PreparedBy='Human Resource'");

	header ('Location: ../hrrequisition.php');

?>