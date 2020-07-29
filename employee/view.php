<?php  

if(!isset($_SESSION['EMPLOYEEID'])){
  redirect(web_root."index.php");
}

    $employee = New Employee();
    $emp = $employee->single_employee($_SESSION['EMPLOYEEID']);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($_SESSION['EMPLOYEEID']);
 
    $div = New Division();
    $div =$div->single_division($emp->DIVISIONID);
     
    $department = New Department();
    $dept = $department->single_departments($emp->DEPARTMENTID); 
  
  

    $basicActive='';
    $educActive = '';
    $otherActive = '';
    $leavesActive = '';
    $filescActive = '';


    if (isset($_GET['tab'])) {
      # code...
      $activeTab = $_GET['tab'];
    }else{ 
      $activeTab ='';
    }

    switch ($activeTab) {
      case 'basicinfo':
        # code...
        $basicActive = 'active';
        break;
       case 'education':
        # code...
        $educActive = 'active';
        break;
       case 'otherinfo':
        # code...
        $otherActive = 'active';
        break;
       case 'leavescredit':
        # code...
        $leavesActive = 'active';
        break;
      case 'files':
        # code...
        $filescActive = 'active';
        break;
      default:
        # code...
        $basicActive = 'active';
        break;
    }
	
	

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



<section id="feature" class="transparent-bg ">
        <div class="container"> 
            <div class="row">
                <div class="features">
                      <div class="col-sm-3"> 
                              <div class="panel" >            
                                <div id="img_profile" class="panel-body">
                                <a href="" data-target="#studentmodal" data-toggle="modal" >
                                <img title="profile image" class="img-hover"    src="<?php echo web_root. 'employee/'.  $emp->EMPPHOTO; ?>">
                                </a>
                                 </div>
                              <ul class="list-group" style="font-size:12px" > 
                             
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $emp->FNAME .' '.$emp->LNAME; ?> </li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Department/Unit</strong></span> <?php echo $dept->DEPARTMENT; ?> </li> 
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Division</strong></span> <?php echo $div->DIVISION; ?> </li> 
                                   <li class="list-group-item text-right"><span class="pull-left"><strong>Work Status</strong></span> <?php echo $emp->WORKSTATS; ?> </li> 
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Username</strong></span> <?php echo $emp->EMPUSERNAME; ?> 
                                    <div class="panel-group" id="accordion">   
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-sm">Change Username</a>
                                      <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form action="<?php echo web_root; ?>employee/controller.php?action=changeusername" method="POST"> 
                                              <input type="text" class="form-control" name="EMPUSERNAME" required placeholder="Username">
                                              <input class="btn btn-sm btn-primary" type="submit"  name="save" value="Change">
                                            </form>
                                          </div>
                                      </div>
                                  </div>  
                                </li> 
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Password</strong></span> ******** <br/>
                                   <div class="panel-group" id="accordion">   
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="btn btn-sm">Change Password</a>
                                      <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form action="<?php echo web_root; ?>employee/controller.php?action=changepassword" method="POST"> 
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
                      <div class="col-sm-9">  
                          <div class="row"> 
                              <div class="col-lg-12">

                                  <ul id="myTab" class="nav nav-tabs nav-justified">
                                      <li class="<?php echo $basicActive; ?>"><a href="#service-one" data-toggle="tab" style="font-size:12px;">Personal Information</a>
                                      </li>
                                      <li class="<?php echo $educActive; ?>"><a href="#service-two" data-toggle="tab" style="font-size:12px;">Education</a>
                                      </li>
                                      <li class="<?php echo $otherActive; ?>"><a href="#service-three" data-toggle="tab" style="font-size:12px;">Other Information</a>
                                      </li>  
                                      </li> 
                                      <li class="<?php echo $filescActive; ?>"><a href="#service-five" data-toggle="tab" style="font-size:12px;">Files</a>
                                      </li> 
                                  </ul>

                                  <div id="myTabContent" class="tab-content" style="font-size:12px;padding:0;">
                                      <div class="tab-pane  <?php echo $basicActive; ?>" id="service-one">
                                      <div class="scrolly">
                                           <?php include('basicinfo.php'); ?> 
                                      </div>
                                      </div>
                                      <div class="tab-pane  <?php echo $educActive; ?>" id="service-two">
                                      <div class="scrolly">
                                       <?php include('edubackground.php'); ?>
                                       </div>
                                      </div>
                                      <div class="tab-pane  <?php echo $otherActive; ?>" id="service-three">
                                      <div class="scrolly">
                                       <?php include('otherinfo.php'); ?>
                                       </div>
                                      </div> 
                                       <div class="tab-pane  <?php echo $filescActive; ?>" id="service-five">
                                       <div class="scrolly">
                                       <?php include('uploadedfiles.php'); ?>
                                       </div>
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

                                <form action="<?php echo web_root; ?>employee/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows"> 
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">
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

 