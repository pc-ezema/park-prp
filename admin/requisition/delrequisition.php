<?php
if(isset($_GET['id'])) {
try {
require("db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM tblrequisition WHERE i_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}


?>