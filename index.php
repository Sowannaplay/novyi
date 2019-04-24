<?php

include '/home/drupal/new/src/php/logincontroller.php';

if (isset($_COOKIE['PHPSESSID'])) {
    session_start();
}

switch ($_SERVER['REQUEST_URI']) {
    case "/signup":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            logincontroller::signup();
            exit();
        }
        header("location: http://localhost/");
        break;

    case "/login":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            logincontroller::login();
            exit();
        }
        elseif (isset($_SESSION['user']) == true) {
            header("location: http://localhost/welcome");
            exit();
        }
        else {
            logincontroller::showLogin();
        }
        break;

    case "/welcome":
        if (isset($_SESSION['user']) == true) {
            logincontroller::welcome();
            exit();
        }
        header("location: http://localhost/");
        break;
    case "/logout":
        if (isset($_SESSION['user']) == true) {
            logincontroller::logout();
            exit();
        }
        header("location: http://localhost/");
        break;
    case "/":
        if (isset($_SESSION['user']) == true) {
            header ("location: http://localhost/welcome");
            exit();
        }
        logincontroller::showSignUp();
        break;
    //default: header ("location: http://localhost/");
}