<?php
if (isset($_GET['id'])) {
try {
require ("db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * from hrcomplaintslog where i_id='$id'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$Date = $row['Date'];
$Names = $row['Names'];
$HostelDepartmentUnit = $row['HostelDepartmentUnit'];
$PhoneNo = $row['PhoneNo'];
$Complaints = $row['Complaints'];
$ActionPlan = $row['ActionPlan'];
$OfficeInCharge = $row['OfficeInCharge'];
$Remarks = $row['Remarks'];
}

catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>


<form method="post" action="editcomplaints-exec.php">
<input type="hidden" value="<?php echo $id; ?>" name="id">
<fieldset>
<legend>Update Complaints</legend>
<table>
<tr>
	<td>Date</td>
	<td><input type="date" 	name="date" required value="<?php echo $Date; ?>"></td>
</tr>
<tr>
	<td>Name</td>
	<td><input type="text" 	name="name" required value="<?php echo $Names; ?>"></td>
</tr>
<tr>
	<td>Hostel/Department/Unit</td>
	<td><input type="text" 	name="hostel_department_unit" required value="<?php echo $HostelDepartmentUnit; ?>"></td>
</tr>
<tr>
	<td>Phone No.</td>
	<td><input type="number" name="phone_number" autocomplete="off" required value="<?php echo $PhoneNo; ?>"></td>
</tr>
<tr>
	<td>Complaints</td>
	<td><textarea type="text" cols="20" rows="6" name="complaints" required><?php echo $Complaints; ?></textarea></td>
</tr>
<tr>
	<td>Action Plan</td>
	<td><textarea type="text" cols="20" rows="6" name="action_plan" required><?php echo $ActionPlan; ?></textarea></td>
</tr>
<tr>
	<td>Officer In Charge</td>
	<td><input type="text" 	name="officer_in_charge" required value="<?php echo $OfficeInCharge; ?>"></td>
</tr>
<tr>
	<td>Remark</td>
	<td><textarea type="text" cols="20" rows="4" name="remark" required><?php echo $Remarks; ?></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="editbtn" value="Update Complaints"></td>
</tr>
</table>
</fieldset>
</form>