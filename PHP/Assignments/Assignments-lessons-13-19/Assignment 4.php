<?php
echo " \" " . $_SERVER['DOCUMENT_ROOT'] . " \" ";
/* echo __DIR__ ;DOCUMENT_ROOT is worst than __DIR__ because:
It makes your application dependent on the server.
The Apache setup may give an incorrect path to the root directory.*/




echo '<br>';
echo " \" " .$_SERVER['SERVER_NAME'] . " \" ";
echo '<br>';

echo " \" " .$_SERVER['SystemRoot'] . " \" ";
echo '<br>';

echo " \" " .$_SERVER['OPENSSL_CONF']. " \" ";