 <?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }
	  $leaveid = "";
	  if(isset($_GET['id'])){
		$leaveid = $_GET['id'];
	  }else{
	    redirect(web_root."index.php");
	  }
	  
	  
	  $datefrom = "";
	  $dateto = "";
	  $leavetype ="";
	  $creditbalance = 0;
	  
	  $sql = "SELECT * FROM `tblleaves` WHERE `LEAVEID`='{$leaveid}'"; 
	  $mydb->setQuery($sql);
      $res = $mydb->loadSingleResult();
	   
	
	  $datefrom = date_format(date_create($res->DATEFROM),'m/d/Y H:i');
	  $dateto = date_format(date_create($res->DATETO),'m/d/Y H:i');
	  
	 switch ($res->LEAVETYPE){

     case 'Vacation':
       # code...
       $leavetype = '<option value="none">Select</option>
              <option SELECTED value="Vacation"  >Vacation</option> 
              <option value="Sick">Sick</option>
              <option value="Maternity" >Maternity</option>
              <option value="SSS" >SSS</option>
              <option value="Emergency" >Emergency</option>
              <option value="Others" >Service Credits</option> ';
       break;
     case 'Sick':
       # code...
        $leavetype = '<option value="none">Select</option>
              <option  value="Vacation"  >Vacation</option> 
              <option SELECTED value="Sick">Sick</option>
              <option value="Maternity" >Maternity</option>
              <option value="SSS" >SSS</option>
              <option value="Emergency" >Emergency</option>
              <option value="Others" >Service Credits</option> ';

       break;
     case 'Maternity':
       # code...
      $leavetype = '<option value="none">Select</option>
              <option  value="Vacation"  >Vacation</option> 
              <option value="Sick">Sick</option>
              <option SELECTED value="Maternity" >Maternity</option>
              <option value="SSS" >SSS</option>
              <option value="Emergency" >Emergency</option>
              <option value="Others" >Service Credits</option> ';
       break;
	   
	  case 'SSS':
       # code...
	   $leavetype = '<option value="none">Select</option>
              <option  value="Vacation"  >Vacation</option> 
              <option  value="Sick">Sick</option>
              <option value="Maternity" >Maternity</option>
              <option SELECTED value="SSS" >SSS</option>
              <option value="Emergency" >Emergency</option>
              <option value="Others" >Service Credits</option> ';
      
       break;
      case 'Others':
       # code...
	   $leavetype = '<option value="none">Select</option>
              <option  value="Vacation"  >Vacation</option> 
              <option value="Sick">Sick</option>
              <option value="Maternity" >Maternity</option>
              <option value="SSS" >SSS</option>
              <option value="Emergency" >Emergency</option>
              <option SELECTED value="Others" >Service Credits</option> ';
      
       break;
       
   }

	 $leavescredit = New LeavesCredit();
	 $lcredits = $leavescredit->single_leavescredit($_SESSION['USERID']);
 
	switch ($res->LEAVETYPE){

     case 'Vacation':
       # code...
       $creditbalance = $lcredits->VACATION;
       break;
     case 'Sick':
       # code...
        $creditbalance = $lcredits->SICK; 
       break;
     case 'Maternity':
       # code...
		 $creditbalance = $lcredits->MATERNITY;
       break;
	   
	  case 'SSS':
       # code...
	    $creditbalance = $lcredits->SSS;
       break;
      case 'Others':
       # code... 
	    $creditbalance = $lcredits->OTHERS;
       break;
       
   }
