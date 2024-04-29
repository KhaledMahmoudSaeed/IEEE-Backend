<?php
declare(strict_types=1);

function grap_user_data(object $pdo, string $email)
{
    $email = $_SESSION["email"];
    $query = "SELECT * FROM users WHERE email=:email;";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}