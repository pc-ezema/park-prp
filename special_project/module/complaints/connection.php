<?php 
	$host = "localhost";
	$user = "nardustc_user";
	$pass = "1234567890qwer@";

	try {
		$con = new PDO("mysql:host=$host;dbname=nardustc_apdb", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connection Failed:' . $e->getMessage();
	}
?>