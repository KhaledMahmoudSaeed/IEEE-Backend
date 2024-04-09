<?php
mkdir("Programming", 0711);
mkdir("Programming/PHP", 0711);

function remove($dir)
{
    if (is_dir($dir)) {
        rmdir($dir);
        echo "Directory $dir Removed";
    } else {
        echo "Directory isn't exist";
    }
}
remove("Programming/PHP");
remove("Programming");


// function removeDir($dirname) {
//     if (is_dir($dirname)) {
//         $dir = new RecursiveDirectoryIterator($dirname, RecursiveDirectoryIterator::SKIP_DOTS);
//         foreach (new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::CHILD_FIRST) as $object) {
//             if ($object->isFile()) {
//                 unlink($object);
//             } elseif($object->isDir()) {
//                 rmdir($object);
//             } else {
//                 throw new Exception('Unknown object type: '. $object->getFileName());
//             }
//         }
//         rmdir($dirname); // Now remove myfolder
//     } else {
//         throw new Exception('This is not a directory');
//     }
// }
// removeDir("Programming");


