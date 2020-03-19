<?php
    $pages='sql';
    $h2="Try your sql injection skill here and find the <b style='color:red'>FLAG</b> here"; 
    $main = "WELCOME <b class='hacked' style='color:red; margin:5px;'>HACKER</b>";
    $lg=false;
    include '../main/header.php';
?>
</style>
<section class="site-section bg-light aos-init aos-animate">
<div class='container'>
<div class="row align-items-center justify-content-center" style="margin: 20px">
        <h1><b style="color:black;">Sql Injection</b></h1>
    </div>
<form action="index.php" method="POST"class="p-5 bg-white" >
    <div class="row form-group">
                <div class="col-md-12">
                  <input type="text" name="text" class="form-control" placeholder="Search Here">
                </div>
              </div>
            <div class="col-md-12">
                <button class="btn btn-primary text-white"type="submit">Show</button>
            </div>
</form>
</div>
<div class="container p-5">
  <div class="row">
    <?php
        if(isset($_SESSION['sid'])){
            session_destroy();
        }
        $dbserver = "localhost";
        $dbname= "ceh";
        $dbuser = "root";
        $dbpw = "";
        $conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);
        $sql = "SELECT Name,Price,Pic FROM products";
            $result = $conn->query($sql);
            if(!isset($_POST['name'])){
                while ($row = $result->fetch_row()) {
                echo '<div class="col-md-4 bg-white p-3" style="border: 10px solid #f8f9fa">
                        <div class=" m-2 p-3">
                        <img class="" src="../gambar/'.$row[2].'"style="width:100%; height:200px" alt='.$row[2].'>
                        <div class="">
                            <h4 class="row justify-content-center m-3" style="color:black">'.$row[0].'</h4>';
                            if(1000 - ((float)$row[1])/100 < 0){
                                echo '<p style="color:black">Rp '.number_format ( $row[1] , 0,  "," , "." ).',00</p>';
                            }else{
                                echo '<p style="color:black">Rp '.$row[1].',00</p>';
                            }
                        echo '</div>
                            </div>
                    </div>';
                }
            }
        else{
            $name = $_POST['name'];

            if ($conn->multi_query("SELECT Name,Price,Pic FROM products where Name LIKE '%$name%' && status = 1 GROUP by Name")) {
                do {
                    if ($result = $conn->store_result()) {
                        while ($row = $result->fetch_row()) {

                            echo '<div class="col-md-4 bg-white p-3" style="border: 10px solid #f8f9fa">
                        <div class=" m-2 p-3">
                        <img class="" src="../gambar/'.$row[2].'"style="width:100%; height:200px" alt='.$row[2].'>
                        <div class="">
                            <h4 class="row justify-content-center m-3" style="color:black">'.$row[0].'</h4>';
                            if(1000 - ((float)$row[1])/100 < 0){
                                echo '<p style="color:black">Rp '.number_format ( $row[1] , 0,  "," , "." ).',00</p>';
                            }else{
                                echo '<p style="color:black">Rp '.$row[1].',00</p>';
                            }
                        echo '</div>
                            </div>
                    </div>';
                        }
                        $result->free();
                    }
                    if ($conn->more_results()) {
                    }
                } while ($conn->next_result());
            }
        }
    ?>
    </div>
</div>
</>

<?php
  include '../main/footer.php';
?>
