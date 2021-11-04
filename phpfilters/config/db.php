<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sahaayak";
    $conn = mysqli_connect($server, $user, $pass, $dbname);
    if(!$conn){
        die("Connection Failed!." . mysqli_connect_error());
    }
    else{
        // echo "Connection successful";
    }
?>