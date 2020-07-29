<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblnoncompliance WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_non-complaince_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Requisition</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ecf9f2;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Person Reporting:<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
												<input type="text" class="form-control" name="Person_Reporting" value="<?php echo $row['Person_Reporting']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Title/Position:<input type="text" class="form-control" name="position" value="<?php echo $row['Position']; ?> "required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Phone Number:<input type="number" class="form-control" name="phone_no" value="<?php echo $row['Phone_No']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit:<input type="text" class="form-control" name="unit" value="<?php echo $row['Unit']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date:<input type="date" class="form-control" name="date" value="<?php echo $row['Date']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<fieldset style="margin-left: 60px;" class="col-sm-11">
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Name of Violator:<input type="text" class="form-control" name="name_violator" value="<?php echo $row['Name_Violator']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit/Department:<input type="text" class="form-control" name="department" value="<?php echo $row['Department']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Date of Violation:<input type="date" class="form-control" name="date" value="<?php echo $row['Date_violation']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Offence:<textarea type="text" rows="4" class="form-control" name="offence" style="resize:none;"  required><?php echo $row['Offence']; ?></textarea>
                                            </span>
                                        </div>
                                    </div> 
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Cause of Violation(s):<textarea type="text" rows="4" class="form-control" name="cause" style="resize:none;" required><?php echo $row['Cause_Violation']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									
									</fieldset>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Corrective Action/Preventive Measures:<textarea type="text" rows="4" class="form-control" name="corrective" style="resize:none;" required><?php echo $row['Corrective_Action']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" rows="4" class="form-control" name="remark" style="resize:none;" ><?php echo $row['Remarks']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
									</br>
									</br>
									</br> 
                                    <input type="submit" name="update" value="Update" class="btn btn-success" style ="float:right; margin-top: -30px;">                   
                                </div>
                            </div>
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