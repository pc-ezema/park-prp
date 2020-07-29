<?php
	require_once 'conn.php';
	if(ISSET($_POST['edit'])){
		$contractorid = $_POST['contractorid'];
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
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `tblcontractors` set `CODENUMBER` = '$CODENUMBER', `SNAME` = '$SNAME', `ONAME` = '$ONAME',
							`HADDRESS` = '$HADDRESS', `Sex` = '$Sex', `DateofBirth` = '$DateofBirth', `Religion` = '$Religion', 
							`StateofOrigin` = '$StateofOrigin', `LGA` = '$LGA', `TELNO` = '$TELNO', `MaritalStatus` = '$MaritalStatus', 
							`Skills` = '$Skills', `WorkArea` = '$WorkArea', `AccountName` = '$AccountName', `AccountNumber` = '$BankName', 
							`KinName` = '$KinName', `KinRelationship` = '$KinRelationship', 
							`KinOccupation` = '$KinOccupation', `KinAddress` = '$KinAddress', `KinPhoneNumber` = '$KinPhoneNumber', 
							`DateResumption` = '$DateResumption', `photo` = '$path' WHERE `contractorid` = '$contractorid'") or die(mysqli_error());
					echo "<script>alert('CONTRACTOR updated!')</script>";
					header("location: index.php");
				}
			}		
		}else{
			echo "<script>alert('Add image to update! Try Again.')</script>";
			
		}
	}
?>