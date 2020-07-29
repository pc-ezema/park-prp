<style type="text/css">
 .input-xs {
 height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;

}

#wrap {
  width: 100%; 
}
#wrap  .row{
  margin-top: 1px;
  margin-bottom: 1px;
  border-bottom: 1px solid #ddd;
  padding: 3px;
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2,.col-lg-4,.col-lg-6 {
    float: left;
  }
  .col-lg-6 {
    width: 60%;
  }
  .col-lg-4 {
    width: 40%;
  }
 
  .col-lg-2 {
    width: 45%;
  }
  .col-lg-1 {
    width: 55%;
  }
 
}
 </style> 
<?php

 $fambackground = New FamilyBackground();
  $fam = $fambackground->single_familybackground($emp->EMPLOYEEID);

?>

<div id="wrap">
<div class=" col-lg-12" style="background-color:#000; color:#fff;font-size:15px;padding:2px">Family Background</div>
  <div class="col-lg-1" style="border-right:1px solid #ddd;"  > 
  <div class=" col-lg-12" style=" font-size:12px;padding:2px"><label>Spouse</label></div>
    <div class="row">
      <label class="col-lg-4">Surname</label>
      <div class="col-lg-6"><?php echo $fam->SPOUSE_LNAME; ?></div> 
    </div> 
    <div class="row">
       <label class="col-lg-4">First Name</label>
      <div class="col-lg-6"> <?php echo $fam->SPOUSE_FNAME; ?> </div>
    </div>
    <div class="row">
       <label class="col-lg-4">Middle Name</label>
      <div class="col-lg-6"> <?php echo $fam->SPOUSE_MNAME; ?> </div>
    </div>
    <div class="row">
       <label class="col-lg-4">Occupation</label>
      <div class="col-lg-6"> <?php echo $fam->OCCUPATION; ?> </div>
    </div>
    <div class="row">
       <label class="col-lg-4">Employer/BusinessName</label>
      <div class="col-lg-6"> <?php echo $fam->EMPLOYER_BUSNAME; ?> </div>
    </div>
    <div class="row">
       <label class="col-lg-4">Business Address</label>
      <div class="col-lg-6"> <?php echo $fam->BUSADDRESS; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">Employer/Bus. Tel. No.</label>
      <div class="col-lg-6"><?php echo $fam->EMPLOYER_BUSTELNO; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">Contact No. of Spouse</label>
      <div class="col-lg-6"><?php echo $fam->SPOUSE_CONTACTNO; ?></div>
    </div>
    <div class=" col-lg-12" style="background-color:#000; color:#fff">Father</div>
    <div class="row">
       <label class="col-lg-4">Surname</label>
      <div class="col-lg-6"><?php echo $fam->FATHER_LNAME; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">First Name</label>
      <div class="col-lg-6"><?php echo $fam->FATHER_FNAME; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">Middle Name</label>
      <div class="col-lg-6"> <?php echo $fam->FATHER_MNAME; ?> </div>
    </div>
    <div class=" col-lg-12" style="background-color:#000; color:#fff">Mother Maiden Name</div>
    <div class="row">
       <label class="col-lg-4">Surname</label>
      <div class="col-lg-6"> <?php echo $fam->MOTHER_LNAME; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">First Name</label>
      <div class="col-lg-6"><?php echo $fam->MOTHER_FNAME; ?></div>
    </div>
    <div class="row">
       <label class="col-lg-4">Middle Name</label>
      <div class="col-lg-6"><?php echo $fam->MOTHER_MNAME; ?></div>
    </div>
  </div>

  <div class="col-lg-2" > 
  <table class="table table-bordered" padding="0">
    <tr>
      <td>Name of Child/Children<br/>
        (Write full name and list all)</td>
      <td width="100px">Date of Birth
        (mm/dd/yyyy)</td> 
    </tr>
    <?php   
                    // $mydb->setQuery("SELECT * 
                      //      FROM  `tblusers` WHERE TYPE != 'Customer'");
                    $mydb->setQuery("SELECT * 
                            FROM   `tblchildren` WHERE EMPLOYEEID='".$emp->EMPLOYEEID."'");
                    $cur = $mydb->loadResultList();

                  foreach ($cur as $result) { 
                    echo '<tr>'; 
                    echo '<td>' . $result->NAMEOFCHILD.'</a></td>';
                    echo '<td>'. $result->DATEOFBIRTH.'</td>';  
                    echo '</tr>';
                  } 
                  ?>
  </table>
  </div>
</div>









<!-- 
  <table class="table table-striped  table-responsive"> 
      <tr>
        <td colspan="5" style="background-color:#000;color:#fff;font-size:15px">Family Background</td> 
      </tr>
      <tr>
        <td colspan="3" width="400px">Spouse</td>
        <td  style="text-align:center;">Name of Child/Children<br/>
        (Write full name and list all)
        </td>
        <td  style="text-align:center;" width="150px">Date of Birth
        (mm/dd/yyyy)
        </td>
      </tr>
      <tr>
        <td>Surname</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="SPOUSE_LNAME"></td> 
        <td><input type="" class="form-control input-xs" name="CHILD_A" ></td>
        <td><input type="" class="form-control input-xs" name="BIRTH_A"></td>
      </tr>
      <tr>
        <td>First Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="SPOUSE_FNAME"></td> 
        <td><input type="" class="form-control input-xs" name="CHILD_B"></td>
        <td><input type="" class="form-control input-xs" name="BIRTH_B"></td>
      </tr>
      <tr>
        <td>Middle Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="SPOUSE_MNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td>Occupation</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="OCCUPATION"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td>Employer/Business Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="EMPLOYER_BUSNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
       <tr>
        <td>Business Address</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="BUSADDRESS"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
       <tr>
        <td>Employer/Bus. Tel. No.</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="EMPLOYER_BUSTELNO"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td>Contact  No. of Spouse</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="SPOUSE_CONTACTNO"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td colspan="5">Father</td> 
      </tr> 
      <tr>
        <td>Surname</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="FATHER_LNAME"></td> 
        <td><input type="" class="form-control input-xs" ></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td>First Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="FATHER_FNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
       <tr>
        <td>Middle Name</td>
        <td colspan="2"><input type="" class="form-control input-xs"  name="FATHER_MNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td colspan="5">Mother Maiden Name</td> 
      </tr> 
      <tr>
        <td>Surname</td>
        <td colspan="2"><input type="" class="form-control input-xs"  name="MOTHER_LNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
      <tr>
        <td>First Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="MOTHER_FNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
       <tr>
        <td>Middle Name</td>
        <td colspan="2"><input type="" class="form-control input-xs" name="MOTHER_MNAME"></td> 
        <td><input type="" class="form-control input-xs"></td>
        <td><input type="" class="form-control input-xs"></td>
      </tr>
  </table>    -->