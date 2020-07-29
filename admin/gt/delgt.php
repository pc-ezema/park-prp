<?php
if(isset($_GET['gtid'])) {
try {
require("conn.php");
$gtid = $_GET['gtid'];
$stmt = $conn->prepare("DELETE FROM tblgt WHERE gtid='$gtid'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>