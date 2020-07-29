<?php include("header.php") ?>
<?php
include ("connect.php");  

$result=$con->prepare("SELECT * FROM cropitems WHERE i_id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {

?>		
									
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/edit_inventory_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Edit Crop Item</h4>
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
                                               Items/Assets: 
                                            </span>
                                            <div class="form-line">
												<input type="hidden" name="id"  value="<?php echo $row['i_id']; ?>" readonly>
                                                <textarea type="text" class="form-control" rows="16" name="items" style="resize:none;" required><?php echo $row['i_items']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-9">
                                        <div>
                                            <span>
                                               Quantity:
                                            </span>
                                            <div class="form-line">
												<input type="number" class="form-control" name="quantity" value="<?php echo $row['i_qty']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-9">
                                        <div>
                                            <span>
                                               Date of Purchase:
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="datepurchase" value="<?php echo $row['i_dpurchase']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-9">
                                        <div>
                                            <span>
                                               Amount:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="amount" value="<?php echo $row['i_amount']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-9">
                                        <div>
                                            <span>
                                               Purchased By:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="purchasedby" value="<?php echo $row['i_purchaseby']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-9">
                                        <div>
                                            <span>
                                               Received By:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="receivedby" value="<?php echo $row['i_receiveby']; ?>" required>
                                            </div>
                                        </div>
                                    </div>	
                                </div> 
									</br>
                                    <input type="submit" name="cropupdate" value="Update" class="btn btn-success" style ="float:right; margin-top: -30px;">                   
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