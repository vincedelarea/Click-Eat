<?php
    require("connection.php");
    try{
        $first_name = $_POST['fname'];
        $middle_name = $_POST['mname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $password = sha1($password);
        $phone_number = $_POST['phone'];
    } catch(Exeption $e){
    }

    $query = "insert into user_acc (acc_type, first_name, middle_name, last_name, email, password, number) values('user', '$first_name','$middle_name', '$last_name', '$email', '$password', '$phone_number')";
    
    if($con->query($query) === TRUE){
        header('Location: login.php');
    }
?>