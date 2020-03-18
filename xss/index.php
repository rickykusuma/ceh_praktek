<?php
    setcookie('flag','64_Q0VIVVRTe1czYnMxdDNOeTRfVnUxTjNyYThMM30K');

    include '../main/header.php';
?>
<form action="index.php" method="POST">
    <input type="text" name="text" placeholder="write something"><br>
    <button onclick="show()">show </button><br>
</form>
<p id="text"></p>
<?php
    if(isset($_POST['text'])){
        echo "<b style='color:red'>".$_POST['text']."</b>";
    }
?>
