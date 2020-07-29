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
		<title>CORP MEMBER | PARK ADMINISTRATIVE SERVICES</title>
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
			<a class="navbar-brand">PARK ADMINISTRATIVE SYSTEM</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">CORP MEMBERS</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add CORP MEMBER</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Code Number</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `tblcorper`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['CODE']?></td>
					<td><?php echo $fetch['FNAME']?></td>
					<td><?php echo $fetch['SNAME']?></td>				
					<td><center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#view<?php echo $fetch['corperid']?>"><span class="glyphicon glyphicon-edit"></span> View</button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fetch['corperid']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
					<button type="button" class="btn btn-warning"><a href=delcorper.php?corperid=<?php echo $fetch['corperid']?></a><span class="glyphicon glyphicon-remove"></span> Delete</button></center></td>

<div class="modal fade" id="view<?php echo $fetch['corperid']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="edit.php">
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
							<input type="hidden" value="<?php echo $fetch['corperid']?>" name="user_id"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODE']?>" name="CODENUMBER" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" value="<?php echo $fetch['SNAME']?>" name="SNAME" required="required" readonly />
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['FNAME']?>" name="MNAME" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Middle Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['MNAME']?>" name="MNAME" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateofBirth']?>" name="dob" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>" name="religion" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Place of Birth</label>
							<input type="text" class="form-control" value="<?php echo $fetch['PlaceofBirth']?>" name="placeofbirth" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Country']?>" name="country" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Sex</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Sex']?>" name="sex" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Nationality</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Nationality']?>" name="nationality" required="required" readonly />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>" name="stateoforigin" required="required" readonly />
						</div>
						<div class="form-group">
							<label>LGA</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>" name="lga" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Home Place (Town/Village of Origin)</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HomePlace']?>" name="homeplace" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Residential Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['RADDRESS']?>" name="RADDRESS" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" value="<?php echo $fetch['TELNO']?>" name="TELNO" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" value="<?php echo $fetch['Email']?>" name="email" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Marital Status</label>
							<input type="text" class="form-control" value="<?php echo $fetch['MaritalStatus']?>" name="maritalstatus" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Any Known Health Limitations</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HealthLimitations']?>" name="healthlimitations" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Blood Group</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BloodGroup']?>" name="bloodgroup" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Geneotype</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Geneotype']?>" name="geneotype" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Highest Level of Education</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LevelEducation']?>" name="leveleducation" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Institution Attended</label>
							<input type="text" class="form-control" value="<?php echo $fetch['InstitutionAttended']?>" name="institutionattended" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Course of Study</label>
							<input type="text" class="form-control" value="<?php echo $fetch['CourseofStudy']?>" name="courseofstudy" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Cordinator Name/Number</label>
							<input type="text" class="form-control" value="<?php echo $fetch['CoordinatorName']?>" name="coordinatornn" required="required" readonly />
						</div>
						<div class="form-group">
							<label>ACCOUNT DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" name="accountname" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['AccountNumber']?>" name="accountnumber" required="required" readonly />
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Kin Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinName']?>" name="kinname" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinRelationship']?>" name="kinrelationship" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinAddress']?>" name="kinaddress" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required" readonly />
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

