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
		
	}
} 
$pages='parameter';
include '../main/header.php';?>
<br><br>
<div>
    <h1><b>Parameter Tampering</b></h1>
</div>
<?php
        include '../main/footer.php';
    ?>
