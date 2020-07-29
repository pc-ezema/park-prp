<?php
if(isset($_POST['editbtn'])) {
$id = $_POST['id'];
$Name = $_POST['name'];
$TimeSignIn = $_POST['signin_time'];
$DateSign = $_POST['date'];
$TimeSignOut = $_POST['signout_time'];
$Month = $_POST['month'];

try {
require("db.php");
$stmt = $conn->prepare("UPDATE attendance SET Name='$Name', TimeSignIn='$TimeSignIn', DateSign='$DateSign', TimeSignOut='$TimeSignOut', Month='$Month' WHERE i_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

}
?>