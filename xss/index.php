<?php
    setcookie('flag','64_Q0VIVVRTe1czYnMxdDNOeTRfVnUxTjNyYThMM30K');

    include '../main/header.php';
?>
<form action="index.php" method="POST">
    <input type="text" name="text" placeholder="write something"><br>
    <button onclick="show()">show </button><br>
</form>
<br><br>
    <div>
        <h1><b>Cross-site Scripting</b></h1>
    </div>
    <div class="border">
        <form action="index.php" method="POST">
            <div class="name">
                <input class="rounded" type="text" name="text" placeholder="Type Something"><br/>
            </div>
            <div class="submitdiv">
                <button class="black" onclick="show()">Show</button>
            </div>
        </form>
<p class="center" style="margin-left:30%; color:black;" id="text"></p>
<?php
    if(isset($_POST['text'])){
        echo "<b style='color:red'>".$_POST['text']."</b>";
    }
?>
