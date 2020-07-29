<?php
require_once("initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/login.php");
     } 
?>
<html>
<head>
<title>COMPLAINTS | PARK ADMINISTRATIVE SERVICES</title>
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
<center> <h2> <a href="../index.php"><font color="white">COMPLAINTS LOG: PARK ADMINISTRATIVE SERVICES </font></a> </h2> </center>
<div id="tabs"class="right">
  <ul >
    <li><a href="#items">Complaints Log</a></li>
  </ul>
  <div id="items">
  <a href="addcomplaints.php" rel="facebox"> Add Complaints</a></br> </br>
<input type="text" placeholder="Search..." id="searchme">
<table width="100%" id="searchTbl" style="font-size:14px;">
<thead>
	<tr style="font-weight:bold;">
		<th width="10%">Date</th>
		<th width="20%">Name</th>
		<th width="10%">Hostel/Department/Unit</th>
		<th width="10%">Phone No.</th>
		<th width="10%">Complaints</th>
		<th width="10%">Action Plan</th>
		<th width="10%">Officer In Charge</th>
		<th width="10%">Remarks</th>
		<th width="10%">Action</th>
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from hrcomplaintslog ORDER BY date");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td align='center' class='index'> ".$row['Date']." </td>";
	echo "<td align='center' class='index'> ".$row['Names']." </td>";
	echo "<td align='center' class='index'> ".$row['HostelDepartmentUnit']." </td>";
	echo "<td align='center' class='index'> ".$row['PhoneNo']." </td>";
	echo "<td align='center' class='index'> ".$row['Complaints']." </td>";
	echo "<td align='center' class='index'> ".$row['ActionPlan']." </td>";
	echo "<td align='center' class='index'> ".$row['OfficeInCharge']." </td>";
	echo "<td align='center' class='index'> ".$row['Remarks']." </td>";
	echo '<td><div align="center">'.'<a rel="facebox" href=editcomplaints.php?id=' . $row["i_id"] .' ><img src="img/edit.png" width="25" ></a>'.'|'.'<a href=delcomplaints.php?id=' . $row["i_id"] .'><img src="img/delete.png" width="25" ></a>'.' </div></td>';

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