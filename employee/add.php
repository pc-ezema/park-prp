<?php 
 if (!isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
   }

  $autonum = New Autonumber();
  $res = $autonum->set_autonumber('employeeid');

 ?> 

 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Add New Employee</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
                  <form class="form-horizontal span6  wow fadeInDown" action="controller.php?action=add" method="POST">

                      <!-- <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "user_id">User Id:</label>

                        <div class="col-md-8"> --> 
                           <input class="form-control input-sm" id="EMPLOYEEID" name="EMPLOYEEID" placeholder=
                              "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>">
                      <!--   </div>
                      </div>
                    </div> -->           
                     <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "FNAME">Firstname:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                           <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                              "Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "LNAME">Lastname:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                          <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                              "Lastname"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "MNAME">Middle Name:</label>

                        <div class="col-md-8">
                          <input name="deptid" type="hidden" value="">
                          <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                              "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                           <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                              "Description" type="text" value=""> -->
                        </div>
                      </div>
                    </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender">Sex:</label>

                      <div class="col-md-8">
                         <div class="col-lg-5">
                            <div class="radio">
                              <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="radio">
                              <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male</label>
                            </div>
                          </div> 
                         
                      </div>
                    </div>
                  </div>

                         <div class="form-group">
                              <div class="rows">
                                <div class="col-md-8">
                                  <h4>
                                  <div class="col-md-4">
                                    <label class="col-lg-12 control-label">Date of Birth</label>
                                  </div>

                                  <div class="col-lg-3">
                                    <select class="form-control input-sm" name="month">
                                      <option>Month</option>
                                      <?php

                                         $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 12 );    
                                      
                                    
                                        foreach ($mon as $month => $value ) {
                                          
                                              # code...
                                               echo '<option value='.$value.'>'.$month.'</option>';
                                            }
                                      
                                           
                                      ?>
                                    </select>
                                  </div>

                                  <div class="col-lg-2">
                                    <select class="form-control input-sm" name="day">
                                      <option>Day</option>
                                    <?php 
                                      $d = range(31, 1);
                                      foreach ($d as $day) {
                                        echo '<option value='.$day.'>'.$day.'</option>';
                                      }
                                    
                                    ?>
                                      
                                    </select>
                                  </div>

                                  <div class="col-lg-3">
                                    <select class="form-control input-sm" name="year">
                                      <option>Year</option>
                                    <?php 
                                      $years = range(2010, 1900);
                                      foreach ($years as $yr) {
                                        echo '<option value='.$yr.'>'.$yr.'</option>';
                                      }
                                    
                                    ?>
                                    
                                    </select>
                                  </div>
                                  </h4>
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "BIRTHPLACE">Place of Birth:</label>

                                  <div class="col-md-8">
                                    
                                     <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
                                        "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                                  </div>
                                </div>
                              </div> 


                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "TELNO">Contact No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
                                      "Contact No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "CIVILSTATUS">Civil Status:</label>

                                <div class="col-md-8">
                                  <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Select</option>
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Widow" >Widow</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> 
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "POSITION">Postion:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="POSITION" name="POSITION" placeholder=
                                      "Postion" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>


                              <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "DEPARTMENTID">Department:</label>

                                <div class="col-md-8">
                                 <select class="form-control input-sm" name="DEPARTMENTID" id="DEPARTMENTID">
                                 <option value="none" >Select</option>
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tbldepartment`");
                                      $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) {
                                        echo '<option value='.$result->DEPARTMENTID.' >'.$result->DEPARTMENT.' </option>';

                                      }
                                    ?>


                                   
                                  </select> 
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-12">
                                <div class="panel"> 
                                  <div class="panel-header">
                                  <h3>Leaves Credit</h3>
                                  </div>
                                  <div class="panel-body">
                                   <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "VACATION">Vacation:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="VACATION" name="VACATION" placeholder=
                                              "Vacation" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>

                                      <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SICK">Sick:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="SICK" name="SICK" placeholder=
                                              "Sick" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "MATERNITY">Maternity:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="MATERNITY" name="MATERNITY" placeholder=
                                              "Maternity" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SSS">SSS:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="SSS" name="SSS" placeholder=
                                              "SSS" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "EMERGENCY">Emergency:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="EMERGENCY" name="EMERGENCY" placeholder=
                                              "Emergency" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "OTHERS">Others:</label>

                                        <div class="col-md-8">
                                          
                                           <input class="form-control input-sm" id="OTHERS" name="OTHERS" placeholder=
                                              "Others" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                        </div>
                                      </div>
                                    </div>

                        <!--      <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "TINNO">TIN No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="TINNO" name="TINNO" placeholder=
                                      "TIN No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                              <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "PHNO">Philhealt No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="PHNO" name="PHNO" placeholder=
                                      "SSS No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                              <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "SSSNO">SSS No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="SSSNO" name="SSSNO" placeholder=
                                      "SSS No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "PAGIBIGNO">Pag-ibig No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="PAGIBIGNO" name="PAGIBIGNO" placeholder=
                                      "Pag-ibig No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                          <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "GSISNO">GSIS No.:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="GSISNO" name="GSISNO" placeholder=
                                      "GSIS No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div> -->


                                  </div>
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
 

 