<?php

require "mysqlconnection.php";

if (isset($_GET['login']))
{
    header ('Location: http://localhost/login.html');
}

if (isset($_GET['signup']))
{
    header ('Location: http://localhost/');
}

if (isset($_POST['login'])){

$conn=dbcon();
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT password, firstname from user WHERE email='$email'";
$result=mysqli_query($conn, $query);
if ($result == false) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "Error:" . mysqli_error($conn);
    exit;
}
$clientinfo=mysqli_fetch_row($result);


if ($clientinfo[0]==$password)
{

    session_start();
    $_SESSION['user']=$clientinfo[1];
    header ("location: http://localhost/welcome.php");
}
else {
    echo "Password is wrong";
}
}