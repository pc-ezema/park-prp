<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>PARK MANAGER | PARK ADMINISTRATIVE SERVICES </title>
	<link id="browser_favicon" rel="shortcut icon" href="images/bg/agrologo.jpg">
<center>
  <div class="backk" style="float: left; margin-left: 120px;">
    <button><a href="loan.php">Back</a></button>
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
      <center><strong>SUMMARY OF ALL APPLIED LOAN</strong></center>
    </div>
      <br />
      <br />
      <br />
      <br />
      <table id="example" class="stripe order-table" cellspacing="0">
        <thead>
                                    <tr>
                                        <td>Code Number</td>
										<td>Name</td>
										<td>Department</td>
                                        <td>Reason for Loan</td>
										<td>Amount Borrowed</td>
                                        <td>Mode of Return</td>
                                        <td>Date of Return</td>
                                        <td>First Name</td>
                                        <td>First Code Number</td>
                                        <td>First Department</td>
                                        <td>Second Name</td>
                                        <td>Second Code Number</td>
                                        <td>Second  Department</td>
                                        <td>Third Name</td>
                                        <td>Third Code Number</td>
                                        <td>Third Department</td>
										<td>Fourth Name</td>
                                        <td>Fourth Code Number</td>
                                        <td>Fourth Department</td>
                                        <td>Fifth Name</td>
                                        <td>Fifth Code Number</td>
                                        <td>Fifth Department</td>
										<td>Approve Status</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblloans ORDER BY Loanid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
                                  <td><?php echo $row['Code_Number']; ?></td>
								  <td><?php echo $row['Names']; ?></td>
                                  <td><?php echo $row['Department']; ?></td>
                                  <td><?php echo $row['ReasonforLoan']; ?></td>
                                  <td><?php echo $row['AmountBorrowed']; ?></td>
                                  <td><?php echo $row['ModeofReturn']; ?></td>
                                  <td><?php echo $row['DateofReturn']; ?></td>
                                  <td><?php echo $row['FirstName']; ?></td>
                                  <td><?php echo $row['FirstCodeNumber']; ?></td>
                                  <td><?php echo $row['FirstDepartment']; ?></td>
                                  <td><?php echo $row['SecondName']; ?></td>
                                  <td><?php echo $row['SecondCodeNumber']; ?></td>
                                  <td><?php echo $row['SecondDepartment']; ?></td>
                                  <td><?php echo $row['ThirdName']; ?></td>
                                  <td><?php echo $row['ThirdCodeNumber']; ?></td>
                                  <td><?php echo $row['ThirdDepartment']; ?></td>
                                  <td><?php echo $row['FourthName']; ?></td>
                                  <td><?php echo $row['FourthCodeNumber']; ?></td>
                                  <td><?php echo $row['FourthDepartment']; ?></td>
								  <td><?php echo $row['FifthName']; ?></td>
                                  <td><?php echo $row['FifthCodeNumber']; ?></td>
                                  <td><?php echo $row['FifthDepartment']; ?></td>
                                  <td><?php echo $row['ApprovalStatus'];?></td>
                                 </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                </table>
      <br><br><br>
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
