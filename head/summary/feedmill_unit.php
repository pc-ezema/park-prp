<?php
	date_default_timezone_set('Africa/Lagos');
	if(ISSET($_POST['filter'])){
		require 'conn.php';
		$date = $_POST['date'];
		$query = mysqli_query($conn, "SELECT sum(Amount) FROM `feedmillimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		while($fetch_admin = mysqli_fetch_array($query)){
		echo $fetch_admin['sum(Amount)'];
		}
	}
?>