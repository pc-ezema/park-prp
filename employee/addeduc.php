         <form class="form-horizontal span6 " action="controller.php?action=addschool" method="POST"> 
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "LEVEL">Level:</label>

          <div class="col-md-8">
            <input name="deptid" type="hidden" value="">
             <input class="form-control input-sm" id="LEVEL" name="LEVEL" placeholder=
                "Level" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
          </div>
        </div>
      </div>  
      <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "SCHOOL">School:</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="SCHOOL" name="SCHOOL" placeholder=
              "School" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
        </div>
      </div>
      </div> 


      <div class="form-group">
      <div class="col-md-8">
        <label class="col-md-4 control-label" for=
        "DEGREE">Degree:</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
              "Degree" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
        </div>
      </div>
      </div> 

     <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "YRGRADUATED">Year Graduated:</label>

          <div class="col-md-8">
            <input name="deptid" type="hidden" value="">
            <input  class="form-control input-sm" id="YRGRADUATED" name="YRGRADUATED" placeholder=
                "Year Graduated"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
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
  </form>