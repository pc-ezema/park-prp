<?php
	require_once 'conn.php';
	if(ISSET($_POST['edit'])){
		$Siwesid = $_POST['Siwesid'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$CODE = $_POST['CODENUMBER'];
		$FNAME = $_POST['FNAME'];
		$LNAME = $_POST['LNAME'];
		$MNAME = $_POST['MNAME'];
		$HADDRESS = $_POST['HADDRESS'];
		$DateofBirth = $_POST['dob'];
		$Religion = $_POST['religion'];
		$StateofOrigin = $_POST['stateoforigin'];
		$Sex = $_POST['sex'];
		$LGA = $_POST['lga'];
		$TELNO = $_POST['TELNO'];
		$CIVILSTATUS = $_POST['CIVILSTATUS'];
		$ArrivalDate = $_POST['arrivaldate'];
		$NameInstitution = $_POST['nameinstitution'];
		$Course = $_POST['course'];
		$Siwes = $_POST['siwes'];
		$Account = $_POST['account'];
		$Training = $_POST['training'];
		$Name = $_POST['name'];
		$Relationship = $_POST['relationship'];
		$KinAddress = $_POST['kinaddress'];
		$PhoneNumber = $_POST['phonenumber'];
		$DateResumption = $_POST['dateresumption'];
		$Department = $_POST['department'];
		$FarmSupervisor = $_POST['farmsupervisor'];
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `tblsiwes` set `CODE` = '$CODE', `FNAME` = '$FNAME', `LNAME` = '$LNAME',
								`MNAME` = '$MNAME', `HADDRESS` = '$HADDRESS', `DateofBirth` = '$DateofBirth',
								`Religion` = '$Religion', `StateofOrigin` = '$StateofOrigin', `Sex` = '$Sex', `LGA` = '$LGA', 
								`TELNO` = '$TELNO', `CIVILSTATUS` = '$CIVILSTATUS', `ArrivalDate` = '$ArrivalDate', `NameInstitution` = '$NameInstitution', 
								`Course` = '$Course', `Siwes` = '$Siwes', `Account` = '$Account', `Training` = '$Training', 
								`Name` = '$Name', `Relationship` = '$Relationship', `KinAddress` = '$KinAddress', `PhoneNumber` = '$PhoneNumber', 
								`DateResumption` = '$DateResumption', `Department` = '$Department', `FarmSupervisor` = '$FarmSupervisor',
								`photo` = '$path' WHERE `Siwesid` = '$Siwesid'") or die(mysqli_error());
					echo "<script>alert('INTERN updated!')</script>";
					header("location: index.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>