<?php  
     if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

  @$dept_id = $_GET['id'];
    if($dept_id==''){
  redirect("index.php");
}
  $dept = New Department();
  $singledepartment = $dept->single_departments($dept_id);

?> 
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">Update Department/Unit</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
                    <form class="form-horizontal span6 wow " action="controller.php?action=edit" method="POST"> 
                          
                       <input id="DEPT_ID" name="DEPT_ID"  
                       type="Hidden" value="<?php echo $singledepartment->DEPARTMENTID; ?>" onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        
                        
                        <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "DEPARTMENT_NAME">Department/Unit:</label>

                            <div class="col-md-8">
                              <input name="deptid" type="hidden" value="">
                               <input class="form-control input-sm" id="DEPARTMENT_NAME" name="DEPARTMENT_NAME" placeholder=
                                  "Department Name" onkeyup="javascript:capitalize(this.id, this.value);" type="text" value="<?php echo $singledepartment->DEPARTMENT; ?>" autocomplete="off">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "DESCRIPTION">Description:</label>

                            <div class="col-md-8"> 
                              <textarea class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
                          "Description" type="text" rows="6" onkeyup="javascript:capitalize(this.id, this.value);"><?php echo $singledepartment->DESCRIPTION; ?></textarea>
                              </div>
                          </div>
                        </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "DEPARTMENTHEAD">Department Head:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                           <input class="form-control input-sm" id="DEPARTMENTHEAD" name="DEPARTMENTHEAD" placeholder=
                              "Department Head" type="text" value="<?php echo $singledepartment->DEPARTMENTHEAD; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
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
 
 