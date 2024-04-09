<?php
function check_status($a, $b, $c)
{
    $name = 0;// in these three lines i got E_warning because of Undefined variable or but its value is never used and I don't lnow how to fix
    $age = " ";
    $state = 0;
    $person = [$a, $b, $c];
    for ($i = 0; $i < 3; $i++) {
        if (is_string($person[$i])) {
            $name = $person[$i];
        } elseif (is_int($person[$i])) {
            $age = $person[$i];
        } elseif (is_bool($person[$i])) {
            $state = $person[$i];
        }
    }
}
if ($state) {
    echo "Hello $name, Your Age Is $age, You Are Available For Hire";
} else {
    echo "Hello $name, Your Age Is $age, You Are Not Available For Hire";

}

echo check_status("Osama", 38, true);
echo "<br>";
echo check_status(38, "Osama", true);
echo "<br>";
echo check_status(true, 38, "Osama");
echo "<br>";
echo check_status(false, "Osama", 38);