<form method="post" action="savecomplaints.php">
<fieldset>
<legend>Add Complaints</legend>
<table>
<tr>
	<td>Date</td>
	<td><input type="date" 	name="date" required></td>
</tr>
<tr>
	<td>Name</td>
	<td><input type="text" 	name="name" required></td>
</tr>
<tr>
	<td>Hostel/Department/Unit</td>
	<td><input type="text" 	name="hostel_department_unit" required></td>
</tr>
<tr>
	<td>Phone No.</td>
	<td><input type="number" name="phone_number" autocomplete="off" required></td>
</tr>
<tr>
	<td>Complaints</td>
	<td><textarea type="text" cols="20" rows="6" name="complaints" required></textarea></td>
</tr>
<tr>
	<td>Action Plan</td>
	<td><textarea type="text" cols="20" rows="6" name="action_plan" required></textarea></td>
</tr>
<tr>
	<td>Officer In Charge</td>
	<td><input type="text" 	name="officer_in_charge" required></td>
</tr>
<tr>
	<td>Remark</td>
	<td><textarea type="text" cols="20" rows="4" name="remark" required></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="addbtn" value="Add Complaints"></td>
</tr>
</table>
</fieldset>
</form>