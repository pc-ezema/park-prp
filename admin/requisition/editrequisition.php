<?php
if (isset($_GET['id'])) {
try {
require ("db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * from tblrequisition where i_id='$id'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$PreparedBy = $row['PreparedBy'];
$Date = $row['Date'];
$Department = $row['Department'];
$Phone_No = $row['Phone_No'];
$Purpose = $row['Purpose'];
$Purchase_Mode = $row['Purchase_Mode'];
$Name = $row['Name'];
$Address = $row['Address'];
$PhoneNO = $row['PhoneNO'];
$Pay_mode = $row['Pay_mode'];
$Description_Expenses = $row['Description_Expenses'];
$Quantity = $row['Quantity'];
$Unit_Price = $row['Unit_Price'];
$Amount = $row['Amount'];
$Amount_Word = $row['Amount_Word'];
$Status = $row['Status'];
}

catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>


<form method="post" action="editrequisition-exec.php">
<input type="hidden" value="<?php echo $id; ?>" name="id">
<fieldset>
<legend>Update Requisition</legend>
<center>
<input type="hidden" name="prepared_by" value="<?php echo $PreparedBy; ?>" required readonly/>
</center>
<table>
<tr>
	<td></td>
	<td>Requisition Info</td>
</tr>
<tr>
	<td>Date:</td>
	<td><input type="date" 	name="date" required value="<?php echo $Date; ?>" ></td>
</tr>
<tr>
	<td>Department:</td>
	<td><input type="text" 	name="department" required value="<?php echo $Department; ?>" ></td>
</tr>
<tr>
	<td>Phone No:</td>
	<td><input type="number" 	name="phone_no" required value="<?php echo $Phone_No; ?>" ></td>
</tr>
<tr>
	<td>Purpose:</td>
	<td><input type="text" 	name="purpose" required value="<?php echo $Purpose; ?>" ></td>
</tr>
<tr>
	<td>Purchase Mode:</td>
	<td><input type="text" 	name="purchase_mode" required value="<?php echo $Purchase_Mode; ?>" ></td>
</tr>
<tr>
	<td></td>
	<td>Recommende Vendor</td>
</tr>
<tr>
	<td>Name:</td>
	<td><input type="text" 	name="name" required value="<?php echo $Name; ?>" ></td>
</tr>
<tr>
	<td>Address:</td>
	<td><input type="text" 	name="address" required value="<?php echo $Address; ?>"></td>
</tr>
<tr>
	<td>Phone No:</td>
	<td><input type="number" 	name="phone_no" required value="<?php echo $PhoneNO; ?>"></td>
</tr>
<tr>
	<td>Pay Mode:</td>
	<td><input type="text" 	name="pay_mode" required value="<?php echo $Pay_mode; ?>"></td>
</tr>
<tr>
	<td></td>
	<td>Expenses Description</td>
</tr>
<tr>
	<td>Description of Expenses</td>
	<td><textarea type="text" cols="20" rows="20" name="desc_expenses" required><?php echo $Description_Expenses; ?></textarea></td>
</tr>
<tr>
	<td>Quantity:</td>
	<td><input type="number" 	name="quantity" required value="<?php echo $Quantity; ?>" ></td>
</tr>
<tr>
	<td>Unit Price:</td>
	<td><input type="number" name="unit_price" required value="<?php echo $Unit_Price; ?>" ></td>
</tr>
<tr>
	<td>Amount:</td>
	<td><input type="number" 	name="amount" required value="<?php echo $Amount; ?>" ></td>
</tr>
<tr>
	<td>Amount In Word:</td>
	<td><textarea type="text" cols="20" rows="3" name="amount_word" required><?php echo $Amount_Word; ?></textarea></td>
</tr>
<tr>
	<td>Status:</td>
	<td><input type="hidden" name="status" required value="<?php echo $Status; ?>" readonly/></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="editbtn" value="Update Requisition"></td>
</tr>
</table>
</fieldset>
</form>