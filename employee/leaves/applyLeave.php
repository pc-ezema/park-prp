<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
require_once("initialize.php");
require_once ("templates.php");
?>
  

<!DOCTYPE html>
<html lang="en">
<head>

</head><!--/head--> 
      <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/home.css">
<body >
<div class="pen-title">
  <h1><!-- LEAVE--></h1>
</div>
<div class="form-module">
		                 <h2><center>APPLY NEW LEAVE APPLICATION</center></h2>
				  <div class="form">

	 <form action="leave.php" method="POST">
                <label>Employee ID: </label>
				<input name="employeeid" value="<?php echo  $_SESSION['EMPLOYEEID']; ?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" readonly>
				<label>Employee Names: </label>
				<input name="employeenames" value="<?php echo  $_SESSION['LNAME'] . ', ' .$_SESSION['FNAME'];  ?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" readonly>
				</br>
				<label>Leave Entitlement: </label>
				<textarea name="leaveentitlement" type="text" value="" required  autocomplete="off"></textarea>
				<label>Leave Days Spent: </label>
				<input name="leavedaysspent" type="text" required  autocomplete="off">
				<label>Commencement Date: </label>
				<input name="commencementdate" type="date" required  autocomplete="off">
				<label>Resumption Date: </label>
				<input name="resumptiondate" type="date" required  autocomplete="off">
				<label>Number of Days Required: </label>
				<input name="numberofdaysrequired" type="text" required  autocomplete="off">
				<label>Deduct this Leave from: </label>
				<input name="deductleave" type="text" required  autocomplete="off">
				<label>Type of Leave:</label>
				<select name="leavetype" >
                        <option value="none" >Select</option>
                        <option value="Annual Leave">Annual Leave</option>
                        <option value="Casual Leave">Casual Leave</option>
						<option value="Examination Leave">Examination Leave</option>
						<option value="Leave of Absence">Leave of Absense</option>
						<option value="Maternity Leave">Maternity Leave</option>
                </select>
				<label>Contact Address:</label>
				<input name="contactaddress" type="text" required autocomplete="off">
                <label>Phone Number:</label>
				<input name="phonenumber" type="number" required autocomplete="off">
                <label>Reasons:</label>
				<textarea name="reasons" type="text" required autocomplete="off"></textarea>
				<button name="save" type="submit" >Save</button></div>
                 
				  </form>
		  <div class="form">
		  </div>
</body>
</html>