<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblexitform WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="update_exit.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Loan</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 15px white, 0 0 9px black;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code Number:<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
												<input type="text" class="form-control" name="codeid" value="<?php echo $row['code_number']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Names:<input type="text" class="form-control" name="names" value="<?php echo $row['name']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit/Department:<input type="text" class="form-control" name="unit" value="<?php echo $row['unit']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date:<input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Designation:<textarea type="text" rows="4" class="form-control" name="designation" style="resize:none;"readonly><?php echo $row['designation']; ?></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Exit Reasons:
												<input name="exit_reasons" class="form-control" type="text" value="<?php echo $row['exit_reasons']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Number of Days Required:<input type="number" class="form-control" name="number_days" value="<?php echo $row['number_days']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Expected Date of Return:<input type="date" class="form-control" name="expected_date" value="<?php echo $row['expected_dor']; ?>" readonly>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br>                   
                                </div>
                            </div>
							<div  class="col-md-6" style="background-color: blown; color: #ffff; text-shadow: 1px 1px 2px black, 0 0 5px black, 0 0 5px darkgreen;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address During Exit:<input type="text" class="form-control" name="address_exit" value="<?php echo $row['address_exit']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Next of Kin:<textarea type="text" rows="4" class="form-control" name="next_kin" style="resize:none;" readonly><?php echo $row['next_kin']; ?></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="phone_number" value="<?php echo $row['phone_number']; ?>" readonly></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relieving Officer's:<input type="text" class="form-control" name="officer" value="<?php echo $row['relieving_officers']; ?>" readonly></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Return Date: <input type="date" class="form-control" name="returned_on" value="<?php echo $row['returned_on']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Status: 
												<select name="status" class="form-control">
													<option><?php echo $row['status']?></option>
													<option value="Approve">Approve</option>
													<option value="Pending">Pending</option>
													<option value="Others" >Others</option>
												</select>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br>
									</br>
									</br>
									</br><input type="submit" name="update" value="UPDATE" class="btn btn-success" style ="float:right; margin-top: -30px;"></br>                   
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
        </form>
            <!-- #END# Input Group -->           
        </div>
        <?php } ?>
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>
    <script>
        function showImage(src,target) {
          var fr=new FileReader();
          // when image is loaded, set the src of the image where you want to display it
          fr.onload = function(e) { target.src = this.result; };
          src.addEventListener("change",function() {
            // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
          });
        }

        var src = document.getElementById("src");
        var target = document.getElementById("target");
        showImage(src,target);
    </script>
    
<script type="">
    $(function(){
  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
<script type="">
    var Privileges = jQuery('#privileges');
    var select = this.value;
    Privileges.change(function () {
        if ($(this).val() == '') {
            $('.resources').enabled();
        }
        else $('.resources').disabled();
    });
</script>