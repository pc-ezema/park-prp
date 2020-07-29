<?php
include('connect.php');
if(isset($_POST['update'])) {
	
	$id = $_POST['id']; 
	$admin_user=$_POST['admin_user'];
	$admin_pass= $_POST['admin_pass'];
	
	$saveuser = $con->prepare("UPDATE hruser SET  `username` = ?,	`password` = ? WHERE user_id = ?");
	$saveuser->execute(array($admin_user, $admin_pass, $id));
	header('location:user.php');

}

?>