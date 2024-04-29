<?php
declare(strict_types=1);

function get_date(object $pdo, string $email)
{
    $query = "SELECT * FROM users WHERE email=:email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    #we fetch one row = one piece of date that want one variable and only fetch
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // $stmt = null;
    // $pdo = null;

    // it will return a query if the email is true other wise it will return null
    return $result;
}
function grap_user_id(object $pdo, string $email)
{
    $query = "SELECT id FROM users WHERE email=:email;";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["id"];
}