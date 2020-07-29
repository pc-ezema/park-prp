<?php
if(isset($_POST['editbtn'])) {
$id = $_POST['id'];
$Date = $_POST['date'];
$Names = $_POST['name'];
$HostelDepartmentUnit = $_POST['hostel_department_unit'];
$PhoneNo = $_POST['phone_number'];
$Complaints = $_POST['complaints'];
$ActionPlan = $_POST['action_plan'];
$OfficeInCharge = $_POST['officer_in_charge'];
$Remarks = $_POST['remark'];

try {
require("db.php");
$stmt = $conn->prepare("UPDATE hrcomplaintslog SET Date='$Date', Names='$Names', HostelDepartmentUnit='$HostelDepartmentUnit', 
							PhoneNo='$PhoneNo', Complaints='$Complaints', ActionPlan='$ActionPlan', OfficeInCharge='$OfficeInCharge', 
							Remarks='$Remarks' WHERE i_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

}
?>