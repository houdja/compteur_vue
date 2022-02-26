<?php

class MyPdo
{
    private $host = 'localhost';
    private $dbname = 'compteur_vue';
    private $user = 'root';
    private $password = '';
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL
    ];

    public function __construct()
    {
    }

    public function connexionDb()
    {
        // Now you create your connection string
        try {
            // Then pass the options as the last parameter in the connection string
            $connection = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password, $this->options);
            // That's how you can set multiple attributes
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
