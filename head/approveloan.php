<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	//Load composer's autoloader
    require 'vendor/autoload.php';
		
	$Loanid = $_POST['Loanid']; 
	$id=$_POST['id'];
	$Names=$_POST['Names'];
	$Department=$_POST['Department'];
	$ReasonforLoan=$_POST['ReasonforLoan'];
	$AmountBorrowed=$_POST['AmountBorrowed'];
	$ModeofReturn=$_POST['ModeofReturn'];
	$DateofReturn=$_POST['DateofReturn'];
	$FirstName=$_POST['FirstName'];
	$FirstCodeNumber=$_POST['FirstCodeNumber'];
	$FirstDepartment=$_POST['FirstDepartment'];
	$SecondName=$_POST['SecondName'];
	$SecondCodeNumber=$_POST['SecondCodeNumber'];
	$SecondDepartment=$_POST['SecondDepartment'];
	$ThirdName=$_POST['ThirdName'];
	$ThirdCodeNumber=$_POST['ThirdCodeNumber'];
	$ThirdDepartment=$_POST['ThirdDepartment'];
	$FourthName=$_POST['FourthName'];
	$FourthCodeNumber=$_POST['FourthCodeNumber'];
	$FourthDepartment=$_POST['FourthDepartment'];
	$FifthName=$_POST['FifthName'];
	$FifthCodeNumber=$_POST['FifthCodeNumber'];
	$FifthDepartment=$_POST['FifthDepartment'];
	$ApprovalStatus=$_POST['ApprovalStatus'];
	
	
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
        $mail->Body    = 'Action has been taken on requested loan, Visit your Dashboard for more details.';
 
        $mail->send();
	
	$approve_loan = $con->prepare("UPDATE tblloans SET  `Code_Number` = ?,	`Names` = ?,	`Department` = ?, 
								`ReasonforLoan` = ?, `AmountBorrowed` = ?, `ModeofReturn` = ?, `DateofReturn` = ?, `FirstName` = ?,
								`FirstCodeNumber` = ?, `FirstDepartment` = ?, `SecondName` = ?, `SecondCodeNumber` = ?,
								`SecondDepartment` = ?, `ThirdName` = ?, `ThirdCodeNumber` = ?, `ThirdDepartment` = ?,
								`FourthName`= ?, `FourthCodeNumber` = ?, `FourthDepartment` = ?, `FifthName` = ?, `FifthCodeNumber` = ?,
								`FifthDepartment` = ?, `ApprovalStatus` = ? WHERE Loanid = ?");
	$approve_loan->execute(array($id, $Names, $Department, $ReasonforLoan, $AmountBorrowed, $ModeofReturn, $DateofReturn, $FirstName,
	$FirstCodeNumber, $FirstDepartment, $SecondName, $SecondCodeNumber, $SecondDepartment, $ThirdName, $ThirdCodeNumber, $ThirdDepartment, 
	$FourthName, $FourthCodeNumber, $FourthDepartment, $FifthName, $FifthCodeNumber, $FifthDepartment, $ApprovalStatus, $Loanid));
	header('location:loan.php');

}

?>
