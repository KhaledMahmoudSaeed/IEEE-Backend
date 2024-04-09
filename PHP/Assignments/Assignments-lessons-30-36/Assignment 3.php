<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Assignment-3.php.php" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
        <!-- 
    this is also vaild put in php tag
    $admins = ["Osama", "Ahmed", "Sayed"];
    if($_SERVER['REQUEST_METHOD'] ==="POST"){
    if($_POST["user"]=="Osama"){
        echo "This Username Osama Is Admin";
    }
    elseif($_POST["user"]=="Ahmed"){         
        echo "This Username Ahmed Is Admin";
    }
    elseif($_POST["user"]=="Sayed"){
        echo "This Username Sayed Is Admin";
    }
    else{
        echo" This Username is not  Admin ";
    }
} -->

    </form>
</body>

</html>

<?php

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    echo "";
    if ($_POST["user"] == "Osama") {
        echo "This Username Osama Is Admin";
    } elseif ($_POST["user"] == "Ahmed") {
        echo "This Username Ahmed Is Admin";

    } elseif ($_POST["user"] == "Sayed") {
        echo "This Username Sayed Is Admin";
    } elseif ($_POST["user"] == "") {
        echo " ";
    } else {
        echo " This Username is not  Admin  ";
    }
}
