<?php
$host = 'localhost';
$dbname = 'compteur_vue';
$user = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL
];

// Now you create your connection string
try {
    // Then pass the options as the last parameter in the connection string
    $connection = new PDO("mysql:host=$host; dbname=$dbname", $user, $password, $options);

    // That's how you can set multiple attributes
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
