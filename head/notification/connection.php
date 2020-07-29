<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","nardustc_user","1234567890qwer@","nardustc_apdb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>