<?php

require "database.php";

class user {

    private $db;

    function __construct() {
        $this->db=database::connect();
    }

    public function save($firstname, $lastname, $email, $password) {
        $salt = file_get_contents("salt.txt");
        $hashed = password_hash($password . $salt, PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')");
        $this->db->execute();
    }

    public function find($email) {
        $this->db->query("SELECT * FROM user WHERE email='$email'");
        $this->db->execute();
        return $this->db->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkcredentials($email, $password) {
        $arr=$this->find($email);
        $salt = file_get_contents("salt.txt");
        return password_verify($password . $salt, $arr[password]);
    }

    public function email_validation($email) {
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,8})$/";
        $firstcheck = preg_match($pattern, $email);
        return (bool)($firstcheck == 1);
    }
}