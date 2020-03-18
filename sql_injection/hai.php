<?php include '../main/header.php'; ?>
<?php
$dbserver = "localhost";
$dbname= "ceh";
$dbuser = "root";
$dbpw = "";
$conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);

session_start();
if(isset($_SESSION['sid'])){
    $sid = $_SESSION['sid'];
    $sql = "SELECT * FROM users WHERE sid = '".$sid."'";
    $result = $conn->query($sql);

    while($row = $result -> fetch_assoc()){
        echo "halo, ".$row['name'];
    }
} else {
    echo "<script>window.location.href='index.php'</script>";
}

?>