<?php 
 if (!isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
   }

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

 ?> 

 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">Add New Department/Unit</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
                  <form class="form-horizontal span6  wow " action="controller.php?action=add" method="POST">

                      <!-- <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "user_id">User Id:</label>

                        <div class="col-md-8"> --> 
                          <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                              "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                      <!--   </div>
                      </div>
                    </div> -->           
                     <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "DEPARTMENT_NAME">Department/Unit:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                           <input class="form-control input-sm" id="DEPARTMENT_NAME" name="DEPARTMENT_NAME" placeholder=
                              "Department Name" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "DEPARTMENT_DESC">Description:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                          <textarea  class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                              "Description" rows="5" cols="60"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                           <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                              "Description" type="text" value=""> -->
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
                              "Department Head" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                      </div>
                    </div>

                   


                  <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "idno"></label>

                        <div class="col-md-8">
                         <button class="btn btn-mod btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                            <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                         </div>
                      </div>
                    </div>


                  <div class="form-group">
                  <div class="rows">
                    <div class="col-md-6">
                      <label class="col-md-6 control-label" for=
                      "otherperson"></label>

                      <div class="col-md-6">
                     
                      </div>
                    </div>

                    <div class="col-md-6" align="right">
                     

                     </div>
                    
                  </div>
                  </div>

                  </form>
       
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 

 