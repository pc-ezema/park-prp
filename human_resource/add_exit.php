<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script>
	function changeFunc() {
	var Reasons = document.getElementById("Reasons");
	var selectedValue = Reasons.options[Reasons.selectedIndex].value;
	if (selectedValue=="others"){
	$('#textbox').show();
	}
	else {
	$('#textbox').hide();
	}
	}
	</script>
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_exit_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Exit Record</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 15px green, 0 0 5px black;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code Number:<input type="text" class="form-control" name="codeid" required></br>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Names:<input type="text" class="form-control" name="names" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit/Department:<input type="text" class="form-control" name="unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date:<input type="date" class="form-control" name="date" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Designation:<textarea type="text" rows="4" class="form-control" name="designation" style="resize:none;"required></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Exit Reasons:
												<select name="exit_reasons" id="Reasons" class="form-control" onchange="changeFunc();" required>
													<option>-- Select --</option>
													<option value="Academy">Academy</option>
													<option value="Health">Health</option>
													<option value="others">Others</option>
												</select>
												<input name="new_exit_reasons" Placeholder="Write Here" class="form-control" type="text" style="display: none;" id="textbox"></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Number of Days Required:<input type="number" class="form-control" name="number_days" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Expected Date of Return:<input type="date" class="form-control" name="expected_date" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br>                   
                                </div>
                            </div>
							<div  class="col-md-6" style="background-color: #ffff; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px black, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address During Exit:<input type="text" class="form-control" name="address_exit" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Next of Kin:<textarea type="text" rows="4" class="form-control" name="next_kin" style="resize:none;"required></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="phone_number" required></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relieving Officer's:<input type="text" class="form-control" name="officer" required></br>
											</span>
										</div>
                                    </div>
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