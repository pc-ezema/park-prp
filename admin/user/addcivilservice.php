    <div id="validate_leaveCredits"></div>
     <form class="form-horizontal span6 " action="controller.php?action=addcivilservice" method="POST"> 
       
    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "CAREER">Account Holder's Name</label>

        <div class="col-md-8">
        <textarea class="form-control input-sm" id="CAREER" name="CAREER" placeholder=
              "Account Holder's Name" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"></textarea> 
        </div>
      </div>
      </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "RATING">Account Number</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm RATING" id="RATING" name="RATING" placeholder=
              "Account Number" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 
     
     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATEEXAMINATION">Banker's Name</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                </div>
                <input id="DATEEXAMINATION" name="DATEEXAMINATION"  value="" type="text" class="form-control DATEEXAMINATION" size="7" 
               placeholder="Banker's Name"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
    </div> 


     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "PLACEEXAMINATION">Banker's Address</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="PLACEEXAMINATION" name="PLACEEXAMINATION" placeholder=
              "Banker's Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"></textarea>
        </div>
      </div>
      </div> 

    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "LICENSENO">Type of Account</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm LICENSENO" id="LICENSENO" name="LICENSENO" placeholder=
              "Type of Account" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
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
  


<!-- Custom Theme JavaScript --> 
 

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