<?php

include '/home/drupal/new/src/php/Logincontroller.php';

if (isset($_COOKIE['PHPSESSID'])) {
    session_start();
}

switch ($_SERVER['REQUEST_URI']) {
    case "/signup":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            Logincontroller::signup();
            exit();
        }
        header("location: http://localhost/");
        break;

    case "/login":
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            Logincontroller::login();
            exit();
        }
        elseif (isset($_SESSION['user']) == true) {
            header("location: http://localhost/welcome");
            exit();
        }
        else {
            Logincontroller::showLogin();
        }
        break;

    case "/welcome":
        if (isset($_SESSION['user']) == true) {
            Logincontroller::welcome();
            exit();
        }
        header("location: http://localhost/");
        break;
    case "/logout":
        if (isset($_SESSION['user']) == true) {
            Logincontroller::logout();
            exit();
        }
        header("location: http://localhost/");
        break;
    case "/":
        if (isset($_SESSION['user']) == true) {
            header ("location: http://localhost/welcome");
            exit();
        }
        Logincontroller::showSignUp();
        break;
    //default: header ("location: http://localhost/");
}