<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Name_Office = $_POST['name_office'];
	$Area_Inspected = $_POST['area_inspected'];
	$Inspected_By = $_POST['inspected_by'];
	$Date = $_POST['date'];
	$Item = $_POST['item'];
	$Yes_No = $_POST['yes_no'];
	$Corrective_Action = $_POST['corrective_action'];
	$Remark = $_POST['remark'];
  
	$edit = $con->prepare("UPDATE tblchecklist SET `Name_Office` = ?, `Area_Inspected` = ?, `Inspected_By` = ?, `Date` = ?, `Item` = ?, `Checklist` = ?, `Corrective_Action` = ?,
						`Remarks` = ?	WHERE id = ?");
	$edit->execute(array($Name_Office, $Area_Inspected, $Inspected_By, $Date, $Item, $Yes_No, $Corrective_Action, $Remark, $id));

	header('location:../all_checklist.php');
}
?>