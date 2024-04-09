<?php
function change_permission($file)
{
    if (is_file($file)) {
        if (fnmatch("*.txt", $file)) { //or pathinfo($file,PATHINFO_EXTENSION)
            chmod($file, 0700);
            echo "Permissions Changed";
        } else {
            echo "File Extension Is Not Txt";
        }
    } else {
        echo "This Is Directory And Only Files Allowed";
    }
}
change_permission("Elzero");
echo "<br>";
change_permission("Work.docx");
echo "<br>";
change_permission("Result.txt");
