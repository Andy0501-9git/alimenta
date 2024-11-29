<?php

namespace classes;
use PDOException;
use PDO;

class DbConnector {

    private $host = "localhost";
    private $dbname = "alimenta";
    private $dbuser = "root";
    private $dbpw = "root";

    public function getConnection() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try {
            $con = new PDO($dsn, $this->dbuser, $this->dbpw);
            return $con;
        } catch (PDOException $exc) {
            die("ERROR IN DATABASE CONNECTION: ".$exc->getMessage());
        }
    }

}
