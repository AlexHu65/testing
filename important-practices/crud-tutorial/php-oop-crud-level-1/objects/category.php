<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 1/16/2018
 * Time: 2:16 PM
 */
class Category
{

    private $conn;
    private $table_name = 'categories';

    //object properties
    public $id;
    public $name;

    //Pass the connection object
    public function __construct($db)
    {
        $this->conn = $db;
    }


    //Read all records from the database
    function read()
    {
        $query = "SELECT id, name FROM " . $this->table_name . " ORDER BY name";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // used to read category name by its ID
    function readName(){

        $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
    }

}