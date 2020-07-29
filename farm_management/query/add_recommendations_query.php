<?php
include('../connect.php');
if(isset($_POST['save'])) {
	
	$Units = $_POST['unit'];
	$Recommendation = $_POST['recommendation'];
	$DateofRecommendation = $_POST['date_recommendation'];
	$ReasonsforRecommendation = $_POST['reasons_recommendation'];
	$ExpectedChange = $_POST['expected_change'];
	$Remarks = $_POST['remarks'];
								  
	$add = $con->prepare("INSERT INTO recommendationlog (Units, Recommendation, DateofRecommendation, ReasonsforRecommendation, ExpectedChange, Remarks) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Units, $Recommendation, $DateofRecommendation, $ReasonsforRecommendation, $ExpectedChange, $Remarks));

	header('location:../all_recommendations.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>