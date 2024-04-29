<?php

# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_MEHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    try {
        include_once "dbh.inc.php";
        $query = "DELETE FROM users WHERE username=:username ,email=:email, pwd=:pwd;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();

        $stmt = null;
        $pdo = null;
        # must return to the main

        die();
    } catch (PDOException $e) {
        die("Query Faild");
    }
} else {
    # must return to the main
}