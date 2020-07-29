<form method="post" action="addattendance.php">
<fieldset>
<legend>Take Attendance</legend>
<table>
<tr>
	<td>Name</td>
	<td><select name="name" required>
	<option></option>
	<?php
	  try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from tblemployees");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	$id = $row['EMPLOYEEID'];
	$sname = $row['LNAME']." ".$row['FNAME'];
	?>
<option><?php echo $sname; ?></option>
<?php 
}
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
	?>
	</select></td>
</tr>
<tr>
	<td>Time Sign In</td>
	<td><input type="time" 	name="signin_time" required></td>
</tr>
<tr>
	<td>Date</td>
	<td><input type="date" 	name="date" required></td>
</tr>
<tr>
	<td>Time Sign Out</td>
	<td><input type="time" 	name="signout_time" autocomplete="off" readonly></td>
</tr>
<tr>
	<td>Month</td>
	<td><select size="1" name="month" required>
	<option value="#">Select Month</option>
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option></td>
	</select>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="addbtn" value="Add Attendance"></td>
</tr>
</table>
</fieldset>
</form>