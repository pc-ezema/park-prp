<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `tblloans` set seen_status='1' where seen_status='0' AND department='Facility Manager'");

	header ('Location: ../facilityreport.php');

?>