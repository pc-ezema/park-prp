<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM hrcomplaintslog WHERE i_id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_complain_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Complain</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 5px blue, 0 0 5px darkblue;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date:<input type="hidden" name="id"  value="<?php echo $row['i_id']; ?>">
												<input type="date" class="form-control" name="date" value="<?php echo $row['Date']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="name" value="<?php echo $row['Names']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Hostel/Department/Unit:<input type="text" class="form-control" name="hostel_department_unit" value="<?php echo $row['HostelDepartmentUnit']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="phone_number" value="<?php echo $row['PhoneNo']; ?>" required></br>
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
                                                Complains:<textarea type="text" rows="4" class="form-control" name="complains" style="resize:none;"required><?php echo $row['Complaints']; ?></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Action Plan:<textarea type="text" rows="4" class="form-control" name="action_plan" style="resize:none;"required><?php echo $row['ActionPlan']; ?></textarea></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Officer In Charge:<input type="text" class="form-control" name="officer_in_charge" value="<?php echo $row['OfficeInCharge']; ?>" required></br>
											</span>
										</div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" rows="4" class="form-control" name="remark" style="resize:none;"><?php echo $row['Remarks']; ?></textarea></br>
											</span>
										</div>
                                    </div>
                                </div>  
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