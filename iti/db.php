<?php

$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);

} catch (PDOException $e) {
    echo $e->getMessage();
}

