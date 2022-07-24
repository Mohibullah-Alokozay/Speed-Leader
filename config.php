<?php 
    $server = "localhost";
    $user =  "root";
    $pass = "";
    $databaseName = "login_register";

    $con = mysqli_connect($server, $user, $pass, $databaseName);
    
    if(!$con) {
        echo "<script>alert('Not Successfully Connected!')</script>";
    }
?>