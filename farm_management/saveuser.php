<?php
include('connect.php');
if(isset($_POST['update'])) {
	
	$id = $_POST['id']; 
	$username=$_POST['admin_user'];
	$password= $_POST['admin_pass'];
	
	$saveuser = $con->prepare("UPDATE facilityusers SET  `username` = ?, `password` = ? WHERE user_id = ?");
	$saveuser->execute(array($username, $password, $id));
	header('location:user.php');

}

?>