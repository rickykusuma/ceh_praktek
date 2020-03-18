<form action="register.php" method="POST">
Name
<input type="text" name="name"><br/>
Email
<input type="email" name="email"><br/>
Password
<input type="password" name="password"><br/>
<button type="submit">Register</button>
</form>

<a href="index.php">have an account? Login now!</a>

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
                echo "<br><b style='color:red;'>email already exist</b>";
                break;
            } else {
                $sql = "INSERT INTO users VALUES('".$name."','".$email."','".$password."','".$sid."')";
                $conn->query($sql);
                echo "<br><b style='color:green;'>account created</b>";
                break;
            }
        }
    } else {
        $sql = "INSERT INTO users VALUES('".$name."','".$email."','".$password."','".$sid."')";
        $conn->query($sql);
        echo "<br><b style='color:green;'>account created</b>";
    }

    
}

$conn -> close();
?>