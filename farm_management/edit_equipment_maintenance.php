<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM maintenancelog WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
	
    $id = $row['i_id'];
    $Units = $row['Units'];
    $EquipmentDescription = $row['EquipmentDescription'];
    $SerialNumber = $row['SerialNumber'];
	$ModelNumber = $row['ModelNumber'];
    $DatePurchase = $row['DatePurchase'];
    $MaintenanceDescription = $row['MaintenanceDescription'];
	$MaintenanceDate = $row['MaintenanceDate'];
    $MaintenancePerformedBy = $row['MaintenancePerformedBy'];
    $CostofMaintenance = $row['CostofMaintenance'];
	$NextMaintenancePlan = $row['NextMaintenancePlan'];
    $Remarks = $row['Remarks'];


?>		
									
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_equipmentmaintenance_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Equipment Maintenance</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>	
									
									<div class="col-sm-12">
                                        <div>
                                            <span>
                                               Unit:
                                            </span>
                                            <div class="form-line">
												<input type="hidden" name="id"  value="<?php echo $row['id']; ?>" readonly>
												<input type="text" class="form-control" name="unit" value="<?php echo $row['Units']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-5">
                                        <div>
                                            <span>
                                               Equipment Description: 
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" class="form-control" rows="8" name="equip_desc" style="resize:none;" required><?php echo $row['EquipmentDescription']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Serial Number:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="serial_number" value="<?php echo $row['SerialNumber']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Model Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="model_number" value="<?php echo $row['ModelNumber']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Date Purchase:
                                            </span>
                                            <div class="form-line">
												<input type="date" class="form-control" name="date_purchase" value="<?php echo $row['DatePurchase']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-5">
                                        <div>
                                            <span>
                                               Maintenance Description:
                                            </span>
                                            <div class="form-line">
												<textarea type="text" class="form-control" rows="8" name="main_desc" style="resize:none;" required><?php echo $row['MaintenanceDescription']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Maintenance Date:
                                            </span>
                                            <div class="form-line">
												<input type="date" class="form-control" name="main_date" value="<?php echo $row['MaintenanceDate']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Maintenance Performed By:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="main_performed" value="<?php echo $row['MaintenancePerformedBy']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Cost of Maintenance:
                                            </span>
                                            <div class="form-line">
												<input type="number" class="form-control" name="cost_maintenance" value="<?php echo $row['CostofMaintenance']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-5">
                                        <div>
                                            <span>
                                               Next Maintenance Plan:
                                            </span>
                                            <div class="form-line">
											<textarea type="text" class="form-control" rows="4" name="nmain_plan" style="resize:none;" required><?php echo $row['NextMaintenancePlan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-7">
                                        <div>
                                            <span>
                                               Remarks:
                                            </span>
                                            <div class="form-line">
											<textarea type="text" class="form-control" rows="4" name="remarks" style="resize:none;" required><?php echo $row['Remarks']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
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
    var contanct_no = new Formatter (document.getElementById('contact_no'), {
  'pattern': '+639 {{999}}-{{999}}-{{999}}',
  'persistent': true
  });
    var pagibig = new Formatter (document.getElementById('pagibig'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
  });
     var tin = new Formatter (document.getElementById('tin'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
     var gsis = new Formatter (document.getElementById('gsis'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
</script>
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