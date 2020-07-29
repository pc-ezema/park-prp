<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_repairs_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Repair</h4>
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
												<input type="text" class="form-control" name="unit" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Equipment Description: 
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" class="form-control" rows="1" name="equip_desc" style="resize:none;" required></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Serial Number:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="serial_number" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Model Number:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="model_number" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Date Purchase:
                                            </span>
                                            <div class="form-line">
												<input type="date" class="form-control" name="date_purchase" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Description of Defect:
                                            </span>
                                            <div class="form-line">
                                                <textarea type="text" class="form-control" rows="8" name="desc_defect" style="resize:none;" required></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Date Repaired:
                                            </span>
                                            <div class="form-line">
												<input type="date" class="form-control" name="date_time" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Repair Performed By:
                                            </span>
                                            <div class="form-line">
												<input type="text" class="form-control" name="repair_performed" required>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-6">
                                        <div>
                                            <span>
                                               Cost of Repair:
                                            </span>
                                            <div class="form-line">
												<input type="number" class="form-control" name="cost_repair" required>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
                                        <div>
                                            <span>
                                               Description of Repair or Remedy(List each components repaired, replaced and/or installed including the model and serial number):
                                            </span>
                                            <div class="form-line">
												<textarea type="text" class="form-control" rows="5" name="desc_repair" style="resize:none;" required></textarea>
                                            </div>
                                        </div>
                                    </div>	
									
									<div class="col-sm-12">
                                        <div>
                                            <span>
                                               Remarks:
                                            </span>
                                            <div class="form-line">
												<textarea type="text" class="form-control" rows="2" name="remarks" style="resize:none;" required></textarea>
                                            </div>
                                        </div>
                                    </div>
								
                                </div>
								</br> 
                                    <input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;"></br>                   
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