<?php
    require("connection.php");
    try{
        $full_name = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $password = sha1($password);
        $phone_number = $_POST['phone'];
    } catch(Exeption $e){
    }

    $query = "insert into user_acc (full_name, email, password, number) values('$full_name', '$email', '$password', '$phone_number')";
    
    if($con->query($query) === TRUE){
        echo "<script>alert('Sign up Successful')</script>
                <a href='login.php'>Go to login</a>
            ";
    }
?>