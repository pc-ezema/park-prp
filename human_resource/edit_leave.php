<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblleaves WHERE LEAVEID='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_leave_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Leave</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 5px blue, 0 0 5px darkblue;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code ID:<input type="hidden" name="id"  value="<?php echo $row['LEAVEID']; ?>">
												<input type="text" class="form-control" name="codeid"  value="<?php echo $row['Code_Number']; ?>" required readonly>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Names:<input type="text" class="form-control" name="names"  value="<?php echo $row['Names']; ?>" required readonly>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Leave Entitlement:<textarea type="text" rows="4" class="form-control" name="leaveentitlement" style="resize:none;" required><?php echo $row['LeaveEntitlement']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Leave Days Spent:<input type="text" class="form-control" name="leavedaysspent" required  value="<?php echo $row['LeaveDaysSpent']; ?>">
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Commencement Date:<input type="date" class="form-control" name="commencementdate" required  value="<?php echo $row['CommencementDate']; ?>">
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Resumption Date:<input type="date" class="form-control" name="resumptiondate" required  value="<?php echo $row['ResumptionDate']; ?>">
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br></br>                   
                                </div>
                            </div>
							
							<div  class="col-md-6" style="background-color: #ffff; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 5px blue, 0 0 5px darkblue;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Number of Days Required:<input type="number" class="form-control" name="numberofdaysrequired" required  value="<?php echo $row['NumberofDaysRequired']; ?>">
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Deduct this Leave from:<input type="text" class="form-control" name="deductleave" required  value="<?php echo $row['DeductLeave']; ?>">
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Type of Leave:
												<select name="leavetype" class="form-control" required>
													<option style="background-color:lightblue; color:white;"><?php echo $row['LeaveType']; ?></option>
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
                                                Contact Address:<input type="text" class="form-control" name="contactaddress"  value="<?php echo $row['ContactAddress']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="number"  value="<?php echo $row['PhoneNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Reasons:<textarea type="text" rows="4" class="form-control" name="reasons" style="resize:none;" required><?php echo $row['Reasons']; ?></textarea>
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