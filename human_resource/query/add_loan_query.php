<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
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
	$mail->addAddress('michaelanibi@agropark.ng');             
	$mail->addReplyTo('farmsupport@nardustcl.com');

	//Content
	$mail->isHTML(true);                                  
	$mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
	$mail->Body    = 'Loan has been sent to you, visit your Dashboard for more details.';

	$mail->send();
  
	$add = $con->prepare("INSERT INTO tblloans (Code_Number, Names, Department, ReasonforLoan, AmountBorrowed, ModeofReturn, DateofReturn, FirstName, 
							FirstCodeNumber, FirstDepartment, SecondName, SecondCodeNumber, SecondDepartment, ThirdName, ThirdCodeNumber, ThirdDepartment, FourthName,
							FourthCodeNumber, FourthDepartment, FifthName, FifthCodeNumber, FifthDepartment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$add->execute(array($CodeNumber, $Names, $Department, $ReasonforLoan, $AmountBorrowed, $ModeofReturn, $DateofReturn, $FirstName, $FirstCodeNumber, $FirstDepartment,
						$SecondName, $SecondCodeNumber, $SecondDepartment, $ThirdName, $ThirdCodeNumber, $ThirdDepartment, $FourthName, $FourthCodeNumber, $FourthDepartment, 
						$FifthName, $FifthCodeNumber, $FifthDepartment));

	header('location:../loan.php');
}
?>

