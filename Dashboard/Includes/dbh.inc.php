<?php
#Data source name
$dsn = "mysql:host=localhost;dbname=register";
$dbusername = "root";
$dbpassword = "";

#try to connect to database unless get error message
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Data Not Found" . $e->getMessage();
}