<?php
class Database{

    /** Server Info **/
    private $host = "";
    private $username = "";
    private $password = "";
    private $db = "";
    public $conn;

    public function getConnection() {

        $this -> conn = null;

        try {
            $this->conn = new PDO("mysql:host=". $this->host .";dbname=". $this->db, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
            echo "Connected succesfully";
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }

        return $this->conn;
    }

}
