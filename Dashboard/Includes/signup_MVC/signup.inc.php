<?php
# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $first_name . " " . $last_name;
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $re_pwd = $_POST["re_password"];
    $gender = $_POST["gender"];

    try {
        require_once "../dbh.inc.php";
        require_once "signup_control.php";
        require_once "signup_model.php";
        $errors = [];
        if (is_inputs_empty($first_name, $last_name, $email, $pwd, $gender)) {
            $errors["empty_inputs"] = "Fill All Input Fields";
        }
        if (is_email_invaild($email)) {
            $errors["invaild_email"] = "Enter Vaild Email";
        }
        if (is_password_invaild($pwd)) {
            $errors["invaild_password"] = "Password must contain characters between 8 and 16 ";
        }
        if (is_email_exist($pdo, $email)) {
            $errors["email_exist"] = "This Email is Already Exist";
        }
        if (different_pwd($pwd, $re_pwd)) {
            $errors["different_pwd"] = "Your Passwords aren't the same";
        }
        require_once "../config.inc.php";
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            $remain_date = [
                "username" => $username,
                "email" => $email,
                "password" => $pwd,
                "gender" => $gender
            ];
            $_SESSION["remain_date"] = $remain_date;
            header("Location:../../signup.php");
            die();
        }
        // different method to make query non-naming
        // $query = "INSERT INTO users (username , email , pwd, gender) VALUES (?,?,?,?);";
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $email, $password, $gender]);
        create_user($pdo, $username, $email, $pwd, $gender);
        header("Location:../../index.php?signup=Success");

        //just for checking
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $stmt = null;
        $pdo = null;
        die();

    } catch (PDOException $e) {
        die("Query failed" . $e);
    }
} else {
    # will navigate to signup.php if user enter in url includes/query.php or any files in this directory
#but if you write includes only it will run index.php in this directory
    header("Location:../../signup.php");
}

