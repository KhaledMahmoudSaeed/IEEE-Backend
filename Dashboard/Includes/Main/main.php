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
        <title>Dashboard</title>
        <link rel="stylesheet" href="../../CSS/main.css">
</head>

<body>

        <header>
                <div class="links">
                        <label>Contact Us</label>
                        <a href=" mailto:khaild22k12m71f@gmail.com">Gmail</a>
                        <a href="https://www.linkedin.com/in/khaled-mahmoud-/"> | LinkedIn</a>
                </div>
        </header>
        <div class="side">
                <button class="add_btn" onclick="window.location.href='add_product.php'">Add
                        Product</button>
                <div class="usname"> <?php
                echo "Welcome," . "<br>" . $username;
                ?></div>
        </div>

        <main>
                <div class=" table-responsive">

                        <table>
                                <thead>
                                        <th><b>Id</b></th>
                                        <th><b>Name</b></th>
                                        <th><b>Price</b></th>
                                        <th><b>Sale</b></th>
                                        <th><b>Seller</b></th>
                                        <th><b>Img</b></th>
                                        <th><b>Quantity</b></th>
                                        <th><b>Description</b></th>
                                        <th><b>Creation_date</b></th>
                                        <th><b>Edit/Delete</b></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php for ($i = 0; $i < 100; $i++) {
                                                if (isset($data[$i]["id"])) { ?>
                                                        <tr>
                                                                <td><?php echo $i + 1 ?></td>
                                                                <td class="wrap"><?php echo $data[$i]["p_name"] ?></td>
                                                                <td><?php echo $data[$i]["p_price"] ?></td>
                                                                <td><?php echo $data[$i]["p_sale"] ?></td>
                                                                <td><?php echo $data[$i]["p_seller"] ?></td>
                                                                <td class="img">
                                                                        <?php echo '<img src=""', htmlspecialchars($data[$i]['p_img']), '" width="100" height="100" />'; ?>
                                                                </td>
                                                                <td><?php echo $data[$i]["p_quantity"] ?></td>
                                                                <td class="wrap"><?php echo $data[$i]["p_description"] ?></td>
                                                                <td class="wrap"><?php echo $data[$i]["creation_date"] ?></td>
                                                                <td>
                                                                        <button class="edit_btn"
                                                                                onclick="window.location.href='edit_product.php?row=<?php echo $i ?>'">Edit</button><!-- put row number in url using for grapping it again from get method-->
                                                                        <form action="delete_product.php" method="POST">
                                                                                <input type="hidden" name="id"
                                                                                        value="<?php echo $data[$i]["id"]; ?>"><!-- send user id to delete page to delete this record-->
                                                                                <input type="submit" value="Delete" class="delete">
                                                                        </form>

                                                                </td>
                                                        </tr>
                                                <?php } else {
                                                        break;
                                                }
                                                ;
                                        } ?>
                                </tbody>
                        </table>
                </div>
                <div class=" form-container">
                        <form action="../../logout.php" method="post">
                                <div class="form-elements">
                                        <input type="submit" name="logout" value="Logout" class="submit">
                                </div>
                </div>
        </main>

</body>

</html>