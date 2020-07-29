<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `file` set seen_status='1' where seen_status='0' AND department='Imprest Manager'");

	header ('Location: ../imprestreport.php');
	
?>