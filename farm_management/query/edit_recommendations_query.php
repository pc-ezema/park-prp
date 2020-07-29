<?php
include('../connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$Units = $_POST['unit'];
	$Recommendation = $_POST['recommendation'];
	$DateofRecommendation = $_POST['date_recommendation'];
	$ReasonsforRecommendation = $_POST['reasons_recommendation'];
	$ExpectedChange = $_POST['expected_change'];
	$Remarks = $_POST['remarks'];
												  
	$edit = $con->prepare("UPDATE recommendationlog SET `Units` = ?, `Recommendation` = ?, `DateofRecommendation` = ?, `ReasonsforRecommendation` = ?, `ExpectedChange` = ?, `Remarks` = ? WHERE id = ?");
	$edit->execute(array($Units, $Recommendation, $DateofRecommendation, $ReasonsforRecommendation, $ExpectedChange, $Remarks, $id));

	header('location:../all_recommendations.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>