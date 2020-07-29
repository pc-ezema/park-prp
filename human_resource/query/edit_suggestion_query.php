<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$CodeNumber = $_POST['code_number'];
	$Name = $_POST['name'];
	$Message = $_POST['message'];
	$Evaluation = $_POST['evaluation'];
  
	$edit = $con->prepare("UPDATE tblsuggestion SET `date` = ?, `code_number` = ?, `name` = ?, `message` = ?, `evaluation` = ? WHERE id = ?");
	$edit->execute(array($Date, $CodeNumber, $Name, $Message, $Evaluation, $id));

	header('location:../suggestion.php');
}
?>