?>



 <form class="form-horizontal span6 " action="controller.php?action=editapplyleave" method="POST"> 
  <div id="validate_edit_leaveCredits"></div>
       <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for=
          "LEAVETYPE">Type of Leave:</label>

          <div class="col-md-8"> 
		   <input type="hidden"  name="LEAVEID"  value="<?php echo $leaveid; ?>" >
           <select class="form-control input-sm typeofleaveedit" name="LEAVETYPE" id="editLEAVETYPE">
			  <?php echo $leavetype; ?>
            </select> 
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for="LEAVECATEGORY">Category:</label>

          <div class="col-md-8"> 
           <select class="form-control input-sm typeofleave" name="LEAVECATEGORY" id="LEAVECATEGORY1"> 
              <option <?php echo ($res->LEAVECATEGORY=='Without Pay') ? 'SELECTED': ''; ?> value="Without Pay">Without Pay</option> 
               <option <?php echo ($res->LEAVECATEGORY=='With Pay') ? 'SELECTED': ''; ?> value="With Pay"  >With Pay</option> 
           </select> 
          </div>
        </div>
      </div> 
       <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "leavecredits">Leave Credits:</label>

        <div class="col-md-8"> 
           <input type="text" class="form-control input-sm" id="editleavecredits" name="leavecredits" placeholder=
              "0" type="text" value="<?php echo $creditbalance; ?>" readonly="true"   autocomplete="off">
             
        </div>
      </div>
      </div>   
      <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "LEAVECAUSE">Cause of Leave:</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="LEAVECAUSE" name="LEAVECAUSE" placeholder=
              "Cause of Leave" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"><?php echo $res->LEAVECAUSE; ?></textarea>
        </div>
      </div>
      </div> 


      <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "PHYSICIAN_NURSE">Physician/Nurse:</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm PHYSICIAN_NURSE" id="PHYSICIAN_NURSE" name="PHYSICIAN_NURSE" placeholder=
              "None" type="text" value="<?php echo $res->PHYSICIAN_NURSE; ?>"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 


     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATEFROM">Date From:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="editDATEFROM" name="DATEFROM"  value="<?php echo $datefrom; ?>" type="text" class="form-control DATEFROM" size="7" 
                 data-mask Required>
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
                <input id="editDATETO" name="DATETO"  value="<?php echo $dateto; ?>" type="text" class="form-control DATETO" size="7" 
                data-mask Required >
              </div>
        </div>
      </div>
    </div> 

 
  <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "idno"></label>

        <div class="col-md-8">
         <button class="btn btn-mod btn-sm submiteditapply" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
        </div>
      </div>
    </div> 
  </form>  
  

<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script> 
<script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.extensions.js"></script>   
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/meiomask.min.js"></script>  
 
 
<script>  
     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });



    $('#editDATETO').inputmask({
        mask: "2/1/y h:s",
        placeholder: "mm/dd/yyyy hh:mm",
        alias: "datetime",
        hourFormat: "24"
    });



    $('#editDATEFROM').inputmask({
        mask: "2/1/y h:s",
        placeholder: "mm/dd/yyyy hh:mm",
        alias: "datetime",
        hourFormat: "24"
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
   
<script type="text/javascript" > 

 
$(document).on("click", ".submiteditapply", function () {
 /* load all variables */
   
     var lcredit =  document.getElementById('editleavecredits').value;
     var tleave = document.getElementById('LEAVETYPE').value;
     var lcateg = document.getElementById('LEAVECATEGORY1').value;
   
   if(lcateg=='With Pay'){
    if (lcredit == 0) {
       $("#validate_edit_leaveCredits").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#validate_edit_leaveCredits").fadeIn("slow");
        $("#validate_edit_leaveCredits").html("No available leave credits!"); 
        $("#RU_PASS").focus();
       return false;
    } 
    }
  
}); 

$(document).on("change", ".typeofleaveedit", function () {
 /* load all variables */
   
  var typeofleave =  document.getElementById('editLEAVETYPE').value 
   
    // $("#checkid_message").hide(); 

   if (typeofleave=='Sick') {
      $('.PHYSICIAN_NURSE').removeAttr('disabled');
      $('.PHYSICIAN_NURSE').val('');
       // alert(typeofleave);
   }else{
      $('.PHYSICIAN_NURSE').attr('disabled','false');
      $('.PHYSICIAN_NURSE').val('NONE');
        // alert(typeofleave);
   }; 
 
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "creditbalance.php",    
        dataType: "text",  //expect html to be returned  
        data:{LEAVETYPE:typeofleave},               
        success: function(data){   
          $('#editleavecredits').val(data);   
        }

    }); 
 
}); 

 
</script> 
  