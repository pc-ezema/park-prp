<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_requisition_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Requisition</h4>
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
                                                Date:<input type="date" class="form-control" name="date" required>
												<input type="hidden" class="form-control" name="prepared_by" value="Compliance Manager" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Department:<input type="text" class="form-control" name="department" required>
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="number" required>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Purpose:<input type="text" class="form-control" name="purpose" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Purchase Mode:<input type="text" class="form-control" name="purchase" required>
                                            </span>
                                        </div>
                                    </div>
										</fieldset>
										
									<fieldset style="float:right;" class="col-sm-5">
										<legend>Recommende Vendor</legend>
                                    <div class="col-sm-5">
									    <div>
                                            <span>
                                                Name:<input type="text" class="form-control" name="name" >
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Address:<input type="text" class="form-control" name="address" >
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Phone No.:<input type="number" class="form-control" name="p_number" >
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-5">
									    <div>
                                            <span>
                                                Pay Mode:<input type="text" class="form-control" name="paymode" >
                                            </span>
                                        </div>
                                    </div>
										</fieldset>	
										
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Description Of Expenses:<textarea type="text" rows="4" class="form-control" name="desc_expenses" required></textarea>
                                            </span>
                                        </div>
                                    </div>	
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Quantity:<textarea type="text" rows="3" class="form-control" name="quantity" required></textarea>
                                            </span>
                                        </div>
                                    </div>	
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Unit Price:<textarea type="text" rows="3" class="form-control" name="unit_price" required></textarea>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount/Total Amount:<input type="text" class="form-control" name="total_amount" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Amount in Word:<input type="text" class="form-control" name="amount_word" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                    </br>
									</br><input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;"></br>                   
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