<?php

function login()
{
    require "database.php";
    $conn = database::connect();
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
    if ($conn->checkcredentials($email, $password)==true) {
        $client_arr=$conn->find($email);
        session_start();
        $_SESSION['user'] = $client_arr[firstname];
        header("location: http://localhost/welcome");
    } else {
        echo "Password is wrong";
    }
}