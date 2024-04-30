<?php

declare(strict_types=1);

function is_inputs_empty(
    string $product_name,
    int $product_price,
    int $product_sale,
    string $product_saller,
    string $product_image,
    int $product_quantity,
    string $product_description
) {
    if (
        empty($product_name) ||
        empty($product_price) ||
        empty($product_sale) ||
        empty($product_saller) ||
        empty($product_image) ||
        empty($product_quantity) ||
        empty($product_description)
    ) {
        return true;
    } else {
        return false;
    }
}
function update_product(
    object $pdo,
    string $product_name,
    int $product_price,
    int $product_sale,
    string $product_seller,
    string $product_image,
    int $product_quantity,
    string $product_description,
    int $product_id
) {
    $query = "UPDATE products SET 
        p_name=:p_name,
        p_price=:p_price,
        p_sale=:p_sale,
        p_seller=:p_seller,
        p_img=:p_img,
        p_quantity=:p_quantity,
        p_description=:p_description
        WHERE id=:product_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":p_name", $product_name);
    $stmt->bindParam(":p_price", $product_price);
    $stmt->bindParam(":p_sale", $product_sale);
    $stmt->bindParam(":p_seller", $product_seller);
    $stmt->bindParam(":p_img", $product_image);
    $stmt->bindParam(":p_quantity", $product_quantity);
    $stmt->bindParam(":p_description", $product_description);
    $stmt->bindParam(":product_id", $product_id);
    $stmt->execute();
}

function delete_product(object $pdo, int $product_id)
{
    $query = "DELETE FROM products WHERE id=:product_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":product_id", $product_id);
    $stmt->execute();
}