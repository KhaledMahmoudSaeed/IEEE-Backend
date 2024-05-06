<?php
#Data source name

# connect to mysql
// $dsn = "mysql:host=localhost;dbname=register";
// $dbusername = "root";
// $dbpassword = "";

# connect to posgresql
$dsn = "pgsql:host=127.0.0.1;dbname=register";
$dbusername = "postgres";
$dbpassword = "suits";

#try to connect to database unless get error message
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); just to make it as default
} catch (PDOException $e) {
    echo "Data Not Found" . $e->getMessage();
}