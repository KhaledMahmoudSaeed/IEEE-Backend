<?php
declare(strict_types=1);

function grap_user_id(object $pdo, string $email)
{
    $query = "SELECT id FROM users WHERE email=:email;";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["id"];
}

function grap_all_data(object $pdo, int $id)
{
    $query = "SELECT products.id,
    products.p_name,    
    products.p_price,
    products.p_sale,
    products.p_seller,
    products.p_img,
    products.p_quantity,
    products.p_description,
    products.creation_date FROM users JOIN products ON users.id=products.user_id WHERE products.user_id=:id";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $products_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products_info;
}

function grap_product_id(object $pdo, string $p_name)
{
    $query = "SELECT id FROM products WHERE p_name=:p_name;";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":p_name", $p_name);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
