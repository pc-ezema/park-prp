<?php
if(isset($_POST['addbtn'])) {
$Name = $_POST['name'];
$TimeSignIn = $_POST['signin_time'];
$DateSign = $_POST['date'];
$TimeSignOut = $_POST['signout_time'];
$Month = $_POST['month'];
	try {
	require("db.php");
	$stmt = $conn->prepare("INSERT INTO attendance SET Name='$Name', TimeSignIn='$TimeSignIn', DateSign='$DateSign', TimeSignOut='$TimeSignOut', Month='$Month'");
	$stmt->execute();
	header ('Location: index.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>
