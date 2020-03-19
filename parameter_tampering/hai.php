<?php 
$dbserver = "localhost";
$dbname= "ceh";
$dbuser = "root";
$dbpw = "";
$conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);
if(isset($_GET['sid'])){
	$sid = $_GET['sid'];
	$sql = "SELECT * FROM users WHERE sid = '".$sid."'";
	$result = $conn->query($sql);

	while($row = $result -> fetch_assoc()){
		$main = "Welcome ".$row['name'];
	}
} 
$pages='parameter';
$lg=true;
include '../main/header.php';
include '../main/footer.php';?>
