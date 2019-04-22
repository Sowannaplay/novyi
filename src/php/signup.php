<?php
function signup()
{
    require "mysqlconnection.php";
    $conn = dbcon();

//    if (isset($_GET['login'])) {
//        header('Location: http://localhost/login');
//    }
//
//    if (isset($_GET['signup'])) {
//        header('Location: http://localhost/');
//    }
//
//    if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = strtolower($_POST['email']);
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,8})$/";
        $password = $_POST['password'];
        if (preg_match($pattern, $email) == 1) {
            $checkquery = "SELECT email FROM user WHERE email='$email'";
            $checkqueryresult = mysqli_query($conn, $checkquery);
            if ((mysqli_num_rows($checkqueryresult) == 0)) {
                $salt = file_get_contents("salt.txt");
                $hashed = password_hash('$password . $salt', PASSWORD_BCRYPT);
                $query = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')";
                $result = mysqli_query($conn, $query);
                session_start();
                $_SESSION['user'] = $firstname;
                header("location: http://localhost/welcome");
            } else {
                echo "Email is already used";
            }
        } else {
            echo "Email has incorrect form";
        }

    //}
}
?>