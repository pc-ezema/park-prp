<?php
include ('connect.php');

if(isset($_POST['login'])){
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT user_id FROM facilityusers WHERE username = ? AND password = ? ");
$fetch->execute (array($admin_user, $admin_pass));
$count = $fetch->rowcount();
$row = $fetch->fetch();

if($count > 0) {

	session_start();
	$_SESSION['user_id'] = $row['user_id'];
	echo "<script>
	window.location = 'home.php';
</script>";
} else {
	echo "<script>alert('Wrong Username or Password')</script>";
	header('location:index.php');
}
}
?>
