<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
<div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> List of Contractors/Artisan(s)   <a href="index.php?view=add" class="btn btn-primary  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></div>

         
        <div class="card-body">
          <div class="table-responsive">
	 		    <form action="" Method="POST">  
			    		
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
				  <thead>
				  	<tr>
				  	<!-- 	<th>Code</th> -->
				  		<th>Photo</th>
						<th>Code Number</th>
				  		<th>SurName</th>
						<th>Other Names</th>
						 <th width="20%" >Action</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  
				  	<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `tblcontractors` ORDER BY contractorid DESC") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['CODENUMBER']?></td>
					<td><?php echo $fetch['SNAME']?></td>
					<td><?php echo $fetch['ONAME']?></td>		
					<td><center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#view<?php echo $fetch['contractorid']?>"></span> View</button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fetch['contractorid']?>">Edit</button>
					<button type="button" class="btn btn-warning"><a href=del.php?contractorid=<?php echo $fetch['contractorid']?></a> Delete</button></center></td>

<div class="modal fade" id="view<?php echo $fetch['contractorid']?>" aria-hidden="true">
<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data" action="">
				<div class="modal-header">
					<h3 class="modal-title">View</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<div class="form-group">
							<h3>Passport</h3>
							<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['photo']?>"/>
						</div>
						<div class="form-group">
							<label>Code Number</label>
							<input type="hidden" value="<?php echo $fetch['contractorid']?>" name="contractorid"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODENUMBER']?>" name="CODENUMBER" required="required" readonly />
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
							<input type="text" class="form-control" value="<?php echo $fetch['DateofBirth']?>"  name="dob" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>"  name="religion" required="required" readonly />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>"  readonly />
						</div>
						<div class="form-group">
							<label>Local Governement Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>" readonly />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="text" class="form-control" value="<?php echo $fetch['TELNO']?>" readonly />
						</div>
						<div class="form-group">
							<label>Marital Status</label>
							<input type="text" class="form-control" value="<?php echo $fetch['MaritalStatus']?>" readonly />
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Skills']?>" readonly />
						</div>
						<div class="form-group">
							<label>Work Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['WorkArea']?>"  readonly />
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" readonly />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountNumber']?>" readonly />
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BankName']?>" readonly />
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
							<input type="text" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required" readonly />
						</div>
						<div class="form-group">
							<label>Date of Resumption</label>
							<input type="text" class="form-control" value="<?php echo $fetch['DateResumption']?>" name="dateresumption" required="required"readonly />
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

<div class="modal fade" id="edit<?php echo $fetch['contractorid']?>" aria-hidden="true">
<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data" action="edit.php">
				<div class="modal-header">
					<h3 class="modal-title">Edit</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<div class="form-group">
							<h3>Current Photo</h3>
							<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['photo']?>"/>
							<h3>New Photo</h3>
							<input type="file" class="form-control" name="photo" value="<?php echo $fetch['photo']?>" />
						</div>
						<div class="form-group">
							<label>Code Number</label>
							<input type="hidden" value="<?php echo $fetch['contractorid']?>" name="contractorid"/>
							<input type="text" class="form-control" value="<?php echo $fetch['CODENUMBER']?>" name="CODENUMBER" required="required"  />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" value="<?php echo $fetch['SNAME']?>" name="SNAME" required="required"  />
						</div>
						<div class="form-group">
							<label>Other Names</label>
							<input type="text" class="form-control" value="<?php echo $fetch['ONAME']?>" name="ONAME" required="required"  />
						</div>
						<div class="form-group">
							<label>Home Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['HADDRESS']?>" name="HADDRESS" required="required"  />
						</div>
						<div class="form-group">
							<label>Sex</label >
							<select name="sex" class="form-control">
							<option><?php echo $fetch['Sex']?></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<!-- <option value="Third" >Third</option> -->
							</select> 
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateofBirth']?>"  name="dob" required="required"  />
						</div>
						<div class="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Religion']?>"  name="religion" required="required"  />
						</div>
						<div class="form-group">
							<label>State of Origin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['StateofOrigin']?>"  name="stateoforigin" required="required"  />
						</div>
						<div class="form-group">
							<label>Local Governement Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['LGA']?>"  name="lga" required="required"  />
						</div>
						<div class="form-group">
							<label>Contact No.</label>
							<input type="number" class="form-control" value="<?php echo $fetch['TELNO']?>"  name="TELNO" required="required"  />
						</div>
						<div class="form-group">
							<label>Marital Status</label>
							<select name="maritalstatus" class="form-control">
							<option><?php echo $fetch['MaritalStatus']?></option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select> 
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" value="<?php echo $fetch['Skills']?>" name="skills" required="required"  />
						</div>
						<div class="form-group">
							<label>Work Area</label>
							<input type="text" class="form-control" value="<?php echo $fetch['WorkArea']?>" name="workarea" required="required"  />
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountName']?>" name="accountname" />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="text" class="form-control" value="<?php echo $fetch['AccountNumber']?>" name="accountnumber" />
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" value="<?php echo $fetch['BankName']?>" name="bankname" />
						</div>
						<div class="form-group">
							<label>NEXT OF KIN DETAILS</label>
						</div>
						<div class="form-group">
							<label>Name of Kin</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinName']?>" name="kinname" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Relationship</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinRelationship']?>" name="kinrelationship" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Occupation</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinOccupation']?>" name="kinoccupation" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Address</label>
							<input type="text" class="form-control" value="<?php echo $fetch['KinAddress']?>" name="kinaddress" required="required"  />
						</div>
						<div class="form-group">
							<label>Kin Phone Number</label>
							<input type="number" class="form-control" value="<?php echo $fetch['KinPhoneNumber']?>" name="kinphonenumber" required="required"  />
						</div>
						<div class="form-group">
							<label>Date of Resumption</label>
							<input type="date" class="form-control" value="<?php echo $fetch['DateResumption']?>" name="dateresumption" required="required" />
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



			
</div>	
			
					</tbody>
				  </tr>
				<?php
					}
				?>
				 
				</table>
			
				</form>
	
       </div>
        </div>
      
      </div>