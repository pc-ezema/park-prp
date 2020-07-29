<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT * FROM tblloans WHERE Loanid='{$_GET['Loanid']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="approveloan.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>APPROVE LOAN</h4>
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
                                            <div class="form-line">
												<input type="text" 	class="form-control" name="id" value="<?php echo $row['Code_Number']; ?> " readonly>
                                                <input type="hidden" class="form-control" name="Loanid"  value="<?php echo $row['Loanid']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-5">
                                        <div>
                                            <span>
                                                Employee Names:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Names" value="<?php echo $row['Names']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-4">
                                        <div>
                                            <span>
                                                Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Department" value="<?php echo $row['Department']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
																		
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Reasons for Loan: 
                                            </span>
                                            <div class="form-line">
                                                <textarea class="form-control" name="ReasonforLoan" cols="10" rows="20" readonly><?php echo $row['ReasonforLoan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Amount Borrowed:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="AmountBorrowed" value="<?php echo $row['AmountBorrowed']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Mode of Return:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ModeofReturn" value="<?php echo $row['ModeofReturn']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Date of Return:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="DateofReturn" value="<?php echo $row['DateofReturn']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                First Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FirstName" value="<?php echo $row['FirstName']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                First Code Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FirstCodeNumber" value="<?php echo $row['FirstCodeNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                First Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FirstDepartment" value="<?php echo $row['FirstDepartment']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Second Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="SecondName" value="<?php echo $row['SecondName']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Second Code Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="SecondCodeNumber" value="<?php echo $row['SecondCodeNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Second Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="SecondDepartment" value="<?php echo $row['SecondDepartment']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Third Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ThirdName" value="<?php echo $row['ThirdName']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Third Code Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ThirdCodeNumber" value="<?php echo $row['ThirdCodeNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Third Department: 
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ThirdDepartment" value="<?php echo $row['ThirdDepartment']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fourth Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FourthName" value="<?php echo $row['FourthName']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fourth Code Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FourthCodeNumber" value="<?php echo $row['FourthCodeNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fourth Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FourthDepartment" value="<?php echo $row['FourthDepartment']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fifth Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FifthName" value="<?php echo $row['FifthName']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fifth Code Number:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FifthCodeNumber" value="<?php echo $row['FifthCodeNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Fifth Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="FifthDepartment" value="<?php echo $row['FifthDepartment']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Approval Status:
                                            </span>
											<div class="form-line">
											<select name="ApprovalStatus" class="form-control">
											<option><?php echo $row['ApprovalStatus']?></option>
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