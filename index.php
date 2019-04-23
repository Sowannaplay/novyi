<?php

include '/home/drupal/new/src/php/logincontroller.php';

if (isset($_COOKIE['PHPSESSID'])) {
    session_start();
}

switch ($_SERVER['REQUEST_URI']){

    case "/signup":
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            logincontroller::signup();
            exit;
        }

        header("location: http://localhost/");
        break;

    case "/login":{
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            logincontroller::login();
            exit;
        }
        else {

            logincontroller::showLogin();
            exit;
        }
    }

    case "/welcome":{

        if (isset($_SESSION['user'])==true){

            logincontroller::welcome();
            exit;
        }
        else {

            header("location: http://localhost/");
        }
    }

    case "/logout":{

        if (isset($_SESSION['user'])==true){

            logincontroller::logout();
            exit;

        }
        else {

            header("location: http://localhost/");
        }
    }
    case "/": {
        if (isset($_SESSION['user'])==true){

            header ("location: http://localhost/welcome");

        }
        else{

            logincontroller::showSignUp();
            exit;

        }
    }
    //default: header ("location: http://localhost/");
}