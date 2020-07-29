<?php 
  if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
   }


 ?> 
 
  <div class="container">
  <div class="card card-register mx-auto mt-2">
    <div class="card-header">Add new Contractor/Artisan(s)</div>
    <div class="card-body">  
	<form method="POST" action="save.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
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
							<label>Sex</label >
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
							<label>Marital Status</label>
							<select name="maritalstatus" class="form-control">
							<option value="none" >Select</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow" >Widow</option>
							<!-- <option value="Fourth" >Fourth</option> -->
							</select> 
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" name="skills" required="required"/>
						</div>
						<div class="form-group">
							<label>Work Area</label>
							<input type="text" class="form-control" name="workarea" required="required"/>
						</div>
						<div class="form-group">
							<label>BANK DETAILS</label>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" name="accountname" />
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="number" class="form-control" name="accountnumber" />
						</div>
						<div class="form-group">
							<label>Bank Name</label>
							<input type="text" class="form-control" name="bankname" />
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
							<label>Date Resumption</label>
							<input type="date" class="form-control" name="dateresumption" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-primary btn-block" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save Contractor</button>
				</div>
			</form>
             </div>
    </div>
  </div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
		</div>
	</div>
</div>