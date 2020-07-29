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
  <h1><!-- LOAN--></h1>
</div>
<div class="form-module">

			                 <h2><center>UNDERTAKING FORM FOR LOAN</center></h2>
				  <div class="form">
                  <form action="loan.php" method="POST">
                <label>Employee ID: </label>
				<input name="employeeid" value="<?php echo  $_SESSION['EMPLOYEEID']; ?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" readonly>
				<label>Employee Names: </label>
				<input name="employeenames" value="<?php echo  $_SESSION['LNAME'] . ', ' .$_SESSION['FNAME'] . ', ' .$_SESSION['MNAME'];  ?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" readonly>
				</br>
				<input name="department" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="codenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="reasonsforloan" placeholder="Reasons for Loan" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="amountborrowed" placeholder="Amount Borrowed" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="accountdetails" placeholder="Account Details" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="modeofreturn" placeholder="Mode of Return" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<input name="dateofreturn" type="date" placeholder="Date of Return/Sign" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
				<center><label>GUARANTORS:</label></center>
				<label>FIRST</label>
				<input name="firstname" placeholder="Name" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="firstcodenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="firstdepartment" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <label>SECOND</label>
				<input name="secondname" placeholder="Name" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="secondcodenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="seconddepartment" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <label>THIRD</label>
				<input name="thirdname" placeholder="Name" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="thirdcodenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="thirddepartment" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <label>FOURTH</label>
				<input name="fourthname" placeholder="Name" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="fourthcodenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="fourthdepartment" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <label>FIFTH</label>
				<input name="fifthname" placeholder="Name" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="fifthcodenumber" placeholder="Code Number" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <input name="fifthdepartment" placeholder="Department/Unit" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                <button name="save" type="submit" >Save</button></div>
                  </form>
		  <div class="form">
		  </div>
</body>
</html>