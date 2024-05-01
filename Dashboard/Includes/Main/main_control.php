<?php
#what functions will we use main pages

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