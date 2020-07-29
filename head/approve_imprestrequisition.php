<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT * FROM tblrequisition WHERE i_id='{$_GET['i_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="approveimprestrequisition.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>APPROVE IMPREST REQUISITION</h4>
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
                                                Date
                                            </span>
                                            <div>
											<input type="hidden" name="i_id"  value="<?php echo $row['i_id']; ?>" readonly>
											<input type="text" 	class="form-control" name="date" value="<?php echo $row['Date']; ?> " readonly>
                                            <input type="hidden" name="prepared_by"  value="<?php echo $row['PreparedBy']; ?>" readonly>
											</div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
										<div>
                                            <span>
                                                Department:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="department" value="<?php echo $row['Department']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                               Phone No:
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="phone_no" value="<?php echo $row['Phone_No']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Purpose:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="purpose" value="<?php echo $row['Purpose']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Purchase Mode:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="purchase_mode" value="<?php echo $row['Purchase_Mode']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Name:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Address:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="address" value="<?php echo $row['Address']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Phone No:
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="phone_no" value="<?php echo $row['PhoneNO']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
												Pay Mode:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pay_mode" value="<?php echo $row['Pay_mode']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Description of Expenses
                                            </span>
                                            <div class="form-line">
												<textarea type="text" class="form-control" rows="9" name="desc_expenses" readonly><?php echo $row['Description_Expenses']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Quantity:
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="quantity" value="<?php echo $row['Quantity']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Unit Price:
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="unit_price" value="<?php echo $row['Unit_Price']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Amount:
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="amount" value="<?php echo $row['Amount']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Amount In Word:
                                            </span>
                                            <div class="form-line">
                                                <textarea class="form-control" name="amount_word" readonly><?php echo $row['Amount_Word']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                                Status:
                                            </span>
                                            <div class="form-line">
											<select name="status" class="form-control">
											<option><?php echo $row['Status']?></option>
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