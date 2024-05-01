<?php
#what will show up on the page 
declare(strict_types=1);
require_once ("main_model.php");
require_once ("../config.inc.php");
require_once ("../dbh.inc.php");
#get user and email from session and return user data and its username
$id = $_SESSION["id"];
$data = grap_all_data($pdo, $id);
$email = $_SESSION["email"];
$username = grap_user_name($pdo, $email);