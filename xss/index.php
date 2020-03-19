<?php
    setcookie('flag','64_Q0VIVVRTe1czYnMxdDNOeTRfVnUxTjNyYThMM30K');
    $pages='xss';
    $main = "WELCOME HACKER";
    include '../main/header.php';

?>
<br><br>
    <div>
        <h1><b>Cross-site Scripting</b></h1>
    </div>
    <div class="border">
        <form action="index.php" method="POST">
            <div class="name" style="margin-left:30%;margin-top:10%;margin-bottom:10%;">
                <input class="rounded" type="text" name="text" placeholder="Type Something"><br/>
            </div>
            <div class="submitdiv">
                <button class="black" style="margin-bottom:10%;">Show</button>
            </div>
        </form>
        <div style="text-align:center; word-wrap: break-word;" id="text"></div>
    </div>
<?php
    if(isset($_POST['text'])){
        echo "<script>document.getElementById(\"text\").innerHTML = \"".$_POST['text']."\";</script>";
    }
?>

<?php
  include '../main/footer.php';
?>
