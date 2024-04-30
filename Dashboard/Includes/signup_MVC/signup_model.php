<?php
declare(strict_types=1);

function find_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email=:email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt = null;
    $pdo = null;
    return $result;
}

function create_user(object $pdo, string $username, string $email, string $password, string $gender)
{
    $options = [
        'cost' => 12
    ];
    $hashed_pwd = password_hash($password, PASSWORD_BCRYPT, $options);
    $query = "INSERT INTO users (username , email , pwd, gender) VALUES (:username,:email,:pwd,:gender);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashed_pwd);
    $stmt->bindParam(":gender", $gender);
    $stmt->execute();
}