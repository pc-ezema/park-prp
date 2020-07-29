<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
	$Units = $_POST['unit'];
	$EquipmentDescription = $_POST['equip_desc'];
	$SerialNumber = $_POST['serial_number'];
	$ModelNumber = $_POST['model_number'];
	$DatePurchase = $_POST['date_purchase'];
	$DescriptionofDefect = $_POST['desc_defect'];
	$DateTimeRepair = $_POST['date_time'];
	$RepairPerformedBy = $_POST['repair_performed'];
	$CostofRepair = $_POST['cost_repair'];
	$DescriptionofRepair = $_POST['desc_repair'];
	$Remarks = $_POST['remarks'];

	$add = $con->prepare("INSERT INTO repairslog (Units, EquipmentDescription, SerialNumber, ModelNumber, DatePurchase, DescriptionofDefect, DateTimeRepair, RepairPerformedBy, CostofRepair, DescriptionofRepair, Remarks) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$add->execute(array($Units, $EquipmentDescription, $SerialNumber, $ModelNumber, $DatePurchase, $DescriptionofDefect, $DateTimeRepair, $RepairPerformedBy, $CostofRepair, $DescriptionofRepair, $Remarks));

	header('location:../all_repairs.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>