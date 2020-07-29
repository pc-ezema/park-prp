<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblcorper WHERE corperid='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_corper_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Corp Member Bio-Data</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 5px blue, 0 0 5px darkblue;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Current Passport:</br>
												<img src="<?php echo $row['photo']?>" height="150" width="180" />
												<input type="hidden" class="form-control" name="previous" value="<?php echo $row['photo']; ?>" >
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                New Passport:
												<input type="file" class="form-control" name="photo" value="<?php echo $row['photo']; ?>" ></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code Number:<input type="hidden" name="id"  value="<?php echo $row['corperid']; ?>">
												<input type="text" class="form-control" name="CODENUMBER" value="<?php echo $row['CODE']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Surname:<input type="text" class="form-control" name="SNAME" value="<?php echo $row['SNAME']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                First Name:<input type="text" class="form-control" name="FNAME" value="<?php echo $row['FNAME']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Middle Name:<input type="text" class="form-control" name="MNAME" value="<?php echo $row['MNAME']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Birth:<input type="date" class="form-control" name="dob" value="<?php echo $row['DateofBirth']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Religion:<input type="text" class="form-control" name="religion" value="<?php echo $row['Religion']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Place of Birth:<input type="text" class="form-control" name="placeofbirth" value="<?php echo $row['PlaceofBirth']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Country:<input type="text" class="form-control" name="country" value="<?php echo $row['Country']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Sex:
												<select name="sex" class="form-control" required>
													<option><?php echo $row['Sex']; ?></option>
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
                                                Nationality:<input type="text" class="form-control" name="nationality" value="<?php echo $row['Nationality']; ?>"  required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                State of Origin:<input type="text" class="form-control" name="stateoforigin" value="<?php echo $row['StateofOrigin']; ?>"  required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Local Governement Area:<input type="text" class="form-control" name="lga" value="<?php echo $row['LGA']; ?>"  required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Home Place (Town/Village of Origin):<input type="text" class="form-control" name="homeplace" value="<?php echo $row['HomePlace']; ?>"  required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Residential Address:<input type="text" class="form-control" name="RADDRESS" value="<?php echo $row['RADDRESS']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Contact No.:<input type="number" class="form-control" name="TELNO" value="<?php echo $row['TELNO']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Email:<input type="email" class="form-control" name="email" value="<?php echo $row['Email']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Marital Status:
												<select name="maritalstatus" class="form-control" required>
													<option><?php echo $row['MaritalStatus']; ?></option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
													<option value="Widow" >Widow</option>
												</select></br>
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
                                                Any Known Health Limitations:<input type="text" class="form-control" name="healthlimitations" value="<?php echo $row['HealthLimitations']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Blood Group:<input type="text" class="form-control" name="bloodgroup" value="<?php echo $row['BloodGroup']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Geneotype:<input type="text" class="form-control" name="geneotype" value="<?php echo $row['Geneotype']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Highest Level of Education:<input type="text" class="form-control" name="leveleducation" value="<?php echo $row['LevelEducation']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Institution Attended:<input type="text" class="form-control" name="institutionattended" value="<?php echo $row['InstitutionAttended']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Course of Study:<input type="text" class="form-control" name="courseofstudy" value="<?php echo $row['CourseofStudy']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Cordinator Name/Number:<input type="text" class="form-control" name="coordinatornn" value="<?php echo $row['CoordinatorName']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">	BANK DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Name:<input type="text" class="form-control" name="accountname" value="<?php echo $row['AccountName']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Number:<input type="number" class="form-control" name="accountnumber" value="<?php echo $row['AccountNumber']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">NEXT OF KIN DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="kinname" value="<?php echo $row['KinName']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relationship:<input type="text" class="form-control" name="kinrelationship" value="<?php echo $row['KinRelationship']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="kinaddress" value="<?php echo $row['KinAddress']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="kinphonenumber" value="<?php echo $row['KinPhoneNumber']; ?>" required></br>
											</span>
										</div>
                                    </div>
									</fieldset>
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