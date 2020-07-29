<?php
include('../connect.php');
if(isset($_POST['save'])) {
	$image_name = $_FILES['photo']['name'];
	$image_temp = $_FILES['photo']['tmp_name'];
	$CODE=$_POST['CODENUMBER'];
	$LNAME=$_POST['LNAME'];
	$FNAME=$_POST['FNAME'];
	$MNAME=$_POST['MNAME'];
	$HADDRESS=$_POST['HADDRESS'];
	$DateofBirth=$_POST['dob'];
	$Religion=$_POST['religion'];
	$StateofOrigin=$_POST['stateoforigin'];
	$Sex=$_POST['sex'];
	$LGA=$_POST['lga'];
	$TELNO=$_POST['TELNO'];
	$MaritalStatus=$_POST['maritalstatus'];
	$ArrivalDate=$_POST['arrivaldate'];
	$NameInstitution=$_POST['nameinstitution'];
	$Course=$_POST['course'];
	$Siwes=$_POST['siwes'];
	$Account=$_POST['account'];
	$Training=$_POST['training'];
	$Name=$_POST['name'];
	$Relationship=$_POST['relationship'];
	$KinAddress=$_POST['address'];
	$PhoneNumber=$_POST['phonenumber'];
	$DateResumption=$_POST['dateresumption'];
	$Department=$_POST['department'];
	$FarmSupervisor=$_POST['farmsupervisor'];
	$exp = explode(".", $image_name);
	$end = end($exp);
	$name = time().".".$end;
	$path = "../upload/intern/".$name;
	$allowed_ext = array("gif", "jpg", "jpeg", "png");
	if(in_array($end, $allowed_ext)){
		if(move_uploaded_file($image_temp, $path)){
	   $add = $con->prepare("INSERT INTO tblsiwes (CODE, LNAME, FNAME, MNAME, HADDRESS, DateofBirth, Religion, StateofOrigin, Sex, LGA, TELNO, CIVILSTATUS, ArrivalDate, 
							NameInstitution, Course, Siwes, Account, Training, Name, Relationship, KinAddress, PhoneNumber, DateResumption,
							Department, FarmSupervisor, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$add->execute(array($CODE, $LNAME, $FNAME, $MNAME, $HADDRESS, $DateofBirth, $Religion, $StateofOrigin, $Sex, $LGA, $TELNO, $MaritalStatus, $ArrivalDate, $NameInstitution,
						$Course, $Siwes, $Account, $Training, $Name, $Relationship, $KinAddress, $PhoneNumber, $DateResumption, $Department, 
						$FarmSupervisor, $path));

	echo "<script>alert('INTERN Successfully Saved!')</script>";
	header('location:../intern.php');
	}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
}
?>
