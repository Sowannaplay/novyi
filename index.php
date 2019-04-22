<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/signup") {
    require "/home/drupal/new/src/php/signup.php";
    signup();
}
if ($_SERVER['REQUEST_URI']=="/welcome" && isset($_SESSION['user'])==true)
{
    require "/home/drupal/new/src/php/welcome.php";
}
else {
    if (isset($_SESSION['user']) && $_SERVER['REQUEST_URI']!=="/welcome")
        {
            header("location: http://localhost/welcome");
        }
    }
if ($_SERVER['REQUEST_METHOD']=='GET' && ($_SERVER['REQUEST_URI']=="/login"))
{
    require "/home/drupal/new/html/login.html";
}
else
{
    if (!isset($_SESSION['user']) && ($_SERVER['REQUEST_URI']=="/"))//if ($_SERVER['REQUEST_METHOD']="GET")
    {
        include "/home/drupal/new/html/index.html";
    }
    else if (!isset($_SESSION['user']) && ($_SERVER['REQUEST_URI']!=="/"))
        {
            header("location: http://localhost/");
        }
}
if ($_SERVER['REQUEST_METHOD']=='POST' && ($_SERVER['REQUEST_URI']=="/login"))
{
    require "/home/drupal/new/src/php/login.php";
    login();
}