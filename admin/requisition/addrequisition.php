<form method="post" action="saverequisition.php">
<fieldset>
<legend>Purchase Quisition Form</legend>
<center>
<input type="hidden" class="form-control" name="prepared_by" value="Human Resource" required readonly/>
</center>
<table>
<tr>
	<td></td>
	<td>Requisition Info</td>
</tr>
<tr>
	<td>Date:</td>
	<td><input type="date" 	name="date" required></td>
</tr>
<tr>
	<td>Department:</td>
	<td><input type="text" 	name="department" required></td>
</tr>
<tr>
	<td>Phone No:</td>
	<td><input type="number" 	name="phone_no" required></td>
</tr>
<tr>
	<td>Purpose:</td>
	<td><input type="text" 	name="purpose" required></td>
</tr>
<tr>
	<td>Purchase Mode:</td>
	<td><input type="text" 	name="purchase_mode" required></td>
</tr>
<tr>
	<td></td>
	<td>Recommende Vendor</td>
</tr>
<tr>
	<td>Name:</td>
	<td><input type="text" 	name="name" required></td>
</tr>
<tr>
	<td>Address:</td>
	<td><input type="text" 	name="address" required></td>
</tr>
<tr>
	<td>Phone No:</td>
	<td><input type="number" 	name="phone_no" required></td>
</tr>
<tr>
	<td>Pay Mode:</td>
	<td><input type="text" 	name="pay_mode" required></td>
</tr>
<tr>
	<td></td>
	<td>Expenses Description</td>
</tr>
<tr>
	<td>Description of Expenses</td>
	<td><textarea type="text" cols="20" rows="20" name="desc_expenses" required></textarea></td>
</tr>
<tr>
	<td>Quantity:</td>
	<td><input type="number" 	name="quantity" required></td>
</tr>
<tr>
	<td>Unit Price:</td>
	<td><input type="number" name="unit_price" required></td>
</tr>
<tr>
	<td>Amount:</td>
	<td><input type="number" 	name="amount" required></td>
</tr>
<tr>
	<td>Amount In Word:</td>
	<td><textarea type="text" cols="20" rows="3" name="amount_word" required></textarea></td>
</tr>
<tr>
	<td>Status:</td>
	<td><input type="hidden" name="status" required value="Pending" readonly/></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="addbtn" value="Add Requistion"></td>
</tr>
</table>
</fieldset>
</form>