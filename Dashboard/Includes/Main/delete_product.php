<?php
# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    try {
        require_once "../dbh.inc.php";
        require_once "main_control.php";
        require_once "main_model.php";
        delete_product($pdo, $id);
        header("Location:main.php?delete=Success");
        $stmt = null;
        $pdo = null;
        die();

    } catch (PDOException $e) {
        die("Query failed" . $e);
    }
} else {

    header("Location:../../main.php");
}