<div class="modal fade" id="edit<?php echo $fetch['corperid']?>" aria-hidden="true">
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
							<input type="hidden" value="<?php echo $fetch['corperid']?>" name="corperid"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODE']?>" name="CODENUMBER" required="required"  />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" value="<?php echo $fetch['SNAME']?>" name="SNAME" required="required"  />
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['FNAME']?>" name="FNAME" required="required"  />
						</div>
						<div class="form-group">
							<label>Middle Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['MNAME']?>" name="MNAME" required="required"  />
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateofBirth']?>" name="dob" required="required"  />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>" name="religion" required="required" />
						</div>
						<div class="form-group">
							<label>Place of Birth</label>
							<input type="text" class="form-control" value="<?php echo $fetch['PlaceofBirth']?>" name="placeofbirth" required="required"  />
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Country']?>" name="country" required="required"  />
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
							<label>Nationality</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Nationality']?>" name="nationality" required="required"  />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>" name="stateoforigin" required="required"  />
						</div>
						<div class="form-group">
							<label>LGA</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>" name="lga" required="required" />
						</div>
						<div class="form-group">
							<label>Home Place (Town/Village of Origin)</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HomePlace']?>" name="homeplace" required="required" />
						</div>
						<div class="form-group">
							<label>Residential Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['RADDRESS']?>" name="RADDRESS" required="required"  />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" value="<?php echo $fetch['TELNO']?>" name="TELNO" required="required" />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" value="<?php echo $fetch['Email']?>" name="email" required="required"  />
						</div>
						<div class="form-group">
							<label>Marital Status</label></br>
							<select name="maritalstatus" class="form-control">
							<option><?php echo $fetch['MaritalStatus']?></option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select>
						</div>
						<div class="form-group">
							<label>Any Known Health Limitations</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HealthLimitations']?>" name="healthlimitations" required="required"  />
						</div>
						<div class="form-group">
							<label>Blood Group</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BloodGroup']?>" name="bloodgroup" required="required"  />
						</div>
						<div class="form-group">
							<label>Geneotype</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Geneotype']?>" name="geneotype" required="required"  />
						</div>
						<div class="form-group">
							<label>Highest Level of Education</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LevelEducation']?>" name="leveleducation" required="required"  />
						</div>
						<div class="form-group">
							<label>Institution Attended</label>
							<input type="text" class="form-control" value="<?php echo $fetch['InstitutionAttended']?>" name="institutionattended" required="required"  />
						</div>
						<div class="form-group">
							<label>Course of Study</label>
							<input type="text" class="form-control" value="<?php echo $fetch['CourseofStudy']?>" name="courseofstudy" required="required"  />
						</div>
						<div class="form-group">
							<label>Cordinator Name/Number</label>
							<input type="text" class="form-control" value="<?php echo $fetch['CoordinatorName']?>" name="coordinatornn" required="required"  />
						</div>
						<div class="form-group">
							<label>ACCOUNT DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" name="accountname" required="required"  />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['AccountNumber']?>" name="accountnumber" required="required"  />
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Kin Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinName']?>" name="kinname" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinRelationship']?>" name="kinrelationship" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinAddress']?>" name="kinaddress" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required"  />
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
					<h3 class="modal-title">Add CORP MEMBERS</h3>
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
							<label>Firstname</label>
							<input type="text" class="form-control" name="FNAME" required="required"/>
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" name="SNAME" required="required"/>
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" name="MNAME" required="required"/>
						</div>
						<div class="form-group">
							<label>Middle Name</label>
							<input type="text" class="form-control" name="MNAME" required="required"/>
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
							<label>Place of Birth</label>
							<input type="text" class="form-control" name="placeofbirth" required="required" />
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" class="form-control" name="country" required="required"/>
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
							<label>Nationality</label>
							<input type="text" class="form-control" name="nationality" required="required"/>
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" name="stateoforigin" required="required"/>
						</div>
						<div class="form-group">
							<label>LGA</label>
							<input type="text" class="form-control" name="lga" required="required"/>
						</div>
						<div class="form-group">
							<label>Home Place (Town/Village of Origin)</label>
							<input type="text" class="form-control" name="homeplace" required="required"/>
						</div>
						<div class="form-group">
							<label>Residential Address</label>
							<input type="text" class="form-control" name="RADDRESS" required="required"/>
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" name="TELNO" required="required"/>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" required="required"/>
						</div>
						<div class="form-group">
							<label>Marital Status</label></br>
							<select name="maritalstatus" class="form-control">
							<option value="none" >Select</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select>
						</div>
						<div class="form-group">
							<label>Any Known Health Limitations</label>
							<input type="text" class="form-control" name="healthlimitations" required="required"/>
						</div>
						<div class="form-group">
							<label>Blood Group</label>
							<input type="text" class="form-control" name="bloodgroup" required="required"/>
						</div>
						<div class="form-group">
							<label>Geneotype</label>
							<input type="text" class="form-control" name="geneotype" required="required"/>
						</div>
						<div class="form-group">
							<label>Highest Level of Education</label>
							<input type="text" class="form-control" name="leveleducation" required="required"/>
						</div>
						<div class="form-group">
							<label>Institution Attended</label>
							<input type="text" class="form-control" name="institutionattended" required="required"/>
						</div>
						<div class="form-group">
							<label>Course of Study</label>
							<input type="text" class="form-control" name="courseofstudy" required="required"/>
						</div>
						<div class="form-group">
							<label>Cordinator Name/Number</label>
							<input type="text" class="form-control" name="coordinatornn" required="required"/>
						</div>
						<div class="form-group">
							<label>ACCOUNT DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" name="accountname" required="required"/>
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" name="accountnumber" required="required"/>
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Kin Name</label>
							<input type="text" class="form-control" name="kinname" required="required" />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" name="kinrelationship" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" name="kinaddress" required="required"/>
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" name="kinphonenumber" required="required"/>
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