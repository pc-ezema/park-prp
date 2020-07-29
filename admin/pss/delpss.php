<?php
if(isset($_GET['pssid'])) {
try {
require("conn.php");
$pssid = $_GET['pssid'];
$stmt = $conn->prepare("DELETE FROM tblpss WHERE pssid='$pssid'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>