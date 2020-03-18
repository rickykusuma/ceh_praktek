<?php include '../header.php'?>
        <br><br>
        <div>
            <h1><b>Parameter Tampering</b></h1>
        </div>
        <div class="border">
            <div>
                <b><h1>Login</h1></b>
            </div>
            <form action="index.php" method="POST">
                <div class="email">
                    Email
                    <input class="rounded" type="email" name="email"><br/>
                </div>
                <div class="password">
                    Password
                    <input class="rounded" type="password" name="password"><br/>
                </div>
                <div class="submitdiv">
                    <button class="black"type="submit">Login</button>
                </div>
            </form>
            <div>
                <p style="margin-left: 25%; margin-top: 20px;">haven't an account? <a href="register.php">Register now!</a></p>
            </div>
        </div>
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
