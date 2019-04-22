<?php
session_start();
//require "/src/php/signup.php";
if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/signup") {
    require "/home/drupal/new/src/php/signup.php";
    signup();
}
if ($_SERVER['REQUEST_URI']=="/welcome" && isset($_SESSION['user'])==true)
{
    require "/home/drupal/new/src/php/welcome.php";
}
else {
    if (isset($_SESSION['user']))
        {
            require "/home/drupal/new/src/php/welcome.php";
        }
    }
if (!isset($_SESSION['user']))//if ($_SERVER['REQUEST_METHOD']="GET")
{
    include "/home/drupal/new/html/index.html";
}

