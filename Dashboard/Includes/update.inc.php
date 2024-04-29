<?php
#we need here user give us the old password and his name to find his field if it exist so continue in updating process



# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $oldpassword = $_POST["old-password"];
    $new_email = $_POST["new-email"];
    $new_password = $_POST["new-password"];

    try {
        include_once "dbh.inc.php";

        $query = "UPDATE users SET email=:email ,pwd=:newpwd WHERE username=:username AND pwd=:oldpwd ; ";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":oldpwd", $oldpassword);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":newpwd", $new_password);
        $stmt->execute();

        $pdo = null;
        $query = null;
        # must return to the main

        die();
    } catch (PDOException $e) {
        die("Query Faild");
    }
} else {
    # must return to the main
}