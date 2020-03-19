<?php 
 $pages='cookie';
 $main = "WELCOME HACKER";
include '../main/header.php'; ?>
<section class="site-section bg-light aos-init aos-animate">
    <div class="row align-items-center justify-content-center">
        <h1 style="color:black ; margin-bottom: 30px;"><b>Cookie Manipulation</b></h1>
    </div>
        <form action="register.php" method="POST" class="p-5 bg-white">
            <div class="container col-md-6">
            <h2 class="h4 text-black mb-5">Register</h2> 
            <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="name">Name</label> 
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
            <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" class="form-control">
                </div>
              </div>
              <div class="row form-group">
              <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
            <div class="col-md-12">
                <button class="btn btn-primary btn-md text-white"type="submit">Login</button>
            </div>
            <div class="col-md-12 row align-items-center justify-content-center">
            <p style="margin: 20px 0px;">have an account? <a href="register.php">Login now!</a></p>
            </div>
            </div>
        </form>
        
    </section>
        <?php
        $dbserver = "localhost";
        $dbname= "ceh";
        $dbuser = "root";
        $dbpw = "";
        $conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);

        if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sid = base64_encode("CEHUTS;".$email);

            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    if($row['email'] == $email){
                        echo "<br><h5 style='text-align:center;'><b style='color:red;'>Email Already Exist</b></h5>";
                        break;
                    } else {
                        $sql = "INSERT INTO users VALUES('".$name."','".$email."','".$password."','".$sid."')";
                        $conn->query($sql);
                        echo "<br><h5 style='text-align:center;'><b style='color:green;'>Account Created</b></h5>";
                        break;
                    }
                }
            } else {
                $sql = "INSERT INTO users VALUES('".$name."','".$email."','".$password."','".$sid."')";
                $conn->query($sql);
                echo "<br><h5 style='text-align:center;'><b style='color:green;'>Account Created</b></h5>";
            }

            
        }

        $conn -> close();
        ?>
    </div>
    <?php
        include '../main/footer.php';
    ?>
