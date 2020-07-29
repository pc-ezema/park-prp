    <div id="validate_leaveCredits"></div>
     <form class="form-horizontal span6 " action="controller.php?action=applyleave" method="POST"> 
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "LEAVETYPE">Type of Leave:</label>

          <div class="col-md-8">
          <?php
          //  $autonum = New Autonumber();
          // $res = $autonum->set_autonumber('leaves');
          ?>
        <!-- <input id="LEAVEID" name="LEAVEID" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
           <select class="form-control input-sm typeofleave" name="LEAVETYPE" id="LEAVETYPE">
              <option value="none"  >Select</option>
              <option value="Vacation"  >Vacation</option> 
              <option value="Sick">Sick</option>
                <?php if ($emp->SEX == 'Female') { ?>
                  <option value="Maternity" >Maternity</option>
              <?php }else{ ?>
                  <option value="Paternity" >Paternity</option>
              <?php } ?>
              <!-- <option value="SSS" >SSS</option> -->
              <!-- <option value="Emergency" >Emergency</option> -->
              <option value="Others" >Service Credits</option> 
            </select> 
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="LEAVECATEGORY">Category:</label>

          <div class="col-md-8">
          <?php
          //  $autonum = New Autonumber();
          // $res = $autonum->set_autonumber('leaves');
          ?>
        <!-- <input id="LEAVEID" name="LEAVEID" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
           <select class="form-control input-sm typeofleave" name="LEAVECATEGORY" id="LEAVECATEGORY">
              <!-- <option value="none"  >Select</option> -->
              <option value="With Pay"  >With Pay</option> 
              <option value="Without Pay">Without Pay</option> 
            </select> 
          </div>
        </div>
      </div> 
       <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "leavecredits">Leave Credits:</label>

        <div class="col-md-8"> 
           <input type="text" class="form-control input-sm" id="leavecredits" name="leavecredits" placeholder=
              "0" type="text" value="" readonly="true"   autocomplete="off">
             
        </div>
      </div>
      </div>   
      <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "LEAVECAUSE">Cause of Leave:</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="LEAVECAUSE" name="LEAVECAUSE" placeholder=
              "Cause of Leave" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"></textarea>
        </div>
      </div>
      </div> 


      <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "PHYSICIAN_NURSE">Physician/Nurse:</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm PHYSICIAN_NURSE" id="PHYSICIAN_NURSE" name="PHYSICIAN_NURSE" placeholder=
              "None" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 


     <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "DATEFROM">Date From:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATEFROM" name="DATEFROM"  value="" type="text" class="form-control DATEFROM" size="7" 
                 data-mask Required>
              </div>
        </div>
      </div>
    </div> 

    <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "DATETO">Date To:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATETO" name="DATETO"  value="" type="text" class="form-control DATETO" size="7" 
                data-mask Required >
              </div>
        </div>
      </div>
    </div> 

<!--     <div class="form-group">7
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "TIMEFROM">Time From
        :</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-clock-o"></i>
                </div>
                <input id="datetime12" name="TIMEFROM"  value="" type="text" class="form-control TIMEFROM" size="7" 
                data-inputmask="'alias': 'hh:mm t'" data-mask Required>
              </div>
        </div>
      </div>
    </div>  

     <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "TIMETO">Time To
        :</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-clock-o"></i>
                </div>
                <input id="datetime12" name="TIMETO"  value="" type="text" class="form-control TIMETO" size="7" 
                data-inputmask="'alias': 'hh:mm t'" data-mask Required>
              </div>
        </div>
      </div>
    </div>
     <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "NOTEDBY">Noted By:</label>

        <div class="col-md-8"> 
           <input type="text" class="form-control input-sm" id="NOTEDBY" name="NOTEDBY" placeholder=
              "None" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div>      -->  
<div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "idno"></label>

        <div class="col-md-8">
         <button class="btn btn-mod btn-sm submitapply" id="save"  name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
     
         <!-- <a class="btn btn-mod btn-sm submitapply"  data-toggle="modal" data-target="#SUBMITLEAVE" href="">Save</a> -->
            <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
         </div>
      </div>
    </div> 

<div class="modal fade" id="SUBMITLEAVE" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <div class="alert alert-danger">Are you Sure you Want to Proceed?</div>
      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
         <button class="btn btn-mod btn-sm " name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>
      </div>
    </div> 
    </div>
</div>

  </form>