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
        <main>
                <div class="table-responsive">
                        <button onclick="window.location.href='add-product.php'">Add Product</button>
                        <table>
                                <thead>
                                        <tr>
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
                                        <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                        <button onclick="window.location.href='edit.php'">Edit</button>
                                                        <button
                                                                onclick="window.location.href='delete.php'">Delete</button>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="form-container">
                        <form action="../../logout.php" method="post">
                                <div class="form-elements">
                                        <input type="submit" name="logout" value="Logout" class="submit">
                                </div>
                </div>
        </main>

</body>

</html>