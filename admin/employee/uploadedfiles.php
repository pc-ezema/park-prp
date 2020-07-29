<div class="panel-group" id="accordion">   
    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"  ><i class="fa-upload fa"></i> Upload New File <i class="fa-caret-down fa"></i></a>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
             <form role="form" method="post" action="controller.php?action=addfiles" enctype="multipart/form-data">
                <div class="form-group">
                    <label>File Title</label>
					<input type="hidden" name="EMPLOYEEID" value="<?php echo  $emp->EMPLOYEEID; ?>" />
					<input type="hidden" name="FNAME" value="<?php echo  $emp->FNAME; ?>" />
					<input type="hidden" name="LNAME" value="<?php echo  $emp->LNAME; ?>" />
                    <input class="form-control" type="text" name="filename">
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input  type="file" name="picture">
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-upload fw-fa"></i> Upload</button>
            </form>
        </div>
    </div>
</div>  
 <table class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
                 <thead>
                  <tr> 
                     <th>FileName</th>
                    <th>Action</th> 
                  </tr> 
                </thead> 
                <tbody>
                  <?php    
                    $mydb->setQuery("SELECT * 
                            FROM   `tblfiles`  WHERE EMPLOYEEID='".$emp->EMPLOYEEID."'");
                    $cur = $mydb->loadResultList();

                  foreach ($cur as $result) { 
                    echo '<tr>';
                    // echo '<td width="5%" align="center"></td>';
                    echo '<td>' . $result->FILENAME.'</a></td>';
                    echo '<td>    
                         <a title="Edit" href="../../employee/'.$result->LOCATION.'"  class="btn btn-info btn-xs  ">
                         <span class="fa fa-download fw-fa">Download</span></a> 
                       </td>';
                    echo '</tr>';  

                    } 
                  ?>
                </tbody>
                
              </table>