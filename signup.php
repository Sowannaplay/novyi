<?php

require "mysqlconnection.php";

$user[0]=$_POST['firstname'];
$user[1]=$_POST['lastname'];
$user[2]=$_POST['email'];
$user[3]=$_POST['password'];
$conn=dbcon();
$query="INSERT INTO user (firstname, lastname, email, password) VALUES ('$user[0]','$user[1]', '$user[2]', '$user[3]')";
$result= mysqli_query($conn, $query);

if ($result==false)
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "Error:" . mysqli_error($conn);
    exit;
}


$check = mysqli_fetch_array($result);
?>