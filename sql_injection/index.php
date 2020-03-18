<form action="index.php" method="POST">
Email
<input type="email" name="email"><br/>
Password
<input type="password" name="password"><br/>
<button type="submit">Login</button>
</form>

<a href="register.php">don't have an account? Register now!</a>

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
                    session_start();
                    $_SESSION['sid'] = $row['sid'];
                    echo "<script>window.location.href='hai.php'</script>";
                    break;
                }else{
                    echo "<b style='color:red;'>wrong email or password</b>";
                    break;
                }
            } 
        }
    } 
    if ($conn->multi_query("SELECT * FROM users where email = '$email'")) {
        do {
            if ($result = $conn->store_result()) {
                while ($row = $result->fetch_row()) {
                    session_start();
                    $_SESSION['sid'] = $row[3];
                    if($password == $row[2]){
                        echo "<script>window.location.href='hai.php'</script>";
                        break;
                    }else{
                        echo "<b style='color:red;'>wrong email or password</b>";
                        break;
                    }
                }
                $result->free();
            }
            if ($conn->more_results()) {
            }
        } while ($conn->next_result());
    }
}
