<?php
    setcookie('flag','64_Q0VIVVRTe1czYnMxdDNOeTRfVnUxTjNyYThMM30K');

    include '../main/header.php';
?>
<style type="text/css">
    input[type=text]{
        width: 100%;
        border-radius: 4px;
        text-align: center;
    } 
</style>
<br><br>
<div class='container center' style="text-align:center">
<h1 style="text-align: center">Search Your Item Here</h1>
<form action="index.php" method="POST" >
    <input type="text" name="name" id='name' placeholder="Search Item"><br>
    <button class="btn-success " style="margin:15px; padding-left:30px ;padding-right:30px; border:solid 0px; border-radius:4px" type="submit">Search </button><br>
</form>
</div>
<div class="container">
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
        $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if(!isset($_POST['name'])){
                while ($row = $result->fetch_row()) {
                echo '<div class="col-md-4">
                        <img class="" src="../gambar/'.$row[6].'"style="width:100%; height:200px">
                        <div class="">
                            <p class="">'.$row[1].'</>
                            <h4>Rp. '.$row[4].',00</h4>
                        </div>
                    </div>';
                }
            }
        else{
            $name = $_POST['name'];

            if ($conn->multi_query("SELECT * FROM products where Name LIKE '%$name%' && status = 1 GROUP by Name")) {
                do {
                    if ($result = $conn->store_result()) {
                        while ($row = $result->fetch_row()) {

                            echo '<div class="col-md-4">
                                    <img class="" src="../gambar/'.$row[6].'"style="width:100%; height:200px">
                                    <div class="">
                                        <p class="">'.$row[1].'</>
                                        <h4>Rp. '.$row[4].',00</h4>
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
