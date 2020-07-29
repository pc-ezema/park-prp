<?php
//fetch.php;	
	include("connection.php");
		mysqli_query($conn,"update `tblloans` set seen_status='1' where seen_status='0'");

	header ('Location: ../loan.php');
		
	$query=mysqli_query($conn,"select * from `user` order by userid desc limit 10");


?>