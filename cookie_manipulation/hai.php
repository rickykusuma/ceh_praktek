		<?php
		include '../main/conn.php';

		if (isset($_COOKIE['sid'])) {
		    $sid = $_COOKIE['sid'];
		    $sql = "SELECT * FROM users WHERE sid = '".$sid."'";
		    $result = $conn->query($sql);

		    while($row = $result -> fetch_assoc())
				$main = "Welcome ".$row['name'];
		} 
		else 
			echo "<script>window.location.href='index.php'</script>";

		$pages = 'cookie';
		$lg = true;

		include '../main/header.php';
        include '../main/footer.php';
    ?>
