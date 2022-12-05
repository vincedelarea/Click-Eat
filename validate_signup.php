<?php
    require("connection.php");

    if(isset($_POST['email_check'])){
        $email = $_POST['email'];
        $query = "SELECT * FROM user_acc WHERE email = '$email'";
        $result = mysqli_query($con, $query);  
 
        if($count = mysqli_num_rows($result) > 0){
            echo "taken";
        }else{
            echo "not_taken";
        }
        exit();
    }
?>