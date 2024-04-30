<?php
require_once "Includes/signin_MVC/signin_view.php";
require_once "Includes/config.inc.php";
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

    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>
        Sign in
    </title>
</head>
<link rel="stylesheet" href="CSS/login.css">

<body>

    <header>
        <div class="links">
            <label>
                <strong>Contact Us <a href=" mailto:khaild22k12m71f@gmail.com">Gmail</a>
                    <a href="https://www.linkedin.com/in/khaled-mahmoud-/"> | LinkedIn</a></strong>
            </label>

    </header>
    <div class="form-container">
        <div class=title>
            <h2>
                Welcome to our page
            </h2>
        </div>
        <form method="POST" action="Includes/signin_MVC/signin.inc.php">
            <div class="form-elements">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" placeholder="Tom@yahoo.com" required>
            </div>
            <div class="form-elements">
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" required minlength="8" maxlength="16" placeholder="Password">
            </div>
            <br>
            <div class="form-elements"><br>
                <input type="submit" value="Login" class="submit">
            </div>
            <p>
                <b>
                    <strong style="font-size: larger;">Don't have an account ? <a href=" signup.php"
                            style="font-size: larger;">Sign Up</a></strong>
                </b>
            </p>
            <br>

        </form>

        <?php
        print_signin_errors();
        ?>

</body>

</html>