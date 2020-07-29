<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblsiwes WHERE Siwesid='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_intern_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Intern Bio-Data</h4>
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
                                                Code Number:<input type="hidden" name="id"  value="<?php echo $row['Siwesid']; ?>">
												<input type="text" class="form-control" name="CODENUMBER" value="<?php echo $row['CODE']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Last Name:<input type="text" class="form-control" name="LNAME" value="<?php echo $row['LNAME']; ?>" required></br>
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
                                                Home Address:<input type="text" class="form-control" name="HADDRESS" value="<?php echo $row['HADDRESS']; ?>" required></br>
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
                                                State of Origin:<input type="text" class="form-control" name="stateoforigin" value="<?php echo $row['StateofOrigin']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Local Governement Area:<input type="text" class="form-control" name="lga" value="<?php echo $row['LGA']; ?>" required></br>
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
                                                Marital Status:
												<select name="maritalstatus" class="form-control" required>
													<option><?php echo $row['CIVILSTATUS']; ?></option>
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
                                                Arrival Date:<input type="date" class="form-control" name="arrivaldate" value="<?php echo $row['ArrivalDate']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name of Institution:<input type="text" class="form-control" name="nameinstitution" value="<?php echo $row['NameInstitution']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Course of Study:<input type="text" class="form-control" name="course" value="<?php echo $row['Course']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                SIWES Cordinator's Name/Number:<input type="text" class="form-control" name="siwes" value="<?php echo $row['Siwes']; ?>" required></br>
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
                                                Account Details:<textarea type="text" cols="4" class="form-control" name="account" required><?php echo $row['Account']; ?></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Training Duration:<input type="text" class="form-control" name="training" value="<?php echo $row['Training']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">NEXT OF KIN DETAILS</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Relationship:<input type="text" class="form-control" name="relationship" value="<?php echo $row['Relationship']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="address" value="<?php echo $row['KinAddress']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="phonenumber" value="<?php echo $row['PhoneNumber']; ?>" required></br>
											</span>
										</div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">OFFICE USE ONLY</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Resumption:<input type="date" class="form-control" name="dateresumption" value="<?php echo $row['DateResumption']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Department:<input type="text" class="form-control" name="department" value="<?php echo $row['Department']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Farm Supervisor:<input type="text" class="form-control" name="farmsupervisor" value="<?php echo $row['FarmSupervisor']; ?>" required></br>
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