<?php
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$CODE=$_POST['CODENUMBER'];
		$FNAME=$_POST['FNAME'];
		$LNAME=$_POST['LNAME'];
		$MNAME=$_POST['MNAME'];
		$HADDRESS=$_POST['HADDRESS'];
		$DateofBirth=$_POST['dob'];
		$Religion=$_POST['religion'];
		$StateofOrigin=$_POST['stateoforigin'];
		$Sex=$_POST['sex'];
		$LGA=$_POST['lga'];
		$TELNO=$_POST['TELNO'];
		$CIVILSTATUS=$_POST['CIVILSTATUS'];
		$ArrivalDate=$_POST['arrivaldate'];
		$NameInstitution=$_POST['nameinstitution'];
		$Course=$_POST['course'];
		$Siwes=$_POST['siwes'];
		$Account=$_POST['account'];
		$Training=$_POST['training'];
		$Name=$_POST['name'];
		$Relationship=$_POST['relationship'];
		$KinAddress=$_POST['kinaddress'];
		$PhoneNumber=$_POST['phonenumber'];
		$DateResumption=$_POST['dateresumption'];
		$Department=$_POST['department'];
		$FarmSupervisor=$_POST['farmsupervisor'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `tblsiwes` VALUES('', '$CODE','$FNAME','$LNAME','$MNAME', '$HADDRESS', '$DateofBirth',
							'$Religion', '$StateofOrigin', '$Sex', '$LGA', '$TELNO', '$CIVILSTATUS', '$ArrivalDate', '$NameInstitution', '$Course', '$Siwes',
							'$Account', '$Training', '$Name', '$Relationship', '$KinAddress', '$PhoneNumber', '$DateResumption', '$Department', '$FarmSupervisor',
							'$path')") or die(mysqli_error());
				echo "<script>alert('SIWES Successfully Created!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>