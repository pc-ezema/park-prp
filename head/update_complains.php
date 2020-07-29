<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Date = $_POST['date'];
	$Names = $_POST['name'];
	$HostelDepartmentUnit = $_POST['hostel_department_unit'];
	$PhoneNo = $_POST['phone_number'];
	$Complains = $_POST['complains'];
	$ActionPlan = $_POST['action_plan'];
	$OfficerInCharge = $_POST['officer_in_charge'];
	$Evaluation = $_POST['evaluation'];
	$Remarks = $_POST['remark'];
	
	$mail = new PHPMailer(true);  
	$mail->SMTPDebug = 3; 
	
	//Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'mail.nardustcl.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'farmsupport@nardustcl.com';     
        $mail->Password = '@_farmsupport456';             
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
        $mail->setFrom('farmsupport@nardustcl.com');
 
        //Recipients
        $mail->addAddress('timileyinomobosola7@gmail.com');              
        $mail->addReplyTo('farmsupport@nardustcl.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Head (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'Complain Evaluated, Visit your Dashboard for more details.';
 
        $mail->send();
		
	$edit = $con->prepare("UPDATE hrcomplaintslog SET `Date` = ?, `Names` = ?, `HostelDepartmentUnit` = ?, `PhoneNo` = ?, `Complaints` = ?, `ActionPlan` = ?, `OfficeInCharge` = ?, 
							`Remarks` = ?, `Evaluation` = ? WHERE i_id = ?");
	$edit->execute(array($Date, $Names, $HostelDepartmentUnit, $PhoneNo, $Complains, $ActionPlan, $OfficerInCharge, $Remarks, $Evaluation, $id));

	header('location:hrcomplaints.php');
}
?>