<?php
	$conn = mysqli_connect("localhost", "nardustc_user", "1234567890qwer@", "nardustc_apdb");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>