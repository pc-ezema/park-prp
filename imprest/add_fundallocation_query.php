<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$Units = $_POST['units'];
	$Amount = $_POST['Amount'];


	$add_fundallocation = $con->prepare("INSERT INTO allocation (Units, Amount) VALUES (?,?)");
	$add_fundallocation->execute(array($Units, $Amount));

	header('location:../all_fundallocation.php');
}
?>