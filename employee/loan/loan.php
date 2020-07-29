<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

if(isset($_POST['save'])) {
$Employeeid = $_POST['employeeid'];
$EmployeeNames = $_POST['employeenames'];
$Department = $_POST['department'];
$CodeNumber = $_POST['codenumber'];
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
        $mail->Body    = 'Loan has been applied, Visit your Dashboard for more details.';
 
        $mail->send();

$mail->addAddress('timileyinomobosola7@gmail.com');
		$mail->addAddress('michaelanibi@agropark.ng');
	try {
	require("conn.php");
	$stmt = $conn->prepare("INSERT INTO tblloans SET Employeeid='$Employeeid', EmployeeNames='$EmployeeNames', Department='$Department', 
							CodeNumber='$CodeNumber', ReasonforLoan='$ReasonforLoan', AmountBorrowed='$AmountBorrowed', ModeofReturn='$ModeofReturn', 
							DateofReturn='$DateofReturn', FirstName='$FirstName', FirstCodeNumber='$FirstCodeNumber', FirstDepartment='$FirstDepartment',
							SecondName='$SecondName', SecondCodeNumber='$SecondCodeNumber', SecondDepartment='$SecondDepartment', 
							ThirdName='$ThirdName', ThirdCodeNumber='$ThirdCodeNumber', ThirdDepartment='$ThirdDepartment', FourthName='$FourthName', 
							FourthCodeNumber='$FourthCodeNumber', FourthDepartment='$FourthDepartment', FifthName='$FifthName', FifthCodeNumber='$FifthCodeNumber',
							FifthDepartment='$FifthDepartment'");
	$stmt->execute();
	header ('Location: viewemployeeloan.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>
