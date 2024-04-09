<?php

setcookie("site[color]", "blue", time() + 35 * 24 * 60 * 60, "/");
setcookie("site[font]", "Swat", time() + 35 * 24 * 60 * 60, "/");
setcookie("site[layout]", "boxed", 1, "/");

echo "<pre>";
print_r(($_COOKIE));
echo "</pre>";

echo "Your Color Is " . $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"];