  <?php
  if ($emp->SEX == 'Male') {
    # code...
   $radio =  '<div class="col-md-12">
             <div class="col-lg-6">
                <div class="radio">
                  <label><input   id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female</label>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="radio">
                  <label><input id="optionsRadios2"  checked="True" name="optionsRadios" type="radio" value="Male">Male</label>
                </div>
              </div> 
             
          </div>';
  }else{
       $radio =  '<div class="col-md-12">
             <div class="col-lg-6">
                <div class="radio">
                  <label><input   id="optionsRadios1"  checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="radio">
                  <label><input id="optionsRadios2"  name="optionsRadios" type="radio" value="Male"> Male</label>
                </div>
              </div> 
             
          </div>';

  }

   switch ($emp->CIVILSTATUS) {

     case 'Single':
       # code...
        $civilstatus =' <select class="form-control input-md" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Select</option>
                                      <option SELECTED value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Widow" >Widow</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';
       break;
     case 'Married':
       # code...
         $civilstatus=' <select class="form-control input-md" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Select</option>
                                      <option  value="Single">Single</option>
                                      <option SELECTED value="Married">Married</option>
                                      <option value="Widow" >Widow</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';

       break;
     case 'Widow':
       # code...
       $civilstatus=' <select class="form-control input-md" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Select</option>
                                      <option  value="Single">Single</option>
                                      <option  value="Married">Married</option>
                                      <option SELECTED value="Widow" >Widow</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';
       break;
     
       
   }
  ?>
 <form class="form-horizontal span6 " action="controller.php?action=editbasicinfo" method="POST"> 
  <table class="table table-striped  table-responsive"> 
    <tr>
      <td><label>Employee No :</label></td>
      <td > <?php echo $emp->EMPLOYEEID; ?>  </td>
      <td colspan="4"></td>

    </tr>
    <tr>
      <td><label>Name :</label></td>
      <td> <?php echo  $emp->FNAME; ?> </td> 
      <td colspan="2"> <?php echo $emp->LNAME; ?> </td> 
      <td colspan="2">
         <?php echo $emp->MNAME; ?> 
      </td>
    </tr>
     <tr style="background:#eee;">
      <td></td>
      <td style="padding:0;"> Firstname</td> 
      <td style="padding:0;" colspan="2">Lastname</td> 
      <td style="padding:0; " colspan="2"> Middlename</td>
    </tr>
    <tr>
      <td><label>Address :</label></td>
      <td colspan="5"  >
         <?php echo $emp->ADDRESS; ?> 
      </td> 
    </tr>
    <tr>
      <td ><label>Sex :</label></td> 
      <td colspan="2">
        <label><?php echo $emp->SEX ; ?></label>
      </td>

      <td ><label>Date of Birth :</label></td>
      <td colspan="2">  
                  <?php echo date_format(date_create($emp->BIRTHDATE),'m/d/Y'); ?>        
      </td>
       
    </tr> 
    <tr>
    <td><label>Age :</label></td>
      <td colspan="1" >
        <label><?php echo $emp->AGE; ?></label> 
    </td>
  <td><label>Place of Birth :</label></td>
      <td colspan="3" > <?php echo $emp->BIRTHPLACE; ?> </td>
    
    </tr>  
    <tr>
     <td  ><label>Contact No.</label></td>
      <td colspan="2"> <?php echo $emp->TELNO; ?> 
     </td> 
     <td  ><label>Civil Status</label></td>
      <td colspan="2"> <?php echo   $emp->CIVILSTATUS; ?> 
            </td> 
    </tr>
    <tr>
     <td  ><label>Citizenship</label></td>
      <td colspan="2"> <?php echo $emp->CITIZENSHIP; ?> </td> 
     <td  ><label>Religious Affiliation</label></td>
      <td colspan="2"> <?php echo $emp->RELIGION; ?></td> 
    </tr>
    <tr>
      <td><label>Height :</label></td>
      <td>
        <?php echo  $emp->HEIGHT; ?></td> 
        <td><label>Weight</label></td>
      <td><?php echo $emp->WEIGHT; ?> </td> 
      <td><label>Blood Type</label></td>
      <td> <?php echo $emp->BLOODTYPE; ?>  </td>
    </tr>
    <tr>
    <td><label>E-mail Address</label></td>
      <td colspan="2" > <?php echo $emp->EMAILADDRESS ?> </td>
     <td  ><label>Cellphone No.</label></td>
      <td colspan="2"> <?php echo $emp->CELLNO ?> </td>
    </tr> 
  </table>  
  <?php include('familybackground.php'); ?>  
      
    
  </form>