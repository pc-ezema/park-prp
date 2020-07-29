    <?php
      require_once ("../include/initialize.php");
      $id = "";
      if (isset($_GET['id'])) {
        # code...
        $id = $_GET['id'];
      }
      $child = New Children();
      $result = $child->single_children($id);


    ?>

      <form class="form-horizontal span6 " action="controller.php?action=editchild" method="POST"> 
 
      <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "NAMEOFCHILD">Name of Child and Sex</label>

        <div class="col-md-8">
          <input type="hidden" name="id" value="<?php echo $result->CHILDID; ?>">
           <textarea class="form-control input-sm" id="NAMEOFCHILD" name="NAMEOFCHILD" placeholder=
              "Name of Child" type="text"  required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"><?php echo $result->NAMEOFCHILD; ?></textarea>
        </div>
      </div>
      </div>  

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATEOFBIRTH">Date of Birth:</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                 <input Required  value="<?php echo $result->DATEOFBIRTH; ?>" autocomplete="off" id="DATEOFBIRTH" name="DATEOFBIRTH"  type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
            
              </div>
        </div>
      </div>
    </div> 

     
  <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "idno"></label>

        <div class="col-md-8">
         <button class="btn btn-mod btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
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
   
 