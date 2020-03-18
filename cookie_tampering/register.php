<?php include '../main/header.php'; ?>
    <br><br>
    <div>
        <h1><b>Cookie Manipulation</b></h1>
    </div>
    <div class="border">
        <div class="Title">
            <b><h1>Register</h1></b>
        </div>
        <form action="register.php" method="POST">
            <div class="name">
                Name
                <input class="rounded"type="text" name="name"><br/>
            </div>
            <div class="email">
                Email
                <input class="rounded" type="email" name="email"><br/>
            </div>
            <div class="password">
                Password
                <input class="rounded" type="password" name="password"><br/>
            </div>
            <div class="submitdiv">
                <button class="black"type="submit">Register</button>
            </div>
        </form>
        <div>
            <p style="margin-left: 30%; margin-top: 20px;">have an account? <a href="index.php">Login now!</a></p>
        </div>
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
</body>
</html>