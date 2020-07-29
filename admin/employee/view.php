<?php  
    $employee = New Employee();
    $emp = $employee->single_employee($_GET['id']);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($_GET['id']);
 
     
    $department = New Department();
    $dept = $department->single_departments($emp->DEPARTMENTID);

     $div = New Division();
    $div = $div->single_division($emp->DIVISIONID);

   ?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  img {
    width: 100%;
    height:auto;
}


  </style>


<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Employees' Profile</h2> 
            </div>
               
            <div class="row">
                <div class="features">
                      <div class="col-sm-3 wow fadeInDown">

                              <div class="panel">            
                                <div id="img_profile" class="panel-body">
                                <!-- <a href="" data-target="#studentmodal" data-toggle="modal" > -->
                                <img title="profile image" class="img-hover"    src="<?php echo web_root. 'employee/'.  $emp->EMPPHOTO; ?>">
                                <!-- </a> -->
                                 </div>
                              <ul class="list-group"> 
                             
                                   <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $emp->FNAME .' '.$emp->LNAME; ?> </li>
                                   <li class="list-group-item text-right"><span class="pull-left"><strong>Department/Unit</strong></span> <?php echo $dept->DEPARTMENT; ?> </li> 
                                   <li class="list-group-item text-right"><span class="pull-left"><strong>Division</strong></span> <?php echo $div->DIVISION; ?> </li> 
                                   <li class="list-group-item text-right"><span class="pull-left"><strong>Work Status</strong></span> <?php echo $emp->WORKSTATS; ?> </li> 
                              </ul> 
                                    
                            </div>
                        </div> 
                            <!--/col-3-->
                      <div class="col-sm-9 wow fadeInDown">  
                          <div class="row"> 
                              <div class="col-lg-12">

                                  <ul id="myTab" class="nav nav-tabs nav-justified">
                                      <li class="active"><a href="#service-one" data-toggle="tab">Basic Information</a>
                                      </li>
                                      <li class=""><a href="#service-two" data-toggle="tab">Education / Bank Information</a>
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

                                <form action="<?php echo web_root; ?>admin/employee/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows"> 
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="EMPLOYEEID" id="EMPLOYEEID" value="<?php echo $res->INCID; ?>">
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