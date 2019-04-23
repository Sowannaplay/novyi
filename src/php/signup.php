<?php
function signup()
{
    require "database.php";
    require "validation.php";
    $conn=database::connect();

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        if (email_validation($email)) {
            $conn->find($email);
            if (($conn->rowCount() == 0)) {
                $conn->save($firstname, $lastname, $email, $password);
                session_start();
                $_SESSION['user'] = $firstname;
                header("location: http://localhost/welcome");
            } else {
                echo "Email is already used";
            }
        } else {
            echo "Email has incorrect form";
        }
}
?>