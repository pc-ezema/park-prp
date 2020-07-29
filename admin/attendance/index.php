<?php
require_once("initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/login.php");
     } 
?>
<html>
<head>
<title>ATTENDANCE | PARK ADMINISTRATIVE SERVICES</title>
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
</style>
</head>
<body bgcolor="darkgreen">
<center> <h2> <a href="../index.php"><font color="white">ATTENDANCE: PARK ADMINISTRATIVE SERVICES </font></a> </h2> </center>
<div id="tabs"class="right">
  <ul >
    <li><a href="#items">Take Attendance</a></li>
  </ul>
  <div id="items">
  <a href="employee.php" rel="facebox"> Employee Attendance </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="corper.php" rel="facebox"> Corpers Attendance </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="gt.php" rel="facebox"> GT Attendance </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href="it.php" rel="facebox"> IT Attendance </a> </br> </br>
<input type="text" placeholder="Search..." id="searchme">
<table width="100%" id="searchTbl" style="font-size:11px;">
<thead>
	<tr style="font-weight:bold;">
		<th width="20%">Name</th>
		<th width="10%">Time Sign In</th>
		<th width="10%">Date</th>
		<th width="10%">Time Sign Out</th>
		<th width="10%">Month</th>
		<th width="10%">Action</th>
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from attendance ORDER BY Name");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td align='center'> ".$row['Name']." </td>";
	echo "<td align='center'> ".$row['TimeSignIn']." </td>";
	echo "<td align='center'> ".$row['DateSign']." </td>";
	echo "<td align='center'> ".$row['TimeSignOut']." </td>";
	echo "<td align='center'> ".$row['Month']." </td>";
	echo '<td><div align="center">'.'<a rel="facebox" href=editattendance.php?id=' . $row["i_id"] .' ><img src="img/edit.png" width="25" ></a>'.'|'.'<a href=delitem.php?id=' . $row["i_id"] .'><img src="img/delete.png" width="25" ></a>'.' </div></td>';

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