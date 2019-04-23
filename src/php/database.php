<?php
class database
{
    private $dbName = users, $dbHost = localhost, $dbPass = root, $dbUser = drupal;
    private static $instance = null;
    private $stmt;
    private $dbh;

    public function __construct() {

        $this->dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
    }

    public static function connect() {

        if(self::$instance == null) {
            self::$instance = new database();
        }

        return self::$instance;

    }

    public function query($query){

        $this->stmt = $this->dbh->prepare($query);

    }

    public function execute(){

        return $this->stmt->execute();
    }

    public function save($firstname, $lastname, $email, $password) {

        $salt = file_get_contents("salt.txt");
        $hashed = password_hash($password . $salt, PASSWORD_BCRYPT);
        $this->query("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashed')");
        $this->execute();

    }

    public function find($email) {

        $this->query("SELECT * FROM user WHERE email='$email'");
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function checkcredentials($email, $password) {

        $arr=$this->find($email);
        $salt = file_get_contents("salt.txt");
        if (password_verify($password . $salt, $arr[password]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }



    public function rowCount(){

        return $this->stmt->rowCount();

    }

}