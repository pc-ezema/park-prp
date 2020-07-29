<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_intern_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Intern Profile</h4>
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
                                                Last Name:<input type="text" class="form-control" name="LNAME" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                First Name:<input type="text" class="form-control" name="FNAME" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Middle Name:<input type="text" class="form-control" name="MNAME" required></br>
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
                                                Name of Institution:<input type="text" class="form-control" name="nameinstitution" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Course of Study:<input type="text" class="form-control" name="course" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                SIWES Cordinator's Name/Number:<input type="text" class="form-control" name="siwes" required></br>
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
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">OTHERS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Details:<textarea type="text" cols="4" class="form-control" name="account" required></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Training Duration:<input type="text" class="form-control" name="training" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">NEXT OF KIN DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="name" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relationship:<input type="text" class="form-control" name="relationship" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="address" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="phonenumber" required></br>
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
                                                Farm Supervisor:<input type="text" class="form-control" name="farmsupervisor" required></br>
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