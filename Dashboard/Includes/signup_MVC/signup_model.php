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