<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$image_name = $_FILES['photo']['name'];
	$image_temp = $_FILES['photo']['tmp_name'];
	$CODE=$_POST['CODENUMBER'];
	$SNAME=$_POST['SNAME'];
	$ONAME=$_POST['ONAME'];
	$HADDRESS=$_POST['HADDRESS'];
	$Sex=$_POST['sex'];
	$DateofBirth=$_POST['dob'];
	$Religion=$_POST['religion'];
	$StateofOrigin=$_POST['stateoforigin'];
	$LGA=$_POST['lga'];
	$TELNO=$_POST['TELNO'];
	$MaritalStatus=$_POST['maritalstatus'];
	$ArrivalDate=$_POST['arrivaldate'];
	$FarmExperience=$_POST['farmexperience'];
	$Skills=$_POST['skills'];
	$Trainings=$_POST['trainings'];
	$AccountName=$_POST['accountname'];
	$BankName=$_POST['bankname'];
	$AccountNumber=$_POST['accountnumber'];
	$KinName=$_POST['kinname'];
	$KinRelationship=$_POST['kinrelationship'];
	$KinOccupation=$_POST['kinoccupation'];
	$KinAddress=$_POST['kinaddress'];
	$KinPhoneNumber=$_POST['kinphonenumber'];
	$DateResumption=$_POST['dateresumption'];
	$Department=$_POST['department'];
	$ParkHumanResource=$_POST['parkhr'];
	$exp = explode(".", $image_name);
	$end = end($exp);
	$name = time().".".$end;
	$path = "../upload/pss/".$name;
	$allowed_ext = array("gif", "jpg", "jpeg", "png");
	
	if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
	   $add = $con->prepare("INSERT INTO tblpss (CODE, SNAME, ONAME, HADDRESS, Sex, DateofBirth, Religion, StateofOrigin, LGA, TELNO, MaritalStatus, ArrivalDate, FarmExperience, Skills,  
							Trainings, AccountName, BankName, AccountNumber, KinName, KinRelationship, KinOccupation, KinAddress, KinPhoneNumber, DateResumption,
							Department, ParkHumanResource, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$add->execute(array($CODE, $SNAME, $ONAME, $HADDRESS, $Sex, $DateofBirth, $Religion, $StateofOrigin, $LGA, $TELNO, $MaritalStatus, $ArrivalDate, $FarmExperience, $Skills,
						$Trainings, $AccountName, $BankName, $AccountNumber, $KinName, $KinRelationship, $KinOccupation, $KinAddress, $KinPhoneNumber, $DateResumption, $Department, 
						$ParkHumanResource, $path));

	echo "<script>alert('PSS Successfully Saved!')</script>";
	header('location:../pss.php');
	}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
}
?>
