<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Units = $_POST['unit'];
	$MachineDescription = $_POST['machine_desc'];
	$SerialNumber = $_POST['serial_number'];
	$ModelNumber = $_POST['model_number'];
	$DatePurchase = $_POST['date_purchase'];
	$MaintenanceDescription = $_POST['main_desc'];
	$MaintenanceDate = $_POST['main_date'];
	$MaintenancePerformedBy = $_POST['main_performed'];
	$CostofMaintenance = $_POST['cost_maintenance'];
	$NextMaintenancePlan = $_POST['nmain_plan'];
	$Remarks = $_POST['remarks'];
		
	$edit = $con->prepare("UPDATE machinelog SET `Units` = ?, `MachineDescription` = ?, `SerialNumber` = ?, `ModelNumber` = ?, `DatePurchase` = ?, `MaintenanceDescription` = ?, `MaintenanceDate` = ?, `MaintenancePerformedBy` = ?, `CostofMaintenance` = ?, `NextMaintenancePlan` = ?,  `Remarks` = ? WHERE id = ?");
	$edit->execute(array($Units, $MachineDescription, $SerialNumber, $ModelNumber, $DatePurchase, $MaintenanceDescription, $MaintenanceDate, $MaintenancePerformedBy, $CostofMaintenance, $NextMaintenancePlan, $Remarks, $id));

	header('location:../machine_maintenance.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>