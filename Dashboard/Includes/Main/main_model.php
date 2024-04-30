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
function grap_user_name(object $pdo, string $email)
{
    $query = "SELECT username FROM users WHERE email=:email;";
    $stmt = $pdo->prepare(($query));
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["username"];
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
    products.creation_date FROM users JOIN products ON users.id=products.user_id WHERE products.user_id=:id;";
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

function add_product(
    object $pdo,
    string $product_name,
    int $product_price,
    int $product_sale,
    string $product_seller,
    string $product_image,
    int $product_quantity,
    string $product_description,
    int $user_id
) {
    $query = "INSERT INTO products (p_name , p_price , p_sale, p_seller, p_img , p_quantity, p_description,user_id) 
    VALUES (:p_name,:p_price,:p_sale,:p_seller,:p_img ,:p_quantity ,:p_description,:user_id);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":p_name", $product_name);
    $stmt->bindParam(":p_price", $product_price);
    $stmt->bindParam(":p_sale", $product_sale);
    $stmt->bindParam(":p_seller", $product_seller);
    $stmt->bindParam(":p_img", $product_image);
    $stmt->bindParam(":p_quantity", $product_quantity);
    $stmt->bindParam(":p_description", $product_description);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}