<?php
# Make it more secure when handling with sessions
ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

# Set our cookies parameters
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

# check if session_id is generated or not if not generate one if yes generate one too if it remaine since 30 mins
if (!isset($_SESSION["last_regeneration"])) {
    reg_session();
} else {
    $interval = 1000 * 60;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        reg_session();
    }
}

#store time when session_id is regenerated
function reg_session()
{
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();

}
#store id
function reg_id($id)
{
    if (!isset($_SESSION["id"])) {
        $_SESSION["id"] = $id;
    } else {
        $interval = 30 * 60;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            $_SESSION["id"] = $id;
        }
    }
}