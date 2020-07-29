<?php
require_once("initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/login.php");
     } 
?>
  
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<title>PSS | PARK ADMINISTRATIVE SERVICES</title>
	<link id="browser_favicon" rel="shortcut icon" href="<?php echo web_root; ?>admin/img/bg/agrologo.jpg">

	</head>
<body>
	<header id="header">
 
        <nav class="navbar navbar-mod navbar-fixed-top" role="banner" style="background-color:green;">
            <div class="container">
                    <a class="navbar-brand" href="../index.php"><img style="width:50px" height="30px" src="<?php echo web_root; ?>admin/img/bg/agrologo.jpg" alt="logo"></a> 
                
                               
            </div><!--/.container-->
        </nav><!--/nav-->
	</header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" ></a>
			<a class="navbar-brand" ></a>
			<a class="navbar-brand" ></a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PSS</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add PSS</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>CodeNumber</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `tblpss`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['CODE']?></td>
					<td><?php echo $fetch['SNAME']?></td>
					<td><?php echo $fetch['ONAME']?></td>				
					<td><center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#view<?php echo $fetch['pssid']?>"><span class="glyphicon glyphicon-ok"></span> View</button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fetch['pssid']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
					<button type="button" class="btn btn-warning"><a href=delpss.php?pssid=<?php echo $fetch['pssid']?></a><span class="glyphicon glyphicon-remove"></span> Delete</button></center></td>

<div class="modal fade" id="view<?php echo $fetch['pssid']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="">
				<div class="modal-header">
					<h3 class="modal-title">View</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<h3>Passport</h3>
							<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['photo']?>"/>
						</div>
						<div class="form-group">
							<label>Code Number</label>
							<input type="hidden" value="<?php echo $fetch['pssid']?>" name="pssid"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODE']?>" name="CODENUMBER" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" value="<?php echo $fetch['SNAME']?>" name="SNAME" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Other Names</label>
							<input type="text" class="form-control" value="<?php echo $fetch['ONAME']?>" name="ONAME" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Home Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HADDRESS']?>" name="HADDRESS" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Sex</label >
							<input type="text" class="form-control" value="<?php echo $fetch['Sex']?>" name="sex" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateofBirth']?>"  name="dob" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>"  name="religion" required="required" readonly />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>"  name="stateoforigin" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Local Governement Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>"  name="lga" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" value="<?php echo $fetch['TELNO']?>"  name="TELNO" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Marital Status</label>
							<input type="text" class="form-control" value="<?php echo $fetch['MaritalStatus']?>"  name="maritalstatus" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Arrival Date</label>
							<input type="date" class="form-control" value="<?php echo $fetch['ArrivalDate']?>" name="arrivaldate" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Farm Experience</label>
							<input type="text" class="form-control" value="<?php echo $fetch['FarmExperience']?>" name="farmexperience" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Skills']?>" name="skills" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Trainings</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Trainings']?>" name="trainings" required="required" readonly />
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" name="accountname" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BankName']?>" name="bankname" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['AccountNumber']?>" name="accountnumber" required="required" readonly />
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Name of Kin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinName']?>" name="kinname" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinRelationship']?>" name="kinrelationship" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Occupation</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinOccupation']?>" name="kinoccupation" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinAddress']?>" name="kinaddress" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required" readonly />
						</div>
						<div class="form-group">
							<label>OFFICE USE ONLY</label>
						</div>
						<div class="form-group">
							<label>Date of Resumption</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateResumption']?>" name="dateresumption" required="required"readonly />
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Department']?>" name="department" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Park Human Resource</label>
							<input type="text" class="form-control" value="<?php echo $fetch['ParkHumanResource']?>" name="parkhr" required="required" readonly />
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
			</form>
		</div>
	</div>
</div>				

