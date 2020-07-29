<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

if(isset($_POST['save'])) {
$Employeeid = $_POST['employeeid'];
$EmployeeNames = $_POST['employeenames'];
$LeaveEntitlement = $_POST['leaveentitlement'];
$LeaveDaysSpent = $_POST['leavedaysspent'];
$CommencementDate = $_POST['commencementdate'];
$ResumptionDate = $_POST['resumptiondate'];
$NumberofDaysRequired = $_POST['numberofdaysrequired'];
$DeductLeave = $_POST['deductleave'];
$LeaveType = $_POST['leavetype'];
$ContactAddress = $_POST['contactaddress'];
$PhoneNumber = $_POST['phonenumber'];
$Reasons = $_POST['reasons'];

	//Load composer's autoloader
    require 'vendor/autoload.php';
	
    $mail = new PHPMailer(true);  
	$mail->SMTPDebug = 0; 
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
		$mail->addAddress('michaelanibi@agropark.ng');
        $mail->addReplyTo('farmsupport@nardustcl.com');
				
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Employee Name:'. ' ' .$EmployeeNames . ' ' . '(Park Administrative Services)';
        $mail->Body    = 'Leave has been applied, Visit your Dashboard for more details.';
 
        $mail->send();
		
	try {
	require("conn.php");
	$stmt = $conn->prepare("INSERT INTO tblleaves SET Employeeid='$Employeeid', EmployeeNames='$EmployeeNames', LeaveEntitlement='$LeaveEntitlement', 
							LeaveDaysSpent='$LeaveDaysSpent', CommencementDate='$CommencementDate', ResumptionDate='$ResumptionDate', NumberofDaysRequired='$NumberofDaysRequired', 
							DeductLeave='$DeductLeave', LeaveType='$LeaveType', ContactAddress='$ContactAddress', PhoneNumber='$PhoneNumber',
							Reasons='$Reasons'");
	$stmt->execute();
	header ('Location: viewemployeeleaves.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>
