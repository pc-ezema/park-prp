<?php
require_once("initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/login.php");
     } 
?>
<html>
<head>
<title>REQUISITION | PARK ADMINISTRATIVE SERVICES</title>
	<link id="browser_favicon" rel="shortcut icon" href="<?php echo web_root; ?>admin/img/bg/agrologo.jpg">

<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<link type="text/css" href="css/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="js/facebox.js"></script>
<link type="text/css" href="css/facebox.css" rel="stylesheet" />
<script>
  $(function() {
    $( "#tabs" ).tabs();
	$('a[rel*=facebox]').facebox();
	$( ".datepicker" ).datepicker();
  });
  
  $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#searchme").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#searchTbl tbody>tr").hide();
			$("#searchTbl td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#searchTbl tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


  </script>
 <style>
table tr:nth-child(even) { /*(even) or (2n 0)*/
	background: #A4D1FF;
}
table tr:nth-child(odd) { /*(odd) or (2n 1)*/
	background: #EAF4FF;
}
.index {
  word-break: break-all;
}
</style>
</head>
<html>
<body bgcolor="darkgreen">
<center> <h2> <a href="../index.php"><font color="white">REQUISITION: PARK ADMINISTRATIVE SERVICES </font></a> </h2> </center>
<div id="tabs"class="right">
  <ul >
    <li><a href="#items">REQUISITION FORM</a></li>
  </ul>
  <div id="items">
  <a href="addrequisition.php" rel="facebox"> Add Requisition</a></br> </br>
<input type="text" placeholder="Search..." id="searchme">
<table width="100%" id="searchTbl" style="font-size:14px;">
<thead>
	<tr style="font-weight:bold;">
		<th width="10%">Date</th>
		<th width="20%">Department</th>
		<th width="10%">Phone No.</th>
		<th width="10%">Purpose</th>
		<th width="10%">Purchase Mode</th>
		<th width="10%">Name</th>
		<th width="10%">Address</th>
		<th width="10%">Phone No.</th>
		<th width="10%">Pay Mode</th>
		<th width="10%">Description of Expenses</th>
		<th width="5%">Quantity</th>
		<th width="10%">Unit Price</th>
		<th width="10%">Amount</th>
		<th width="10%">Amount In Word</th>
		<th width="13%">Status</th>
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from tblrequisition WHERE PreparedBy='Human Resource' ORDER BY Date");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td align='center' class='index'> ".$row['Date']." </td>";
	echo "<td align='center' class='index'> ".$row['Department']." </td>";
	echo "<td align='center' class='index'> ".$row['Phone_No']." </td>";
	echo "<td align='center' class='index'> ".$row['Purpose']." </td>";
	echo "<td align='center' class='index'> ".$row['Purchase_Mode']." </td>";
	echo "<td align='center' class='index'> ".$row['Name']." </td>";
	echo "<td align='center' class='index'> ".$row['Address']." </td>";
	echo "<td align='center' class='index'> ".$row['PhoneNO']." </td>";
	echo "<td align='center' class='index'> ".$row['Pay_mode']." </td>";
	echo "<td align='center' class='index'> ".$row['Description_Expenses']." </td>";
	echo "<td align='center' class='index'> ".$row['Quantity']." </td>";
	echo "<td align='center' class='index'> ".$row['Unit_Price']." </td>";
	echo "<td align='center' class='index'> ".$row['Amount']." </td>";
	echo "<td align='center' class='index'> ".$row['Amount_Word']." </td>";
	echo "<td align='center' class='index'> ".$row['Status']." </td>";
	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>
</tbody>
</table>
  
  </div>
     
</div>

</body>
</html>