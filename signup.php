<?php

require "mysqlconnection.php";
require "validation.php";
$conn = dbcon();

if (isset($_GET['login']))
{
    header ('Location: http://localhost/login.html');
}

if (isset($_GET['signup']))
{
    header ('Location: http://localhost/');
}
    $checkquery="SELECT email FROM user";
    $checker=mysqli_fetch_assoc(mysqli_query($conn, $checkquery));
    if (email_validation($_POST['email'], $checker)==true) {

        if (isset($_POST['register'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $salt = file_get_contents("salt.txt");
            $hashed = hash('sha256', $password . $salt);
            $query = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$password')";
            $result = mysqli_query($conn, $query);

            if ($result == false) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                echo "Error:" . mysqli_error($conn);
                exit;
            }
            session_start();
            $_SESSION['user'] = $firstname;
            header("location: http://localhost/welcome.php");
        }
    }
    else {
        echo "soryan bratan";}
?>