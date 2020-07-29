<?php include("header.php") ?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="query/add_complaints_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Add Complaints</h4>
                            </div>
                        </div>
						
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>									  
                                    <div class="col-sm-6">
									    <div>
                                            <span>
                                                Unit:<input type="text" class="form-control" name="unit" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Complaints Names:<input type="text" class="form-control" name="complaints_name" required>
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Basis of Complaints:<textarea type="text" class="form-control" rows="4" name="basis_complaints" style="resize:none;" required></textarea>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Date of Complaints:<input type="date" class="form-control" name="date_complaints" required>
                                            </span>
                                        </div>
                                    </div>
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Complaints Received By:<input type="text" class="form-control" name="compliants_received" required>
                                            </span>
                                        </div>
                                    </div>
									
                                    <div class="col-sm-6">
									    <div>
                                            <span>
                                                Action Plan For Complaints:<textarea type="text" rows="4" class="form-control" name="action_plan" style="resize:none;" required></textarea>
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Action To Be Taken By:<select size="1" name="action_taken" class="form-control">
																	<option value="">-- Select --</option>
																	<option value="Special Project Manager">Special Project Manager</option>
																	</select>
                                            </span>
                                        </div>
                                    </div>

									<div class="col-sm-6">
									    <div>
                                            <span>
                                                Date Fixed:<input type="date" class="form-control" name="date_fixed" >
                                            </span>
                                        </div>
                                    </div>
									
									<div class="col-sm-12">
									    <div>
                                            <span>
                                                Remark:<textarea type="text" class="form-control" name="remarks" style="resize:none;" ></textarea>
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