<?php

declare(strict_types=1);


function is_inputs_empty(string $first_name, string $last_name, string $email, string $pwd, $gender)
{
    if (empty($first_name) || empty($last_name) || empty($email) || empty($pwd) || empty($gender) || $gender == NULL) {
        return true;

    } else {
        return false;
    }
}
function is_email_invaild(string $email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}
function is_password_invaild(string $password)
{
    if (!strlen($password) >= 8 && strlen($password) <= 16) {
        return true;
    } else {
        return false;
    }
}
function is_email_exist(object $pdo, string $email)
{
    if (find_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function different_pwd(string $pwd, string $re_pwd)
{
    if ($pwd != $re_pwd) {
        return true;
    } else {
        return false;
    }
}