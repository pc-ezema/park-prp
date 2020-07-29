<?php
date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

//mysqli procedural
$conn=mysqli_connect("localhost","nardustc_user","1234567890qwer@","nardustc_apdb");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>