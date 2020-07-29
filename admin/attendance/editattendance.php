<?php
if (isset($_GET['id'])) {
try {
require ("db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * from attendance where i_id='$id'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$Name = $row['Name'];
$TimeSignIn = $row['TimeSignIn'];
$DateSign = $row['DateSign'];
$TimeSignOut = $row['TimeSignOut'];
$Month = $row['Month'];
}

catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>


<form method="post" action="editattend-exec.php">
<input type="hidden" value="<?php echo $id; ?>" name="id">
<fieldset>
<legend>Update Attendance</legend>
<table>
<tr>
	<td>Name</td>
	<td><input type="text" 	name="name" required value="<?php echo $Name; ?>" autocomplete="off" readonly></td>
</tr>

<tr>
	<td>Time Sign In</td>
	<td><input type="time" 	name="signin_time" required value="<?php echo $TimeSignIn; ?>" autocomplete="off" readonly></td>
</tr>

<tr>
	<td>Date</td>
	<td><input type="date" 	name="date" required value="<?php echo $DateSign; ?>" autocomplete="off" readonly></td>
</tr>

<tr>
	<td>Time Sign Out</td>
	<td><input type="time" 	name="signout_time" required value="<?php echo $TimeSignOut; ?>" autocomplete="off" ></td>
</tr>

<tr>
	<td>Month</td>
	<td><input type="text" 	name="month" required value="<?php echo $Month; ?>" autocomplete="off" readonly></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="editbtn" value="Update Attendance"></td>
</tr>
</table>
</fieldset>
</form>