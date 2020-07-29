<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$image_name = $_FILES['photo']['name'];
	$image_temp = $_FILES['photo']['tmp_name'];
	$CODE=$_POST['CODENUMBER'];
	$SNAME=$_POST['SNAME'];
	$FNAME=$_POST['FNAME'];
	$MNAME=$_POST['MNAME'];
	$DateofBirth=$_POST['dob'];
	$Religion=$_POST['religion'];
	$PlaceofBirth=$_POST['placeofbirth'];
	$Country=$_POST['country'];
	$Sex=$_POST['sex'];
	$Nationality=$_POST['nationality'];
	$StateofOrigin=$_POST['stateoforigin'];
	$LGA=$_POST['lga'];
	$HomePlace=$_POST['homeplace'];
	$RADDRESS=$_POST['RADDRESS'];
	$TELNO=$_POST['TELNO'];
	$Email=$_POST['email'];
	$MaritalStatus=$_POST['maritalstatus'];
	$HealthLimitations=$_POST['healthlimitations'];
	$BloodGroup=$_POST['bloodgroup'];
	$Geneotype=$_POST['geneotype'];
	$LevelEducation=$_POST['leveleducation'];
	$InstitutionAttended=$_POST['institutionattended'];
	$CourseofStudy=$_POST['courseofstudy'];
	$CoordinatorName=$_POST['coordinatornn'];
	$AccountName=$_POST['accountname'];
	$AccountNumber=$_POST['accountnumber'];
	$KinName=$_POST['kinname'];
	$KinRelationship=$_POST['kinrelationship'];
	$KinAddress=$_POST['kinaddress'];
	$KinPhoneNumber=$_POST['kinphonenumber'];
	$previous = $_POST['previous'];
	$exp = explode(".", $image_name);
	$end = end($exp);
	$name = time().".".$end;
	$path = "../upload/corper/".$name;
	$allowed_ext = array("gif", "jpg", "jpeg", "png");
	if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					$edit = $con->prepare("UPDATE tblcorper SET `CODE` = ?, `SNAME` = ?, `FNAME` = ?, `MNAME` = ?, `DateofBirth` = ?, `Religion` = ?, `PlaceofBirth` = ?, `Country` = ?, 
								`Sex` = ?, `Nationality` = ?, `StateofOrigin` = ?, `LGA` = ?, `HomePlace` = ?, `RADDRESS` = ?, `TELNO` = ?, `Email` = ?, `MaritalStatus` = ?, `HealthLimitations` = ?, 
								`BloodGroup` = ?, `Geneotype` = ?, `LevelEducation` = ?, `InstitutionAttended` = ?, `CourseofStudy` = ?, `CoordinatorName` = ?, `AccountName` = ?, 
								`AccountNumber` = ?, `KinName` = ?, `KinRelationship` = ?, `KinAddress` = ?, `KinPhoneNumber` = ?, `photo` = ? WHERE  corperid= ?");
					$edit->execute(array($CODE, $SNAME, $FNAME, $MNAME, $DateofBirth, $Religion, $PlaceofBirth, $Country, $Sex, $Nationality, $StateofOrigin, $LGA, $HomePlace, $RADDRESS,
						$TELNO, $Email, $MaritalStatus, $HealthLimitations, $BloodGroup, $Geneotype, $LevelEducation, $InstitutionAttended, $CourseofStudy, $CoordinatorName, 
						$AccountName, $AccountNumber, $KinName, $KinRelationship, $KinAddress, $KinPhoneNumber, $path, $id));
		echo "<script>alert('CORP MEMBER updated!')</script>";
	header('location:../corper.php');
	}
		}		
		}else{
			echo "<script>alert('Add Image When Editting and Updating.')</script>";
	}
}
?>