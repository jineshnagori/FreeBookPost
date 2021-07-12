<?php

    session_start();

    include "config.php";

    $name = $_POST['name']; 

    $email = $_POST['email'];

    $message = $_POST['message'];

    $q = "insert into contact(name, email, message) VALUES('$name','$email','$message')"  ;
    $result = mysqli_query($con,$q);

    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }

    else {	

    header('location: contact.php');
    exit();
    echo "query inserted into database";
    } 
?>