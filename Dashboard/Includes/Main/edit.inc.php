<?php
# check if user accessed  this page legitimatley from POST request not from typing in url
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_sale = $_POST["product_sale"];
    $product_seller = $_POST["product_seller"];
    $product_image = $_POST["product_image"];
    $product_quantity = $_POST["product_quantity"];
    $product_description = $_POST["product_description"];
    $id = $_POST["id"];# comes from hidden input

    #connect to database 
    try {
        require_once "../dbh.inc.php";
        require_once "main_control.php";
        require_once "main_model.php";
        # check if there any errors
        $errors = [];
        if (is_inputs_empty($product_name, $product_price, $product_sale, $product_seller, $product_image, $product_quantity, $product_description)) {
            $errors["empty_inputs"] = "Fill All Input Fields";
        }
        require_once "../config.inc.php";
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location:add_product.php");
            die();
        }
        #grap email from session and then update the product that belongs to this useremail
        $email = $_SESSION["email"];
        //$id = $_SESSION["id"];
        update_product($pdo, $product_name, $product_price, $product_sale, $product_seller, $product_image, $product_quantity, $product_description, $id);
        header("Location:main.php?update=Success");
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

    header("Location:../../main.php");
}

