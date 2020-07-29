<?php  
     if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

  @$div_id = $_GET['id'];
    if($div_id==''){
  redirect("index.php");
}
  $div = New Division();
  $res = $div->single_division($div_id);

?> 
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">Update Division</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
                    <form class="form-horizontal span6 wow fadeInDown" action="controller.php?action=edit" method="POST"> 
                          
                       <input id="DIVISIONID" name="DIVISIONID"  
                       type="Hidden" value="<?php echo $res->DIVISIONID; ?>" onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        
                        
                        <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "DIVISION">Division:</label>

                            <div class="col-md-8">
                              <input name="deptid" type="hidden" value="">
                               <input class="form-control input-sm" id="DIVISION" name="DIVISION" placeholder=
                                  "Division Name" onkeyup="javascript:capitalize(this.id, this.value);" type="text" value="<?php echo $res->DIVISION; ?>" autocomplete="off">
                            </div>
                          </div>
                        </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "DIVISIONHEAD">Division Head:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                           <input class="form-control input-sm" id="DIVISIONHEAD" name="DIVISIONHEAD" placeholder=
                              "Division Head" type="text" value="<?php echo $res->DIVISIONHEAD; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                      </div>
                    </div> 
 

                    <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "idno"></label>

                            <div class="col-md-8">
                               <button class="btn btn-mod btn-sm " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                                <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                            </div>
                          </div>
                        </div>

                    </form> 
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 