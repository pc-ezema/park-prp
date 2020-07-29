<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$CodeNumber = $_POST['codeid'];
	$Names = $_POST['names'];
	$Department = $_POST['department'];
	$ReasonforLoan = $_POST['reasonsforloan'];
	$AmountBorrowed = $_POST['amountborrowed'];
	$ModeofReturn = $_POST['modeofreturn'];
	$DateofReturn = $_POST['dateofreturn'];
	$FirstName = $_POST['firstname'];
	$FirstCodeNumber = $_POST['firstcodenumber'];
	$FirstDepartment = $_POST['firstdepartment'];
	$SecondName = $_POST['secondname'];
	$SecondCodeNumber = $_POST['secondcodenumber'];
	$SecondDepartment = $_POST['seconddepartment'];
	$ThirdName = $_POST['thirdname'];
	$ThirdCodeNumber = $_POST['thirdcodenumber'];
	$ThirdDepartment = $_POST['thirddepartment'];
	$FourthName = $_POST['fourthname'];
	$FourthCodeNumber = $_POST['fourthcodenumber'];
	$FourthDepartment = $_POST['fourthdepartment'];
	$FifthName = $_POST['fifthname'];
	$FifthCodeNumber = $_POST['fifthcodenumber'];
	$FifthDepartment = $_POST['fifthdepartment'];
  
	$edit = $con->prepare("UPDATE tblloans SET `Code_Number` = ?, `Names` = ?, `Department` = ?, `ReasonforLoan` = ?, `AmountBorrowed` = ?, `ModeofReturn` = ?, `DateofReturn` = ?, 
							`FirstName` = ?, `FirstCodeNumber` = ?, `FirstDepartment` = ?, `SecondName` = ?, `SecondCodeNumber` = ?, `SecondDepartment` = ?, 
							`ThirdName` = ?, `ThirdCodeNumber` = ?, `ThirdDepartment` = ?, `FourthName` = ?, `FourthCodeNumber` = ?, `FourthDepartment` = ?, 
							`FifthName` = ?, `FifthCodeNumber` = ?, `FifthDepartment` = ?	WHERE Loanid = ?");
	$edit->execute(array($CodeNumber, $Names, $Department, $ReasonforLoan, $AmountBorrowed, $ModeofReturn, $DateofReturn, $FirstName, $FirstCodeNumber, $FirstDepartment,
						$SecondName, $SecondCodeNumber, $SecondDepartment, $ThirdName, $ThirdCodeNumber, $ThirdDepartment,  $FourthName, $FourthCodeNumber, $FourthDepartment, 
						$FifthName, $FifthCodeNumber, $FifthDepartment, $id));

	header('location:../loan.php');
}
?>