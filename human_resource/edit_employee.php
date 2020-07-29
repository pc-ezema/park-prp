<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_non-compliance_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Leave</h4>
                            </div>
							<div  class="col-md-6" style="background-color: #ddd; ">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Person Reporting:<input type="text" class="form-control" name="Person_Reporting" required>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" rows="4" class="form-control" name="remark" style="resize:none;" ></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br>                   
                                </div>
                            </div>
							
							<div  class="col-md-6" style="background-color: #ffff;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Person Reporting:<input type="text" class="form-control" name="Person_Reporting" required>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" rows="4" class="form-control" name="remark" style="resize:none;" ></textarea>
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