<?php
require_once ("../config.inc.php");
require_once ("main_view.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="product,Product,shirts,shorts,jackets,shoes">
    <meta name="description"
        content="Free shipping on millions of items. Get the best of Shopping and Entertainment with Prime. Enjoy low prices and great deals on the largest selection of  ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../../CSS/add.css">

</head>

<header>
    <div class="links">
        <label>Contact Us</label>
        <a href=" mailto:khaild22k12m71f@gmail.com">Gmail</a>
        <a href="https://www.linkedin.com/in/khaled-mahmoud-/"> | LinkedIn</a>

</header>

<body>
    <div class="form-container">
        <div class=title>
            <h2>Edit Your Product</h2>
        </div>
        <form method="POST" action="edit.inc.php">
            <input type="hidden" name="id"
                value="<?php echo $data[$_GET["row"]]["id"]; ?>"><!--save the user id in hidden input to send it to edit so can know where to store the updates-->
            <div class="form-elements">
                <label for="product_name"><b>Product Name</b></label>
                <input type="text" name="product_name" value="<?php echo $data[$_GET["row"]]["p_name"]; ?>" autofocus
                    required>
            </div>

            <div class=" form-elements">
                <label for="product_price"><b>Product Price</b></label>
                <input type="number" name="product_price" value="<?php echo $data[$_GET["row"]]["p_price"]; ?>" min=" 1"
                    required>
            </div>
            <div class="form-elements">
                <label for="product_sale"><b>Product Sale</b></label>
                <input type="number" name="product_sale" value="<?php echo $data[$_GET["row"]]["p_sale"]; ?>" min=" 1"
                    required>
            </div>
            <div class="form-elements">
                <label for="product_saller"><b>Product Seller</b></label>
                <input type="text" name="product_seller" value="<?php echo $data[$_GET["row"]]["p_seller"]; ?>" min=" 1"
                    required>
            </div>
            <div class="form-elements">
                <label for="product_image"><b>Product Image</b></label>
                <input type="file" name="product_image" value="<?php echo $data[$_GET["row"]]["p_img"]; ?>"
                    accept=" image/*" required>
            </div>
            <div class="form-elements">
                <label for="product_quantity"><b>Product Quantity</b></label>
                <input type="number" name="product_quantity" min="1"
                    value="<?php echo $data[$_GET["row"]]["p_quantity"]; ?>" required>
            </div>
            <div class="form-elements">
                <label for="product_description"><b>Product Description</b></label>
                <input type="text" name="product_description"
                    value="<?php echo $data[$_GET["row"]]["p_description"]; ?>" required>
            </div>
            <div class=" form-elements">
                <input type="submit" value="Edit Product" class="submit" style="color:#003e8b">
                <button onclick="window.location.href='main.php'">Cancel</button>
            </div>
    </div>
    </form>

    </div>


</body>

</html>