<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_leave_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Leave</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px green, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                CODE ID:<input type="text" class="form-control" name="codeid" required>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Names:<input type="text" class="form-control" name="names" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Leave Entitlement:<textarea type="text" rows="4" class="form-control" name="leaveentitlement" style="resize:none;"required></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Leave Days Spent:<input type="text" class="form-control" name="leavedaysspent" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Commencement Date:<input type="date" class="form-control" name="commencementdate" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Resumption Date:<input type="date" class="form-control" name="resumptiondate" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br>                   
                                </div>
                            </div>
							
							<div  class="col-md-6" style="background-color: #ffff; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px green, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Number of Days Required:<input type="number" class="form-control" name="numberofdaysrequired" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Deduct this Leave from:<input type="text" class="form-control" name="deductleave" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Type of Leave:
												<select name="leavetype" class="form-control" required>
													<option>-- Select --</option>
													<option value="Annual Leave">Annual Leave</option>
													<option value="Casual Leave">Casual Leave</option>
													<option value="Examination Leave">Examination Leave</option>
													<option value="Leave of Absence">Leave of Absense</option>
													<option value="Maternity Leave">Maternity Leave</option>
												</select>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Contact Address:<input type="text" class="form-control" name="contactaddress" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="number" required>
                                            </span>
                                        </div>
                                    </div>									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Reasons:<textarea type="text" rows="4" class="form-control" name="reasons" style="resize:none;" required></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br><input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;"></br>                   
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