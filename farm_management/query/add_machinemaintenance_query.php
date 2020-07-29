<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
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

	$add = $con->prepare("INSERT INTO machinelog (Units, MachineDescription, SerialNumber, ModelNumber, DatePurchase, MaintenanceDescription, MaintenanceDate, MaintenancePerformedBy, CostofMaintenance, NextMaintenancePlan, Remarks) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$add->execute(array($Units, $MachineDescription, $SerialNumber, $ModelNumber, $DatePurchase, $MaintenanceDescription, $MaintenanceDate, $MaintenancePerformedBy, $CostofMaintenance, $NextMaintenancePlan, $Remarks));

	header('location:../machine_maintenance.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>