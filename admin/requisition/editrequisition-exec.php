<?php
if(isset($_POST['editbtn'])) {
$id = $_POST['id'];
$PreparedBy = $_POST['prepared_by'];
$Date = $_POST['date'];
$Department = $_POST['department'];
$Phone_No = $_POST['phone_no'];
$Purpose = $_POST['purpose'];
$Purchase_Mode = $_POST['purchase_mode'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$PhoneNO = $_POST['phone_no'];
$Pay_mode = $_POST['pay_mode'];
$Description_Expenses = $_POST['desc_expenses'];
$Quantity = $_POST['quantity'];
$Unit_Price = $_POST['unit_price'];
$Amount = $_POST['amount'];
$Amount_Word = $_POST['amount_word'];
$Status = $_POST['status'];

try {
require("db.php");
$stmt = $conn->prepare("UPDATE tblrequisition SET PreparedBy='$PreparedBy', Date='$Date', Department='$Department', 
							Phone_No='$Phone_No', Purpose='$Purpose', Purchase_Mode='$Purchase_Mode', Name='$Name', 
							Address='$Address', PhoneNO='$PhoneNO', Pay_mode='$Pay_mode', Description_Expenses='$Description_Expenses', 
							Quantity='$Quantity', Unit_Price='$Unit_Price', Amount='$Amount', Amount_Word='$Amount_Word', 
							Status='$Status' WHERE i_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

}
?>