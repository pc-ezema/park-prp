<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblgt WHERE gtid='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="gt.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Graduate Trainee Profile</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 15px grey, 0 0 5px black;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Passport:</br>
												<img src="<?php echo $row['photo']?>" height="150" width="170" /></br></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Code Number:<input type="hidden" name="id"  value="<?php echo $row['gtid']; ?>">
												<input type="text" class="form-control" name="CODENUMBER" value="<?php echo $row['CODE']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Surname:<input type="text" class="form-control" name="SNAME" value="<?php echo $row['SNAME']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                First Name:<input type="text" class="form-control" name="FNAME" value="<?php echo $row['FNAME']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Middle Name:<input type="text" class="form-control" name="MNAME" value="<?php echo $row['MNAME']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Birth:<input type="date" class="form-control" name="dob" value="<?php echo $row['DateofBirth']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Religion:<input type="text" class="form-control" name="religion" value="<?php echo $row['Religion']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Place of Birth:<input type="text" class="form-control" name="placeofbirth" value="<?php echo $row['PlaceofBirth']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Sex:
												<select name="sex" class="form-control" readonly>
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
                                                Nationality:<input type="text" class="form-control" name="nationality" value="<?php echo $row['Nationality']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                State of Origin:<input type="text" class="form-control" name="stateoforigin" value="<?php echo $row['StateofOrigin']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Local Governement Area:<input type="text" class="form-control" name="lga" value="<?php echo $row['LGA']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Home Place (Town/Village of Origin):<input type="text" class="form-control" value="<?php echo $row['HomePlace']; ?>" name="homeplace" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Residential Address:<input type="text" class="form-control" name="RADDRESS" value="<?php echo $row['RADDRESS']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Contact No.:<input type="number" class="form-control" name="TELNO" value="<?php echo $row['TELNO']; ?>"  readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Email Address:<input type="email" class="form-control" name="email" value="<?php echo $row['Email']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Marital Status:
												<select name="maritalstatus" class="form-control" readonly>
													<option><?php echo $row['MaritalStatus']; ?></option>
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
                                                Any Known Health Limitations:<input type="text" class="form-control" value="<?php echo $row['HealthLimitations']; ?>" name="healthlimitations" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Blood Group:<input type="text" class="form-control" name="bloodgroup" value="<?php echo $row['BloodGroup']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Geneotype:<input type="text" class="form-control" name="geneotype" value="<?php echo $row['Geneotype']; ?>" readonly></br>
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
                                                Highest Level of Education:
												<select name="leveleducation" class="form-control" readonly>
													<option><?php echo $row['LevelEducation']; ?></option>
													<option value="ND">ND</option>
													<option value="ND">HND</option>
													<option value="NCE">NCE</option>
													<option value="BSC">BSC</option>
													<option value="MSC">MSC</option>
													<option value="PDG">PDG</option>
													<!-- <option value="" > </option> -->
												</select>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Institution Attended:<input type="text" class="form-control" name="institutionattended" value="<?php echo $row['InstitutionAttended']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Course of Study:<input type="text" class="form-control" name="courseofstudy" value="<?php echo $row['CourseofStudy']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Training Duration:
												<select name="duration" class="form-control" readonly>
													<option><?php echo $row['Duration']; ?></option>
													<option value="3 Months">3 Months</option>
													<option value="6 Months">6 Months</option>
													<option value="12 Months">12 Months</option>
													<!-- <option value="Fourth" >Fourth</option> -->
												</select></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Training Expectation(s):<input type="text" class="form-control" name="trainingexpectation" value="<?php echo $row['TrainingExpectation']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">LAST EMPLOYMENT RECORD</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Company Name:<input type="text" class="form-control" name="companyname" value="<?php echo $row['CompanyName']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Company Address:<input type="text" class="form-control" name="companyaddress" value="<?php echo $row['CompanyAddress']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Designation:<input type="text" class="form-control" name="designation" value="<?php echo $row['Designation']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name of Supervisor:<input type="text" class="form-control" name="nameofsupervisor" value="<?php echo $row['NameofSupervisor']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number of Supervisor:<input type="number" class="form-control" name="phonenumbersupervisor" value="<?php echo $row['PhoneNumberSupervisor']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">	BANK DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Name:<input type="text" class="form-control" name="accountname" value="<?php echo $row['AccountName']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Account Number:<input type="number" class="form-control" name="accountnumber" value="<?php echo $row['AccountNumber']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">NEXT OF KIN DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="kinname" value="<?php echo $row['KinName']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relationship:<input type="text" class="form-control" name="kinrelationship" value="<?php echo $row['KinRelationship']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="kinaddress" value="<?php echo $row['KinAddress']; ?>" readonly></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="kinphonenumber" value="<?php echo $row['KinPhoneNumber']; ?>" readonly></br>
											</span>
										</div>
                                    </div>
									</fieldset>
                                </div>  
                                    </br>					
									 </br><button class="btn btn-success" style ="float:right; margin-top: -30px;"><span class="glyphicon glyphicon-arrow-left"></span> Back </button></br>                   
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