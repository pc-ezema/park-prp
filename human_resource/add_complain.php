<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_complain_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Complain</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 15px green, 0 0 5px black;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
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
                                                Name:<input type="text" class="form-control" name="name" required></br>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Hostel/Department/Unit:<input type="text" class="form-control" name="hostel_department_unit" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="phone_number" required></br>
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
                                                Complains:<textarea type="text" rows="4" class="form-control" name="complains" style="resize:none;"required></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Action Plan:<textarea type="text" rows="4" class="form-control" name="action_plan" style="resize:none;"required></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Officer In Charge:<input type="text" class="form-control" name="officer_in_charge" required></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" rows="4" class="form-control" name="remark" style="resize:none;"></textarea></br>
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