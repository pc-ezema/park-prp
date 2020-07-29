<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_loan_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Loan</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px black, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                CODE ID:<input type="text" class="form-control" name="codeid" required></br>
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
                                                Department/Unit:<input type="text" class="form-control" name="department" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Reasons For Loan:<textarea type="text" rows="4" class="form-control" name="reasonsforloan" style="resize:none;" required></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount Borrowed:<input type="text" class="form-control" name="amountborrowed" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Mode of Return:<input type="text" class="form-control" name="modeofreturn" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Return:<input type="date" class="form-control" name="dateofreturn" required></br>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>                  
                                </div>
                            </div>			
							
							<div  class="col-md-6" style="background-color: #ffff; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px black, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<center>GUARANTORS</center></br>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">FIRST</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="firstname" placeholder="Name" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="firstcodenumber" placeholder="Code Number" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="firstdepartment" placeholder="Department/Unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">SECOND</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="secondname" placeholder="Name" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="secondcodenumber" placeholder="Code Number" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="seconddepartment" placeholder="Department/Unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">THIRD</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirdname" placeholder="Name" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirdcodenumber" placeholder="Code Number" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirddepartment" placeholder="Department/Unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">FOURTH</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthname" placeholder="Name" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthcodenumber" placeholder="Code Number" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthdepartment" placeholder="Department/Unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">FIFTH</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthname" placeholder="Name" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthcodenumber" placeholder="Code Number" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthdepartment" placeholder="Department/Unit" required></br>
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