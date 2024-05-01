<?php

# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    #try to connect to data base 
    try {
        require_once "../dbh.inc.php";
        require_once "signin_control.php";
        require_once "signin_model.php";
        #check if there any errors
        $errors = [];
        if (is_inputs_empty($email, $pwd)) {
            $errors["empty_inputs"] = "Fill All Input Fields";
        }
        $result = get_date($pdo, $email);
        if (is_email_wrong($result)) {
            $errors["wrong_email"] = "Password or Email is Incorrect";
        }
        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            if (is_password_wrong($pwd, $result["pwd"])) {
                $errors["wrong_password"] = "Password or Email is Incorrect";
            } else {
                $errors["wrong_password"] = "Password or Email is Incorrect";
            }
        }
        require_once "../config.inc.php";
        #store user id in session 
        $id = grap_user_id($pdo, $email);
        reg_id($id);
        $_SESSION["id"] = $id;
        if ($errors) {
            $_SESSION["signin_errors"] = $errors;
            header("Location:../index.php");
            die();
        }
        # if there no error it will go to main and tore user email 
        $_SESSION["email"] = $email;
        header("Location:../Main/main.php");
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e);
    }
} else {
    header("Location:../index.php");
    die();
}