<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
	$Units = $_POST['unit'];
	$EquipmentDescription = $_POST['equip_desc'];
	$SerialNumber = $_POST['serial_number'];
	$ModelNumber = $_POST['model_number'];
	$DatePurchase = $_POST['date_purchase'];
	$MaintenanceDescription = $_POST['main_desc'];
	$MaintenanceDate = $_POST['main_date'];
	$MaintenancePerformedBy = $_POST['main_performed'];
	$CostofMaintenance = $_POST['cost_maintenance'];
	$NextMaintenancePlan = $_POST['nmain_plan'];
	$Remarks = $_POST['remarks'];

	$add = $con->prepare("INSERT INTO maintenancelog (Units, EquipmentDescription, SerialNumber, ModelNumber, DatePurchase, MaintenanceDescription, MaintenanceDate, MaintenancePerformedBy, CostofMaintenance, NextMaintenancePlan, Remarks) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$add->execute(array($Units, $EquipmentDescription, $SerialNumber, $ModelNumber, $DatePurchase, $MaintenanceDescription, $MaintenanceDate, $MaintenancePerformedBy, $CostofMaintenance, $NextMaintenancePlan, $Remarks));

	header('location:../equipment_maintenance.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>