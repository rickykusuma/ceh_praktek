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
    ?>