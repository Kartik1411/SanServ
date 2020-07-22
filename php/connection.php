<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phptutorial";

    $connection = mysqli_connect($servername,$username,$password,$database);
    
    if (!$connection) {
        echo "Database connection is Failed";
    }
?>
