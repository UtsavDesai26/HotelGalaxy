<?php

class Database {
    public $connection;
    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cspit", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            if($conn)
            {

            }
            $this->connection = $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}               
?>