<?php
$dsn = 'mysql:host=localhost;dbname=connect_user;charset=utf8';
$username = 'root';
$password = '';
$options = [];
try {
    // Programmation orientée object  PDO
$pdo = new PDO($dsn, $username, $password, $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed : " . $getMessage();

}