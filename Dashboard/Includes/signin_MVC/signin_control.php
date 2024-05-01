<?php
#what functions will we use in signin page

declare(strict_types=1);
# check if there any type of error while signup 

function is_inputs_empty(string $email, string $pwd)
{
    if (empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_email_wrong(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}
function is_password_wrong(string $pwd, string $hashpwd)
{

    // there is a problem with hashing in signup or signin
    // the problem was the encryption want at least 50 char in database that I specify the max char as 16 only 
    if (!password_verify($pwd, $hashpwd)) {
        return true;
    } else {
        return false;
    }
}