<?php
require "/home/drupal/new/src/php/logincontroller.php";
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/signup")
{
    logincontroller::signup();
}
if ($_SERVER['REQUEST_URI']=="/welcome" && isset($_SESSION['user'])==true)
{
    logincontroller::welcome();
}
else {
    if ($_SERVER['REQUEST_URI']=='/logout' && isset($_SESSION['user']))
    {
        logincontroller::logout();
    }
     if (isset($_SESSION['user']) && $_SERVER['REQUEST_URI']!=="/welcome" && $_SERVER['REQUEST_URI']!=='/logout')
            {
                header("location: http://localhost/welcome");
            }
     }
if ($_SERVER['REQUEST_METHOD']=='GET' && ($_SERVER['REQUEST_URI']=="/login"))
{

    logincontroller::showLogin();
}
else
{
    if (!isset($_SESSION['user']) && ($_SERVER['REQUEST_URI']=="/"))//if ($_SERVER['REQUEST_METHOD']="GET")
    {
        logincontroller::showSignUp();
    }
    else if (!isset($_SESSION['user']) && ($_SERVER['REQUEST_URI']!=="/"))
        {
            header("location: http://localhost/");
        }
}
if ($_SERVER['REQUEST_METHOD']=='POST' && ($_SERVER['REQUEST_URI']=="/login"))
{
    logincontroller::login();
}