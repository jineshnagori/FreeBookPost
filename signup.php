<?php
    include "config.php";
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "insert into registration(name, username, email, password) VALUES('$name','$username','$email','$password')"  ;
    $result = mysqli_query($con,$q);
    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }
    else {	
        header('location: login.php');
        exit();
    } 
?>