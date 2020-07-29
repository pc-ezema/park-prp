<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$EquipmentDescription = $_POST['equip_desc'];
	$SerialNumber = $_POST['serial_number'];
	$ModelNumber = $_POST['model_number'];
	$DatePurchase = $_POST['date_purchase'];
	$UnitTransferredFrom = $_POST['unit_trans_from'];
	$UnitTransferredTo = $_POST['unit_trans_to'];
	$TransferredBy = $_POST['transferred_by'];
	$DateTransferred = $_POST['date_transferred'];
	$TransferReceived = $_POST['transfer_received'];
	$ReasonsforTransfer = $_POST['reasons_transfer'];
	$Remarks = $_POST['remarks'];
												  
	$edit = $con->prepare("UPDATE transferlog SET `EquipmentDescription` = ?, `SerialNumber` = ?, `ModelNumber` = ?, `DatePurchase` = ?, `UnitTransferredFrom` = ?, `UnitTransferredTo` = ?, `TransferredBy` = ?, `DateTransferred` = ?, `TransferReceivedBy` = ?, `ReasonsforTransfer` = ?, `Remarks` = ?  WHERE id = ?");
	$edit->execute(array($EquipmentDescription, $SerialNumber, $ModelNumber, $DatePurchase, $UnitTransferredFrom, $UnitTransferredTo, $TransferredBy, $DateTransferred, $TransferReceived, $ReasonsforTransfer, $Remarks, $id));

	header('location:../all_transfers.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>