<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
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
				
	$edit = $con->prepare("UPDATE repairslog SET `Units` = ?, `EquipmentDescription` = ?, `SerialNumber` = ?, `ModelNumber` = ?, `DatePurchase` = ?, `DescriptionofDefect` = ?, `DateTimeRepair` = ?, `RepairPerformedBy` = ?, `CostofRepair` = ?, `DescriptionofRepair` = ?, `Remarks` = ?  WHERE id = ?");
	$edit->execute(array($Units, $EquipmentDescription, $SerialNumber, $ModelNumber, $DatePurchase, $DescriptionofDefect, $DateTimeRepair, $RepairPerformedBy, $CostofRepair, $DescriptionofRepair, $Remarks, $id));

	header('location:../all_repairs.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>