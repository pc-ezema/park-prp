<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(isset($_POST['addbtn'])) {
$Date = $_POST['date'];
$Names = $_POST['name'];
$HostelDepartmentUnit = $_POST['hostel_department_unit'];
$PhoneNo = $_POST['phone_number'];
$Complaints = $_POST['complaints'];
$ActionPlan = $_POST['action_plan'];
$OfficeInCharge = $_POST['officer_in_charge'];
$Remarks = $_POST['remark'];

//Load composer's autoloader
    require 'vendor/autoload.php';
	
    $mail = new PHPMailer(true);  
	$mail->SMTPDebug = 3;   
	try {
	require("db.php");
	
	//Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'pagropark@gmail.com';     
        $mail->Password = '1234567890qwer@';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   
 
        //Send Email
        $mail->setFrom('pagropark@gmail.com');
 
        //Recipients
        $mail->addAddress('michaelanibi@agropark.ng');              
        $mail->addReplyTo('pagropark@gmail.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'A Complaint has been sent, visit your Dashboard for more details';
 
        $mail->send();
	
	$stmt = $conn->prepare("INSERT INTO hrcomplaintslog SET Date='$Date', Names='$Names', HostelDepartmentUnit='$HostelDepartmentUnit', 
							PhoneNo='$PhoneNo', Complaints='$Complaints', ActionPlan='$ActionPlan', OfficeInCharge='$OfficeInCharge', 
							Remarks='$Remarks'");
	$stmt->execute();
	header ('Location: index.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>