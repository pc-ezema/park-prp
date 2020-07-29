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
       default:
        $civilstatus=' <select class="form-control input-md" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option SELECTED  value="none" >Select</option>
                                      <option  value="Single">Single</option>
                                      <option  value="Married">Married</option>
                                      <option value="Widow" >Widow</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';
       break;     
       
   }
  ?>
 <form class="form-horizontal span6 " action="controller.php?action=editbasicinfo" method="POST"> 
  <table class="table table-striped  table-responsive"> 
    <tr>
      <td><label>Employee No. :</label></td>
      <td > <?php echo $emp->EMPLOYEEID; ?></td>
      <td colspan="4"></td>

    </tr>
    <tr>
      <td><label>Name :</label></td>
      <td>
        <input type="text" class="input form-control" name="FNAME" value="<?php echo  $emp->FNAME; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
      </td> 
      <td colspan="2">
        <input type="text" name="LNAME" class="input  form-control" value="<?php echo $emp->LNAME; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </td> 
      <td colspan="2">
        <input type="text" class="input  form-control" name="MNAME" value="<?php echo $emp->MNAME; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
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
        <input type="text" class="input form-control" name="ADDRESS" value="<?php echo $emp->ADDRESS; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
      </td> 
    </tr>
    <tr>
      <td ><label>Sex :</label></td> 
      <td colspan="2">
        <label><?php echo $radio; ?></label>
      </td>

      <td ><label>Date of Birth :</label></td>
      <td colspan="2"> 
      <div class="input-group " >  
            <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="BIRTHDATE" name="BIRTHDATE"  value="<?php echo date_format(date_create($emp->BIRTHDATE),'m/d/Y'); ?>" type="text" class="form-control input-sm"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required>
           
       </div>             
      </td>
       
    </tr> 
    <tr>
    <td><label>Age :</label></td>
      <td colspan="1" >
        <label><?php echo $emp->AGE; ?></label> 
    </td>
  <td><label>Place of Birth :</label></td>
      <td colspan="3" >
        <input type="text" name="BIRTHPLACE" class="input form-control"   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $emp->BIRTHPLACE; ?>">
            </td>
    
    </tr>  
    <tr>
     <td  ><label>Contact No.</label></td>
      <td colspan="2">
       <input type="text" name="TELNO" class="input form-control" value="<?php echo $emp->TELNO; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
     </td> 
     <td  ><label>Civil Status</label></td>
      <td colspan="2"> <?php echo $civilstatus; ?> 
            </td> 
    </tr>
    <tr>
     <td  ><label>Citizenship</label></td>
      <td colspan="2">
       <input type="text" name="CITIZENSHIP" class="input form-control" value="<?php echo $emp->CITIZENSHIP; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
     </td> 
     <td  ><label>Religious Affiliation</label></td>
      <td colspan="2"> <input type="text" name="RELIGION" class="input form-control" value="<?php echo $emp->RELIGION; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
            </td> 
    </tr>
    <tr>
      <td><label>Height :</label></td>
      <td>
        <input type="text" class="input form-control" name="HEIGHT" value="<?php echo  $emp->HEIGHT; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
      </td> 
        <td><label>Weight</label></td>
      <td>
        <input type="text" name="WEIGHT" class="input  form-control" value="<?php echo $emp->WEIGHT; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </td> 
      <td><label>Blood Type</label></td>
      <td>
        <input type="text" class="input  form-control" name="BLOODTYPE" value="<?php echo $emp->BLOODTYPE; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"> 
      </td>
    </tr>
    <tr>
    <td><label>E-mail Address</label></td>
      <td colspan="2" >
        <input type="email" name="EMAILADDRESS" class="input form-control" value="<?php echo $emp->EMAILADDRESS ?>">      
            </td>
     <td  ><label>Cellphone No.</label></td>
      <td colspan="2">
       <input type="text" name="CELLNO" class="input form-control" value="<?php echo $emp->CELLNO ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">      
            </td>
    </tr> 
  </table>  
  <?php include('familybackground.php'); ?>  
      
      <div class="col-lg-12">   
        <input type="submit" class="btn btn-primary btn-md" name="save" value="Save">
      </div> 
  </form>