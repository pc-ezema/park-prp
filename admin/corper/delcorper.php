<?php
if(isset($_GET['corperid'])) {
try {
require("conn.php");
$corperid = $_GET['corperid'];
$stmt = $conn->prepare("DELETE FROM tblcorper WHERE corperid='$corperid'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>