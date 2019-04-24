<?php
interface saverInterface {

    function save($string, $string, $sting, $sting);

}

trait saverTrait {

    protected function save($firstname, $lastname, $email, $password) {
        $salt = file_get_contents("salt.txt");
        $hashed = password_hash($password . $salt, PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')");
        $this->db->execute();
    }

}

class saverClass {

    public function save($firstname, $lastname, $email, $password) {
        $salt = file_get_contents("salt.txt");
        $hashed = password_hash($password . $salt, PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')");
        $this->db->execute();
    }

}

abstract class UserSomething{

    protected abstract function save($string, $string1, $string2, $string3);

//    public function save($firstname, $lastname, $email, $password) {
//        $salt = file_get_contents("salt.txt");
//        $hashed = password_hash($password . $salt, PASSWORD_BCRYPT);
//        $this->db->query("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')");
//        $this->db->execute();
//    }
}