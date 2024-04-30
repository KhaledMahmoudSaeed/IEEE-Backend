<?php
require_once "Includes/signup_MVC/signup_view.php";
require_once "Includes/config.inc.php";
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="product,Product,shirts,shorts,jackets,shoes">
    <meta name="description"
        content="Free shipping on millions of items. Get the best of Shopping and Entertainment with Prime. Enjoy low prices and great deals on the largest selection of  ">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>
        Sign up
    </title>
</head>
<link rel="stylesheet" href="CSS/signup.css">

<body>

    <header>
        <div class="links">
            <label>Contact Us</label>
            <a href=" mailto:khaild22k12m71f@gmail.com">Gmail</a>
            <a href="https://www.linkedin.com/in/khaled-mahmoud-/"> | LinkedIn</a>
        </div>
    </header>

    <div class="form-container">
        <div class=title>
            <h2>
                Creat Account
            </h2>
        </div>
        <!-- you have to complete the signup system from dani krossing channel just the last 10 min -->
        <form method="POST" action="Includes/signup_MVC/signup.inc.php">
            <div class="form-elements">
                <label for="first_name"><b>First name</b></label>
                <input type="text" name="first_name" placeholder="Tom" autofocus>
            </div>
            <div class="form-elements">
                <label for="last_name"><b>Last name</b></label>
                <input type="text" name="last_name" placeholder="David">
            </div>
            <div class="form-elements">
                <label for="email"> <b>Enter your E-mail</b></label>
                <input type="email" name="email" placeholder=" müller@yahoo.com">
            </div>
            <div class="form-elements">
                <label for="password"> <b>Enter your Password</b></label>
                <input type="password" name="password" minlength="8" maxlength="16" placeholder="Password">
            </div>
            <div class="form-elements">
                <label for="password"> <b>Re-Enter your Password</b></label>
                <input type="password" name="re_password" minlength="8" maxlength="16" placeholder="Re-Password">
            </div>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male" style="color:#3699FF">Male</label>
            <input type="radio" name="gender" id="female" value=" female">
            <label for="female" style="color:#3699FF">Female</label>
            <div class="form-elements">
                <input type="submit" value="Sign Up" class="submit" style="#003e8b">
            </div>
            <p>
                <b>
                    <strong>Have an account ? <a href="index.php">Sign In</a></strong>
                </b>
            </p>
        </form>
    </div>
    <br>
    <?php
    print_signup_errors();
    ?>

</body>

</html>