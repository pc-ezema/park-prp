<?php
if(isset($_GET['Siwesid'])) {
try {
require("conn.php");
$Siwesid = $_GET['Siwesid'];
$stmt = $conn->prepare("DELETE FROM tblsiwes WHERE Siwesid='$Siwesid'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>