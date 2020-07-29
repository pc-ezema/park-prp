<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	
	//Load composer's autoloader
    require 'vendor/autoload.php';
	
	$LEAVEID = $_POST['LEAVEID']; 
	$id=$_POST['id'];
	$Names=$_POST['Names'];
	$LeaveEntitlement=$_POST['LeaveEntitlement'];
	$LeaveDaysSpent=$_POST['LeaveDaysSpent'];
	$CommencementDate=$_POST['CommencementDate'];
	$ResumptionDate=$_POST['ResumptionDate'];
	$NumberofDaysRequired=$_POST['NumberofDaysRequired'];
	$DeductLeave=$_POST['DeductLeave'];
	$LeaveType = $_POST['LeaveType'];
	$ContactAddress=$_POST['ContactAddress'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$Reasons=$_POST['Reasons'];
	$NOTEDBY=$_POST['NOTEDBY'];
	$LEAVESTATUS=$_POST['LEAVESTATUS'];
	
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
        $mail->Body    = 'Action has been taken on requested leave, Visit your Dashboard for more details.';
 
        $mail->send();
		
	$approve_leave = $con->prepare("UPDATE tblleaves SET  `Code_Number` = ?, `Names` = ?, `LeaveEntitlement` = ?,	`LeaveDaysSpent` = ?, 
	`CommencementDate` = ?, `ResumptionDate` = ?, `NumberofDaysRequired` = ?, `DeductLeave` = ?, `LeaveType` = ?, `ContactAddress` = ?, 
	`PhoneNumber` = ?, `Reasons` = ?, `NOTEDBY` = ?, `LEAVESTATUS` = ? WHERE LEAVEID = ?");
	$approve_leave->execute(array($id, $Names, $LeaveEntitlement, $LeaveDaysSpent, $CommencementDate, $ResumptionDate, $NumberofDaysRequired,
	$DeductLeave, $LeaveType, $ContactAddress, $PhoneNumber, $Reasons, $NOTEDBY, $LEAVESTATUS, $LEAVEID));
	header('location:leave.php');

}

?>