<?php
if(isset($_GET['contractorid'])) {
try {
require("conn.php");
$contractorid = $_GET['contractorid'];
$stmt = $conn->prepare("DELETE FROM tblcontractors WHERE contractorid='$contractorid'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>