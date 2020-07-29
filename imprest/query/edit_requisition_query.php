<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Department = $_POST['department'];
	$Number = $_POST['number'];
	$Purpose = $_POST['purpose'];
	$Purchase = $_POST['purchase'];
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$PhoneNo = $_POST['p_number'];
	$PayMode = $_POST['paymode'];
	$Desc_Expenses = $_POST['desc_expenses'];
	$Quantity = $_POST['quantity'];
	$Unit_Price = $_POST['unit_price'];
	$Total_Amount = $_POST['total_amount'];
	$Amount_Word = $_POST['amount_word'];
	$Prepared_By = $_POST['prepared_by'];
	
	$edit = $con->prepare("UPDATE tblrequisition SET `PreparedBy` = ?, `Date` = ?, `Department` = ?, `Phone_No` = ?, `Purpose` = ?, `Purchase_Mode` = ?, `Name` = ?,
						`Address` = ?, `PhoneNO` = ?, `Pay_mode` = ?, `Description_Expenses` = ?, `Quantity` = ?, `Unit_Price` = ?, `Amount` = ?, `Amount_Word` = ?
						WHERE i_id = ?");
	$edit->execute(array($Prepared_By, $Date, $Department, $Number, $Purpose, $Purchase, $Name, $Address, $PhoneNo, $PayMode, $Desc_Expenses, $Quantity, $Unit_Price, $Total_Amount, $Amount_Word, $id));

	header('location:../all_requisition.php');
}
?>