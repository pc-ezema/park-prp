<?php  

    $user = New User();
    $res = $user->single_user($_SESSION['USERID']);

    $employee = New Employee();
    $emp = $employee->single_employee($_SESSION['USERID']);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($_SESSION['USERID']);
 
     
    $department = New Department();
    @$dept = $department->single_departments($emp->DEPARTMENTID);

    $div = New Division();
    @$div = $div->single_division($emp->DIVISIONID);

    $lcredits = New LeavesCredit();
    $credits = $lcredits->single_leavescredit($_SESSION['USERID']);

    
   ?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}
.scrolly {
   width: auto;
    height:450px;
    /*border: thin solid black;*/
    overflow-x: hidden; 
    /*overflow-y: hidden;*/
} 
.scrollx {
  width: 100%;
  overflow-y: hidden;
}


  </style>

  <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow  ">
                 <h2 class="page-header">My Account</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features"> 
                        <div class="col-sm-3">
                           
                            <div class="panel">            
                              <div id="img_profile" class="panel-body">
                              <a href="" data-target="#studentmodal" data-toggle="modal" >
                              <img title="profile image" class="img-hover"    src="<?php echo web_root. 'employee/'.  $res->USERPHOTO; ?>">
                              </a>
                               </div>
                                <ul class="list-group"> 
                             
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $emp->FNAME .' '.$emp->LNAME; ?> </li>
                               <li class="list-group-item text-right"><span class="pull-left"><strong>Department/Unit</strong></span> <?php echo isset($dept->DEPARTMENT)  ? $dept->DEPARTMENT : 'NONE'; ?> </li> 
                               <li class="list-group-item text-right"><span class="pull-left"><strong>Division</strong></span> <?php echo isset($div->DIVISION) ?  $div->DIVISION : 'NONE'; ?> </li> 
                               <li class="list-group-item text-right"><span class="pull-left"><strong>Work Status</strong></span> <?php echo $emp->WORKSTATS; ?> </li> 
                               <li class="list-group-item text-right"><span class="pull-left"><strong>Username</strong></span> <?php echo $emp->EMPUSERNAME; ?> 
                                  <!-- <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="btn btn-sm">Change Username</a>  -->
                                  <div class="panel-group" id="accordion">   
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-sm">Change Username</a>
                                      <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form action="controller.php?action=changeusername" method="POST"> 
                                              <input type="text" class="form-control" name="EMPUSERNAME" required placeholder="Username">
                                              <input class="btn btn-sm btn-primary" type="submit"  name="save" value="Change">
                                            </form>
                                          </div>
                                      </div>
                                  </div>  
                                </li> 
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Password</strong></span> ******** <br/>
                                    <!-- <a href="" class="btn btn-sm">Change Password</a> -->
                                   <div class="panel-group" id="accordion">   
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="btn btn-sm">Change Password</a>
                                      <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form action="controller.php?action=changepassword" method="POST"> 
                                              <input type="password" class="form-control" name="EMPPASSWORD" required placeholder="Password">
                                              <input class="btn btn-sm btn-primary" type="submit" name="save"  value="Change">
                                            </form>
                                          </div>
                                      </div>
                                  </div>  
                                </li> 
                               </ul> 
                                  
                          </div>
                         </div>
                                   
                                  <!--/col-3-->
                         <div class="col-sm-9 wow ">  
                          <div class="row"> 
                              <div class="col-lg-12">

                                  <ul id="myTab" class="nav nav-tabs nav-justified">
                                      <li class="active"><a href="#service-one" data-toggle="tab">Personal Information</a>
                                      </li>
                                      <li class=""><a href="#service-two" data-toggle="tab">Education / Account Information</a>
                                      </li>
                                      <li class=""><a href="#service-three" data-toggle="tab">Other Information</a>
                                      </li>  
                                      <li class=""><a href="#service-five" data-toggle="tab">Files</a>
                                      </li> 
                                  </ul>

                                  <div id="myTabContent" class="tab-content">
                                      <div class="tab-pane fade active in" id="service-one">
                                           <?php include('basicinfo.php'); ?>
                                      </div>
                                      <div class="tab-pane fade" id="service-two">
                                       <?php include('edubackground.php'); ?>
                                      </div>
                                      <div class="tab-pane fade" id="service-three">
                                       <?php include('otherinfo.php'); ?>
                                      </div> 
                                       <div class="tab-pane fade" id="service-five">
                                       <?php include('uploadedfiles.php'); ?>
                                      </div>
                                      
                                  </div>

                              </div>
                          </div> 
                      </div> 
 
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 


 

  <!-- Modal -->
                    <div class="modal fade" id="studentmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows"> 
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $res->StudentID; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->