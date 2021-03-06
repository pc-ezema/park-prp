<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>PARK MANAGER | PARK ADMINISTRATIVE SERVICES </title>
	<link id="browser_favicon" rel="shortcut icon" href="images/bg/agrologo.jpg">
<center>
  <div class="backk" style="float: left; margin-left: 120px;">
    <button><a href="corper.php">Back</a></button>
  </div>
  <div class="filterss" style="float: right; margin-right: 120px;">
    <button onclick="printContent('print')" id = "hit" style="float: right;">Print Report</button>
    <input id="btnExport" type="button" value="Export to Excel" style="float: right; margin-top: 30px; margin-right: -86px;">
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search">
    &nbsp;&nbsp;
  </div>
  <div ng-app="myApp" ng-controller="myCtrl">
  <br><br>
  <div id="print" style="border: 1px solid; width: 80%; height: auto;">
    <div class="report-title" style = "margin:10px;"><br/>
      <div class="print-logo">
        <img src="images/bg/agrologo.jpg" width="120px" height="80px" style="margin-left: -330px; position: absolute;">
      </div>
      <center><strong>AGRO PARK DEVELOPMENT COMPANY LIMITED</strong></center>
      <center>Ijale -Orile, Ayetoro Road Abeokuta, Abeokuta-North</center>
      <center>Tel. No. 07063169436</center>
      <br />
      <center><strong>SUMMARY OF ALL CORP MEMBERS</strong></center>
    </div>
      <br />
      <br />
      <br />
      <br />
      <table id="example" class="stripe order-table" cellspacing="0">
        <thead>
                                    <tr>
                                        <td>Photo</td>
                                        <td>Code Number</td>
										<td>Name</td>
                                        <td>Birth Date</td>
										<td>Religion</td>
                                        <td>Birth Place</td>
										<td>Country</td>
                                        <td>Sex</td>
										<td>Nationality</td>
                                        <td>State of Origin</td>
                                        <td>LGA</td>
                                        <td>Home Place</td>
                                        <td>Address</td>
                                        <td>Tel No.</td>
                                        <td>Email</td>
                                        <td>Marital Status</td>
                                        <td>Health Limitations</td>
                                        <td>Blood Group</td>
                                        <td>Genotype</td>
                                        <td>Level Education</td>
										<td>Institution Attended</td>
                                        <td>Course of Study</td>
                                        <td>Coordinator Name/Number</td>
                                        <td>Kin Name</td>
                                        <td>Kin Relationship</td>
										<td>Kin Address</td>
                                        <td>Kin Phone Number</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblcorper ORDER BY corperid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
                                  <td>
								  <img src="../human_resource/<?php echo $row['photo']?>" height="80" width="100"/>
								  </td>
                                  <td><?php echo $row['CODE']; ?></td>
								  <td><?php echo $row['SNAME'].", ".$row['FNAME']." ".$row['MNAME']; ?></td>
                                  <td><?php echo $row['DateofBirth']; ?></td>
                                  <td><?php echo $row['Religion']; ?></td>
                                  <td><?php echo $row['PlaceofBirth']; ?></td>
								  <td><?php echo $row['Country']; ?></td>
                                  <td><?php echo $row['Sex']; ?></td>
                                  <td><?php echo $row['Nationality']; ?></td>
                                  <td><?php echo $row['StateofOrigin']; ?></td>
                                  <td><?php echo $row['LGA']; ?></td>
                                  <td><?php echo $row['HomePlace']; ?></td>
                                  <td><?php echo $row['RADDRESS']; ?></td>
                                  <td><?php echo $row['TELNO']; ?></td>
                                  <td><?php echo $row['Email']; ?></td>
                                  <td><?php echo $row['MaritalStatus']; ?></td>
                                  <td><?php echo $row['HealthLimitations']; ?></td>
                                  <td><?php echo $row['BloodGroup']; ?></td>
                                  <td><?php echo $row['Geneotype']; ?></td>
                                  <td><?php echo $row['LevelEducation']; ?></td>
                                  <td><?php echo $row['InstitutionAttended']; ?></td>
                                  <td><?php echo $row['CourseofStudy']; ?></td>
                                  <td><?php echo $row['CoordinatorName']; ?></td>
                                  <td><?php echo $row['KinName']; ?></td>
                                  <td><?php echo $row['KinRelationship']; ?></td>
                                  <td><?php echo $row['KinAddress'];?></td>
								  <td><?php echo $row['KinPhoneNumber']; ?></td>
                                 </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                </table>
      <br><br><br>
      <div class="noted">
        <label>Prepared by:</label>
        <br>
        <br>
        <label style="text-transform: uppercase;"><strong>PARK HUMAN RESOURCE</strong></label>
        <br><br><br>
      </div>
    </div>
  </div>
  </center>

<script src="plugins/js/jquery-1.js"></script>

<script type="text/javascript">
$("#btnExport").click(function (e) {
    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var table_html = $('#print')[0].outerHTML;
//    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');
    
    var css_html = '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
//    css_html = css_html.replace(/ /g, '%20');
    
    a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html + '</body></html>');
    
    //setting the file name
    a.download = 'All Personnel_' + postfix + '.xls';
    //triggering the function
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
});
</script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<script type="text/javascript">
  (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.name = " ";
});
app.filter('capitalize', function() {
    return function(input) {
      return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
    }
});
</script>
