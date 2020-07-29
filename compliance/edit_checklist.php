<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblchecklist WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_checklist_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Inspection Checklist</h4>
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
                                                Name of Office:<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
												<input type="text" class="form-control" name="name_office" value="<?php echo $row['Name_Office']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Area Inspected:<textarea type="text" rows="2" class="form-control" name="area_inspected" style="resize:none;"  required><?php echo $row['Area_Inspected']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Inspected By:<input type="text" class="form-control" name="inspected_by" value="<?php echo $row['Inspected_By']; ?>" required>
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
                                                Item:<textarea type="text" rows="2" class="form-control" name="item" style="resize:none;"  required><?php echo $row['Item']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Yes/No:<input type="text" class="form-control" name="yes_no" value="<?php echo $row['Checklist']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Corrective Action:<textarea type="text" rows="4" class="form-control" name="corrective_action" style="resize:none;"  required><?php echo $row['Corrective_Action']; ?></textarea>
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
									</fieldset>
                                </div> 
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