<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT * FROM tblleaves WHERE LEAVEID='{$_GET['LEAVEID']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="approveleave.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>APPROVE LEAVE</h4>
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
                                                Employee ID:
                                            </span>
                                            <div>
												<input type="text" 	class="form-control" name="id" value="<?php echo $row['Code_Number']; ?> " readonly>
                                                <input type="hidden" name="LEAVEID"  value="<?php echo $row['LEAVEID']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
										<div>
                                            <span>
                                                Employee Names:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Names" value="<?php echo $row['Names']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                               Leave Entitlement: 
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="LeaveEntitlement" value="<?php echo $row['LeaveEntitlement']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Leave Days Spent:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="LeaveDaysSpent" value="<?php echo $row['LeaveDaysSpent']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Commencement Date:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="CommencementDate" value="<?php echo $row['CommencementDate']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Resumption Date:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ResumptionDate" value="<?php echo $row['ResumptionDate']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Number of Days Required:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NumberofDaysRequired" value="<?php echo $row['NumberofDaysRequired']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Deduct Leave:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="DeductLeave" value="<?php echo $row['DeductLeave']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Type of Leave:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="LeaveType" value="<?php echo $row['LeaveType']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Contact Address:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ContactAddress" value="<?php echo $row['ContactAddress']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Phone Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Reasons:
                                            </span>
                                            <div class="form-line">
                                                <textarea class="form-control" name="Reasons" readonly><?php echo $row['Reasons']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                NOTED BY:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NOTEDBY" value="<?php echo $row['NOTEDBY']; ?>" >
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                LEAVESTATUS:
                                            </span>
											<div class="form-line">
											<select name="LEAVESTATUS" class="form-control">
											<option><?php echo $row['LEAVESTATUS']?></option>
											<option value="Approve">Approve</option>
											<option value="Pending">Pending</option>
											<option value="Others" >Others</option>
											</select>
											</div>
                                        </div>
                                    </div>
								   	
                                </div>  
                                    <input type="submit" name="update" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;">                   
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