    <div id="validate_leaveCredits"></div>
     <form class="form-horizontal span6 " action="controller.php?action=addworkexperience" method="POST"> 
        
      
     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATEFROM">Date From:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATEFROM" name="DATEFROM"  value="" type="text" class="form-control DATEFROM" size="7" 
                data-inputmask="'alias': 'mm/dd/yyyy'" data-mask Required>
              </div>
        </div>
      </div>
    </div> 

    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATETO">Date To:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATETO" name="DATETO"  value="" type="text" class="form-control DATETO" size="7" 
                data-inputmask="'alias': 'mm/dd/yyyy'" data-mask Required >
              </div>
        </div>
      </div>
    </div>   

      <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "WE_POSITION">Position Title</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm WE_POSITION" id="WE_POSITION" name="WE_POSITION" placeholder=
              "Position Title" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 

    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "COMPANY">Company/Office</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm COMPANY" id="COMPANY" name="COMPANY" placeholder=
              "Company/Office" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "MOTHLYSALARY">Monthly Salary</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm MOTHLYSALARY" id="MOTHLYSALARY" name="MOTHLYSALARY" placeholder=
              "Monthly Salary" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "EMPLOYMENTSTATUS">Status of Employment</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm EMPLOYMENTSTATUS" id="EMPLOYMENTSTATUS" name="EMPLOYMENTSTATUS" placeholder=
              "None" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "SERVICELENGTH">Length of Service</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm SERVICELENGTH" id="SERVICELENGTH" name="SERVICELENGTH" placeholder=
              "Length of Service (no of years & months)" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 

 
  <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "idno"></label>

        <div class="col-md-8">
         <button class="btn btn-mod btn-sm " name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
            <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
         </div>
      </div>
    </div> 
  </form>

    <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script> 
    <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->  

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.extensions.js"></script> 
 
 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
    
   

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

 
    //Money Euro
    $("[data-mask]").inputmask();
 
     
 
  function capitalize(textboxid, str) {
      // string with alteast one character
      // if (str && str.length >= 1)
      // {       
      //     var firstChar = str.charAt(0);
      //     var remainingStr = str.slice(1);
      //     str = firstChar.toUpperCase() + remainingStr;
      // }
      document.getElementById(textboxid).value =  str.toUpperCase();
  }


 
 
 
</script> 