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
$email=strtolower($_POST['email']);
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

$salt=file_get_contents("salt.txt");
if (password_verify($password.$salt, '$clientinfo[0]'))
{
    session_start();
    $_SESSION['user']=$clientinfo[1];
    header ("location: http://localhost/welcome.php");
}
else {
    echo "Password is wrong";
}
}