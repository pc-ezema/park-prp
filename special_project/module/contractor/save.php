<?php
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$CODENUMBER=$_POST['CODENUMBER'];
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
		$Skills=$_POST['skills'];
		$WorkArea=$_POST['workarea'];
		$AccountName=$_POST['accountname'];
		$AccountNumber=$_POST['accountnumber'];
		$BankName=$_POST['bankname'];
		$KinName=$_POST['kinname'];
		$KinRelationship=$_POST['kinrelationship'];
		$KinOccupation=$_POST['kinoccupation'];
		$KinAddress=$_POST['kinaddress'];
		$KinPhoneNumber=$_POST['kinphonenumber'];
		$DateResumption=$_POST['dateresumption'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `tblcontractors` VALUES('', '$CODENUMBER', '$SNAME','$ONAME','$HADDRESS','$Sex',
							'$DateofBirth', '$Religion', '$StateofOrigin', '$LGA', '$TELNO', '$MaritalStatus', '$Skills', '$WorkArea', '$AccountName', '$AccountNumber', '$BankName',
							'$KinName', '$KinRelationship', '$KinOccupation', '$KinAddress', '$KinPhoneNumber', 
							'$DateResumption', '$path')") or die(mysqli_error());
				echo "<script>alert('Contractor Successfully Saved!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>