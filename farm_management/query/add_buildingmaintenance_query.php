<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
	$Building = $_POST['building'];
	$Location = $_POST['location'];
	$DateChecked = $_POST['datechecked'];
	$ActionRequired = $_POST['actionrequired'];
	$ActionCompleted = $_POST['actioncompleted'];
	$PersonChecking = $_POST['personchecking'];
	$CostofMaintenance = $_POST['costmaintenance'];
	$NextDueDate = $_POST['nextcheck'];
	$Remarks = $_POST['remark'];

	$add = $con->prepare("INSERT INTO buildinglog (Building, Location, DateChecked, ActionRequired, ActionCompleted, PersonChecking, CostofMaintenance, NextDueDate, Remark) VALUES (?,?,?,?,?,?,?,?,?)");
	$add->execute(array($Building, $Location, $DateChecked, $ActionRequired, $ActionCompleted, $PersonChecking, $CostofMaintenance, $NextDueDate, $Remarks));

	header('location:../building_maintenance.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>