<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblloans WHERE Loanid='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_loan_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Loan</h4>
                            </div>
                        <div  class="col-md-6" style="background-color: #ddd; color: #ffff; text-shadow: 1px 1px 2px white, 0 0 5px blue, 0 0 5px darkblue;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    </br>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                CODE ID:<input type="hidden" name="id"  value="<?php echo $row['Loanid']; ?>">
												<input type="text" class="form-control" name="codeid" value="<?php echo $row['Code_Number']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Names:<input type="text" class="form-control" name="names" value="<?php echo $row['Names']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Department/Unit:<input type="text" class="form-control" name="department" value="<?php echo $row['Department']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Reasons For Loan:<textarea type="text" rows="4" class="form-control" name="reasonsforloan" style="resize:none;" required><?php echo $row['ReasonforLoan']; ?></textarea></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount Borrowed:<input type="text" class="form-control" name="amountborrowed" value="<?php echo $row['AmountBorrowed']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Mode of Return:<input type="text" class="form-control" name="modeofreturn" value="<?php echo $row['ModeofReturn']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Return:<input type="date" class="form-control" name="dateofreturn" value="<?php echo $row['DateofReturn']; ?>" required></br>
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
                                                <input type="text" class="form-control" name="firstname" placeholder="Name" value="<?php echo $row['FirstName']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="firstcodenumber" placeholder="Code Number" value="<?php echo $row['FirstCodeNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="firstdepartment" placeholder="Department/Unit" value="<?php echo $row['FirstDepartment']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">SECOND</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="secondname" placeholder="Name" value="<?php echo $row['SecondName']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="secondcodenumber" placeholder="Code Number" value="<?php echo $row['SecondCodeNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="seconddepartment" placeholder="Department/Unit" value="<?php echo $row['SecondDepartment']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">THIRD</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirdname" placeholder="Name" value="<?php echo $row['ThirdName']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirdcodenumber" placeholder="Code Number" value="<?php echo $row['ThirdCodeNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="thirddepartment" placeholder="Department/Unit" value="<?php echo $row['ThirdDepartment']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">FOURTH</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthname" placeholder="Name" value="<?php echo $row['FourthName']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthcodenumber" placeholder="Code Number" value="<?php echo $row['FourthCodeNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fourthdepartment" placeholder="Department/Unit" value="<?php echo $row['FourthDepartment']; ?>" required></br>
                                            </span>
                                        </div>
                                    </div>
									</fieldset>
									<fieldset style="background-color:#eeeeee;">
									<legend style="background-color: gray; color: white;  padding: 5px 10px; font-size: 14px;">FIFTH</legend>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthname" placeholder="Name" value="<?php echo $row['FifthName']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthcodenumber" placeholder="Code Number" value="<?php echo $row['FifthCodeNumber']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                <input type="text" class="form-control" name="fifthdepartment" placeholder="Department/Unit" value="<?php echo $row['FifthDepartment']; ?>" required></br>
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