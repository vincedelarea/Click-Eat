<?php
    require("connection.php");
    $count = 0;
    $empty = true;

    if(isset($_POST['email']) && isset(($_POST['pass']))){
        $email = $_POST['email'];
        $pass = sha1($_POST['pass']);

        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);

        $query = "select * from user_acc WHERE email = '$email' and password = '$pass'";  
        $result = mysqli_query($con, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $empty = false;

        if($count == 1){
            echo "<script>alert('Login Successful')</script>
                <a href='login.php'>Go back to login</a>
            ";
        }
    }
?>