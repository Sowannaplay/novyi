<?php
class database
{
    private $dbName = users, $dbHost = localhost, $dbPass = root, $dbUser = drupal;
    private static $instance = null;
    public $stmt;
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

}