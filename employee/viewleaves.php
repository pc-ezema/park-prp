<div class="panel-group" id="accordion">   
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"  ><i class="fa-apply fa"></i> Apply for Leave <i class="fa-caret-down fa"></i></a>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
          <?php include ('leaveofabsence.php'); ?>
        </div>
    </div>
</div>
     <div class="col-lg-12">

      <ul id="myTab2" class="nav nav-tabs nav-justified">
          <li class="active"><a href="#one" data-toggle="tab">Leave Credits</a>
          </li>
          <li class=""><a href="#two" data-toggle="tab">Leave of Absence</a> 
          </li> 
      </ul>

      <div id="myTabContent2" class="tab-content">
          <div class="tab-pane fade active in" id="one">
                 <table class="table table-striped  table-responsive"> 
                    <tr> 
                    </tr> 
                    <tr>
                      <td ><label>Vacation :</label></td> 
                      <td colspan="2">
                        <label><?php echo $lcredits->VACATION; ?></label>
                      </td> 
                      <td ><label>Sick :</label></td>
                      <td colspan="2"> 
                      <div class="input-group " > 
                          <label><?php echo  $lcredits->SICK; ?> </label>   
                       </div>             
                      </td> 
                    </tr> 
                    <tr>
<?php if($emp->SEX=='Female' && $emp->CIVILSTATUS != 'Single'){ ?>
                    <td ><label>Maternity :</label></td>
                      <td colspan="2"> 
                      <div class="input-group " > 
                          <label><?php echo  $lcredits->MATERNITY; ?> </label>   
                       </div>             
                      </td> 
					  
<?php }elseif($emp->SEX=='Male' && $emp->CIVILSTATUS != 'Single'){  ?>
					 <td ><label>Paternity :</label></td>
                      <td colspan="2"> 
                      <div class="input-group " > 
                          <label><?php echo  $lcredits->MATERNITY; ?> </label>   
                       </div>             
                      </td> 

<?php } ?>
                  <!--   <td><label>SSS :</label></td>
                      <td colspan="2" >
                        <label><?php echo $lcredits->SSS; ?></label> 
                            </td> -->
                <!--     <td  ><label>Emergency</label></td>
                      <td colspan="2">
                        <label><?php echo $lcredits->EMERGENCY; ?></label> 
                            </td>
                    </tr>  
                    <tr> -->
                     
                    <td><label>Service Credits :</label></td>
                      <td colspan="4" >
                        <label><?php echo $lcredits->OTHERS; ?></label> 
                            </td>
                   
                    </tr>
                    <tr> 
                      <td colspan="6">   
                      </td>
                    </tr>
                  </table>   

          </div>
          <div class="tab-pane fade" id="two">
            <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:11px" cellspacing="0">

                <thead>
                  <tr>
                    <!-- <th width="5%">Employees</th> -->
                    <th>Date From</th>
                    <th>Date To</th> 
                    <th>Type of Leave</th>
                    <th>Cause of Leave</th>
                    <th>No. of Days</th> 
                    <th>Remarks</th>
                    <th>Status</th> 
                    <!-- <th width="100px">Action</th>  -->
                  </tr> 
                </thead> 
                <tbody>
                  <?php  
                    // $mydb->setQuery("SELECT * 
                      //      FROM  `tblusers` WHERE TYPE != 'Customer'");
                    $mydb->setQuery("SELECT * FROM `tblleaves`  WHERE EMPLOYEEID='".$_SESSION['EMPLOYEEID']."' ORDER BY LEAVESTATUS='Pending' AND LEAVEID DESC");
                    $cur = $mydb->loadResultList();

                  foreach ($cur as $result) { 

                    if ($result->LEAVETYPE=='Others') {
                      # code...
                      $leavetype = 'Service Credits';
                    }else{
                      $leavetype = $result->LEAVETYPE;
                    }
                    echo '<tr>';
                    // echo '<td width="5%" align="center"></td>';
                    // echo '<td>' . $result->EMPLOYEE.'</a></td>';
                    // echo '<td>' . $result->DATEFROM.' ' . $result->TIMEFROM.'</a></td>';
                    // echo '<td>' . $result->DATETO.' ' . $result->TIMETO.'</a></td>';
                    echo '<td>' .date_format(date_create($result->DATEFROM),'m/d/Y H:i').'</a></td>';
                    echo '<td>' .date_format(date_create($result->DATETO),'m/d/Y H:i').'</a></td>';
                    echo '<td>' . $leavetype.'</a></td>';
                    echo '<td>' . $result->LEAVECAUSE.'</a></td>';
                    echo '<td>' . $result->NOOFDAYS.'</a></td>';
                    echo '<td>'. $result->LEAVECATEGORY.'</td>';
                    echo '<td>'. $result->LEAVESTATUS.'</td>'; 
                    // if ($result->LEAVESTATUS =='Pending') {
                    //   # code...
                    // echo '<td align="center" >
                    //       <a data-toggle="lightbox" title="Edit Leave of Absence" href="editleaves.php?id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-edit fw-fa "> Edit </a>
                    //         <a title="Edit" href="print_leave.php?id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-print fw-fa "> Print</a>
                    //     </td>';

                    // }elseif($result->LEAVESTATUS =='Approved' || $result->LEAVESTATUS =='Denied'){

                    //   echo '<td align="center" >
                    //         </td>'; 
                    // } 
                    echo '</tr>';
                  } 
                  ?>
                </tbody>
                
              </table>
          </div> 
          
      </div>

    </div>