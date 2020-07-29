<?php
	require_once 'conn.php';
	if(ISSET($_POST['edit'])){
		$pssid = $_POST['pssid'];
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
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `tblpss` set `CODE` = '$CODE', `SNAME` = '$SNAME', `ONAME` = '$ONAME',
							`HADDRESS` = '$HADDRESS', `Sex` = '$Sex', `DateofBirth` = '$DateofBirth', `Religion` = '$Religion', 
							`StateofOrigin` = '$StateofOrigin', `LGA` = '$LGA', `TELNO` = '$TELNO', `MaritalStatus` = '$MaritalStatus', 
							`ArrivalDate` = '$ArrivalDate', `FarmExperience` = '$FarmExperience', `Skills` = '$Skills', `Trainings` = '$Trainings',
							`AccountName` = '$AccountName', `BankName` = '$BankName', `AccountNumber` = '$AccountNumber', `KinName` = '$KinName', 
							`KinRelationship` = '$KinRelationship', `KinOccupation` = '$KinOccupation', `KinAddress` = '$KinAddress', `KinPhoneNumber` = '$KinPhoneNumber', 
							`DateResumption` = '$DateResumption', `Department` = '$Department', `ParkHumanResource` = '$ParkHumanResource', `photo` = '$path' WHERE `pssid` = '$pssid'") or die(mysqli_error());
					echo "<script>alert('PSS updated!')</script>";
					header("location: index.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>