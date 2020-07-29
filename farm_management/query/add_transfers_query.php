<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
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

	$add = $con->prepare("INSERT INTO transferlog (EquipmentDescription, SerialNumber, ModelNumber, DatePurchase, UnitTransferredFrom, UnitTransferredTo, TransferredBy, DateTransferred, TransferReceivedBy, ReasonsforTransfer, Remarks) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$add->execute(array($EquipmentDescription, $SerialNumber, $ModelNumber, $DatePurchase, $UnitTransferredFrom, $UnitTransferredTo, $TransferredBy, $DateTransferred, $TransferReceived, $ReasonsforTransfer, $Remarks));

	header('location:../all_transfers.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>