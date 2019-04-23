<?php
class logincontroller
{
    static function signup()
    {
        require "/home/drupal/new/src/php/signup.php";
        signup();
    }
    static function login()
    {
        require "/home/drupal/new/src/php/login.php";
        login();
    }
    static function logout()
    {
        require "/home/drupal/new/src/php/logout.php";
        logout();
    }
    static function welcome()
    {
        require "/home/drupal/new/src/php/welcome.php";
        welcome();
    }
    static function showSignUp()
    {
        include "/home/drupal/new/html/index.html";
    }
    static function showLogin()
    {
        require "/home/drupal/new/html/login.html";
    }
}