<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_pss_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add PSS Profile</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 15px green, 0 0 5px black;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Passport:<input type="file" class="form-control" name="photo" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code Number:<input type="text" class="form-control" name="CODENUMBER" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Surname:<input type="text" class="form-control" name="SNAME" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Other Names:<input type="text" class="form-control" name="ONAME" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Home Address:<input type="text" class="form-control" name="HADDRESS" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Sex:
												<select name="sex" class="form-control" required>
													<option>-- Select --</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<!-- <option value="Third" >Third</option> -->
												</select> </br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Birth:<input type="date" class="form-control" name="dob" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Religion:<input type="text" class="form-control" name="religion" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                State of Origin:<input type="text" class="form-control" name="stateoforigin" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Local Governement Area:<input type="text" class="form-control" name="lga" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Contact No.:<input type="number" class="form-control" name="TELNO" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Marital Status:
												<select name="maritalstatus" class="form-control" required>
													<option>-- Select --</option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
													<option value="Widow" >Widow</option>
												</select></br>
											</span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Arrival Date:<input type="date" class="form-control" name="arrivaldate" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Farm Experience:<input type="text" class="form-control" name="farmexperience" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Skills:<input type="text" class="form-control" name="skills" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Trainings:<input type="text" class="form-control" name="trainings" required></br>
                                            </span>
                                        </div>
                                    </div>
                                </div>                   
                                </div>
                            </div>
							<div  class="col-md-6" style="background-color: #ffff; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px black, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">BANK DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Name:<input type="text" class="form-control" name="accountname" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Bank Name:<input type="text" class="form-control" name="bankname" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Number:<input type="number" class="form-control" name="accountnumber" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">NEXT OF KIN DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="kinname" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relationship:<input type="text" class="form-control" name="kinrelationship" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Occupation:<input type="text" class="form-control" name="kinoccupation" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="kinaddress" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="kinphonenumber" required></br>
											</span>
										</div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">OFFICE USE ONLY</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Resumption:<input type="date" class="form-control" name="dateresumption" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Department:<input type="text" class="form-control" name="department" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Park Human Resource:<input type="text" class="form-control" name="parkhr" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
                                </div>  
									</br></br><input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;"></br>                   
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
        </form>
            <!-- #END# Input Group -->           
        </div>
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>