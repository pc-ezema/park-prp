<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_fundallocation_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Unit Fund</h4>
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
                                                Units:
                                            </span>
                                            <div class="form-line">
                                                <select name="units" class="form-control" required="required">
												<option value="">---Select---</option>
												<option value="Admin">Admin</option>
												<option value="Booku">Booku</option>
												<option value="Banow">Banow</option>
												<option value="Distiller">Distiller</option>
												<option value="Feedmill">Feedmill</option>
												<option value="Compost">Compost</option>
												<option value="BSF">BSF</option>
												<option value="Fishery">Fishery</option>
												<option value="Livestock">Livestock</option>
												<option value="Poultry">Poultry</option>
												<option value="Crop">Crop</option>
												<option value="Organic">Organic</option>
												<option value="Farm Venture">Farm Venture</option>
												<option value="Security">Security</option>
												<option value="Hostel">Hostel</option>
												<option value="Logistics">Logistics</option>
												<option value="Facility">Facility</option>
												<option value="Fleet">Fleet</option>
												<option value="Artisan">Artisan</option>
												<option value="APIC">APIC</option>
												<option value="Welfare">Welfare</option>
												<option value="Otulogistics">Otulogistics</option>
												<option value="Tede">Tede</option>
												<option value="R-D(Test)">R-D(Test)</option>
												<option value="Snailery">Snailery</option>
												<option value="Special Project">Special Project</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-sm-3">
                                        <div>
                                            <span>
                                               Amount: 
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="amount" required>
                                            </div>
                                        </div>
                                    </div>				   	
                                </div>  
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