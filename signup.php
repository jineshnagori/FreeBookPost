<?php
    include "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "insert into registration(username, password) VALUES('$username','$password')"  ;
    $result = mysqli_query($con,$q);
    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }
    else {	
    header('location: index.php');
    exit();
    } 
?>