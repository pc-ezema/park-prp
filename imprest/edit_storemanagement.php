<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblstore WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_storemanagement_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Store Record</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>
                                    <div class="col-sm-3">
                                        <div>
                                            <span>
                                                Items/Materials:
                                            </span>
                                            <div>
												<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
												<textarea type="text" rows="5" class="form-control" name="Items" required ><?php echo $row['Items']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
										<div>
                                            <span>
                                                Unit:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Unit" required value="<?php echo $row['Unit']; ?>">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                               Name: 
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Name" required value="<?php echo $row['Name']; ?>">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Date:
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="Date" required value="<?php echo $row['Date']; ?>">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Remarks:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Remarks" value="<?php echo $row['Remarks']; ?>" >
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Date Returned:
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="Date_Returned" value="<?php echo $row['Date_Returned']; ?>">
                                            </div>
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