<div class="modal fade" id="edit<?php echo $fetch['pssid']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="edit.php">
				<div class="modal-header">
					<h3 class="modal-title">Edit</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<h3>Current Photo</h3>
							<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['photo']?>"/>
							<h3>New Photo</h3>
							<input type="file" class="form-control" name="photo" value="<?php echo $fetch['photo']?>" />
						</div>
						<div class="form-group">
							<label>Code Number</label>
							<input type="hidden" value="<?php echo $fetch['pssid']?>" name="pssid"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODE']?>" name="CODENUMBER" required="required" />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" value="<?php echo $fetch['SNAME']?>" name="SNAME" required="required" />
						</div>
						<div class="form-group">
							<label>Other Names</label>
							<input type="text" class="form-control" value="<?php echo $fetch['ONAME']?>" name="ONAME" required="required" />
						</div>
						<div class="form-group">
							<label>Home Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HADDRESS']?>" name="HADDRESS" required="required" />
						</div>
						<div class="form-group">
							<label>Sex</label></br>
							<select name="sex" class="form-control">
							<option><?php echo $fetch['Sex']?></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<!-- <option value="Third" >Third</option> -->
							</select> 
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateofBirth']?>"  name="dob" required="required" />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>"  name="religion" required="required" />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>"  name="stateoforigin" required="required" />
						</div>
						<div class="form-group">
							<label>Local Governement Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>"  name="lga" required="required" />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" value="<?php echo $fetch['TELNO']?>"  name="TELNO" required="required" />
						</div>
						<div class="form-group">
							<label>Marital Status</label> </br>
							<select name="maritalstatus" class="form-control">
							<option><?php echo $fetch['MaritalStatus']?></option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select>
						</div>
						<div class="form-group">
							<label>Arrival Date</label>
							<input type="date" class="form-control" value="<?php echo $fetch['ArrivalDate']?>" name="arrivaldate" required="required" />
						</div>
						<div class="form-group">
							<label>Farm Experience</label>
							<input type="text" class="form-control" value="<?php echo $fetch['FarmExperience']?>" name="farmexperience" required="required" />
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Skills']?>" name="skills" required="required" />
						</div>
						<div class="form-group">
							<label>Trainings</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Trainings']?>" name="trainings" required="required" />
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" name="accountname" required="required" />
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BankName']?>" name="bankname" required="required" />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['AccountNumber']?>" name="accountnumber" required="required" />
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Name of Kin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinName']?>" name="kinname" required="required" />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinRelationship']?>" name="kinrelationship" required="required" />
						</div>
						<div class="form-group">
							<label>Kin Occupation</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinOccupation']?>" name="kinoccupation" required="required" />
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinAddress']?>" name="kinaddress" required="required" />
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required" />
						</div>
						<div class="form-group">
							<label>OFFICE USE ONLY</label>
						</div>
						<div class="form-group">
							<label>Date of Resumption</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateResumption']?>" name="dateresumption" required="required" />
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Department']?>" name="department" required="required" />
						</div>
						<div class="form-group">
							<label>Park Human Resource</label>
							<input type="text" class="form-control" value="<?php echo $fetch['ParkHumanResource']?>" name="parkhr" required="required" />
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
				</div>
			</form>
		</div>
	</div>
</div>				
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Add PSS</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Passport</label>
							<input type="file" class="form-control" name="photo" required="required"/>
						</div>
						<div class="form-group">
							<label>Code Number</label>
							<input type="text" class="form-control" name="CODENUMBER" required="required"/>
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" name="SNAME" required="required"/>
						</div>
						<div class="form-group">
							<label>Other Names</label>
							<input type="text" class="form-control" name="ONAME" required="required"/>
						</div>
						<div class="form-group">
							<label>Home Address</label>
							<input type="text" class="form-control" name="HADDRESS" required="required"/>
						</div>
						<div class="form-group">
							<label>Sex</label></br>
							<select name="sex" class="form-control">
							<option value="none" >Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<!-- <option value="Third" >Third</option> -->
							</select> 
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" name="dob" required="required"/>
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" name="religion" required="required"/>
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" name="stateoforigin" required="required"/>
						</div>
						<div class="form-group">
							<label>Local Governement Area</label>
							<input type="text" class="form-control" name="lga" required="required"/>
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" name="TELNO" required="required"/>
						</div>
						<div class="form-group">
							<label>Marital Status</label> </br>
							<select name="maritalstatus" class="form-control">
							<option value="none" >Select</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select>
						</div>
						<div class="form-group">
							<label>Arrival Date</label>
							<input type="date" class="form-control" name="arrivaldate" required="required"/>
						</div>
						<div class="form-group">
							<label>Farm Experience</label>
							<input type="text" class="form-control" name="farmexperience" required="required"/>
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" name="skills" required="required"/>
						</div>
						<div class="form-group">
							<label>Trainings</label>
							<input type="text" class="form-control" name="trainings" required="required"/>
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" name="accountname" required="required"/>
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" name="bankname" required="required"/>
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" name="accountnumber" required="required"/>
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Name of Kin</label>
							<input type="text" class="form-control" name="kinname" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" name="kinrelationship" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Occupation</label>
							<input type="text" class="form-control" name="kinoccupation" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" name="kinaddress" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" name="kinphonenumber" required="required"/>
						</div>
						<div class="form-group">
							<label>OFFICE USE ONLY</label>
						</div>
						<div class="form-group">
							<label>Date of Resumption</label>
							<input type="date" class="form-control" name="dateresumption" required="required"/>
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" class="form-control" name="department" required="required"/>
						</div>
						<div class="form-group">
							<label>Park Human Resource</label>
							<input type="text" class="form-control" name="parkhr" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>