<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Building = $_POST['building'];
	$Location = $_POST['location'];
	$DateChecked = $_POST['datechecked'];
	$ActionRequired = $_POST['actionrequired'];
	$ActionCompleted = $_POST['actioncompleted'];
	$PersonChecking = $_POST['personchecking'];
	$CostofMaintenance = $_POST['costmaintenance'];
	$NextDueDate = $_POST['nextcheck'];
	$Remarks = $_POST['remark'];
		
	$edit = $con->prepare("UPDATE buildinglog SET `Building` = ?, `Location` = ?, `DateChecked` = ?, `ActionRequired` = ?, `ActionCompleted` = ?, `PersonChecking` = ?, `CostofMaintenance` = ?, `NextDueDate` = ?, `Remark` = ? WHERE id = ?");
	$edit->execute(array($Building, $Location, $DateChecked, $ActionRequired, $ActionCompleted, $PersonChecking, $CostofMaintenance, $NextDueDate, $Remarks, $id));

	header('location:../building_maintenance.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>