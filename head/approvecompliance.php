<?php

include('connect.php');

if(isset($_POST['updatereport'])) {
			
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	
		
	$approve = $con->prepare("UPDATE tblcompliancefile SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:all_compliancereport.php');

}elseif(isset($_POST['updatepolicy'])) {
			
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	
		
	$approve = $con->prepare("UPDATE tblcompliancefile SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:all_policy.php');

}elseif(isset($_POST['updateinvestigation'])) {
			
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	
		
	$approve = $con->prepare("UPDATE tblcompliancefile SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:all_investigation.php');

}elseif(isset($_POST['updatecomplains'])) {
			
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	
		
	$approve = $con->prepare("UPDATE tblcompliancefile SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve ->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:all_compliancecomplains.php');

}elseif(isset($_POST['updatechangemanagement'])) {
			
	$file_id = $_POST['file_id'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$evaluation_comment = $_POST['evaluation_comment'];
	$file = $_POST['file'];
	
	
		
	$approve = $con->prepare("UPDATE tblcompliancefile SET  `department` = ?, `date` = ?, `name` = ?,	`evaluation_comment` = ?, 
	`file` = ? WHERE file_id = ?");
	$approve->execute(array($department, $date, $name, $evaluation_comment, $file, $file_id));
	header('location:all_changemanagement.php');

}else{
	header('location:index.php');
}
?>
