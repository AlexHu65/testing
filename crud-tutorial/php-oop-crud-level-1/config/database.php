<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 1/16/2018
 * Time: 2:16 PM
 */
class Database
{


    private $host = 'localhost';
    private $db_name = 'php_oop_crud_level_1';
    private $password = '';
    private $username = 'root';
    public $conn;

    public function getConnection()
    {


        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;

    }


}