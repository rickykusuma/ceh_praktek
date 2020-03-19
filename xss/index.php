<?php
    setcookie('flag','64_Q0VIVVRTe1czYnMxdDNOeTRfVnUxTjNyYThMM30K');
    $pages='xss';
    $main = "WELCOME <b class='hacked' style='color:red; margin:5px;'>HACKER</b>";
    $lg=false;
    $h2="Try your Cross-site Scripting skill here and find the <b style='color:red'>FLAG</b> here"; 
    include '../main/header.php';

?>
        <section class="site-section bg-light aos-init aos-animate">

<div class="container col-md-6">
    <div class="row align-items-center justify-content-center" style="margin: 20px">
        <h1><b style="color:black;">Cross-site Scripting</b></h1>
    </div>
    <form action="index.php" method="POST" class="p-5 bg-white">
    <div class="row form-group">
                <div class="col-md-12">
                  <input type="text" name="text" class="form-control" placeholder="Type Here">
                </div>
              </div>
            <div class="col-md-12 row align-items-center justify-content-center" style="margin: 0px;">
                <button class="btn btn-primary btn-md text-white"type="submit">Show</button>
            </div>
        </form>
        <div class="bg-white container p-3" style="text-align:center; word-wrap: break-word;" id="text"></div>
    </div>
        </section>
<?php
    if(isset($_POST['text'])){
        echo "<script>document.getElementById(\"text\").innerHTML = \"".$_POST['text']."\";</script>";
    }
?>

<?php
  include '../main/footer.php';
?>
