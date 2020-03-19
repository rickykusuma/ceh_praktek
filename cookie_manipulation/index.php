<?php
        $dbserver = "localhost";
        $dbname= "ceh";
        $dbuser = "root";
        $dbpw = "";
        $conn = new mysqli($dbserver,$dbuser,$dbpw,$dbname);

        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    if($row['email'] == $email){
                        if($row['password'] == $password){
                            $sid = $row['sid'];
                            setcookie("sid",$sid);
                                                 echo "<script>window.location.href='hai.php'</script>";
                            break;
                        }else{
                            echo "<b style='color:red;'>wrong email or password</b>";
                            break;
                        }
                    }
                }
            }
        }
        $pages='cookie';
        $main = "WELCOME HACKER";
        include '../main/header.php';
    ?>
     <section class="site-section bg-light aos-init aos-animate">
    <div class="row align-items-center justify-content-center">
        <h1 style="color:black ; margin-bottom: 30px;"><b>Cookie Manipulation</b></h1>
    </div>
        <form action="index.php" method="POST" class="p-5 bg-white">
            <div class="container col-md-6">
            <h2 class="h4 text-black mb-5">Login</h2>
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
            <p style="margin: 20px 0px;">haven't an account? <a href="register.php">Register now!</a></p>
            </div>
            </div>
        </form>

    </section>
    <?php
        include '../main/footer.php';
    ?>
