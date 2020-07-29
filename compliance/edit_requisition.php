<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM tblrequisition WHERE i_id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
	
    $i_id = $row['i_id'];
	$PreparedBy = $row['PreparedBy'];
	$Date = $row['Date'];
	$Department = $row['Department'];
	$Phone_No = $row['Phone_No'];
	$Purpose = $row['Purpose'];
	$Purchase_Mode = $row['Purchase_Mode'];
	$Name = $row['Name'];
	$Address = $row['Address'];
	$PhoneNO = $row['PhoneNO'];
	$Pay_mode = $row['Pay_mode'];
	$Description_Expenses = $row['Description_Expenses'];
	$Quantity = $row['Quantity'];
	$Unit_Price = $row['Unit_Price'];
	$Amount = $row['Amount'];
	$Amount_Word = $row['Amount_Word'];
	
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_requisition_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Requisition</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>
                                    <h3 align="center">Purchase Requisition Form</h3></br>
									  <fieldset style="margin: 5px; float:left;" class="col-sm-6">
										<legend>Requisition Info</legend>
                                    <div class="col-sm-5">
									    <div>
                                            <span>
                                                Date:<input type="date" class="form-control" name="date" value="<?php echo $row['Date']; ?>" required>
												<input type="hidden" name="id"  value="<?php echo $row['i_id']; ?>">
												<input type="hidden" class="form-control" name="prepared_by" value="<?php echo $row['PreparedBy']; ?>" readonly>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Department:<input type="text" class="form-control" name="department" value="<?php echo $row['Department']; ?>" required>
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="number" value="<?php echo $row['Phone_No']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Purpose:<input type="text" class="form-control" name="purpose" value="<?php echo $row['Purpose']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Purchase Mode:<input type="text" class="form-control" name="purchase" value="<?php echo $row['Purchase_Mode']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
										</fieldset>
										
									<fieldset style="float:right;" class="col-sm-5">
										<legend>Recommende Vendor</legend>
                                    <div class="col-sm-5">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>">
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="address" value="<?php echo $row['Address']; ?>">
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="p_number" value="<?php echo $row['PhoneNO']; ?>">
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Pay Mode:<input type="text" class="form-control" name="paymode" value="<?php echo $row['Pay_mode']; ?>">
                                            </span>
                                        </div>
                                    </div>
										</fieldset>	
										
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Description Of Expenses:<textarea type="text" rows="4" class="form-control" name="desc_expenses" required><?php echo $row['Description_Expenses']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>	
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Quantity:<textarea type="text" rows="3" class="form-control" name="quantity" required><?php echo $row['Quantity']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>	
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit Price:<textarea type="text" rows="3" class="form-control" name="unit_price" required><?php echo $row['Unit_Price']; ?></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount/Total Amount:<input type="text" class="form-control" name="total_amount" value="<?php echo $row['Amount']; ?>" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount in Word:<input type="text" class="form-control" name="amount_word" value="<?php echo $row['Amount_Word']; ?>" required>
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