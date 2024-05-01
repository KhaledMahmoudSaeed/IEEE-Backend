<?php
#what will show up on the page 
declare(strict_types=1);
# if there any errors it will show up 
function print_signin_errors()
{
    if (isset($_SESSION["signin_errors"])) {
        $errors = $_SESSION["signin_errors"];
        if (isset($errors["empty_inputs"])) {
            echo "There are some Invalid Values Entered or Required :" . "<br>";
            echo $errors["empty_inputs"];
        } else {
            echo "There are some Invalid Values Entered or Required :" . "<br>";
            foreach ($errors as $e) {
                echo "<br>" . $e . "<br>";
            }
            unset($_SESSION["signin_errors"]);

        }
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo "<p>" . "SignUp Success!" . "</p>";
    }
}