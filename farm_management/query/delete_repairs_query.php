<?php
include('../connect.php');
if(isset($_GET['id'])) {
		$id = $_GET['id'];

$delete = $con->prepare("DELETE FROM `repairslog` WHERE id='$id'");
$delete->execute();
header("Location:../all_repairs.php");

}else {
	echo "Record Fialed to Delete! Try Again.";
	header('location:../home.php');
}
?>
	