<?php

include("config/db.php");

if(isset($_POST['but_upload']))
{
    $hid = $_SESSION['hid'];
    echo $hid;
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $from_date = $_POST['from_date'];

    echo $name;
    echo $from_date;
    $query = "INSERT into service_request (`name`,`phone`,`email`,`address`,`from_date`,`hid`) 
    VALUES ('$name',$phone,'$email','$address','$from_date','$hid')";
    // $query = "INSERT into service_request (name,phone,email,address,from_date) VALUES ('abdul kalam',782156,'abcdef','ghijk','123')";
    echo "<br><br>";
    echo $query;
    mysqli_query($conn,$query) or die(mysqli_error($con));
}

?>