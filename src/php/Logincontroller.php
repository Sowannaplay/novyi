<?php
require "User.php";

class Logincontroller {

    static function signup() {
       $user = new User();
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = strtolower($_POST['email']);
       $password = $_POST['password'];

       if ($user->email_validation($email)) {
         $res = $user->find($email);
         if (empty($res)) {
           $user->save($firstname, $lastname, $email, $password);
           session_start();
           $_SESSION['user'] = $firstname;
           header("location: http://localhost/welcome");
           return;
         }
         else {
             session_start();
             $_SESSION['flashmsg'] = 'Email is already used';
             header("location: http://localhost/");
             return;
         }
       }
       else {
           session_start();
           $_SESSION['flashmsg'] = 'Email has incorrect form';
           header("location: http://localhost/");
           return;
       }
    }

    static function login() {
        $user = new User();
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        if ($user->checkcredentials($email, $password) == true) {
          $client_arr = $user->find($email);
          session_start();
          $_SESSION['user'] = $client_arr[firstname];
          header("location: http://localhost/welcome");
        }
        else {
            session_start();
            $_SESSION['flashmsg'] = 'Password is incorrect';
            header("location: http://localhost/login");
            return;
        }

    }
    static function logout() {
        session_start();
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
          );
        }
        session_destroy();
        header('location: http://localhost/');
    }

    static function welcome() {
        session_start();
          echo "Bedolaga - " . $_SESSION['user'];
          include "/home/drupal/new/html/Welcome.html";

    }

    static function showSignUp() {
        include "/home/drupal/new/html/index.html";
    }

    static function showLogin() {
        require "/home/drupal/new/html/login.html";
    }

}