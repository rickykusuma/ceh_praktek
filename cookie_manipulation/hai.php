		<?php
		$pages='cookie';
		include '../main/header.php'?>
        <br><br>
		<?php
		$dbserver = "localhost";
		$dbname= "ceh";
		$dbuser = "root";
		$dbpw = "";
		$conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);
		if(isset($_COOKIE['sid'])){
		    $sid = $_COOKIE['sid'];
		    $sql = "SELECT * FROM users WHERE sid = '".$sid."'";
		    $result = $conn->query($sql);

		    while($row = $result -> fetch_assoc()){
		        echo "<h1><b>Halo, ".$row['name']."</b></h1>";
		    }
		} else {
		    echo "<script>window.location.href='index.php'</script>";
		}
		?>
		  <?php
        include '../main/footer.php';
    ?>
